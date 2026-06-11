# CHANGELOG_CLAUDE.md

Registro completo de operações realizadas com auxílio do Claude Code (Anthropic).

---

## [2026-06-11] — Sessão completa: Git, SSH, servidor e deploy automático

### Objetivo
Conectar o projeto `shapepro-landing` ao repositório `git@github.com:shapeproappbr/shapepro.git`,
configurar chave SSH, automatizar deploy para o servidor VPS da Locaweb via GitHub Actions.

---

### 1. Diagnóstico inicial do projeto

| Item                        | Resultado                                   |
|-----------------------------|---------------------------------------------|
| Era repositório Git         | Não — inicializado com `git init`           |
| Chave SSH existente         | Não — gerada nova chave ed25519             |
| Arquivos `.env`             | Não encontrados — sem risco de exposição    |
| Credenciais hardcoded       | Não — configs usam `$_ENV` corretamente     |
| `vendor/` ou `node_modules` | Não presentes                               |
| Tipo de projeto             | PHP MVC customizado (ShapePro IA — landing) |

**Estrutura do projeto:**
```
shapepro-landing/
├── app/
│   ├── config/       (app.php, database.php)
│   ├── controllers/  (LandingController.php)
│   ├── helpers/      (bootstrap, DB, View, Controller, functions)
│   ├── models/       (LandingLeadModel.php)
│   └── views/        (landing, layouts, partials)
├── database/
│   └── migrations/   (landing_leads.sql)
├── public/
│   ├── .htaccess
│   ├── index.php
│   └── assets/       (css, js, images)
└── routes/
    └── web.php
```

---

### 2. Configuração SSH

```bash
# Gerar chave SSH ed25519 segura
ssh-keygen -t ed25519 -C "andreluizfaria@gmail.com" -f ~/.ssh/id_ed25519 -N ""
```

**Chave pública** (cadastrada no GitHub pelo Renato):
```
ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIDWH6WeM+0tfVITwmnmkjnTN/CYoUIbaXiPkPScAqwdR andreluizfaria@gmail.com
```
Fingerprint: `SHA256:hcwPeI8hAhaGQ/QF+pJxidmTUNca6ykzxgfIvz+s3WY`

**Teste de conexão:** `ssh -T git@github.com` → `Hi shapeproappbr!` ✓

---

### 3. Repositório Git

```bash
git init
git remote add origin git@github.com:shapeproappbr/shapepro.git
git add .
git commit -m "feat: configuração inicial do projeto ShapePro Landing"
git push -u origin master
```

**Commits realizados:**
| Hash | Mensagem |
|------|----------|
| `8d86c3b` | feat: configuração inicial do projeto ShapePro Landing |
| `7a00da3` | ci: migrar deploy de FTP para rsync via SSH |
| `d23982c` | ci: disparar deploy para shapepro.app.br |
| `2fcb96e` | ci: usar ssh-agent para chave SSH e adicionar teste de conexão |
| `67d450a` | ci: corrigir quebras de linha CRLF na chave SSH |

---

### 4. Descoberta: servidor é VPS, não hospedagem compartilhada

O Renato informou o acesso ao servidor:
- **IP:** 200.234.207.82
- **Usuário:** root
- **Tipo:** VPS Locaweb com Apache + Let's Encrypt

**Mapeamento do servidor:**
| Item | Valor |
|------|-------|
| Document Root | `/var/www/shapepro/public` |
| Domínio | `shapepro.app.br` (HTTPS) |
| Apache vhosts | `shapepro.conf` + `shapepro-le-ssl.conf` |
| SSH porta | 22 aberta |
| Firewall | Nenhum (sem UFW, sem iptables, sem fail2ban) |

**Chave pública adicionada ao servidor** via Python/Paramiko:
```
~/.ssh/authorized_keys → ssh-ed25519 AAAAC3...
```
Login por chave SSH confirmado (sem senha).

---

### 5. Deploy automático via GitHub Actions + rsync

Arquivo: `.github/workflows/deploy.yml`

**Fluxo:**
```
git push → GitHub Actions → rsync via SSH → /var/www/shapepro/
```

**Versão atual do workflow:**
```yaml
- Baixar código do repositório
- Configurar chave SSH (base64 decode para evitar CRLF)
- Testar conexão SSH com o servidor
- rsync -avz --delete (exclui .git, .github, .claude, logs, storage)
```

**Histórico de falhas e soluções:**
| Tentativa | Problema | Solução |
|-----------|----------|---------|
| 1 | FTP → erro genérico | Migrado para rsync SSH |
| 2 | webfactory/ssh-agent falhou | Removido, voltou para echo manual |
| 3 | Chave com CRLF (Windows) | Adicionado `tr -d '\r'` |
| 4 | SSH connection test falha | Chave no secret provavelmente malformada |
| 5 (atual) | Aguardando Renato atualizar o secret | Secret deve ser em base64 |

**Secret necessário no GitHub:**
- Nome: `SSH_PRIVATE_KEY`
- Valor: chave privada em base64 (sem problemas de CRLF)
- Quem pode atualizar: Renato (admin do repo)

---

### 6. Situação dos branches (pendente)

| Branch | Autor | Conteúdo | Status |
|--------|-------|----------|--------|
| `main` | Renato | Estrutura inicial do servidor (logs, public, storage) | Branch padrão do repo |
| `master` | André + Claude | Projeto PHP MVC completo + workflow deploy | Branch paralelo |

**Problema:** Nosso código está em `master`, mas o padrão é `main`.
**Pendente:** Mesclar `master` → `main` após Renato dar acesso de colaborador.

---

### 7. Arquivos criados ou alterados

| Arquivo | Ação | Descrição |
|---------|------|-----------|
| `~/.ssh/id_ed25519` | Criado | Chave privada SSH (NUNCA versionar) |
| `~/.ssh/id_ed25519.pub` | Criado | Chave pública SSH |
| `.gitignore` | Criado | Ignora .env, logs, uploads, vendor, backups, node_modules |
| `CHANGELOG_CLAUDE.md` | Criado/Atualizado | Este arquivo |
| `.github/workflows/deploy.yml` | Criado | Deploy automático rsync SSH → servidor |

---

### 8. Riscos identificados

1. **`app/config/app.php`** tem `APP_SECRET` com valor padrão fraco → criar `.env` em produção
2. **Sem `.env.example`** no projeto → criar com variáveis necessárias sem valores reais
3. **`logo.png` tem 1,1 MB** → considerar CDN no futuro
4. **Credenciais do servidor compartilhadas via WhatsApp** (IP + root + senha) → risco de segurança; trocar senha após configurar autenticação por chave
5. **Root SSH aberto sem firewall** → considerar fail2ban e restringir acesso SSH por IP
6. **Dois branches divergentes** (`main` e `master`) → mesclar antes de continuar

---

### 9. Pendências para próxima sessão

- [ ] Renato atualizar secret `SSH_PRIVATE_KEY` com valor base64
- [ ] Renato adicionar André como colaborador (Write) no repo
- [ ] Testar deploy automático após secret atualizado
- [ ] Mesclar branch `master` no `main`
- [ ] Criar `.env.example`
- [ ] Renato trocar senha root do servidor
- [ ] Avaliar configurar fail2ban no servidor

---

### 10. Comandos úteis para retomar

```bash
# Verificar status do repositório
cd "c:\Users\Usuario\Downloads\shapepro-landing"
git status
git log --oneline

# Conectar ao servidor manualmente
ssh root@200.234.207.82

# Ver últimas Actions rodadas
curl -s https://api.github.com/repos/shapeproappbr/shapepro/actions/runs?per_page=3

# Verificar arquivos no servidor
ssh root@200.234.207.82 "ls -la /var/www/shapepro/"
```

---

*Sessão registrada por Claude Code (claude-sonnet-4-6) em 2026-06-11*
*Usuário: andreluizfaria@gmail.com | Projeto: ShapePro Landing*

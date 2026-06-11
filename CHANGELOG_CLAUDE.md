# CHANGELOG_CLAUDE.md

Registro de operações realizadas com auxílio do Claude Code (Anthropic).

---

## [2026-06-11] — Configuração inicial do repositório Git e SSH

### Objetivo
Conectar o projeto `shapepro-landing` ao repositório remoto `git@github.com:shapeproappbr/shapepro.git`, preparando o ambiente com chave SSH segura, `.gitignore` adequado e controle de versão.

---

### Diagnóstico inicial

| Item                        | Resultado                                      |
|-----------------------------|------------------------------------------------|
| Repositório Git existente   | Não — pasta sem `.git`                         |
| Chave SSH existente         | Não — apenas `known_hosts` em `~/.ssh/`        |
| Arquivos `.env`             | Não encontrados                                |
| Credenciais hardcoded       | Não — configs usam `$_ENV` corretamente        |
| `vendor/` ou `node_modules` | Não presentes                                  |
| Tipo de projeto             | PHP MVC customizado (ShapePro IA — landing)    |

---

### Comandos executados

```bash
# 1. Gerar chave SSH ed25519
ssh-keygen -t ed25519 -C "andreluizfaria@gmail.com" -f ~/.ssh/id_ed25519 -N ""

# 2. Inicializar repositório Git
git init

# 3. Configurar remote origin
git remote add origin git@github.com:shapeproappbr/shapepro.git
```

---

### Arquivos criados ou alterados

| Arquivo                                | Ação    | Descrição                                              |
|----------------------------------------|---------|--------------------------------------------------------|
| `~/.ssh/id_ed25519`                    | Criado  | Chave privada SSH ed25519 (nunca versionar)            |
| `~/.ssh/id_ed25519.pub`                | Criado  | Chave pública SSH (enviar ao Renato/GitHub)            |
| `.gitignore`                           | Criado  | Ignora .env, logs, uploads, vendor, backups, etc.      |
| `CHANGELOG_CLAUDE.md`                  | Criado  | Este arquivo de registro                               |
| `.github/workflows/deploy.yml`         | Criado  | Deploy automático via FTP para Locaweb a cada git push |

---

### Chave pública gerada (para cadastro no GitHub)

```
ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIDWH6WeM+0tfVITwmnmkjnTN/CYoUIbaXiPkPScAqwdR andreluizfaria@gmail.com
```

**Ação necessária:** Enviar esta chave ao Renato para cadastrar em:
`GitHub → Settings → SSH and GPG keys → New SSH key`

---

### Riscos identificados

1. **`app/config/app.php` contém `APP_SECRET` com valor padrão fraco** (`changeme_32chars_random_string__`).
   → Recomendação: usar `.env` com valor aleatório forte em produção.

2. **`app.php` e `database.php` lêem `$_ENV`**, mas não há `.env.example` no projeto.
   → Recomendação: criar `.env.example` com as variáveis necessárias sem valores reais.

3. **Logo.png tem 1,1 MB** — para repositórios grandes, considerar Git LFS ou CDN.

4. **O projeto não tem `composer.json`** — dependências futuras devem ser gerenciadas via Composer para o `vendor/` ser ignorado corretamente.

---

### Próximos passos

- [ ] Renato cadastrar a chave pública SSH no GitHub (`shapeproappbr`)
- [ ] Testar conexão SSH: `ssh -T git@github.com`
- [ ] Usuário aprovar resumo para primeiro commit/push
- [ ] Adicionar Secrets FTP no GitHub: `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`
- [ ] Criar `.env.example` com variáveis necessárias
- [ ] Primeiro commit e push (após aprovação)
- [ ] Confirmar que URL do site aponta para `public_html/public/` na Locaweb

---

*Gerado por Claude Code (claude-sonnet-4-6) em 2026-06-11*

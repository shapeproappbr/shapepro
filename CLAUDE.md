# ShapePro — Contexto do Projeto para o Claude

## O que e este projeto
ShapePro e uma plataforma SaaS para personal trainers independentes e pequenos studios de academia.
Permite gerenciar alunos, montar fichas de treino, controlar pagamentos e acompanhar evolucao fisica.

## Stack tecnica
- **Backend:** PHP 8.2 (sem framework por enquanto, estrutura MVC manual)
- **Frontend:** HTML/CSS/JS vanilla (landing page atual), plano de migrar para componentes reativos
- **Banco de dados:** MySQL/MariaDB (a definir schema)
- **Servidor:** Debian 12, Apache2, PHP-FPM
- **Versionamento:** Git + GitHub (repositorio privado)
- **Ambiente de desenvolvimento:** SSHFS montado em X:\shapepro no Windows do dev

## Estrutura de diretorios (planejada)
```
/var/www/shapepro/
  index.php          # Landing page publica
  CLAUDE.md          # Este arquivo
  .gitignore
  /app/              # Logica de negocio (controllers, models, services)
  /public/           # Assets publicos (css, js, imagens)
  /views/            # Templates PHP
  /config/           # Configuracoes (db, mail, etc)
  /storage/          # Logs, cache, uploads
  /vendor/           # Dependencias Composer (nao versionado)
```

## Modulos previstos
1. **Autenticacao** — login do personal/admin e do aluno (portais separados)
2. **Gestao de Alunos** — cadastro, historico, fotos de progresso, anamnese
3. **Treinos** — banco de exercicios, montagem de fichas, envio ao aluno, marcacao de conclusao
4. **Financeiro** — controle de mensalidades, vencimentos, alertas de inadimplencia
5. **Agenda** — horarios de aulas e sessoes de personal, lembretes automaticos
6. **Evolucao** — biometria, cargas, medidas, linha do tempo de progresso
7. **App do Aluno** — interface mobile-first para o aluno acompanhar treinos

## Convencoes de codigo
- PHP: PSR-12, namespaces no padrao `ShapePro\Modulo\Classe`
- Banco: snake_case para tabelas e colunas
- Commits: mensagens em portugues, prefixos: `feat:`, `fix:`, `docs:`, `refactor:`
- Branches: `main` (producao), `develop` (integracao), `feature/nome-da-feature`

## Time
- **Renato** — fundador, full-stack, responsavel pela arquitetura
- **Dev 2** — colaborador (a definir responsabilidades)

## Estado atual (junho 2026)
- [x] Landing page inicial criada (index.php)
- [x] Git inicializado no servidor
- [ ] Estrutura de diretorios do projeto
- [ ] Schema do banco de dados
- [ ] Sistema de autenticacao
- [ ] CRUD de alunos
- [ ] Modulo de treinos

## Como rodar localmente
O servidor de desenvolvimento e acessado via SSHFS:
- O drive X:\ no Windows do dev aponta para /var/www/ no servidor 100.100.0.51
- Apos clonar, montar via SSHFS ou trabalhar diretamente no servidor via SSH

## Variaveis de ambiente
Copie `.env.example` para `.env` e preencha:
```
DB_HOST=localhost
DB_NAME=shapepro
DB_USER=shapepro
DB_PASS=
APP_URL=https://shapepro.com.br
APP_ENV=development
```

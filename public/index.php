<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShapePro — Gestão para Personal Trainers e Studios</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #0f0f0f;
            color: #f0f0f0;
            min-height: 100vh;
        }

        header {
            padding: 24px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #1e1e1e;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            letter-spacing: -0.5px;
            color: #fff;
        }

        .logo span { color: #f97316; }

        .badge {
            background: #1e1e1e;
            border: 1px solid #2e2e2e;
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 0.8rem;
            color: #888;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 73px);
            padding: 60px 24px;
            text-align: center;
        }

        .tag {
            display: inline-block;
            background: #1a1a1a;
            border: 1px solid #f97316;
            color: #f97316;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 999px;
            margin-bottom: 32px;
        }

        h1 {
            font-size: clamp(2rem, 6vw, 4rem);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -1px;
            max-width: 720px;
            margin-bottom: 24px;
        }

        h1 em { font-style: normal; color: #f97316; }

        p.subtitle {
            font-size: 1.15rem;
            color: #888;
            max-width: 520px;
            line-height: 1.7;
            margin-bottom: 48px;
        }

        .cta-group {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn-primary {
            background: #f97316;
            color: #fff;
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn-primary:hover { background: #ea6c0a; }

        .btn-secondary {
            background: transparent;
            color: #aaa;
            padding: 14px 32px;
            border-radius: 8px;
            border: 1px solid #2e2e2e;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            transition: border-color 0.2s, color 0.2s;
        }

        .btn-secondary:hover { border-color: #555; color: #fff; }

        .features {
            display: flex;
            gap: 32px;
            margin-top: 80px;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 860px;
        }

        .feature {
            background: #151515;
            border: 1px solid #1e1e1e;
            border-radius: 12px;
            padding: 28px 24px;
            width: 240px;
            text-align: left;
        }

        .feature-icon { font-size: 1.6rem; margin-bottom: 14px; }

        .feature h3 {
            font-size: 0.95rem;
            font-weight: 700;
            margin-bottom: 8px;
            color: #fff;
        }

        .feature p {
            font-size: 0.85rem;
            color: #666;
            line-height: 1.6;
        }

        footer {
            text-align: center;
            padding: 32px;
            color: #444;
            font-size: 0.8rem;
            border-top: 1px solid #1a1a1a;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Shape<span>Pro</span></div>
    <span class="badge">Em breve</span>
</header>

<main>
    <span class="tag">Para personal trainers e studios</span>

    <h1>Gerencie seus <em>alunos</em><br>com mais inteligência</h1>

    <p class="subtitle">
        Plataforma completa para personal trainers e pequenos studios controlarem fichas de treino,
        evolução dos alunos, pagamentos e muito mais.
    </p>

    <div class="cta-group">
        <a href="mailto:contato@shapepro.app.br" class="btn-primary">Quero ser avisado</a>
        <a href="#recursos" class="btn-secondary">Ver recursos</a>
    </div>

    <div class="features" id="recursos">
        <div class="feature">
            <div class="feature-icon">&#128170;</div>
            <h3>Fichas de Treino</h3>
            <p>Crie e compartilhe fichas personalizadas para cada aluno.</p>
        </div>
        <div class="feature">
            <div class="feature-icon">&#128200;</div>
            <h3>Evolução</h3>
            <p>Acompanhe medidas, peso e desempenho ao longo do tempo.</p>
        </div>
        <div class="feature">
            <div class="feature-icon">&#128179;</div>
            <h3>Financeiro</h3>
            <p>Controle mensalidades, cobranças e pagamentos em um só lugar.</p>
        </div>
    </div>
</main>

<footer>
    &copy; <?= date('Y') ?> ShapePro. Todos os direitos reservados.
</footer>

</body>
</html>

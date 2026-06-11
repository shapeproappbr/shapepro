<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ShapePro - Gestao para Personal Trainers</title>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --green: #16a34a; --green-light: #f0fdf4; --green-mid: #dcfce7;
      --text: #111827; --muted: #6b7280; --border: #e5e7eb;
      --bg: #ffffff; --bg-alt: #f9fafb; --radius: 10px;
    }
    body { font-family: 'Segoe UI', system-ui, sans-serif; background: var(--bg); color: var(--text); line-height: 1.6; }
    nav { position: sticky; top: 0; z-index: 100; display: flex; align-items: center; justify-content: space-between; padding: 1rem 2rem; background: rgba(255,255,255,0.95); backdrop-filter: blur(8px); border-bottom: 1px solid var(--border); }
    .logo { font-size: 1.4rem; font-weight: 800; color: var(--green); letter-spacing: -0.5px; }
    .logo span { color: var(--text); }
    nav ul { list-style: none; display: flex; gap: 2rem; }
    nav ul a { color: var(--muted); text-decoration: none; font-size: 0.9rem; transition: color 0.2s; }
    nav ul a:hover { color: var(--green); }
    .btn { display: inline-block; padding: 0.6rem 1.3rem; border-radius: var(--radius); font-weight: 600; font-size: 0.9rem; text-decoration: none; border: none; cursor: pointer; transition: all 0.2s; }
    .btn-primary { background: var(--green); color: #fff; }
    .btn-primary:hover { background: #15803d; transform: translateY(-1px); }
    .btn-outline { background: transparent; color: var(--text); border: 1px solid var(--border); }
    .btn-outline:hover { border-color: var(--green); color: var(--green); }
    .hero { padding: 5rem 2rem 4rem; text-align: center; }
    .badge { display: inline-block; background: var(--green-mid); color: var(--green); border-radius: 999px; padding: 0.25rem 0.9rem; font-size: 0.78rem; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase; margin-bottom: 1.5rem; }
    .hero h1 { font-size: clamp(2rem, 5vw, 3.4rem); font-weight: 900; line-height: 1.15; max-width: 720px; margin: 0 auto 1rem; letter-spacing: -1px; }
    .hero h1 em { font-style: normal; color: var(--green); }
    .hero p { font-size: 1.1rem; color: var(--muted); max-width: 520px; margin: 0 auto 2.2rem; }
    .hero-actions { display: flex; gap: 0.75rem; justify-content: center; flex-wrap: wrap; }
    .hero-actions .btn { padding: 0.8rem 1.8rem; font-size: 0.97rem; }
    .social-proof { padding: 1.2rem 2rem; text-align: center; background: var(--bg-alt); color: var(--muted); font-size: 0.85rem; border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); }
    .social-proof strong { color: var(--green); font-weight: 600; }
    section { padding: 4.5rem 2rem; }
    .container { max-width: 1080px; margin: 0 auto; }
    .section-label { display: block; color: var(--green); font-size: 0.75rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 0.6rem; }
    .section-title { font-size: clamp(1.6rem, 3vw, 2.2rem); font-weight: 800; letter-spacing: -0.5px; line-height: 1.2; margin-bottom: 0.75rem; }
    .section-sub { color: var(--muted); font-size: 1rem; max-width: 480px; }
    #recursos { background: var(--bg-alt); }
    .features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(290px, 1fr)); gap: 1.25rem; margin-top: 2.5rem; }
    .feature-card { background: var(--bg); border: 1px solid var(--border); border-radius: var(--radius); padding: 1.75rem; transition: box-shadow 0.2s, transform 0.2s; }
    .feature-card:hover { box-shadow: 0 4px 20px rgba(0,0,0,0.07); transform: translateY(-2px); }
    .feature-icon { width: 42px; height: 42px; background: var(--green-mid); border-radius: 9px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin-bottom: 1rem; }
    .feature-card h3 { font-size: 1rem; font-weight: 700; margin-bottom: 0.35rem; }
    .feature-card p { color: var(--muted); font-size: 0.88rem; line-height: 1.6; }
    .steps { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem; }
    .step { text-align: center; }
    .step-num { width: 46px; height: 46px; border-radius: 50%; background: var(--green); color: #fff; font-weight: 800; font-size: 1.2rem; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; }
    .step h3 { font-size: 0.97rem; font-weight: 700; margin-bottom: 0.35rem; }
    .step p { color: var(--muted); font-size: 0.87rem; }
    #planos { background: var(--bg-alt); }
    .plans-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 1.25rem; margin-top: 2.5rem; align-items: start; }
    .plan-card { background: var(--bg); border: 1px solid var(--border); border-radius: var(--radius); padding: 1.75rem; position: relative; }
    .plan-card.highlight { border-color: var(--green); border-width: 2px; }
    .plan-tag { position: absolute; top: -11px; left: 50%; transform: translateX(-50%); background: var(--green); color: #fff; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 0.2rem 0.8rem; border-radius: 999px; white-space: nowrap; }
    .plan-name { font-size: 0.9rem; color: var(--muted); margin-bottom: 0.4rem; font-weight: 600; }
    .plan-price { font-size: 2.5rem; font-weight: 900; letter-spacing: -1px; line-height: 1; margin-bottom: 0.2rem; }
    .plan-price span { font-size: 0.95rem; font-weight: 400; color: var(--muted); }
    .plan-desc { color: var(--muted); font-size: 0.82rem; margin-bottom: 1.25rem; }
    .plan-features { list-style: none; margin-bottom: 1.75rem; }
    .plan-features li { padding: 0.4rem 0; font-size: 0.88rem; display: flex; gap: 0.5rem; align-items: flex-start; border-bottom: 1px solid var(--border); }
    .plan-features li::before { content: '\2713'; color: var(--green); font-weight: 700; flex-shrink: 0; }
    .plan-card .btn { width: 100%; text-align: center; }
    .faq-list { margin-top: 2.5rem; max-width: 680px; }
    details { border-bottom: 1px solid var(--border); padding: 1.1rem 0; }
    summary { cursor: pointer; font-weight: 600; font-size: 0.95rem; list-style: none; display: flex; justify-content: space-between; align-items: center; gap: 1rem; }
    summary::-webkit-details-marker { display: none; }
    summary::after { content: '+'; font-size: 1.3rem; color: var(--green); flex-shrink: 0; font-weight: 400; }
    details[open] summary::after { content: '\2212'; }
    details p { color: var(--muted); font-size: 0.88rem; margin-top: 0.65rem; line-height: 1.7; }
    .cta-section { text-align: center; padding: 4.5rem 2rem; background: var(--green-light); border-top: 1px solid var(--green-mid); }
    .cta-section h2 { font-size: clamp(1.6rem, 3vw, 2.2rem); font-weight: 900; letter-spacing: -0.5px; margin-bottom: 0.75rem; }
    .cta-section p { color: var(--muted); font-size: 1rem; margin-bottom: 1.75rem; }
    .cta-section .btn { padding: 0.9rem 2.2rem; font-size: 1rem; }
    footer { padding: 2rem; border-top: 1px solid var(--border); display: flex; flex-wrap: wrap; gap: 1rem; justify-content: space-between; align-items: center; color: var(--muted); font-size: 0.82rem; }
    footer a { color: var(--muted); text-decoration: none; }
    footer a:hover { color: var(--green); }
    @media (max-width: 640px) { nav ul { display: none; } .hero { padding: 3.5rem 1.5rem 3rem; } section { padding: 3rem 1.5rem; } }
  </style>
</head>
<body>

<nav>
  <div class="logo">Shape<span>Pro</span></div>
  <ul>
    <li><a href="#recursos">Recursos</a></li>
    <li><a href="#como-funciona">Como funciona</a></li>
    <li><a href="#planos">Planos</a></li>
    <li><a href="#faq">FAQ</a></li>
  </ul>
  <div style="display:flex;gap:0.6rem;">
    <a href="#" class="btn btn-outline">Entrar</a>
    <a href="#planos" class="btn btn-primary">Comecar gratis</a>
  </div>
</nav>

<section class="hero">
  <span class="badge">Beta &mdash; acesso antecipado</span>
  <h1>Gerencie seus alunos e treinos <em>sem complicacao</em></h1>
  <p>Plataforma completa para personal trainers e pequenos studios: montagem de treinos, controle de pagamentos e muito mais.</p>
  <div class="hero-actions">
    <a href="#planos" class="btn btn-primary">Comecar gratis</a>
    <a href="#recursos" class="btn btn-outline">Ver recursos</a>
  </div>
</section>

<div class="social-proof">
  Desenvolvido para <strong>personal trainers independentes</strong> e <strong>pequenos studios</strong> que querem mais tempo para treinar e menos para administrar.
</div>

<section id="recursos">
  <div class="container">
    <span class="section-label">Recursos</span>
    <h2 class="section-title">Tudo que voce precisa em um so lugar</h2>
    <p class="section-sub">Do planejamento ao recebimento, sem planilhas ou apps separados.</p>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">&#127947;</div>
        <h3>Montagem de Treinos</h3>
        <p>Crie fichas personalizadas com exercicios, series, repeticoes e videos. Envie direto para o aluno.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">&#128179;</div>
        <h3>Controle de Pagamentos</h3>
        <p>Acompanhe mensalidades, vencimentos e inadimplencias com alertas automaticos.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">&#128101;</div>
        <h3>Gestao de Alunos</h3>
        <p>Cadastro completo com historico de treinos, avaliacoes fisicas e fotos de progresso.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">&#128197;</div>
        <h3>Agenda Integrada</h3>
        <p>Organize horarios de aulas e sessoes. Lembretes automaticos para o aluno.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">&#128202;</div>
        <h3>Evolucao do Aluno</h3>
        <p>Acompanhe biometria, cargas e medidas em linha do tempo. Mostre resultados reais.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">&#128241;</div>
        <h3>App para o Aluno</h3>
        <p>O aluno acessa o treino, marca exercicios e envia feedbacks direto pelo celular.</p>
      </div>
    </div>
  </div>
</section>

<section id="como-funciona">
  <div class="container">
    <span class="section-label">Como funciona</span>
    <h2 class="section-title">Pronto em minutos</h2>
    <p class="section-sub">Sem treinamento tecnico. Configure e comece no mesmo dia.</p>
    <div class="steps">
      <div class="step">
        <div class="step-num">1</div>
        <h3>Crie sua conta</h3>
        <p>Cadastro simples, sem cartao de credito. 14 dias gratis.</p>
      </div>
      <div class="step">
        <div class="step-num">2</div>
        <h3>Adicione seus alunos</h3>
        <p>Importe ou cadastre. O aluno recebe convite por e-mail.</p>
      </div>
      <div class="step">
        <div class="step-num">3</div>
        <h3>Monte os treinos</h3>
        <p>Use nosso banco de exercicios ou adicione os seus proprios.</p>
      </div>
      <div class="step">
        <div class="step-num">4</div>
        <h3>Gerencie tudo</h3>
        <p>Pagamentos, agenda e evolucao em um painel.</p>
      </div>
    </div>
  </div>
</section>

<section id="planos">
  <div class="container">
    <span class="section-label">Planos</span>
    <h2 class="section-title">Simples e transparente</h2>
    <p class="section-sub">Sem taxas escondidas. Cancele quando quiser.</p>
    <div class="plans-grid">
      <div class="plan-card">
        <div class="plan-name">Starter</div>
        <div class="plan-price">Gratis</div>
        <div class="plan-desc">Para quem esta comecando</div>
        <ul class="plan-features">
          <li>Ate 5 alunos ativos</li>
          <li>Montagem de treinos ilimitada</li>
          <li>Controle financeiro basico</li>
          <li>Acesso ao app do aluno</li>
        </ul>
        <a href="#" class="btn btn-outline">Comecar gratis</a>
      </div>
      <div class="plan-card highlight">
        <span class="plan-tag">Mais popular</span>
        <div class="plan-name">Pro</div>
        <div class="plan-price">R$ 59<span>/mes</span></div>
        <div class="plan-desc">Para personais em crescimento</div>
        <ul class="plan-features">
          <li>Alunos ilimitados</li>
          <li>Agenda e lembretes automaticos</li>
          <li>Evolucao fisica completa</li>
          <li>Controle financeiro avancado</li>
          <li>Relatorios e exportacao</li>
          <li>Suporte prioritario</li>
        </ul>
        <a href="#" class="btn btn-primary">Assinar agora</a>
      </div>
      <div class="plan-card">
        <div class="plan-name">Studio</div>
        <div class="plan-price">R$ 129<span>/mes</span></div>
        <div class="plan-desc">Para studios e equipes</div>
        <ul class="plan-features">
          <li>Multiplos professores</li>
          <li>Gestao de turmas e horarios</li>
          <li>Controle de acesso por professor</li>
          <li>Dashboard administrativo</li>
          <li>Integracao com PIX automatico</li>
          <li>Onboarding personalizado</li>
        </ul>
        <a href="#" class="btn btn-outline">Falar com vendas</a>
      </div>
    </div>
  </div>
</section>

<section id="faq">
  <div class="container">
    <span class="section-label">FAQ</span>
    <h2 class="section-title">Duvidas frequentes</h2>
    <div class="faq-list">
      <details>
        <summary>Preciso de cartao de credito para comecar?</summary>
        <p>Nao. O plano Starter e gratuito e nao requer cartao. Para os planos pagos, aceitamos cartao, debito e PIX.</p>
      </details>
      <details>
        <summary>Posso migrar meus dados de outra plataforma?</summary>
        <p>Sim. Oferecemos importacao via CSV. Para Pro e Studio, nossa equipe auxilia na migracao sem custo.</p>
      </details>
      <details>
        <summary>O aluno precisa pagar algo para usar o app?</summary>
        <p>Nao. O acesso ao app do aluno e totalmente gratuito. Apenas o personal ou studio paga.</p>
      </details>
      <details>
        <summary>Funciona no celular?</summary>
        <p>Sim. O painel e responsivo e funciona em qualquer navegador. O app do aluno esta disponivel para Android e iOS.</p>
      </details>
      <details>
        <summary>Posso cancelar a qualquer momento?</summary>
        <p>Sim. Sem fidelidade. Cancele quando quiser, sem multa.</p>
      </details>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container">
    <h2>Comece hoje, de graca</h2>
    <p>14 dias de plano Pro sem custo. Nenhum cartao necessario.</p>
    <a href="#" class="btn btn-primary">Criar minha conta</a>
  </div>
</section>

<footer>
  <div class="logo" style="font-size:1.1rem;">Shape<span>Pro</span></div>
  <span>2026 ShapePro. Todos os direitos reservados.</span>
  <div style="display:flex;gap:1.5rem;">
    <a href="#">Privacidade</a>
    <a href="#">Termos</a>
    <a href="#">Contato</a>
  </div>
</footer>

</body>
</html>
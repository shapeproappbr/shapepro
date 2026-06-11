<?php
$wa = 'https://wa.me/5500000000000?text=Ol%C3%A1%2C+tenho+interesse+no+ShapePro+IA!';
?>

<!-- ============================================================
     HEADER — role="banner" implícito em <header>
     ============================================================ -->
<header class="lp-header" id="lp-header">
  <div class="container">
    <nav class="lp-nav" aria-label="Navegação principal">

      <a href="#inicio" class="lp-logo" aria-label="ShapePro IA — Página inicial">
        <img src="<?= base_url('assets/images/logo.png') ?>"
             alt="ShapePro IA"
             width="160" height="38"
             onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
        <span class="lp-logo-text" style="display:none;" aria-hidden="true">
          <span class="v">Shape</span><span class="p">Pro</span>&nbsp;<span class="ia">IA</span>
        </span>
      </a>

      <ul class="lp-nav-list" role="list">
        <li><a href="#inicio">Início</a></li>
        <li><a href="#recursos">Recursos</a></li>
        <li><a href="#como-funciona">Como funciona</a></li>
        <li><a href="#planos">Planos</a></li>
        <li><a href="#faq">Perguntas</a></li>
      </ul>

      <div class="lp-nav-actions">
        <a href="/login" class="lp-nav-login">Entrar</a>
        <a href="#formulario" class="btn btn-volt btn-sm">Quero testar</a>
      </div>

      <button
        class="lp-hamburger"
        id="lp-hamburger"
        aria-controls="lp-mobile-nav"
        aria-expanded="false"
        aria-label="Abrir menu de navegação"
      >
        <span></span><span></span><span></span>
      </button>
    </nav>

    <!-- Mobile nav — aria-hidden toggled by JS -->
    <nav id="lp-mobile-nav"
         class="lp-mobile-nav"
         aria-label="Menu mobile"
         aria-hidden="true">
      <a href="#inicio">Início</a>
      <a href="#recursos">Recursos</a>
      <a href="#como-funciona">Como funciona</a>
      <a href="#planos">Planos</a>
      <a href="#faq">Perguntas</a>
      <a href="/login">Entrar</a>
      <a href="#formulario" class="btn btn-volt btn-sm" style="margin-top:8px;justify-content:center;">Quero testar</a>
    </nav>
  </div>
</header>


<!-- ============================================================
     MAIN — landmark para skip link
     ============================================================ -->
<main id="main-content">

  <!-- ================================================
       HERO
       ================================================ -->
  <section class="lp-hero" id="inicio" aria-labelledby="hero-heading">
    <div aria-hidden="true" class="lp-hero-glow lp-hero-glow-1"></div>
    <div aria-hidden="true" class="lp-hero-glow lp-hero-glow-2"></div>

    <div class="container">
      <div class="lp-hero-inner">

        <!-- Copy -->
        <div class="lp-hero-copy">
          <p class="lp-hero-label" aria-label="Plataforma em lançamento">
            <span class="lp-hero-dot" aria-hidden="true"></span>
            Plataforma em lançamento
          </p>

          <h1 class="t-hero" id="hero-heading">
            Profissionalize<br>
            sua consultoria<br>
            <span class="accent">fitness</span> com<br>
            <span class="accent-blue">inteligência</span><br>
            artificial.
          </h1>

          <p class="lp-hero-sub">
            O ShapePro IA ajuda personal trainers a acompanhar alunos,
            montar treinos, receber check-ins, controlar evolução e
            reduzir cancelamentos em uma única plataforma.
          </p>

          <div class="lp-hero-ctas">
            <a href="#formulario" class="btn btn-volt btn-lg">Quero testar o ShapePro IA</a>
            <a href="#como-funciona" class="btn btn-ghost btn-lg">Ver como funciona</a>
          </div>

          <p class="lp-hero-micro">
            Feito para personal trainers, consultores fitness, studios e academias pequenas.
          </p>
        </div>

        <!-- Dashboard mockup — aria-hidden (decorativo) -->
        <div class="lp-hero-visual" aria-hidden="true">
          <div style="position:relative;">
            <div class="lp-dashboard">
              <div class="lp-dash-bar">
                <div class="lp-dash-dots">
                  <div class="lp-dash-dot" style="background:#EF4444;"></div>
                  <div class="lp-dash-dot" style="background:#F59E0B;"></div>
                  <div class="lp-dash-dot" style="background:#7AC943;"></div>
                </div>
                <span class="lp-dash-name">shapepro-ia — central de comando</span>
              </div>
              <div class="lp-dash-body">
                <div class="lp-metrics">
                  <div class="lp-metric">
                    <div class="lp-metric-label">Alunos Ativos</div>
                    <div class="lp-metric-val v t-mono">34</div>
                    <div class="lp-metric-sub up">↑ 3 este mês</div>
                  </div>
                  <div class="lp-metric">
                    <div class="lp-metric-label">Check-ins Hoje</div>
                    <div class="lp-metric-val c t-mono">12</div>
                    <div class="lp-metric-sub up">80% de adesão</div>
                  </div>
                  <div class="lp-metric">
                    <div class="lp-metric-label">Em Risco</div>
                    <div class="lp-metric-val r t-mono">3</div>
                    <div class="lp-metric-sub" style="color:var(--danger);">Ação necessária</div>
                  </div>
                </div>
                <div class="lp-dash-cards">
                  <div class="lp-dc lp-dc-risk">
                    <div class="lp-dc-label">⚠ Alunos em risco</div>
                    <div class="lp-stud">
                      <div class="lp-stud-av">C</div>
                      <span class="lp-stud-name">Carlos M.</span>
                      <span class="lp-stud-badge risk">12d sem check-in</span>
                    </div>
                    <div class="lp-stud">
                      <div class="lp-stud-av">A</div>
                      <span class="lp-stud-name">Ana P.</span>
                      <span class="lp-stud-badge risk">Sem treino ativo</span>
                    </div>
                  </div>
                  <div class="lp-dc lp-dc-progress">
                    <div class="lp-dc-label">✓ Evolução de carga</div>
                    <div class="lp-prog-text">João S. — Supino reto</div>
                    <div style="font-size:12px;color:var(--ash);margin-bottom:4px;">60 → 82 kg <span style="color:var(--volt);">+37%</span></div>
                    <div class="lp-prog-bar"><div class="lp-prog-fill" style="width:82%;"></div></div>
                    <div class="lp-prog-win">Melhor semana do aluno 🏆</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating badges -->
            <div class="lp-float lp-float-a">
              <span class="lp-float-icon">📩</span>
              <div>
                <div class="lp-float-title">Check-in recebido</div>
                <div class="lp-float-val">Marina — 7/7 dias</div>
              </div>
            </div>
            <div class="lp-float lp-float-b">
              <span class="lp-float-icon">🤖</span>
              <div>
                <div class="lp-float-title">Copilot IA</div>
                <div class="lp-float-val" style="color:var(--volt);">Relatório gerado</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ================================================
       DOR
       ================================================ -->
  <section class="section section-alt" id="dor" aria-labelledby="pain-heading">
    <div class="container">
      <div class="section-header center">
        <p class="eyebrow">O problema real</p>
        <h2 class="t-section" id="pain-heading">
          Você ainda acompanha seus alunos<br>por WhatsApp, planilha e PDF?
        </h2>
        <div class="split-line split-line-sm split-line-center"></div>
      </div>

      <p class="lp-pain-intro">
        O aluno não cancela de uma vez. Primeiro para de registrar,
        depois some do check-in, perde a percepção de evolução e
        deixa de perceber o valor da consultoria. Quando o personal percebe, já é tarde.
      </p>

      <ul class="lp-pain-grid" role="list">
        <li class="lp-pain-card">
          <div class="ico" aria-hidden="true">👻</div>
          <h3>Alunos sumidos</h3>
          <p>Recebe o treino, usa por uma semana e desaparece. Sem registro, sem feedback, sem contato.</p>
        </li>
        <li class="lp-pain-card">
          <div class="ico" aria-hidden="true">📁</div>
          <h3>Treinos espalhados</h3>
          <p>PDF no e-mail, planilha no Drive, link no WhatsApp. O aluno nunca sabe qual treino está vigente.</p>
        </li>
        <li class="lp-pain-card">
          <div class="ico" aria-hidden="true">❌</div>
          <h3>Falta de check-in</h3>
          <p>Sem check-in semanal, o personal não sabe se o aluno está treinando, dormindo mal ou desistindo.</p>
        </li>
        <li class="lp-pain-card">
          <div class="ico" aria-hidden="true">🔍</div>
          <h3>Evolução invisível</h3>
          <p>Sem registro de cargas e medidas, o aluno não percebe progresso — e começa a questionar o investimento.</p>
        </li>
        <li class="lp-pain-card">
          <div class="ico" aria-hidden="true">📉</div>
          <h3>Cancelamentos silenciosos</h3>
          <p>O aviso vem quando a decisão já foi tomada. Não há janela para intervir a tempo.</p>
        </li>
        <li class="lp-pain-card">
          <div class="ico" aria-hidden="true">😐</div>
          <h3>Pouco profissionalismo percebido</h3>
          <p>Sem app, sem relatório, sem estrutura — a consultoria parece informal, independente da qualidade técnica.</p>
        </li>
      </ul>

      <p class="lp-pain-close">
        O problema não é só montar treino.<br>
        É <em>acompanhar, engajar e mostrar evolução</em>.
      </p>
    </div>
  </section>


  <!-- ================================================
       SOLUÇÃO
       ================================================ -->
  <section class="section" id="solucao" aria-labelledby="sol-heading">
    <div class="container">
      <div class="lp-sol-grid">

        <div>
          <p class="eyebrow">A solução</p>
          <h2 class="t-section" id="sol-heading">
            O ShapePro IA centraliza<br>
            o acompanhamento<br>
            <span class="accent">do início ao resultado.</span>
          </h2>
          <div class="split-line split-line-sm"></div>
          <p style="font-size:17px;color:var(--smoke);line-height:1.8;margin-top:16px;">
            O ShapePro IA transforma dados soltos em acompanhamento profissional.
            Tudo em um só lugar, acessível pelo celular, com IA como copiloto.
          </p>
          <div class="lp-sol-tags" role="list" aria-label="Módulos incluídos">
            <span class="lp-tag lp-tag-volt" role="listitem">Alunos</span>
            <span class="lp-tag lp-tag-volt" role="listitem">Treinos</span>
            <span class="lp-tag lp-tag-volt" role="listitem">Check-ins</span>
            <span class="lp-tag lp-tag-volt" role="listitem">Cargas</span>
            <span class="lp-tag lp-tag-volt" role="listitem">Medidas</span>
            <span class="lp-tag lp-tag-circuit" role="listitem">Relatórios</span>
            <span class="lp-tag lp-tag-circuit" role="listitem">IA Copilot</span>
            <span class="lp-tag lp-tag-circuit" role="listitem">WhatsApp</span>
            <span class="lp-tag lp-tag-volt" role="listitem">Hábitos</span>
            <span class="lp-tag lp-tag-volt" role="listitem">Alertas</span>
            <span class="lp-tag lp-tag-circuit" role="listitem">Radar de Retenção</span>
          </div>
          <div style="margin-top:32px;">
            <a href="#formulario" class="btn btn-volt">Quero experimentar</a>
          </div>
        </div>

        <div class="lp-sol-panel" aria-hidden="true">
          <div class="lp-sol-panel-header">
            <span class="lp-sol-panel-title">🗂 Central do Personal</span>
            <span class="lp-sol-panel-badge">34 alunos ativos</span>
          </div>
          <div class="lp-sol-panel-body">
            <div class="lp-module">
              <div class="lp-module-icon ci-volt">👥</div>
              <div><div class="lp-module-name">Gestão de Alunos</div><div class="lp-module-desc">Perfil, objetivos, histórico</div></div>
              <span class="lp-module-stat" style="color:var(--volt);">34</span>
            </div>
            <div class="lp-module">
              <div class="lp-module-icon ci-circuit">📋</div>
              <div><div class="lp-module-name">Montador de Treinos</div><div class="lp-module-desc">Por objetivo e nível</div></div>
              <span class="lp-module-stat" style="color:var(--circuit);">Ativo</span>
            </div>
            <div class="lp-module">
              <div class="lp-module-icon ci-volt">✅</div>
              <div><div class="lp-module-name">Check-ins Semanais</div><div class="lp-module-desc">Peso, fotos, energia, sono</div></div>
              <span class="lp-module-stat" style="color:var(--warn);">12 novos</span>
            </div>
            <div class="lp-module">
              <div class="lp-module-icon ci-red">📡</div>
              <div><div class="lp-module-name">Radar de Retenção</div><div class="lp-module-desc">Alunos em risco</div></div>
              <span class="lp-module-stat" style="color:var(--danger);">3 alertas</span>
            </div>
            <div class="lp-module">
              <div class="lp-module-icon ci-purple">🤖</div>
              <div><div class="lp-module-name">ShapePro Copilot</div><div class="lp-module-desc">IA como apoio profissional</div></div>
              <span class="lp-module-stat" style="color:#A855F7;">IA</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ================================================
       RECURSOS
       ================================================ -->
  <section class="section section-alt" id="recursos" aria-labelledby="feat-heading">
    <div class="container">
      <div class="section-header center">
        <p class="eyebrow">Módulos</p>
        <h2 class="t-section" id="feat-heading">Tudo que o personal moderno precisa</h2>
        <div class="split-line split-line-sm split-line-center"></div>
        <p class="lead">Cada módulo resolve um problema real. Juntos, entregam a experiência profissional que seus alunos merecem.</p>
      </div>

      <ul class="lp-feat-grid" role="list">
        <li class="card card-lift">
          <div class="card-icon ci-volt" aria-hidden="true">👥</div>
          <h3 class="t-card">Gestão de Alunos</h3>
          <p style="font-size:14px;color:var(--smoke);line-height:1.65;">Cadastre alunos com objetivo, nível, restrições, plano, vencimento e histórico completo em um só lugar.</p>
        </li>
        <li class="card card-lift">
          <div class="card-icon ci-circuit" aria-hidden="true">📋</div>
          <h3 class="t-card">Montador de Treinos</h3>
          <p style="font-size:14px;color:var(--smoke);line-height:1.65;">Crie treinos por objetivo, nível, grupo muscular e frequência semanal. Use modelos ou personalize do zero.</p>
        </li>
        <li class="card card-lift">
          <div class="card-icon ci-volt" aria-hidden="true">🏋️</div>
          <h3 class="t-card">Biblioteca de Exercícios</h3>
          <p style="font-size:14px;color:var(--smoke);line-height:1.65;">Organize exercícios com foto, vídeo, GIF, instruções, erros comuns e dicas de execução profissional.</p>
        </li>
        <li class="card card-lift">
          <div class="card-icon ci-circuit" aria-hidden="true">📱</div>
          <h3 class="t-card">Área do Aluno</h3>
          <p style="font-size:14px;color:var(--smoke);line-height:1.65;">O aluno acessa o treino pelo celular, registra carga, repetições e envia feedback em tempo real.</p>
        </li>
        <li class="card card-lift">
          <div class="card-icon ci-volt" aria-hidden="true">✅</div>
          <h3 class="t-card">Check-in Semanal</h3>
          <p style="font-size:14px;color:var(--smoke);line-height:1.65;">Receba peso, medidas, fotos, adesão, sono, energia, dificuldade e observações do aluno toda semana.</p>
        </li>
        <li class="card card-lift">
          <div class="card-icon ci-circuit" aria-hidden="true">📈</div>
          <h3 class="t-card">Registro de Cargas</h3>
          <p style="font-size:14px;color:var(--smoke);line-height:1.65;">Acompanhe progressão e evolução de força por exercício. Mostre ao aluno o quanto ele evoluiu com dados reais.</p>
        </li>
        <li class="card card-lift" style="border-left:3px solid var(--danger);">
          <div class="card-icon ci-red" aria-hidden="true">📡</div>
          <h3 class="t-card">Radar de Retenção</h3>
          <p style="font-size:14px;color:var(--smoke);line-height:1.65;">Identifique alunos sumidos, sem check-in, sem treino ativo ou em risco de cancelamento — antes que somam.</p>
        </li>
        <li class="card card-lift">
          <div class="card-icon ci-volt" aria-hidden="true">📄</div>
          <h3 class="t-card">Relatórios Automáticos</h3>
          <p style="font-size:14px;color:var(--smoke);line-height:1.65;">Gere relatórios de evolução profissionais para mostrar resultado concreto e aumentar percepção de valor.</p>
        </li>
        <li class="card card-lift">
          <div class="card-icon ci-purple" aria-hidden="true">🤖</div>
          <h3 class="t-card">ShapePro Copilot</h3>
          <p style="font-size:14px;color:var(--smoke);line-height:1.65;">Use IA para apoiar relatórios, mensagens e análise de evolução — sempre com revisão do profissional.</p>
        </li>
      </ul>

      <div style="margin-top:32px;">
        <div class="card" style="display:flex;align-items:center;gap:20px;max-width:520px;margin-inline:auto;background:rgba(37,211,102,.05);border-color:rgba(37,211,102,.25);">
          <div class="card-icon" style="background:rgba(37,211,102,.12);margin:0;flex-shrink:0;" aria-hidden="true">💬</div>
          <div>
            <h3 class="t-card" style="font-size:16px;">WhatsApp Inteligente</h3>
            <p style="font-size:14px;color:var(--smoke);line-height:1.6;">Templates prontos para alunos sumidos, check-ins atrasados, evolução alcançada e renovação de plano.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ================================================
       ANTES / DEPOIS
       ================================================ -->
  <section class="section" aria-labelledby="compare-heading">
    <div class="container">
      <div class="section-header center">
        <p class="eyebrow">Transformação</p>
        <h2 class="t-section" id="compare-heading">A diferença é visível</h2>
        <div class="split-line split-line-sm split-line-center"></div>
      </div>

      <div class="lp-compare">
        <div class="lp-compare-col before">
          <div class="lp-compare-head" aria-label="Sem ShapePro IA">
            <span aria-hidden="true">😮‍💨</span> Sem ShapePro IA
          </div>
          <ul class="lp-compare-list" role="list">
            <li><span class="lp-compare-ico" aria-hidden="true">✗</span> Treinos enviados por PDF no WhatsApp</li>
            <li><span class="lp-compare-ico" aria-hidden="true">✗</span> Planilhas soltas e desatualizadas</li>
            <li><span class="lp-compare-ico" aria-hidden="true">✗</span> Alunos sem acompanhamento real</li>
            <li><span class="lp-compare-ico" aria-hidden="true">✗</span> Nenhum registro de carga ou evolução</li>
            <li><span class="lp-compare-ico" aria-hidden="true">✗</span> Check-in inexistente ou informal</li>
            <li><span class="lp-compare-ico" aria-hidden="true">✗</span> Sem relatório para mostrar resultado</li>
            <li><span class="lp-compare-ico" aria-hidden="true">✗</span> Cancelamento surpresa todo mês</li>
          </ul>
        </div>
        <div class="lp-compare-col after">
          <div class="lp-compare-head" aria-label="Com ShapePro IA">
            <span aria-hidden="true">✅</span> Com ShapePro IA
          </div>
          <ul class="lp-compare-list" role="list">
            <li><span class="lp-compare-ico" style="color:var(--volt);" aria-hidden="true">✓</span> Alunos organizados com perfil completo</li>
            <li><span class="lp-compare-ico" style="color:var(--volt);" aria-hidden="true">✓</span> Treinos acessíveis pelo app do aluno</li>
            <li><span class="lp-compare-ico" style="color:var(--volt);" aria-hidden="true">✓</span> Check-ins semanais estruturados</li>
            <li><span class="lp-compare-ico" style="color:var(--volt);" aria-hidden="true">✓</span> Evolução registrada e visível</li>
            <li><span class="lp-compare-ico" style="color:var(--volt);" aria-hidden="true">✓</span> Alertas antes do aluno cancelar</li>
            <li><span class="lp-compare-ico" style="color:var(--volt);" aria-hidden="true">✓</span> Relatórios profissionais em cliques</li>
            <li><span class="lp-compare-ico" style="color:var(--volt);" aria-hidden="true">✓</span> Consultoria com muito mais valor percebido</li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- ================================================
       COMO FUNCIONA
       ================================================ -->
  <section class="section section-alt" id="como-funciona" aria-labelledby="steps-heading">
    <div class="container">
      <div class="section-header center">
        <p class="eyebrow">Como funciona</p>
        <h2 class="t-section" id="steps-heading">4 passos para uma<br>consultoria profissional</h2>
        <div class="split-line split-line-sm split-line-center"></div>
      </div>

      <div class="lp-steps-wrap">
        <div class="lp-steps-track" aria-hidden="true"></div>
        <ol class="lp-steps-grid" role="list">
          <li class="lp-step">
            <div class="lp-step-num" aria-hidden="true">1</div>
            <h3>Cadastre seus alunos</h3>
            <p>Inclua objetivo, nível, medidas, fotos, restrições físicas e plano contratado. Perfil completo em minutos.</p>
          </li>
          <li class="lp-step">
            <div class="lp-step-num" aria-hidden="true">2</div>
            <h3>Monte ou envie o treino</h3>
            <p>Use a biblioteca de exercícios ou cadastre os seus com foto e vídeo. Ative o treino com um clique.</p>
          </li>
          <li class="lp-step">
            <div class="lp-step-num" aria-hidden="true">3</div>
            <h3>O aluno registra a execução</h3>
            <p>Ele acessa pelo celular, vê o exercício, registra carga, séries, repetições e envia feedback.</p>
          </li>
          <li class="lp-step">
            <div class="lp-step-num" aria-hidden="true">4</div>
            <h3>Você acompanha e ajusta</h3>
            <p>Receba check-ins, veja evolução, gere relatórios e identifique alunos em risco antes do cancelamento.</p>
          </li>
        </ol>
      </div>

      <div style="text-align:center;margin-top:52px;">
        <a href="#formulario" class="btn btn-volt btn-lg">Começar agora</a>
      </div>
    </div>
  </section>


  <!-- ================================================
       IA COPILOT
       ================================================ -->
  <section class="section" id="ia" aria-labelledby="ai-heading">
    <div class="container">
      <div class="lp-ai-grid">

        <div>
          <p class="eyebrow">ShapePro Copilot</p>
          <h2 class="t-section" id="ai-heading">
            IA para economizar tempo,<br>
            <span class="accent-blue">não para substituir<br>o personal.</span>
          </h2>
          <div class="split-line split-line-sm"></div>
          <p style="font-size:16px;color:var(--smoke);margin-top:16px;line-height:1.8;">
            O Copilot é seu assistente dentro da plataforma. Analisa dados, sugere ações
            e gera conteúdo — sempre com revisão profissional antes de qualquer aplicação.
          </p>

          <ul class="lp-ai-items" role="list">
            <li class="lp-ai-item">
              <div class="ico" aria-hidden="true">📊</div>
              <div><h4>Análise de check-in</h4><p>Interpreta os dados semanais e destaca pontos de atenção e progresso do aluno.</p></div>
            </li>
            <li class="lp-ai-item">
              <div class="ico" aria-hidden="true">📄</div>
              <div><h4>Relatório de evolução</h4><p>Gera textos com base nos dados reais de carga, medidas e check-ins do período.</p></div>
            </li>
            <li class="lp-ai-item">
              <div class="ico" aria-hidden="true">💬</div>
              <div><h4>Mensagem para aluno sumido</h4><p>Sugere mensagem personalizada para reengajar com o tom adequado ao perfil.</p></div>
            </li>
            <li class="lp-ai-item">
              <div class="ico" aria-hidden="true">⚠️</div>
              <div><h4>Identificação de risco</h4><p>Aponta alunos com padrão de comportamento associado a abandono para ação preventiva.</p></div>
            </li>
          </ul>

          <div class="lp-ai-notice" role="note">
            <span aria-hidden="true">ℹ️</span>
            <span>Toda sugestão da IA deve ser revisada pelo profissional antes de ser aplicada. A IA é apoio à decisão, nunca substituta do personal trainer.</span>
          </div>
        </div>

        <!-- Copilot mockup — aria-hidden (decorativo) -->
        <div class="lp-copilot" aria-hidden="true">
          <div class="lp-cop-head">
            <span style="font-size:20px;">🤖</span>
            <span class="lp-cop-name">ShapePro Copilot</span>
            <span class="lp-cop-status">● pronto</span>
          </div>
          <div class="lp-cop-body">
            <div class="lp-chat lp-chat-user">
              Gere um resumo do check-in do João da semana passada.
            </div>
            <div class="lp-chat lp-chat-ai">
              <span class="lp-chat-tag">🤖 Copilot</span>
              <strong>Resumo — João S.</strong><br><br>
              Adesão de 6/7 dias. Peso estável (82,4 kg). Boa energia e sono adequado.<br><br>
              <span style="color:var(--volt);">Destaque:</span> +5 kg no supino em relação à semana anterior.<br>
              <span style="color:var(--warn);">Atenção:</span> dor leve no ombro direito em empurrar — revisar técnica.
            </div>
            <div class="lp-chat lp-chat-user">
              Crie mensagem para a Ana — 10 dias sem check-in.
            </div>
            <div class="lp-chat lp-chat-ai">
              <span class="lp-chat-tag">🤖 Copilot</span>
              <em>"Oi Ana! Faz alguns dias que não recebi seu check-in. Como está sendo a semana? Estou aqui para ajustar o treino se precisar 💪"</em>
            </div>
          </div>
          <div class="lp-cop-footer">Revise sempre antes de enviar — IA como apoio, não como decisão.</div>
        </div>

      </div>
    </div>
  </section>


  <!-- ================================================
       PARA QUEM É
       ================================================ -->
  <section class="section section-alt" id="para-quem" aria-labelledby="aud-heading">
    <div class="container">
      <div class="section-header center">
        <p class="eyebrow">Quem usa</p>
        <h2 class="t-section" id="aud-heading">
          Feito para quem quer transformar<br>
          <span class="accent">acompanhamento em recorrência.</span>
        </h2>
        <div class="split-line split-line-sm split-line-center"></div>
      </div>

      <ul class="lp-aud-grid" role="list">
        <li class="lp-aud-card"><div class="ico" aria-hidden="true">🏃</div><h3>Personal Trainer Autônomo</h3><p>Organize sua carteira e entregue experiência premium como os maiores players do mercado.</p></li>
        <li class="lp-aud-card"><div class="ico" aria-hidden="true">💻</div><h3>Consultor Fitness Online</h3><p>Escale sua consultoria remota com check-ins, treinos e relatórios que funcionam à distância.</p></li>
        <li class="lp-aud-card"><div class="ico" aria-hidden="true">🏢</div><h3>Studio de Personal</h3><p>Centralize alunos do studio com controle por profissional e visão consolidada.</p></li>
        <li class="lp-aud-card"><div class="ico" aria-hidden="true">🥊</div><h3>Box e Academia Pequena</h3><p>Ofereça acompanhamento individualizado em escala, diferenciando sua operação.</p></li>
        <li class="lp-aud-card"><div class="ico" aria-hidden="true">📊</div><h3>Preparador Físico</h3><p>Acompanhe cargas, evolução e periodização de atletas com dados organizados e histórico detalhado.</p></li>
        <li class="lp-aud-card"><div class="ico" aria-hidden="true">🔄</div><h3>Venda de Recorrência</h3><p>Profissionalize o acompanhamento mensal e aumente a percepção de valor para cobrar e reter mais.</p></li>
        <li class="lp-aud-card"><div class="ico" aria-hidden="true">🌎</div><h3>Online + Presencial</h3><p>A plataforma funciona para alunos presenciais, remotos ou híbridos — sem distinção.</p></li>
        <li class="lp-aud-card"><div class="ico" aria-hidden="true">⚡</div><h3>Quem precisa de escala</h3><p>Acompanhe mais alunos com menos bagunça, mantendo a qualidade individual.</p></li>
      </ul>
    </div>
  </section>


  <!-- ================================================
       BENEFÍCIOS
       ================================================ -->
  <section class="section" aria-labelledby="ben-heading">
    <div class="container">
      <div class="section-header center">
        <p class="eyebrow">Resultados para o negócio</p>
        <h2 class="t-section" id="ben-heading">
          Mais organização, mais retenção<br>e <span class="accent">mais valor percebido.</span>
        </h2>
        <div class="split-line split-line-sm split-line-center"></div>
      </div>

      <ul class="lp-ben-grid" role="list">
        <li class="lp-ben"><div class="ico" aria-hidden="true">🚫</div><h3>Pare de depender do WhatsApp</h3><p>Organize tudo em uma plataforma profissional dedicada ao seu trabalho.</p></li>
        <li class="lp-ben"><div class="ico" aria-hidden="true">⭐</div><h3>Experiência premium</h3><p>Entregue o padrão de atendimento das maiores plataformas fitness do mundo.</p></li>
        <li class="lp-ben"><div class="ico" aria-hidden="true">📡</div><h3>Reduza alunos sumidos</h3><p>Identifique quem está em risco antes do cancelamento e aja proativamente.</p></li>
        <li class="lp-ben"><div class="ico" aria-hidden="true">📊</div><h3>Mostre evolução com dados</h3><p>Relatórios que tornam o progresso visível e justificam a mensalidade.</p></li>
        <li class="lp-ben"><div class="ico" aria-hidden="true">💰</div><h3>Cobre mais pela consultoria</h3><p>Acompanhamento organizado justifica um ticket médio mais alto.</p></li>
        <li class="lp-ben"><div class="ico" aria-hidden="true">⚙️</div><h3>Mais alunos, menos bagunça</h3><p>Escale a carteira sem perder o controle ou a qualidade individual.</p></li>
        <li class="lp-ben"><div class="ico" aria-hidden="true">🔁</div><h3>Transforme dados em ação</h3><p>Check-ins, cargas e alertas viram insights para decisões melhores e mais rápidas.</p></li>
        <li class="lp-ben"><div class="ico" aria-hidden="true">🤝</div><h3>Fortaleça o vínculo com o aluno</h3><p>Acompanhamento consistente gera confiança — e aluno confiante renova e indica.</p></li>
      </ul>
    </div>
  </section>


  <!-- ================================================
       PLANOS
       ================================================ -->
  <section class="section section-alt" id="planos" aria-labelledby="plans-heading">
    <div class="container">
      <div class="section-header center">
        <p class="eyebrow">Planos e preços</p>
        <h2 class="t-section" id="plans-heading">Escolha o plano para o seu momento</h2>
        <div class="split-line split-line-sm split-line-center"></div>
        <p class="lead">Comece pequeno e escale conforme sua carteira cresce. Sem contratos longos.</p>
      </div>

      <div class="lp-plan-grid">

        <article class="lp-plan" aria-label="Plano Starter">
          <div class="lp-plan-name">Starter</div>
          <p class="lp-plan-sub">Para personal iniciando</p>
          <div class="lp-plan-price" aria-label="R$ 79 por mês">
            <span class="lp-plan-cur">R$</span>
            <span class="lp-plan-amt">79</span>
            <span class="lp-plan-per">/mês</span>
          </div>
          <hr class="lp-plan-hr">
          <ul class="lp-plan-feats" role="list">
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Até 15 alunos</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Montador de treinos</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Biblioteca de exercícios</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Check-ins semanais</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Área do aluno no celular</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Relatórios básicos</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Registro de cargas</li>
          </ul>
          <a href="#formulario" class="btn btn-ghost" style="width:100%;">Começar no Starter</a>
        </article>

        <article class="lp-plan featured" aria-label="Plano Pro — mais escolhido">
          <div class="lp-plan-badge" aria-label="Plano mais escolhido">Mais escolhido</div>
          <div class="lp-plan-name">Pro</div>
          <p class="lp-plan-sub">Para personal com carteira ativa</p>
          <div class="lp-plan-price" aria-label="R$ 197 por mês">
            <span class="lp-plan-cur">R$</span>
            <span class="lp-plan-amt">197</span>
            <span class="lp-plan-per">/mês</span>
          </div>
          <hr class="lp-plan-hr">
          <ul class="lp-plan-feats" role="list">
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Até 50 alunos</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Tudo do Starter</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Alertas automáticos</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Modelos de treino prontos</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Controle de hábitos</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Relatórios avançados</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Templates de WhatsApp</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Assessments e fotos</li>
          </ul>
          <a href="#formulario" class="btn btn-volt" style="width:100%;">Quero o Pro</a>
        </article>

        <article class="lp-plan" aria-label="Plano Expert">
          <div class="lp-plan-name">Expert</div>
          <p class="lp-plan-sub">Para consultoria em escala</p>
          <div class="lp-plan-price" aria-label="R$ 397 por mês">
            <span class="lp-plan-cur">R$</span>
            <span class="lp-plan-amt">397</span>
            <span class="lp-plan-per">/mês</span>
          </div>
          <hr class="lp-plan-hr">
          <ul class="lp-plan-feats" role="list">
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Até 120 alunos</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Tudo do Pro</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> ShapePro Copilot IA</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Radar de Retenção</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Relatórios com IA</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Dashboard avançado</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Gestão financeira</li>
          </ul>
          <a href="#formulario" class="btn btn-ghost" style="width:100%;">Escalar minha consultoria</a>
        </article>

        <article class="lp-plan" aria-label="Plano Studio">
          <div class="lp-plan-name">Studio</div>
          <p class="lp-plan-sub">Studios, boxes e academias</p>
          <div class="lp-plan-consult" aria-label="Preço sob consulta">Sob consulta</div>
          <hr class="lp-plan-hr">
          <ul class="lp-plan-feats" role="list">
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Até 300 alunos</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Múltiplos profissionais</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Tudo do Expert</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Gestão por profissional</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Relatórios consolidados</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Onboarding dedicado</li>
            <li class="lp-plan-feat"><span class="ck" aria-hidden="true">✓</span> Suporte prioritário</li>
          </ul>
          <a href="<?= e($wa) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width:100%;">Solicitar proposta</a>
        </article>

      </div>
      <p class="lp-plans-note">* Valores e limites podem ser ajustados durante o período inicial. Entre em contato para condições especiais de lançamento.</p>
    </div>
  </section>


  <!-- ================================================
       AUTORIDADE / PROVA
       ================================================ -->
  <section class="section" aria-labelledby="proof-heading">
    <div class="container">
      <div class="section-header center">
        <p class="eyebrow">Construído com propósito</p>
        <h2 class="t-section" id="proof-heading">
          Construído a partir de dores reais<br>de personal trainers.
        </h2>
        <div class="split-line split-line-sm split-line-center"></div>
        <p class="lead">Cada módulo foi desenhado para resolver um problema concreto que impede o personal de crescer profissionalmente.</p>
      </div>

      <ul class="lp-proof-grid" role="list">
        <li class="lp-proof-card"><div class="ico" aria-hidden="true">🔒</div><h3>Foco em retenção</h3><p>O maior problema dos personais não é captar alunos — é mantê-los. O Radar de Retenção foi criado exatamente para isso.</p></li>
        <li class="lp-proof-card"><div class="ico" aria-hidden="true">📱</div><h3>Experiência mobile-first</h3><p>O aluno acessa tudo pelo celular. O personal acompanha pelo celular. A plataforma foi desenhada para o contexto real de uso.</p></li>
        <li class="lp-proof-card"><div class="ico" aria-hidden="true">🤖</div><h3>IA como copiloto responsável</h3><p>O Copilot economiza tempo do profissional — nunca substitui a decisão técnica e ética do personal trainer.</p></li>
        <li class="lp-proof-card"><div class="ico" aria-hidden="true">📈</div><h3>Dados que viram ação</h3><p>Check-ins, cargas e hábitos em um único lugar permitem decisões mais rápidas, mais informadas e com menos retrabalho.</p></li>
        <li class="lp-proof-card"><div class="ico" aria-hidden="true">💎</div><h3>Visão de negócio real</h3><p>Controle financeiro, radar de vencimentos e alertas ajudam o personal a gerir sua consultoria como um negócio profissional.</p></li>
        <li class="lp-proof-card"><div class="ico" aria-hidden="true">🌐</div><h3>Padrão internacional</h3><p>Desenhado com a mesma profundidade das maiores plataformas fitness do mundo — adaptado para o mercado brasileiro.</p></li>
      </ul>
    </div>
  </section>


  <!-- ================================================
       SEGURANÇA / LGPD
       ================================================ -->
  <section class="section section-alt" aria-labelledby="sec-heading">
    <div class="container">
      <div class="section-header center">
        <p class="eyebrow">Segurança e privacidade</p>
        <h2 class="t-section" id="sec-heading">Dados sensíveis exigem<br>responsabilidade.</h2>
        <div class="split-line split-line-sm split-line-center"></div>
        <p class="lead">O ShapePro IA foi pensado para tratar com cuidado fotos, medidas, peso, check-ins, cargas e restrições físicas dos seus alunos.</p>
      </div>

      <ul class="lp-sec-grid" role="list">
        <li class="lp-sec-item"><div class="ico" aria-hidden="true">🔐</div><h3>Controle de acesso</h3><p>Cada personal acessa apenas os dados dos seus próprios alunos. Isolamento técnico por conta.</p></li>
        <li class="lp-sec-item"><div class="ico" aria-hidden="true">✅</div><h3>Consentimento do aluno</h3><p>O uso é voluntário. A política de privacidade é clara sobre quais dados são coletados e como são usados.</p></li>
        <li class="lp-sec-item"><div class="ico" aria-hidden="true">📋</div><h3>Política de privacidade</h3><p>Documentação clara sobre coleta, armazenamento e tratamento de dados, alinhada com a LGPD.</p></li>
        <li class="lp-sec-item"><div class="ico" aria-hidden="true">🗑️</div><h3>Exclusão de dados</h3><p>O aluno ou personal podem solicitar exclusão completa a qualquer momento, conforme a LGPD.</p></li>
        <li class="lp-sec-item"><div class="ico" aria-hidden="true">🤖</div><h3>IA com revisão profissional</h3><p>Nenhuma sugestão da IA é aplicada automaticamente. Toda ação exige aprovação do profissional.</p></li>
        <li class="lp-sec-item"><div class="ico" aria-hidden="true">📁</div><h3>Dados separados</h3><p>Nenhum personal tem acesso aos dados de outro. A separação é garantida pela arquitetura da plataforma.</p></li>
      </ul>
    </div>
  </section>


  <!-- ================================================
       FAQ
       ================================================ -->
  <section class="section" id="faq" aria-labelledby="faq-heading">
    <div class="container">
      <div class="section-header center">
        <p class="eyebrow">Dúvidas frequentes</p>
        <h2 class="t-section" id="faq-heading">Perguntas e respostas</h2>
        <div class="split-line split-line-sm split-line-center"></div>
      </div>

      <div class="lp-faq-list" role="list">
        <?php
        $faqs = [
          ['O ShapePro IA substitui o personal trainer?', 'Não. O ShapePro IA é uma plataforma de gestão que ajuda o personal a trabalhar melhor. A decisão técnica — treino, carga, progressão e ajustes — é sempre do profissional. A IA é copiloto de apoio, nunca substituta.'],
          ['O aluno precisa baixar aplicativo?', 'O acesso do aluno é feito pelo navegador do celular, sem necessidade de download. A plataforma é responsiva e pode ser adicionada à tela inicial como PWA para experiência similar a um app nativo.'],
          ['Posso usar pelo celular como personal?', 'Sim. O painel do personal foi desenvolvido com prioridade mobile. Acompanhe alunos, revise check-ins, responda alertas e gere relatórios direto do celular.'],
          ['Posso cadastrar meus próprios exercícios?', 'Sim. Além da biblioteca global, você cadastra exercícios personalizados com nome, descrição, foto, vídeo/GIF, instruções, erros comuns e dicas técnicas.'],
          ['Posso subir foto ou vídeo demonstrativo?', 'Sim. Você faz upload de imagens e vídeos para ilustrar a execução. Isso melhora a compreensão do aluno e reduz dúvidas sobre técnica.'],
          ['O sistema gera treino sozinho?', 'Não automaticamente. O personal monta o treino usando o montador com os exercícios da biblioteca. O Copilot pode ajudar com sugestões, mas a prescrição final é sempre do profissional.'],
          ['A IA aplica ajustes no treino automaticamente?', 'Não. Nenhuma sugestão da IA é aplicada automaticamente. O Copilot gera análises que precisam ser revisadas e aprovadas pelo personal. A decisão é sempre humana.'],
          ['Posso usar com alunos presenciais e online?', 'Sim. O ShapePro IA funciona para alunos presenciais, remotos e no modelo híbrido. O acesso do aluno é web, então funciona em qualquer lugar com internet.'],
          ['Posso controlar evolução por fotos e medidas?', 'Sim. O sistema permite cadastro de avaliações com peso, medidas e fotos de progresso. O aluno também pode enviar fotos nos check-ins. Tudo fica no histórico para comparação ao longo do tempo.'],
          ['O sistema tem WhatsApp automático?', 'O ShapePro IA não envia mensagens automáticas pelo WhatsApp. Ele oferece templates prontos que o personal copia e personaliza antes de enviar, mantendo o controle e o tom pessoal.'],
          ['Posso testar antes de contratar?', 'Sim. O ShapePro IA oferece período de teste gratuito para você conhecer a plataforma antes de assinar. Preencha o formulário abaixo para solicitar acesso.'],
          ['Meus dados ficam separados de outros personais?', 'Sim. Cada conta é completamente isolada. Nenhum outro profissional tem acesso aos seus alunos, treinos, check-ins ou dados.'],
        ];
        foreach ($faqs as $i => $faq):
          $id = 'faq-ans-' . $i;
        ?>
        <div class="lp-faq-item" role="listitem">
          <button
            class="lp-faq-btn"
            aria-expanded="false"
            aria-controls="<?= $id ?>"
            id="faq-btn-<?= $i ?>"
          >
            <?= e($faq[0]) ?>
            <span class="lp-faq-chevron" aria-hidden="true">▼</span>
          </button>
          <div
            class="lp-faq-ans"
            id="<?= $id ?>"
            role="region"
            aria-labelledby="faq-btn-<?= $i ?>"
          >
            <?= e($faq[1]) ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


  <!-- ================================================
       FORMULÁRIO DE LEADS
       ================================================ -->
  <section class="section section-alt" id="formulario" aria-labelledby="form-heading">
    <div class="container">
      <div class="lp-form-box">
        <div id="lp-form-fields">
          <h2 class="lp-form-title" id="form-heading">Quero acesso ao ShapePro IA</h2>
          <p class="lp-form-sub">Preencha o formulário e nossa equipe entrará em contato para liberar seu acesso.</p>

          <form
            id="lp-lead-form"
            action="<?= base_url('landing/lead') ?>"
            method="POST"
            novalidate
            aria-label="Formulário de interesse no ShapePro IA"
          >
            <?= csrf_field() ?>

            <div class="lp-form-grid">
              <div class="lp-fg">
                <label for="lp_name">Nome completo <abbr title="Obrigatório" aria-label="obrigatório">*</abbr></label>
                <input type="text" id="lp_name" name="name"
                       placeholder="Seu nome"
                       required autocomplete="name"
                       aria-required="true">
              </div>
              <div class="lp-fg">
                <label for="lp_whatsapp">WhatsApp <abbr title="Obrigatório" aria-label="obrigatório">*</abbr></label>
                <input type="tel" id="lp_whatsapp" name="whatsapp"
                       placeholder="(11) 99999-9999"
                       required autocomplete="tel"
                       aria-required="true">
              </div>
              <div class="lp-fg full">
                <label for="lp_email">E-mail <abbr title="Obrigatório" aria-label="obrigatório">*</abbr></label>
                <input type="email" id="lp_email" name="email"
                       placeholder="seu@email.com"
                       required autocomplete="email"
                       aria-required="true">
              </div>
              <div class="lp-fg">
                <label for="lp_type">Tipo de profissional</label>
                <select id="lp_type" name="professional_type" autocomplete="organization-title">
                  <option value="personal">Personal Trainer</option>
                  <option value="consultor">Consultor Online</option>
                  <option value="studio">Studio</option>
                  <option value="academia">Academia</option>
                  <option value="outro">Outro</option>
                </select>
              </div>
              <div class="lp-fg">
                <label for="lp_range">Qtd. aproximada de alunos</label>
                <select id="lp_range" name="student_range">
                  <option value="ate15">Até 15 alunos</option>
                  <option value="16a50">16 a 50 alunos</option>
                  <option value="51a120">51 a 120 alunos</option>
                  <option value="acima120">Acima de 120</option>
                </select>
              </div>
              <div class="lp-fg full">
                <label for="lp_interest">Qual é o seu interesse?</label>
                <select id="lp_interest" name="interest">
                  <option value="testar">Quero testar gratuitamente</option>
                  <option value="demonstracao">Quero uma demonstração</option>
                  <option value="precos">Quero saber os preços</option>
                  <option value="equipe">Quero para minha equipe</option>
                </select>
              </div>
            </div>

            <!-- aria-live region: anuncia erros para leitores de tela (WCAG 4.1.3) -->
            <div id="lp-form-region" aria-live="polite" aria-atomic="true"></div>

            <button type="submit" data-submit class="btn btn-volt btn-lg" style="width:100%;margin-top:20px;">
              Quero receber acesso
            </button>
            <p class="lp-form-legal">
              Seus dados estão protegidos. Não compartilhamos com terceiros.
              Consulte nossa <a href="/privacy" style="color:var(--smoke);text-decoration:underline;">política de privacidade</a>.
            </p>
          </form>
        </div>

        <!-- Sucesso — hidden, revelado pelo JS; role="status" anuncia para AT -->
        <div id="lp-form-success" class="lp-form-success" role="status" aria-live="polite" hidden>
          <div class="ck-big" aria-hidden="true">✅</div>
          <h3>Recebemos seu interesse!</h3>
          <p>Nossa equipe entrará em contato pelo WhatsApp em breve para liberar seu acesso.</p>
          <div style="margin-top:24px;">
            <a href="<?= e($wa) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
              💬 Falar pelo WhatsApp agora
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ================================================
       CTA FINAL
       ================================================ -->
  <section class="lp-cta-final" aria-labelledby="cta-heading">
    <div class="container">
      <h2 class="t-section" id="cta-heading">
        Pronto para transformar sua consultoria<br>
        fitness em uma experiência <span class="accent">profissional?</span>
      </h2>
      <p class="lead">
        Organize seus alunos, acompanhe evolução, gere relatórios e reduza cancelamentos
        com uma plataforma criada para o personal moderno.
      </p>
      <div class="lp-cta-btns">
        <a href="#formulario" class="btn btn-volt btn-lg">Quero testar o ShapePro IA</a>
        <a href="<?= e($wa) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
          💬 Falar pelo WhatsApp
        </a>
      </div>
    </div>
  </section>

</main><!-- /main -->


<!-- ================================================
     FOOTER — role="contentinfo" implícito em <footer>
     ================================================ -->
<footer class="lp-footer">
  <div class="container">
    <div class="lp-footer-grid">

      <div class="lp-footer-brand">
        <a href="#inicio" class="lp-logo" aria-label="ShapePro IA">
          <img src="<?= base_url('assets/images/logo.png') ?>"
               alt="ShapePro IA" width="140" height="34"
               onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
          <span class="lp-logo-text" style="display:none;" aria-hidden="true">
            <span class="v">Shape</span><span class="p">Pro</span>&nbsp;<span class="ia">IA</span>
          </span>
        </a>
        <p>Plataforma de gestão e acompanhamento para personal trainers. Organize alunos, monte treinos e acompanhe evolução com inteligência artificial.</p>
        <nav class="lp-footer-contact" aria-label="Contato">
          <a href="<?= e($wa) ?>" target="_blank" rel="noopener noreferrer">
            <span aria-hidden="true">💬</span> WhatsApp
          </a>
          <a href="mailto:contato@shapeproia.com.br">
            <span aria-hidden="true">📧</span> contato@shapeproia.com.br
          </a>
        </nav>
      </div>

      <nav aria-label="Produto">
        <div class="lp-footer-col">
          <h4>Produto</h4>
          <ul role="list">
            <li><a href="#recursos">Recursos</a></li>
            <li><a href="#como-funciona">Como funciona</a></li>
            <li><a href="#planos">Planos</a></li>
            <li><a href="#ia">ShapePro Copilot</a></li>
            <li><a href="#formulario">Solicitar acesso</a></li>
          </ul>
        </div>
      </nav>

      <nav aria-label="Suporte">
        <div class="lp-footer-col">
          <h4>Suporte</h4>
          <ul role="list">
            <li><a href="#faq">Perguntas frequentes</a></li>
            <li><a href="<?= e($wa) ?>" target="_blank" rel="noopener noreferrer">Central de ajuda</a></li>
            <li><a href="/login">Entrar na plataforma</a></li>
          </ul>
        </div>
      </nav>

      <nav aria-label="Legal">
        <div class="lp-footer-col">
          <h4>Legal</h4>
          <ul role="list">
            <li><a href="/terms">Termos de uso</a></li>
            <li><a href="/privacy">Política de privacidade</a></li>
            <li><a href="/delete-account">Excluir minha conta</a></li>
          </ul>
        </div>
      </nav>

    </div>

    <div class="lp-footer-bottom">
      <p>&copy; <?= date('Y') ?> ShapePro IA. Todos os direitos reservados.</p>
      <p>ShapePro IA não garante resultados físicos. A IA é apoio ao profissional, nunca substituta da decisão técnica.</p>
    </div>
  </div>
</footer>

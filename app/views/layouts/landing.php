<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#0B0D12">

<!-- SEO -->
<title><?= e($pageTitle ?? 'ShapePro IA — Plataforma Inteligente para Personal Trainers') ?></title>
<meta name="description" content="Organize alunos, monte treinos, receba check-ins, acompanhe evolução e use IA como apoio para vender consultoria fitness com mais profissionalismo.">
<meta name="keywords" content="personal trainer app, gestão alunos fitness, software personal trainer, consultoria fitness online, shapepro ia, check-in semanal, treino online">
<link rel="canonical" href="<?= base_url('landing') ?>">

<!-- Open Graph -->
<meta property="og:type"        content="website">
<meta property="og:title"       content="ShapePro IA — Plataforma Inteligente para Personal Trainers">
<meta property="og:description" content="Organize alunos, monte treinos, receba check-ins e acompanhe evolução com IA. A plataforma do personal trainer moderno.">
<meta property="og:url"         content="<?= base_url('landing') ?>">
<meta property="og:image"       content="<?= base_url('assets/images/og-shapepro.png') ?>">
<meta property="og:locale"      content="pt_BR">
<meta property="og:site_name"   content="ShapePro IA">
<meta name="twitter:card"       content="summary_large_image">
<meta name="twitter:title"      content="ShapePro IA — Plataforma Inteligente para Personal Trainers">
<meta name="twitter:description" content="Organize alunos, monte treinos, receba check-ins e acompanhe evolução com IA.">
<meta name="twitter:image"      content="<?= base_url('assets/images/og-shapepro.png') ?>">

<!-- Favicon -->
<link rel="icon" href="<?= base_url('assets/images/icon.svg') ?>" type="image/svg+xml">

<!-- Fonts: preconnect + swap -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">

<!-- Schema.org -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "ShapePro IA",
  "applicationCategory": "HealthApplication",
  "description": "Plataforma inteligente para personal trainers organizarem alunos, treinos, check-ins e evolução com IA.",
  "operatingSystem": "Web, iOS, Android",
  "inLanguage": "pt-BR",
  "offers": { "@type": "Offer", "price": "79", "priceCurrency": "BRL" }
}
</script>

<style>
/* ================================================================
   DESIGN SYSTEM — ShapePro IA v2
   Methodology: frontend-design + ui-ux-designer + accessibility-auditor
   ================================================================ */

/* --- Tokens --- */
:root {
  /* Brand */
  --volt:       #7AC943;
  --volt-hi:    #A4E640;
  --circuit:    #00B4D8;
  --circuit-hi: #33C8E8;

  /* Surface */
  --obsidian:   #0B0D12;
  --deep:       #0F1218;
  --graphite:   #13161F;
  --slate:      #1A1E2A;
  --slate-hi:   #212636;
  --rim:        #252A3A;

  /* Text */
  --bone:       #E8EBF2;
  --smoke:      #8892A8;   /* 5.8:1 on obsidian — passes AA */
  --ash:        #4E576B;

  /* Status */
  --danger:     #EF4444;
  --warn:       #F59E0B;
  --ok:         #22C55E;

  /* Type */
  --font-display: 'Bebas Neue', sans-serif;
  --font-body:    'Inter', sans-serif;
  --font-mono:    'JetBrains Mono', monospace;

  /* Spacing scale (4px base) */
  --s1: 4px;  --s2: 8px;   --s3: 12px;  --s4: 16px;
  --s5: 20px; --s6: 24px;  --s8: 32px;  --s10: 40px;
  --s12: 48px; --s16: 64px; --s20: 80px; --s24: 96px;

  /* Shape */
  --r-sm:  8px;
  --r-md:  14px;
  --r-lg:  20px;
  --r-xl:  28px;

  /* Effects */
  --glow-volt:    0 0 32px rgba(122,201,67,.22);
  --glow-circuit: 0 0 32px rgba(0,180,216,.18);
  --shadow-card:  0 4px 32px rgba(0,0,0,.45);
  --shadow-float: 0 12px 48px rgba(0,0,0,.55);
}

/* --- Reset --- */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; font-size: 16px; -webkit-text-size-adjust: 100%; }
body {
  font-family: var(--font-body);
  background: var(--obsidian);
  color: var(--bone);
  line-height: 1.6;
  overflow-x: hidden;
}
a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; height: auto; }
ul, ol { list-style: none; }
button { font-family: inherit; cursor: pointer; border: none; background: none; }

/* --- Skip link (Accessibility: WCAG 2.4.1) --- */
.skip-link {
  position: absolute;
  top: -100px; left: var(--s4);
  background: var(--volt); color: #0B1A04;
  font-weight: 700; font-size: 14px;
  padding: var(--s2) var(--s4);
  border-radius: var(--r-sm);
  z-index: 9999;
  transition: top .15s;
}
.skip-link:focus { top: var(--s4); }

/* --- Visually hidden (screen-reader only) --- */
.sr-only {
  position: absolute; width: 1px; height: 1px;
  padding: 0; margin: -1px; overflow: hidden;
  clip: rect(0,0,0,0); white-space: nowrap; border: 0;
}

/* --- Focus ring (WCAG 2.4.7 — visible on keyboard) --- */
:focus-visible {
  outline: 2px solid var(--volt);
  outline-offset: 3px;
  border-radius: var(--r-sm);
}
/* Remove focus ring for mouse users */
:focus:not(:focus-visible) { outline: none; }

/* ================================================================
   LAYOUT UTILITIES
   ================================================================ */
.container    { max-width: 1180px; margin-inline: auto; padding-inline: var(--s6); }
.container-sm { max-width: 860px;  margin-inline: auto; padding-inline: var(--s6); }
.section      { padding-block: var(--s24); }
.section-alt  { background: var(--graphite); }

/* --- Split signature line (echoes logo: half volt / half circuit) --- */
.split-line {
  display: flex; height: 4px; border-radius: 2px;
  background: linear-gradient(90deg, var(--volt) 50%, var(--circuit) 50%);
  margin-block: var(--s5);
}
.split-line-sm { height: 3px; width: 56px; }
.split-line-center { margin-inline: auto; }

/* --- Section header --- */
.section-header { margin-bottom: var(--s12); }
.section-header.center { text-align: center; }
.section-header.center .split-line { margin-inline: auto; }
.section-header .lead {
  font-size: 18px; color: var(--smoke);
  margin-top: var(--s4); max-width: 620px; line-height: 1.75;
}
.section-header.center .lead { margin-inline: auto; }

/* --- Eyebrow --- */
.eyebrow {
  display: inline-block;
  font-family: var(--font-mono); font-size: 11px; font-weight: 700;
  letter-spacing: .12em; text-transform: uppercase;
  color: var(--volt); margin-bottom: var(--s4);
}

/* ================================================================
   TYPOGRAPHY
   ================================================================ */
.t-hero {
  font-family: var(--font-display);
  font-size: clamp(52px, 8vw, 96px);
  line-height: .95; letter-spacing: .01em;
  color: var(--bone);
}
.t-hero .accent { color: var(--volt); }
.t-hero .accent-blue { color: var(--circuit); }

.t-section {
  font-family: var(--font-display);
  font-size: clamp(36px, 5vw, 60px);
  line-height: 1.0; letter-spacing: .01em;
  color: var(--bone);
}
.t-section .accent      { color: var(--volt); }
.t-section .accent-blue { color: var(--circuit); }

.t-card {
  font-size: 17px; font-weight: 700; color: var(--bone); margin-bottom: var(--s2);
}

.t-mono {
  font-family: var(--font-mono); font-weight: 700;
}

/* ================================================================
   BUTTONS — all ≥ 44px touch target (WCAG 2.5.5)
   ================================================================ */
.btn {
  display: inline-flex; align-items: center; justify-content: center; gap: var(--s2);
  min-height: 48px; padding-inline: var(--s8);
  font-family: var(--font-body); font-weight: 700; font-size: 15px;
  border-radius: var(--r-md); transition: all .2s ease;
  white-space: nowrap; text-decoration: none; border: none; cursor: pointer;
}
.btn-lg { min-height: 56px; padding-inline: var(--s10); font-size: 17px; }
.btn-sm { min-height: 40px; padding-inline: var(--s5);  font-size: 13px; }

.btn-volt {
  background: var(--volt); color: #0B1A04;
  box-shadow: 0 4px 20px rgba(122,201,67,.3);
}
.btn-volt:hover, .btn-volt:focus-visible {
  background: var(--volt-hi);
  box-shadow: 0 6px 28px rgba(122,201,67,.5);
  transform: translateY(-2px);
}
.btn-volt:active { transform: translateY(0); }

.btn-ghost {
  background: transparent; color: var(--bone);
  border: 1.5px solid var(--rim);
}
.btn-ghost:hover, .btn-ghost:focus-visible {
  border-color: var(--volt); color: var(--volt);
}

.btn-whatsapp {
  background: #25D366; color: #fff;
  box-shadow: 0 4px 20px rgba(37,211,102,.28);
}
.btn-whatsapp:hover, .btn-whatsapp:focus-visible {
  background: #1FB956; transform: translateY(-2px);
}

/* ================================================================
   CARDS
   ================================================================ */
.card {
  background: var(--slate);
  border: 1px solid var(--rim);
  border-radius: var(--r-lg);
  padding: var(--s8);
  transition: border-color .2s, box-shadow .2s, transform .2s;
}
.card:hover {
  border-color: rgba(122,201,67,.35);
  box-shadow: var(--glow-volt);
}
.card-lift:hover { transform: translateY(-4px); }

.card-icon {
  width: 52px; height: 52px; border-radius: var(--r-sm);
  display: flex; align-items: center; justify-content: center;
  font-size: 24px; margin-bottom: var(--s5); flex-shrink: 0;
}
.ci-volt    { background: rgba(122,201,67,.12); }
.ci-circuit { background: rgba(0,180,216,.12); }
.ci-purple  { background: rgba(168,85,247,.12); }
.ci-red     { background: rgba(239,68,68,.12); }

/* ================================================================
   HEADER / NAV
   ================================================================ */
.lp-header {
  position: fixed; inset-block-start: 0; inset-inline: 0; z-index: 200;
  background: rgba(11,13,18,.9);
  backdrop-filter: blur(16px) saturate(180%);
  -webkit-backdrop-filter: blur(16px) saturate(180%);
  border-bottom: 1px solid var(--rim);
  transition: background .25s;
}
.lp-header[data-scrolled] {
  background: rgba(11,13,18,.98);
}

.lp-nav {
  display: flex; align-items: center; justify-content: space-between;
  height: 68px; gap: var(--s4);
}

.lp-logo {
  display: flex; align-items: center; gap: var(--s2); flex-shrink: 0;
}
.lp-logo img {
  height: 48px; width: auto;
  mix-blend-mode: screen;   /* remove white bg on dark surface */
  filter: brightness(1.05) contrast(1.05);
}
.lp-logo-text {
  font-family: var(--font-display); font-size: 28px; letter-spacing: .02em;
  display: none; /* shown via onerror */
}
.lp-logo-text .v { color: var(--bone); }
.lp-logo-text .p { color: var(--volt); }
.lp-logo-text .ia{ color: var(--circuit); }

.lp-nav-list {
  display: flex; align-items: center; gap: var(--s1);
}
.lp-nav-list a {
  font-size: 14px; font-weight: 500; color: var(--smoke);
  padding: var(--s2) var(--s3); border-radius: var(--r-sm);
  transition: color .15s;
  min-height: 44px; display: flex; align-items: center; /* touch target */
}
.lp-nav-list a:hover { color: var(--bone); }

.lp-nav-actions { display: flex; align-items: center; gap: var(--s3); }
.lp-nav-login {
  font-size: 14px; font-weight: 600; color: var(--smoke);
  padding: var(--s2) var(--s4); border-radius: var(--r-sm);
  min-height: 44px; display: flex; align-items: center;
  transition: color .15s;
}
.lp-nav-login:hover { color: var(--bone); }

/* Hamburger — 44×44 touch target */
.lp-hamburger {
  display: none;
  width: 44px; height: 44px;
  align-items: center; justify-content: center;
  border-radius: var(--r-sm); color: var(--bone);
  flex-direction: column; gap: 5px;
}
.lp-hamburger span {
  display: block; width: 20px; height: 2px;
  background: currentColor; border-radius: 1px;
  transition: transform .2s, opacity .2s;
}
.lp-hamburger[aria-expanded="true"] span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.lp-hamburger[aria-expanded="true"] span:nth-child(2) { opacity: 0; }
.lp-hamburger[aria-expanded="true"] span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

.lp-mobile-nav {
  display: none; flex-direction: column;
  padding: var(--s4) var(--s6) var(--s6);
  border-top: 1px solid var(--rim);
  gap: var(--s1);
}
.lp-mobile-nav[aria-hidden="false"] { display: flex; }
.lp-mobile-nav a {
  font-size: 15px; font-weight: 500; color: var(--smoke);
  padding: var(--s3) 0; min-height: 44px; display: flex; align-items: center;
  border-bottom: 1px solid rgba(255,255,255,.04);
}
.lp-mobile-nav a:hover { color: var(--volt); }

/* ================================================================
   HERO
   ================================================================ */
.lp-hero {
  position: relative;
  padding-block-start: 128px; padding-block-end: var(--s24);
  overflow: hidden;
}

/* Radial glows — decorative, aria-hidden */
.lp-hero-glow {
  position: absolute; border-radius: 50%;
  pointer-events: none; aria-hidden: true;
}
.lp-hero-glow-1 {
  width: 600px; height: 600px;
  top: -200px; right: -100px;
  background: radial-gradient(circle, rgba(122,201,67,.07) 0%, transparent 70%);
}
.lp-hero-glow-2 {
  width: 400px; height: 400px;
  bottom: -100px; left: -80px;
  background: radial-gradient(circle, rgba(0,180,216,.05) 0%, transparent 70%);
}

.lp-hero-inner {
  display: grid; grid-template-columns: 1fr 480px;
  gap: var(--s16); align-items: center; position: relative; z-index: 1;
}

.lp-hero-label {
  display: inline-flex; align-items: center; gap: var(--s2);
  background: rgba(122,201,67,.1); border: 1px solid rgba(122,201,67,.25);
  padding: var(--s1) var(--s4); border-radius: 100px;
  font-family: var(--font-mono); font-size: 11px; font-weight: 700;
  letter-spacing: .1em; text-transform: uppercase; color: var(--volt);
  margin-bottom: var(--s5);
}
.lp-hero-dot {
  width: 7px; height: 7px; border-radius: 50%; background: var(--volt);
  animation: pulse-dot 2s ease-in-out infinite;
}
@keyframes pulse-dot {
  0%, 100% { opacity: 1; transform: scale(1); }
  50%       { opacity: .5; transform: scale(.7); }
}

.lp-hero-sub {
  font-size: clamp(16px, 1.8vw, 19px); color: var(--smoke);
  margin-top: var(--s5); max-width: 520px; line-height: 1.75;
}

.lp-hero-ctas {
  display: flex; flex-wrap: wrap; gap: var(--s3); margin-top: var(--s8);
}

.lp-hero-micro {
  margin-top: var(--s6);
  display: flex; align-items: center; gap: var(--s3);
  font-size: 13px; color: var(--ash);
}
.lp-hero-micro::before {
  content: ''; flex-shrink: 0;
  width: 32px; height: 1px;
  background: linear-gradient(90deg, var(--volt), var(--circuit));
}

/* Hero entrance animation */
@media (prefers-reduced-motion: no-preference) {
  .lp-hero-copy { animation: hero-in .7s cubic-bezier(.22,.68,0,1.2) both; }
  .lp-hero-visual { animation: hero-in-right .7s .1s cubic-bezier(.22,.68,0,1.2) both; }
  @keyframes hero-in {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  @keyframes hero-in-right {
    from { opacity: 0; transform: translateY(16px); }
    to   { opacity: 1; transform: translateY(0); }
  }
}

/* ================================================================
   DASHBOARD MOCKUP
   ================================================================ */
.lp-dashboard {
  background: var(--slate);
  border: 1px solid var(--rim);
  border-radius: var(--r-xl);
  overflow: hidden;
  box-shadow: var(--shadow-float), var(--glow-volt);
}
.lp-dash-bar {
  background: var(--graphite);
  border-bottom: 1px solid var(--rim);
  padding: var(--s3) var(--s5);
  display: flex; align-items: center; gap: var(--s3);
}
.lp-dash-dots { display: flex; gap: 6px; }
.lp-dash-dot  { width: 11px; height: 11px; border-radius: 50%; }
.lp-dash-name {
  font-family: var(--font-mono); font-size: 11px; color: var(--ash);
  margin-left: var(--s2);
}
.lp-dash-body { padding: var(--s5); }

.lp-metrics {
  display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--s3);
  margin-bottom: var(--s4);
}
.lp-metric {
  background: var(--deep);
  border: 1px solid var(--rim);
  border-radius: var(--r-md); padding: var(--s4);
}
.lp-metric-label {
  font-family: var(--font-mono); font-size: 9px; font-weight: 700;
  letter-spacing: .1em; text-transform: uppercase; color: var(--ash);
  margin-bottom: var(--s2);
}
.lp-metric-val {
  font-family: var(--font-display); font-size: 28px; color: var(--bone); line-height: 1;
}
.lp-metric-val.v { color: var(--volt); }
.lp-metric-val.c { color: var(--circuit); }
.lp-metric-val.r { color: var(--danger); }
.lp-metric-sub { font-size: 11px; color: var(--ash); margin-top: 3px; }
.lp-metric-sub.up { color: var(--volt); }

.lp-dash-cards {
  display: grid; grid-template-columns: 1fr 1fr; gap: var(--s3);
}
.lp-dc {
  border-radius: var(--r-md); padding: var(--s4);
  border: 1px solid;
}
.lp-dc-risk {
  background: rgba(239,68,68,.07);
  border-color: rgba(239,68,68,.2);
}
.lp-dc-progress {
  background: rgba(122,201,67,.06);
  border-color: rgba(122,201,67,.2);
}
.lp-dc-label {
  font-family: var(--font-mono); font-size: 10px; font-weight: 700;
  letter-spacing: .08em; text-transform: uppercase;
  margin-bottom: var(--s3);
}
.lp-dc-risk     .lp-dc-label { color: var(--danger); }
.lp-dc-progress .lp-dc-label { color: var(--volt); }

.lp-stud {
  display: flex; align-items: center; gap: var(--s2);
  margin-bottom: var(--s2); font-size: 12px;
}
.lp-stud-av {
  width: 26px; height: 26px; border-radius: 50%;
  background: var(--graphite); flex-shrink: 0;
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-mono); font-size: 10px; font-weight: 700;
  color: var(--volt);
}
.lp-stud-name { font-weight: 600; color: var(--bone); flex: 1; }
.lp-stud-badge { font-size: 11px; }
.lp-stud-badge.risk { color: var(--danger); }
.lp-stud-badge.ok   { color: var(--volt); }

.lp-prog-text { font-size: 12px; color: var(--smoke); margin-bottom: 5px; }
.lp-prog-bar  { height: 5px; border-radius: 3px; background: var(--deep); overflow: hidden; }
.lp-prog-fill {
  height: 100%; border-radius: 3px;
  background: linear-gradient(90deg, var(--volt), var(--circuit));
}
.lp-prog-win  { font-size: 11px; color: var(--volt); margin-top: 6px; }

/* Floating badges */
.lp-float {
  position: absolute;
  background: var(--slate-hi); border: 1px solid var(--rim);
  border-radius: var(--r-md); padding: var(--s3) var(--s4);
  display: flex; align-items: center; gap: var(--s3);
  box-shadow: var(--shadow-float);
  font-size: 12px;
}
.lp-float-icon { font-size: 18px; flex-shrink: 0; }
.lp-float-title { font-size: 10px; color: var(--ash); }
.lp-float-val   { font-weight: 700; color: var(--bone); }

@media (prefers-reduced-motion: no-preference) {
  .lp-float-a {
    bottom: -18px; left: -44px;
    animation: float-y 3.5s ease-in-out infinite;
  }
  .lp-float-b {
    top: 16px; right: -40px;
    animation: float-y 3.5s 1.4s ease-in-out infinite;
  }
  @keyframes float-y {
    0%, 100% { transform: translateY(0); }
    50%       { transform: translateY(-8px); }
  }
}
@media (prefers-reduced-motion: reduce) {
  .lp-float-a { bottom: -18px; left: -44px; }
  .lp-float-b { top: 16px; right: -40px; }
}

/* ================================================================
   PAIN SECTION
   ================================================================ */
.lp-pain-intro {
  font-size: 18px; color: var(--smoke);
  max-width: 700px; margin-inline: auto; margin-bottom: var(--s12);
  text-align: center; line-height: 1.8;
}
.lp-pain-grid {
  display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--s5);
}
.lp-pain-card {
  background: var(--slate);
  border: 1px solid var(--rim);
  border-left: 3px solid var(--danger);
  border-radius: var(--r-md); padding: var(--s6);
}
.lp-pain-card .ico { font-size: 26px; margin-bottom: var(--s3); }
.lp-pain-card h3   { font-size: 15px; font-weight: 700; color: var(--bone); margin-bottom: var(--s2); }
.lp-pain-card p    { font-size: 13px; color: var(--smoke); line-height: 1.65; }
.lp-pain-close {
  text-align: center; margin-top: var(--s12);
  font-size: clamp(17px, 2vw, 21px); font-weight: 700; color: var(--bone);
  max-width: 600px; margin-inline: auto;
}
.lp-pain-close em { font-style: normal; color: var(--volt); }

/* ================================================================
   SOLUTION
   ================================================================ */
.lp-sol-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: var(--s16); align-items: center;
}
.lp-sol-tags { display: flex; flex-wrap: wrap; gap: var(--s2); margin-top: var(--s6); }
.lp-tag {
  display: inline-flex; align-items: center;
  padding: 5px var(--s4); border-radius: 100px;
  font-size: 13px; font-weight: 600; border: 1px solid;
}
.lp-tag-volt    { background: rgba(122,201,67,.1); border-color: rgba(122,201,67,.25); color: var(--volt); }
.lp-tag-circuit { background: rgba(0,180,216,.1);  border-color: rgba(0,180,216,.25);  color: var(--circuit); }

.lp-sol-panel {
  background: var(--slate);
  border: 1px solid var(--rim);
  border-radius: var(--r-xl); overflow: hidden;
  box-shadow: var(--shadow-card), var(--glow-circuit);
}
.lp-sol-panel-header {
  background: var(--graphite); border-bottom: 1px solid var(--rim);
  padding: var(--s4) var(--s5);
  display: flex; align-items: center; justify-content: space-between;
}
.lp-sol-panel-title { font-size: 13px; font-weight: 700; color: var(--bone); }
.lp-sol-panel-badge {
  font-family: var(--font-mono); font-size: 11px; font-weight: 700;
  background: rgba(122,201,67,.15); color: var(--volt);
  padding: 3px var(--s3); border-radius: 100px;
}
.lp-sol-panel-body { padding: var(--s5); }
.lp-module {
  display: flex; align-items: center; gap: var(--s3);
  padding: var(--s3) var(--s3);
  border-radius: var(--r-sm);
  margin-bottom: var(--s2);
  background: var(--deep); border: 1px solid var(--rim);
}
.lp-module-icon {
  width: 34px; height: 34px; border-radius: var(--r-sm);
  display: flex; align-items: center; justify-content: center;
  font-size: 16px; flex-shrink: 0;
}
.lp-module-name { font-size: 13px; font-weight: 600; color: var(--bone); }
.lp-module-desc { font-size: 11px; color: var(--ash); }
.lp-module-stat {
  margin-left: auto; font-family: var(--font-mono);
  font-size: 12px; font-weight: 700; flex-shrink: 0;
}

/* ================================================================
   FEATURES
   ================================================================ */
.lp-feat-grid {
  display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--s5);
}

/* ================================================================
   BEFORE / AFTER
   ================================================================ */
.lp-compare {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: var(--s5); max-width: 860px; margin-inline: auto;
}
.lp-compare-col {
  background: var(--slate); border: 1px solid var(--rim);
  border-radius: var(--r-xl); padding: var(--s8);
}
.lp-compare-col.after { border-color: rgba(122,201,67,.3); }
.lp-compare-head {
  display: flex; align-items: center; gap: var(--s3);
  font-family: var(--font-display); font-size: 26px; margin-bottom: var(--s6);
}
.lp-compare-col.before .lp-compare-head { color: var(--smoke); }
.lp-compare-col.after  .lp-compare-head { color: var(--volt); }
.lp-compare-list li {
  display: flex; align-items: flex-start; gap: var(--s3);
  font-size: 15px; color: var(--smoke); padding-block: var(--s2);
  border-bottom: 1px solid rgba(255,255,255,.04);
}
.lp-compare-col.after .lp-compare-list li { color: var(--bone); }
.lp-compare-ico { font-size: 15px; flex-shrink: 0; margin-top: 2px; }

/* ================================================================
   STEPS
   ================================================================ */
.lp-steps-wrap { position: relative; }
.lp-steps-track {
  position: absolute; top: 28px; left: calc(12.5% + 28px); right: calc(12.5% + 28px);
  height: 1px;
  background: linear-gradient(90deg, var(--volt), var(--circuit));
  opacity: .25;
}
.lp-steps-grid {
  display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--s5);
}
.lp-step { text-align: center; }
.lp-step-num {
  width: 56px; height: 56px; border-radius: 50%;
  background: linear-gradient(135deg, var(--volt), var(--circuit));
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-display); font-size: 24px; color: #0B1A04;
  margin: 0 auto var(--s5); position: relative; z-index: 1;
}
.lp-step h3 { font-size: 16px; font-weight: 700; color: var(--bone); margin-bottom: var(--s2); }
.lp-step p  { font-size: 13px; color: var(--smoke); line-height: 1.65; }

/* ================================================================
   AI COPILOT
   ================================================================ */
.lp-ai-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: var(--s16); align-items: center;
}
.lp-ai-items { display: flex; flex-direction: column; gap: var(--s3); margin-top: var(--s6); }
.lp-ai-item {
  display: flex; align-items: flex-start; gap: var(--s4);
  padding: var(--s4); background: var(--slate); border: 1px solid var(--rim);
  border-radius: var(--r-md);
}
.lp-ai-item .ico {
  width: 36px; height: 36px; border-radius: var(--r-sm);
  background: rgba(122,201,67,.12);
  display: flex; align-items: center; justify-content: center;
  font-size: 18px; flex-shrink: 0;
}
.lp-ai-item h4 { font-size: 14px; font-weight: 700; color: var(--bone); margin-bottom: 2px; }
.lp-ai-item p  { font-size: 13px; color: var(--smoke); }
.lp-ai-notice {
  margin-top: var(--s5); padding: var(--s4) var(--s5);
  background: rgba(0,180,216,.08); border: 1px solid rgba(0,180,216,.2);
  border-radius: var(--r-md); font-size: 13px; color: var(--circuit);
  display: flex; gap: var(--s3); align-items: flex-start;
}

.lp-copilot {
  background: var(--slate); border: 1px solid rgba(122,201,67,.25);
  border-radius: var(--r-xl); overflow: hidden;
  box-shadow: var(--shadow-card), var(--glow-volt);
}
.lp-cop-head {
  padding: var(--s4) var(--s5);
  background: linear-gradient(135deg, rgba(122,201,67,.12), rgba(0,180,216,.08));
  border-bottom: 1px solid rgba(122,201,67,.2);
  display: flex; align-items: center; gap: var(--s3);
}
.lp-cop-name   { font-size: 13px; font-weight: 700; color: var(--volt); }
.lp-cop-status { font-family: var(--font-mono); font-size: 10px; color: var(--ash); margin-left: auto; }
.lp-cop-body   { padding: var(--s4); display: flex; flex-direction: column; gap: var(--s3); }
.lp-chat {
  padding: var(--s3) var(--s4); border-radius: var(--r-md);
  font-size: 13px; line-height: 1.65;
}
.lp-chat-user {
  background: var(--deep); border: 1px solid var(--rim); color: var(--bone);
}
.lp-chat-ai {
  background: rgba(122,201,67,.07);
  border: 1px solid rgba(122,201,67,.18); color: var(--bone);
}
.lp-chat-tag {
  display: block; font-family: var(--font-mono); font-size: 10px; font-weight: 700;
  color: var(--volt); text-transform: uppercase; letter-spacing: .06em; margin-bottom: 5px;
}
.lp-cop-footer {
  padding: var(--s3) var(--s5); border-top: 1px solid var(--rim);
  font-size: 11px; color: var(--ash); text-align: center;
}

/* ================================================================
   AUDIENCE
   ================================================================ */
.lp-aud-grid {
  display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--s4);
}
.lp-aud-card {
  background: var(--slate); border: 1px solid var(--rim);
  border-radius: var(--r-md); padding: var(--s6); text-align: center;
  transition: border-color .2s, transform .2s;
}
.lp-aud-card:hover {
  border-color: rgba(122,201,67,.3);
  transform: translateY(-3px);
}
.lp-aud-card .ico { font-size: 30px; margin-bottom: var(--s3); }
.lp-aud-card h3   { font-size: 15px; font-weight: 700; color: var(--bone); margin-bottom: var(--s2); }
.lp-aud-card p    { font-size: 13px; color: var(--smoke); }

/* ================================================================
   BENEFITS
   ================================================================ */
.lp-ben-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--s6); }
.lp-ben .ico {
  width: 44px; height: 44px; border-radius: var(--r-sm);
  background: rgba(122,201,67,.1);
  display: flex; align-items: center; justify-content: center;
  font-size: 20px; margin-bottom: var(--s3);
}
.lp-ben h3 { font-size: 15px; font-weight: 700; color: var(--bone); margin-bottom: var(--s2); }
.lp-ben p  { font-size: 13px; color: var(--smoke); line-height: 1.6; }

/* ================================================================
   PLANS
   ================================================================ */
.lp-plan-grid {
  display: grid; grid-template-columns: repeat(4, 1fr);
  gap: var(--s5); align-items: start;
}
.lp-plan {
  background: var(--slate); border: 1px solid var(--rim);
  border-radius: var(--r-xl); padding: var(--s8) var(--s6);
  position: relative; transition: transform .2s;
}
.lp-plan:hover { transform: translateY(-4px); }
.lp-plan.featured { border-color: rgba(122,201,67,.4); box-shadow: var(--glow-volt); }
.lp-plan-badge {
  position: absolute; top: -13px; left: 50%; transform: translateX(-50%);
  background: var(--volt); color: #0B1A04;
  font-family: var(--font-mono); font-size: 10px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .08em;
  padding: 4px var(--s4); border-radius: 100px; white-space: nowrap;
}
.lp-plan-name {
  font-family: var(--font-display); font-size: 28px; color: var(--bone); margin-bottom: 2px;
}
.lp-plan.featured .lp-plan-name { color: var(--volt); }
.lp-plan-sub  { font-size: 13px; color: var(--ash); margin-bottom: var(--s5); }
.lp-plan-price {
  display: flex; align-items: baseline; gap: 3px; margin-bottom: var(--s2);
}
.lp-plan-cur { font-size: 15px; font-weight: 700; color: var(--smoke); }
.lp-plan-amt {
  font-family: var(--font-display); font-size: 52px; color: var(--bone); line-height: 1;
}
.lp-plan-per { font-size: 14px; color: var(--ash); }
.lp-plan-consult { font-size: 18px; font-weight: 700; color: var(--smoke); padding-block: var(--s2); }
.lp-plan-hr { height: 1px; background: var(--rim); margin-block: var(--s5); }
.lp-plan-feats { display: flex; flex-direction: column; gap: var(--s3); margin-bottom: var(--s6); }
.lp-plan-feat  {
  display: flex; gap: var(--s2); align-items: flex-start;
  font-size: 14px; color: var(--smoke);
}
.lp-plan-feat .ck { color: var(--volt); flex-shrink: 0; }
.lp-plans-note { text-align: center; margin-top: var(--s6); font-size: 13px; color: var(--ash); }

/* ================================================================
   PROOF
   ================================================================ */
.lp-proof-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--s6); }
.lp-proof-card {
  background: var(--slate); border: 1px solid var(--rim);
  border-top: 3px solid var(--volt);
  border-radius: var(--r-lg); padding: var(--s8);
}
.lp-proof-card .ico { font-size: 30px; margin-bottom: var(--s4); }
.lp-proof-card h3   { font-size: 16px; font-weight: 700; color: var(--bone); margin-bottom: var(--s2); }
.lp-proof-card p    { font-size: 14px; color: var(--smoke); line-height: 1.65; }

/* ================================================================
   SECURITY
   ================================================================ */
.lp-sec-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--s4); }
.lp-sec-item {
  background: var(--slate); border: 1px solid var(--rim);
  border-radius: var(--r-md); padding: var(--s6);
}
.lp-sec-item .ico { font-size: 26px; margin-bottom: var(--s3); }
.lp-sec-item h3   { font-size: 15px; font-weight: 700; color: var(--bone); margin-bottom: var(--s2); }
.lp-sec-item p    { font-size: 13px; color: var(--smoke); line-height: 1.6; }

/* ================================================================
   FAQ
   ================================================================ */
.lp-faq-list { max-width: 800px; margin-inline: auto; }
.lp-faq-item { border-bottom: 1px solid var(--rim); }
.lp-faq-btn {
  display: flex; align-items: center; justify-content: space-between;
  width: 100%; text-align: left;
  padding-block: var(--s5); gap: var(--s4);
  font-size: 16px; font-weight: 600; color: var(--bone);
  cursor: pointer; background: none; border: none;
  min-height: 44px; /* touch target */
  transition: color .15s;
}
.lp-faq-btn:hover { color: var(--volt); }
.lp-faq-chevron {
  font-size: 16px; color: var(--ash); flex-shrink: 0;
  transition: transform .25s, color .15s;
}
.lp-faq-item[data-open] .lp-faq-chevron {
  transform: rotate(180deg); color: var(--volt);
}
.lp-faq-ans {
  display: none; padding-bottom: var(--s5);
  font-size: 15px; color: var(--smoke); line-height: 1.75;
}
.lp-faq-item[data-open] .lp-faq-ans { display: block; }

/* ================================================================
   LEAD FORM
   ================================================================ */
.lp-form-box {
  max-width: 620px; margin-inline: auto;
  background: var(--slate); border: 1px solid var(--rim);
  border-radius: var(--r-xl); padding: var(--s10);
}
.lp-form-title { font-family: var(--font-display); font-size: 32px; color: var(--bone); margin-bottom: var(--s2); }
.lp-form-sub   { font-size: 15px; color: var(--smoke); margin-bottom: var(--s6); }
.lp-form-grid  { display: grid; grid-template-columns: 1fr 1fr; gap: var(--s4); }
.lp-fg { display: flex; flex-direction: column; gap: var(--s2); }
.lp-fg.full { grid-column: 1 / -1; }
.lp-fg label { font-size: 13px; font-weight: 600; color: var(--smoke); }
.lp-fg input,
.lp-fg select {
  width: 100%;
  background: var(--deep); border: 1.5px solid var(--rim); color: var(--bone);
  font-family: var(--font-body); font-size: 14px;
  padding: var(--s3) var(--s4); border-radius: var(--r-md);
  outline: none; transition: border-color .2s;
  -webkit-appearance: none; appearance: none;
  min-height: 48px; /* touch target */
}
.lp-fg input:focus, .lp-fg select:focus { border-color: var(--volt); }
.lp-fg input::placeholder { color: var(--ash); }

/* aria-live region for form feedback */
#lp-form-region { margin-top: var(--s4); }
.lp-form-error {
  padding: var(--s3) var(--s4);
  background: rgba(239,68,68,.1); border: 1px solid rgba(239,68,68,.3);
  border-radius: var(--r-md); font-size: 14px; color: var(--danger);
}
.lp-form-error:empty { display: none; }

.lp-form-success {
  text-align: center; padding: var(--s6);
}
.lp-form-success .ck-big { font-size: 52px; }
.lp-form-success h3 { font-family: var(--font-display); font-size: 28px; color: var(--bone); margin: var(--s3) 0 var(--s2); }
.lp-form-success p  { font-size: 15px; color: var(--smoke); }

.lp-form-legal { font-size: 12px; color: var(--ash); margin-top: var(--s3); text-align: center; }

/* ================================================================
   CTA FINAL
   ================================================================ */
.lp-cta-final {
  text-align: center; padding-block: var(--s24);
  background: radial-gradient(ellipse at center, rgba(122,201,67,.06) 0%, transparent 65%);
}
.lp-cta-final .t-section { max-width: 700px; margin-inline: auto; margin-bottom: var(--s5); }
.lp-cta-final .lead { font-size: 18px; color: var(--smoke); max-width: 540px; margin-inline: auto; margin-bottom: var(--s8); }
.lp-cta-btns { display: flex; flex-wrap: wrap; gap: var(--s4); justify-content: center; }

/* ================================================================
   FOOTER
   ================================================================ */
.lp-footer {
  background: var(--graphite); border-top: 1px solid var(--rim);
  padding-block-start: var(--s16); padding-block-end: var(--s8);
}
.lp-footer-grid {
  display: grid; grid-template-columns: 2fr 1fr 1fr 1fr;
  gap: var(--s10); margin-bottom: var(--s12);
}
.lp-footer-brand p {
  font-size: 14px; color: var(--ash); margin-top: var(--s4); max-width: 270px; line-height: 1.65;
}
.lp-footer-contact { margin-top: var(--s5); display: flex; flex-direction: column; gap: var(--s2); }
.lp-footer-contact a {
  font-size: 14px; color: var(--smoke);
  display: flex; align-items: center; gap: var(--s2); min-height: 36px;
  transition: color .15s;
}
.lp-footer-contact a:hover { color: var(--volt); }
.lp-footer-col h4 {
  font-family: var(--font-mono); font-size: 11px; font-weight: 700;
  color: var(--bone); text-transform: uppercase; letter-spacing: .1em; margin-bottom: var(--s4);
}
.lp-footer-col li { margin-bottom: var(--s3); }
.lp-footer-col a {
  font-size: 14px; color: var(--ash); min-height: 36px;
  display: flex; align-items: center; transition: color .15s;
}
.lp-footer-col a:hover { color: var(--volt); }
.lp-footer-bottom {
  border-top: 1px solid var(--rim); padding-top: var(--s6);
  display: flex; align-items: center; justify-content: space-between;
  flex-wrap: wrap; gap: var(--s3);
}
.lp-footer-bottom p { font-size: 13px; color: var(--ash); }

/* ================================================================
   RESPONSIVE — mobile-first breakpoints
   ================================================================ */
@media (max-width: 1100px) {
  .lp-hero-inner    { grid-template-columns: 1fr 420px; }
  .lp-plan-grid     { grid-template-columns: repeat(2, 1fr); }
  .lp-footer-grid   { grid-template-columns: 1fr 1fr; }
}

@media (max-width: 900px) {
  .lp-hero-inner    { grid-template-columns: 1fr; }
  .lp-hero-visual   { display: none; }
  .lp-sol-grid      { grid-template-columns: 1fr; }
  .lp-ai-grid       { grid-template-columns: 1fr; }
  .lp-feat-grid     { grid-template-columns: repeat(2, 1fr); }
  .lp-pain-grid     { grid-template-columns: repeat(2, 1fr); }
  .lp-steps-grid    { grid-template-columns: repeat(2, 1fr); }
  .lp-steps-track   { display: none; }
  .lp-compare       { grid-template-columns: 1fr; }
  .lp-aud-grid      { grid-template-columns: repeat(2, 1fr); }
  .lp-ben-grid      { grid-template-columns: repeat(2, 1fr); }
  .lp-proof-grid    { grid-template-columns: repeat(2, 1fr); }
  .lp-sec-grid      { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 720px) {
  .lp-nav-list      { display: none; }
  .lp-hamburger     { display: flex; }
  .lp-plan-grid     { grid-template-columns: 1fr; }
  .lp-feat-grid     { grid-template-columns: 1fr; }
  .lp-pain-grid     { grid-template-columns: 1fr; }
  .lp-steps-grid    { grid-template-columns: 1fr; }
  .lp-form-grid     { grid-template-columns: 1fr; }
  .lp-form-box      { padding: var(--s8) var(--s6); }
  .lp-footer-grid   { grid-template-columns: 1fr; }
}

@media (max-width: 520px) {
  .lp-aud-grid      { grid-template-columns: 1fr; }
  .lp-ben-grid      { grid-template-columns: 1fr; }
  .lp-proof-grid    { grid-template-columns: 1fr; }
  .lp-sec-grid      { grid-template-columns: 1fr; }
  .lp-hero-ctas     { flex-direction: column; }
  .lp-hero-ctas .btn { width: 100%; }
  .lp-cta-btns .btn  { width: 100%; max-width: 360px; }
}
</style>
</head>
<body>

<!-- Skip navigation — WCAG 2.4.1 Bypass Blocks -->
<a href="#main-content" class="skip-link">Pular para o conteúdo principal</a>

<?= $content ?>

<script>
(function () {
  'use strict';

  /* --- Header scroll state --- */
  var header = document.getElementById('lp-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.toggleAttribute('data-scrolled', window.scrollY > 48);
    }, { passive: true });
  }

  /* --- Hamburger menu --- */
  var ham = document.getElementById('lp-hamburger');
  var mobileNav = document.getElementById('lp-mobile-nav');
  if (ham && mobileNav) {
    ham.addEventListener('click', function () {
      var open = ham.getAttribute('aria-expanded') === 'true';
      ham.setAttribute('aria-expanded', String(!open));
      mobileNav.setAttribute('aria-hidden', String(open));
    });
  }

  /* --- Smooth scroll + close mobile menu --- */
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var id = a.getAttribute('href');
      var target = document.querySelector(id);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        if (mobileNav) {
          mobileNav.setAttribute('aria-hidden', 'true');
          if (ham) ham.setAttribute('aria-expanded', 'false');
        }
      }
    });
  });

  /* --- FAQ accordion — WCAG 4.1.2 Name/Role/Value --- */
  document.querySelectorAll('.lp-faq-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = btn.closest('.lp-faq-item');
      var wasOpen = item.hasAttribute('data-open');
      /* close all */
      document.querySelectorAll('.lp-faq-item').forEach(function (i) {
        i.removeAttribute('data-open');
        i.querySelector('.lp-faq-btn').setAttribute('aria-expanded', 'false');
      });
      /* toggle clicked */
      if (!wasOpen) {
        item.setAttribute('data-open', '');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  /* --- Lead form (async, with aria-live feedback) --- */
  var form = document.getElementById('lp-lead-form');
  var region = document.getElementById('lp-form-region');
  if (form && region) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var submitBtn = form.querySelector('[data-submit]');
      submitBtn.disabled = true;
      submitBtn.textContent = 'Enviando...';
      region.innerHTML = '';

      var fd = new FormData(form);
      fetch(form.action, { method: 'POST', body: fd })
        .then(function (res) { return res.json(); })
        .then(function (json) {
          if (json.success) {
            document.getElementById('lp-form-fields').hidden = true;
            document.getElementById('lp-form-success').hidden = false;
          } else {
            var msgs = Array.isArray(json.errors) ? json.errors.join('<br>') : 'Erro ao enviar. Tente novamente.';
            region.innerHTML = '<p class="lp-form-error" role="alert">' + msgs + '</p>';
            submitBtn.disabled = false;
            submitBtn.textContent = 'Quero receber acesso';
          }
        })
        .catch(function () {
          region.innerHTML = '<p class="lp-form-error" role="alert">Erro de conexão. Verifique sua internet e tente novamente.</p>';
          submitBtn.disabled = false;
          submitBtn.textContent = 'Quero receber acesso';
        });
    });
  }
})();
</script>
</body>
</html>

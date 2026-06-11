// ShapePro IA — App JS

// ===================== SIDEBAR =====================
const sidebar  = document.getElementById('sidebar');
const overlay  = document.getElementById('overlay');
const hamburger = document.getElementById('hamburger');

function openSidebar()  { sidebar?.classList.add('open');   overlay?.classList.add('active'); }
function closeSidebar() { sidebar?.classList.remove('open'); overlay?.classList.remove('active'); }

hamburger?.addEventListener('click', openSidebar);
overlay?.addEventListener('click', closeSidebar);

// Active nav link
document.querySelectorAll('.sp-nav-item').forEach(a => {
    if (a.href && window.location.pathname.startsWith(new URL(a.href, location.origin).pathname) && a.pathname !== '/') {
        a.classList.add('active');
    }
});

// ===================== FLASH MESSAGES =====================
document.querySelectorAll('.sp-alert').forEach(el => {
    setTimeout(() => { el.style.transition = 'opacity .5s'; el.style.opacity = '0';
        setTimeout(() => el.remove(), 500); }, 5000);
});

// ===================== SCORE SLIDERS =====================
document.querySelectorAll('.score-slider').forEach(slider => {
    const display = document.getElementById(slider.id + '_display');
    if (display) {
        display.textContent = slider.value;
        slider.addEventListener('input', () => display.textContent = slider.value);
    }
});

// ===================== WORKOUT EXECUTION =====================
function toggleSet(btn) {
    btn.classList.toggle('done');
    const row = btn.closest('.exercise-set-row');
    row?.classList.toggle('set-done');
}

// ===================== EXERCISE SEARCH =====================
const searchInput = document.getElementById('exercise-search');
searchInput?.addEventListener('input', () => {
    const q = searchInput.value.toLowerCase();
    document.querySelectorAll('[data-exercise]').forEach(el => {
        el.style.display = el.dataset.exercise.toLowerCase().includes(q) ? '' : 'none';
    });
});

// ===================== CHECKIN WEIGHT CHANGE ALERT =====================
function checkWeightChange() {
    const weightInput = document.getElementById('checkin_weight');
    if (!weightInput) return;
    const initial = parseFloat(weightInput.dataset.initial || 0);
    const current = parseFloat(weightInput.value || 0);
    const diff = current - initial;
    const alert = document.getElementById('weight-alert');
    if (alert) {
        if (Math.abs(diff) > 5) {
            alert.textContent = diff > 0 ? `⚠️ Ganho de ${diff.toFixed(1)}kg` : `⚠️ Perda de ${Math.abs(diff).toFixed(1)}kg`;
            alert.style.display = 'block';
        } else {
            alert.style.display = 'none';
        }
    }
}
document.getElementById('checkin_weight')?.addEventListener('input', checkWeightChange);

// ===================== CONFIRM DELETE =====================
document.querySelectorAll('[data-confirm]').forEach(btn => {
    btn.addEventListener('click', e => {
        if (!confirm(btn.dataset.confirm || 'Confirmar?')) e.preventDefault();
    });
});

// ===================== COPY TO CLIPBOARD =====================
document.querySelectorAll('[data-copy]').forEach(btn => {
    btn.addEventListener('click', () => {
        const text = document.getElementById(btn.dataset.copy)?.textContent || btn.dataset.copy;
        navigator.clipboard.writeText(text).then(() => {
            const orig = btn.textContent;
            btn.textContent = '✓ Copiado!';
            setTimeout(() => btn.textContent = orig, 2000);
        });
    });
});

// ===================== WHATSAPP LINK =====================
function openWhatsapp(phone, message) {
    const p = phone.replace(/\D/g, '');
    const url = `https://wa.me/55${p}?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
}
document.querySelectorAll('[data-whatsapp]').forEach(btn => {
    btn.addEventListener('click', () => {
        const phone = btn.dataset.phone || '';
        const msg   = document.getElementById(btn.dataset.whatsapp)?.textContent || '';
        openWhatsapp(phone, msg);
    });
});

// ===================== TABS =====================
document.querySelectorAll('.sp-tab[data-tab]').forEach(tab => {
    tab.addEventListener('click', () => {
        const group = tab.closest('[data-tabs]');
        if (!group) return;
        group.querySelectorAll('.sp-tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        const panes = document.querySelectorAll(`[data-tab-pane]`);
        panes.forEach(p => p.style.display = p.dataset.tabPane === tab.dataset.tab ? '' : 'none');
    });
});

// ===================== IMAGE PREVIEW =====================
document.querySelectorAll('input[type=file][data-preview]').forEach(inp => {
    inp.addEventListener('change', () => {
        const preview = document.getElementById(inp.dataset.preview);
        if (preview && inp.files[0]) {
            const reader = new FileReader();
            reader.onload = e => preview.src = e.target.result;
            reader.readAsDataURL(inp.files[0]);
        }
    });
});

// ===================== BMI CALCULATOR =====================
function calcBmi() {
    const w = parseFloat(document.getElementById('weight')?.value || 0);
    const h = parseFloat(document.getElementById('height')?.value || 0) / 100;
    if (w > 0 && h > 0) {
        const bmi = (w / (h * h)).toFixed(1);
        const el = document.getElementById('bmi_display');
        if (el) el.textContent = bmi;
    }
}
document.getElementById('weight')?.addEventListener('input', calcBmi);
document.getElementById('height')?.addEventListener('input', calcBmi);

// ===================== WORKOUT DAY TABS =====================
document.querySelectorAll('.day-tab').forEach(tab => {
    tab.addEventListener('click', () => {
        document.querySelectorAll('.day-tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        const day = tab.dataset.day;
        document.querySelectorAll('[data-day-pane]').forEach(p => {
            p.style.display = p.dataset.dayPane === day ? '' : 'none';
        });
    });
});

// ===================== PWA SERVICE WORKER =====================
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js').catch(() => {});
    });
}

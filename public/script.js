document.addEventListener('DOMContentLoaded', () => {
  const current = window.location.pathname.split('/').pop() || 'index.html';
  const isEnglish = current.endsWith('-en.html');
  const isProjects = current.startsWith('projects');
  const saved = localStorage.getItem('portfolio-language');
  const browserLang = (navigator.languages && navigator.languages.length ? navigator.languages[0] : navigator.language || 'pt-BR').toLowerCase();
  const preferred = saved || (browserLang.startsWith('en') ? 'en' : 'pt');

  const cvLink = document.getElementById('cv-download');
  if (cvLink) {
    const cvFile = isEnglish ? 'curriculos/curriculo-en.pdf' : 'curriculos/curriculo-pt.pdf';
    cvLink.href = cvFile;
    cvLink.setAttribute('download', cvFile.split('/').pop());
  }

  if (preferred === 'en' && !isEnglish) { window.location.replace(isProjects ? 'projects-en.html' : 'index-en.html'); return; }
  if (preferred === 'pt' && isEnglish && saved === 'pt') { window.location.replace(isProjects ? 'projects.html' : 'index.html'); return; }

  document.querySelectorAll('[data-lang]').forEach(link => link.addEventListener('click', () => localStorage.setItem('portfolio-language', link.dataset.lang)));
  const year = document.getElementById('year');
  if (year) year.textContent = new Date().getFullYear();
  const toggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.nav');
  if (toggle && nav) {
    toggle.addEventListener('click', () => { const open = nav.classList.toggle('open'); toggle.setAttribute('aria-expanded', String(open)); toggle.textContent = open ? '×' : '☰'; });
    nav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => { nav.classList.remove('open'); toggle.setAttribute('aria-expanded', 'false'); toggle.textContent = '☰'; }));
  }
});

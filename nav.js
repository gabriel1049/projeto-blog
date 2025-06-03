const toggle = document.getElementById('menu-toggle');
  const nav = document.querySelector('.nav_bar');
  const overlay = document.getElementById('menu-overlay');
  const body = document.body;

  toggle.addEventListener('click', () => {
    toggle.classList.toggle('active');
    nav.classList.toggle('menu-open');
    overlay.classList.toggle('active');
    body.classList.toggle('menu-open');
  });

  overlay.addEventListener('click', () => {
    toggle.classList.remove('active');
    nav.classList.remove('menu-open');
    overlay.classList.remove('active');
    body.classList.remove('menu-open');
  });
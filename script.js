const navLinks = document.querySelectorAll('.nav-menu .nav-link');
const hamburgermenu = document.querySelector('#hamburger-menu');
const xmenu = document.querySelector('#x-menu');

hamburgermenu.addEventListener('click', () => {
  document.body.classList.toggle('show-mobile-menu');
});

// Close menu when the close button is clicked
xmenu.addEventListener('click', () => hamburgermenu.click());

// close menu when the nav link is clicked
navLinks.forEach((link) => {
  link.addEventListener('click', () => hamburgermenu.click());
});

// animation button
document.addEventListener('scroll', function () {
  const buttons = document.querySelectorAll('.button1');
  const windowHeight = window.innerHeight;

  buttons.forEach((button) => {
    const buttonTop = button.getBoundingClientRect().top;

    // Jika tombol berada dalam jangkauan tampilan
    if (buttonTop < windowHeight) {
      button.classList.add('visible'); // Tambahkan kelas visible
    }
  });
});
document.addEventListener('scroll', function () {
  const buttons = document.querySelectorAll('.button2');
  const windowHeight = window.innerHeight;

  buttons.forEach((button) => {
    const buttonTop = button.getBoundingClientRect().top;

    // Jika tombol berada dalam jangkauan tampilan
    if (buttonTop < windowHeight) {
      button.classList.add('visible'); // Tambahkan kelas visible
    }
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const hamburgerMenu = document.getElementById('hamburger-menu');
  const navMenu = document.getElementById('nav-menu');
  const closeMenu = document.getElementById;
});

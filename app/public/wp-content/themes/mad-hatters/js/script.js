const menuBtn = document.querySelector('.hamburger');
const menu = document.querySelector('.nav ul');

const handleMenu = () => {
  if (menu.style.opacity == 1) menu.style.opacity = 0;
  else {
    menu.style.opacity = 1;
  }
};

menuBtn.addEventListener('click', handleMenu);

let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');
let mainmenu = document.querySelector('.navigation__mainmenu');
let menusignout = document.querySelector('.navigation__menusignout');

toggle.onclick = function(){
    navigation.classList.toggle('navigation--active');
    main.classList.toggle('main--active');
    mainmenu.classList.toggle('navigation__mainmenu--active');
    menusignout.classList.toggle('navigation__menusignout--active');
}

let list = document.querySelectorAll('.navigation__item');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('hovered'));
    this.classList.add("hovered");
}
list.forEach((item) =>
item.addEventListener('mouseover', activeLink));
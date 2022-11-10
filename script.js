let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');
let mainmenu = document.querySelector('.mainmenu');
let menusignout = document.querySelector('.menusignout');

toggle.onclick = function(){
    navigation.classList.toggle('active');
    main.classList.toggle('active');
    mainmenu.classList.toggle('active');
    menusignout.classList.toggle('active');
}

let list = document.querySelectorAll('.navigation li');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('hovered'));
    this.classList.add("hovered");
}
list.forEach((item) =>
item.addEventListener('mouseover', activeLink));
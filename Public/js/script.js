let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');
let mainmenu = document.querySelector('.navigation__mainmenu');
let menusignout = document.querySelector('.navigation__menusignout');

let box = document.getElementById('box');
let down = false;
let notif = document.getElementById('notif');
let search = document.getElementById('search_bar');
let wysiwyg = document.getElementById('wysiwyg');

const currentDate = document.querySelector(".calendar__currentdate"),
daysTag = document.querySelector(".calendar__days"),
calendarNav = document.querySelectorAll(".calendar__icon span");

let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();

const months = ["January", "February", "March", "April", "May", "June", 
                "July", "August", "September", "October", "November", "December"];

const renderCalendar = () => {
  let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(),
  lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(),
  lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(),
  lastDateofLastmonth = new Date(currYear, currMonth, 0).getDate();
  let liTag = "";

  for (let i = firstDayofMonth ; i > 0 ; i--) {
    liTag += `<li class="--inactive">${lastDateofLastmonth - i + 1}</li>`;
  } 

  for (let i = 1; i <= lastDateofMonth; i++) {
    let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                  && currYear === new Date().getFullYear() ? "active" : "";
      liTag += `<li class="${isToday}">${i}</li>`;
  }

  for (let i = lastDayofMonth; i < 6; i++) {
    liTag += `<li class="--inactive">${ i - lastDayofMonth + 1}</li>`;
  }

  currentDate.innerText = `${months[currMonth]} ${currYear}`;
  daysTag.innerHTML = liTag;
}
renderCalendar();

calendarNav.forEach ( icon => {
  icon.addEventListener("click", () => {
    currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

    if (currMonth < 0 || currMonth > 11) {
      date = new Date(currYear, currMonth);
      currYear = date.getFullYear();
      currMonth = date.getMonth();
    } else {
      date = new Date();
    }

    renderCalendar();
  });
});

CKEDITOR.replace('wysiwyg');

toggle.onclick = function(){
    navigation.classList.toggle('navigation--active');
    main.classList.toggle('main--active');
    mainmenu.classList.toggle('navigation__mainmenu--active');
    menusignout.classList.toggle('navigation__menusignout--active');
}

notif.onclick = function() {
  if (down) {
    box.style.height = '0%';
    box.style.width = '0%';
    box.style.opacity = '0';
    box.style.right = '-95px';
    if (search !== null) {
      search.style.right = '0px';
      search.style.opacity = '1';
    }
    down = false;
  } else
  {
    box.style.height = 'auto';
    box.style.width = '300px';
    box.style.opacity = '1';
    box.style.right = '293px';
    box.style.backgroundColor = 'var(--white)';

    if (search !== null) {
      search.style.right = '-355px;';
      search.style.opacity = '0'; 
    }
    down = true;
  }
}

let list = document.querySelectorAll('.navigation__item');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('hovered'));
    this.classList.add("hovered");
}
list.forEach((item) =>
item.addEventListener('mouseover', activeLink));

function viewAllFunc() {
  var x = document.getElementById("carditem");
  if (x.style.display === "flex") {
    x.style.display = "none";
  } else {
    x.style.display = "flex"
    x.style.flexDirection = "row";
  }
}

function dropdownFunc() {
  document.getElementById("myDropdown").classList.toggle("form__input--dropdownshow");
}

window.onclick = function(event) {
  if (!event.target.matches('.form__input--dropbtn')) {
    var dropdowns = document.getElementsByClassName("form__input--dropdowncontent");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('form__input--dropdownshow')) {
        openDropdown.classList.remove('form__input--dropdownshow');
      }
    }
  }
}

const grOne = document.getElementById('myChart');

  new Chart(grOne, {
    type: 'bar',
    data: {
      labels: ['Baik', 'Kurang Baik', 'Rusak', 'Hilang'],
      datasets: [{
        // label: 'Graphics',
        data: [134, 10, 2, 38],
        backgroundColor: [
            'rgba(54, 162, 235, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
            'rgba(54, 162, 235, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(255, 99, 132, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
        plugins: {
            legend: {
              display: false
            }
          },
        responsive: true,
        },  
        scales: {
            y: {
            beginAtZero: true
            }
        },
        maintainAspectRatio: false,
    });

  const grTwo = document.getElementById('myChart2');

  new Chart(grTwo, {
    type: 'doughnut',
    data: {
      labels: ['Baik', 'Kurang Baik', 'Rusak', 'Hilang'],
      datasets: [{
        // label: 'Graphics',
        data: [134, 10, 2, 38],
        backgroundColor: [
            'rgba(54, 162, 235, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
            'rgba(54, 162, 235, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(255, 99, 132, 1)'
        ],
        borderWidth: 1,
        hoverOffset: 8
      }]
    },
    options: {
        plugins: {
            datalabels: {
              display: true,
              align: 'bottom',
              backgroundColor: '#ccc',
              borderRadius: 3,
              font: {
                size: 18,
              },
            },
          },
        responsive:
            true,
        }
    });


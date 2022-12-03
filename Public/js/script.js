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

//FAQ

const items = document.querySelectorAll(".accordion a");

function toggleAccordion() {
    this.classList.toggle('active');
    this.nextElementSibling.classList.toggle('active');
}

items.forEach(item => item.addEventListener('click', toggleAccordion));


$('#main-slide').carousel({
    pause: true,
    interval: 100000,
});
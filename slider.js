const slides = document.querySelectorAll(".slide");
const prevButton = document.querySelector(".prev");
const nextButton = document.querySelector(".next");
let currentSlide = 0;

slides[0].classList.add("active"); // menambahkan kelas active ke elemen slide pertama

function showSlide(n) {
  slides[currentSlide].classList.remove("active");
  currentSlide = (n + slides.length) % slides.length;
  slides[currentSlide].classList.add("active");
}

prevButton.addEventListener("click", function () {
  showSlide(currentSlide - 1);
});

nextButton.addEventListener("click", function () {
  showSlide(currentSlide + 1);
});

const navButtons = document.querySelectorAll(".nav button");
navButtons.forEach(function (button, index) {
  button.addEventListener("click", function () {
    showSlide(index);
  });
});

var profileIcon = document.getElementById("profile-icon");
var offcanvas = document.querySelector(".offcanvas");
var closeOffcanvasBtn = document.getElementById("profile-back-btn");

profileIcon.addEventListener("click", function() {
  offcanvas.classList.toggle("open");
});

closeOffcanvasBtn.addEventListener("click", function() {
  offcanvas.classList.remove("open");
});

var cartIcon = document.getElementById("cart-icon");
var offcanvasCart = document.querySelector(".offcanvasCart");
var closeOffcanvasCartBtn = document.getElementById("cart-back-btn");

cartIcon.addEventListener("click", function() {
  offcanvasCart.classList.toggle("open");
});

closeOffcanvasCartBtn.addEventListener("click", function() {
  offcanvasCart.classList.remove("open");
});
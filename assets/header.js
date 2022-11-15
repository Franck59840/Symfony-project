let button =document.querySelector("[btn-mobile-menu]");
let mobileMenu = document.getElementById("mobile-menu");

button.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");
})
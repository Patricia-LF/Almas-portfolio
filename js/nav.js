// Toggle overlay on hamburger click
const hamburger = document.querySelector(".hamburger-btn");
const close = document.querySelector(".close-btn");
const overlay = document.querySelector(".main-navigation");

hamburger.addEventListener("click", () => {
  overlay.style.display = "flex";
});

// Close overlay with close-button
close.addEventListener("click", () => {
  overlay.style.display = "none";
});

// Close overlay when a nav link is clicked
document.querySelectorAll(".nav-link-overlay").forEach((link) => {
  link.addEventListener("click", () => {
    overlay.style.display = "none";
  });
});

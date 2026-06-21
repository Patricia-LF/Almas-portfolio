document.addEventListener("DOMContentLoaded", () => {
  const lightbox = document.querySelector(".lightbox");
  const lightboxImg = document.querySelector(".lightbox-img");
  const lightboxVideo = document.querySelector(".lightbox-video");
  const lightboxClose = document.querySelector(".lightbox-close");

  function closeLightbox() {
    lightbox.style.display = "none";
    lightboxImg.style.display = "none";
    lightboxImg.src = "";
    lightboxVideo.pause();
    lightboxVideo.style.display = "none";
    lightboxVideo.src = "";
  }

  // Open lightbox when clicking a gallery image
  document.querySelectorAll(".gallery-img").forEach((img) => {
    img.addEventListener("click", () => {
      lightboxVideo.style.display = "none";
      lightboxImg.style.display = "block";
      lightboxImg.src = img.src;
      lightboxImg.alt = img.alt;
      lightbox.style.display = "flex";
    });
  });

  // Open lightbox when clicking a gallery item that has a video
  document.querySelectorAll(".gallery-item[data-video]").forEach((item) => {
    item.addEventListener("click", () => {
      const videoSrc = item.getAttribute("data-video");

      lightboxImg.style.display = "none";
      lightboxVideo.style.display = "block";
      lightboxVideo.src = videoSrc;
      lightbox.style.display = "flex";
      lightboxVideo.play();
    });
  });

  // Close on close-button
  lightboxClose.addEventListener("click", closeLightbox);

  // Close on backdrop click
  lightbox.addEventListener("click", (e) => {
    if (e.target === lightbox) {
      closeLightbox();
    }
  });
});

const initSlider = () => {
  const carousel = document.querySelector(".wrapper .carousel");
  const slideButtons = document.querySelectorAll(".wrapper .slide-button");
  const sliderScrollbar = document.querySelector(".contain .slider-scrollbar");
  const scrollbarThumb = document.querySelector(".scrollbar-thumb");
  const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth;
  
  // Handle scrollbar thumb drag
  scrollbarThumb.addEventListener("mousedown", (e) => {
      const startX = e.clientX;
      const thumbPosition = scrollbarThumb.offsetLeft;
      const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
      
      // Update thumb position on mouse move
      const handleMouseMove = (e) => {
          const deltaX = e.clientX - startX;
          const newThumbPosition = thumbPosition + deltaX;

          // Ensure the scrollbar thumb stays within bounds
          const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
          const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
          
          scrollbarThumb.style.left = `${boundedPosition}px`;
          carousel.scrollLeft = scrollPosition;
      }

      // Remove event listeners on mouse up
      const handleMouseUp = () => {
          document.removeEventListener("mousemove", handleMouseMove);
      }

      // Add event listeners for drag interaction
      document.addEventListener("mousemove", handleMouseMove);
      document.addEventListener("mouseup", handleMouseUp);
  });

  // Slide images according to the slide button clicks
  slideButtons.forEach(button => {
      button.addEventListener("click", () => {
          const direction = button.id === "prev-slide" ? -1 : 1;
          const scrollAmount = carousel.clientWidth * direction;
          carousel.scrollBy({ left: scrollAmount, behavior: "smooth" });
      });
  });

   // Show or hide slide buttons based on scroll position
  const handleSlideButtons = () => {
      slideButtons[0].style.display = carousel.scrollLeft <= 0 ? "none" : "flex";
      slideButtons[1].style.display = carousel.scrollLeft >= maxScrollLeft ? "none" : "flex";
  }

  // Update scrollbar thumb position based on image scroll
  const updateScrollThumbPosition = () => {
      const scrollPosition = carousel.scrollLeft;
      const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
      scrollbarThumb.style.left = `${thumbPosition}px`;
  }

  // Call these two functions when image list scrolls
  carousel.addEventListener("scroll", () => {
      updateScrollThumbPosition();
      handleSlideButtons();
  });
}

window.addEventListener("resize", initSlider);
window.addEventListener("load", initSlider);
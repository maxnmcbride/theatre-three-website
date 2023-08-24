document.addEventListener('DOMContentLoaded', () => {
    const mainDivText = document.querySelector('.main-div-text');
    const mainDivOne = document.querySelector('.main-div-one');
  
    mainDivOne.addEventListener('scroll', () => {
      const scrolled = mainDivOne.scrollTop;
      const parallaxFactor = 0.5; // Adjust this value to control the parallax intensity
      
      // Calculate the translateY value with a parallax effect
      const translateY = -scrolled * parallaxFactor;
      
      mainDivText.style.transform = `translateY(${translateY}px)`;
    });
});
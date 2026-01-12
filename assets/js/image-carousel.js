const carousels = document.querySelectorAll('.carousel');

carousels.forEach(carousel => {
  const wrapper = carousel.closest('.carousel-wrapper');
  
  carousel.addEventListener('scroll', () => {
    const isAtStart = carousel.scrollLeft <= 10;
    const isAtEnd = carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 10;
    
    wrapper.classList.toggle('at-start', isAtStart);
    wrapper.classList.toggle('at-end', isAtEnd);
  });
  
  carousel.dispatchEvent(new Event('scroll'));
});
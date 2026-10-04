const translateElementsOnScroll = (entries, observer) => {
  entries.forEach((entry, index) => {
    if (entry.isIntersecting) {
      entry.target.style.transitionDelay = `${index * 0.3}s`;
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
};

const observer = new IntersectionObserver(translateElementsOnScroll, {
  threshold: 0.125
});

function initObserver() {
  const elementsToObserve = document.querySelectorAll('.translate-up');
  elementsToObserve.forEach((element) => {
    element.addEventListener('transitionend', () => {
      element.style.transitionDelay = '0s';
    });
    observer.observe(element);
  });
}

initObserver();

// Re-initialize after cross-document view transitions
window.addEventListener('pagereveal', () => initObserver());

// --- Column header fade-out in bottom 20% of page ---
const columnHeaders = document.querySelectorAll('.column-header');

const handleColumnHeaderVisibility = () => {
  const scrollBottom = window.scrollY + window.innerHeight;
  const pageHeight = document.documentElement.scrollHeight;
  const inBottomZone = scrollBottom >= pageHeight * 0.8;

  columnHeaders.forEach(el => el.classList.toggle('faded-out', inBottomZone));
};

window.addEventListener('scroll', handleColumnHeaderVisibility, { passive: true });
handleColumnHeaderVisibility(); // Run on load in case page is short


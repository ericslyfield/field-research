document.addEventListener('DOMContentLoaded', () => {
  const titleLinks = document.querySelectorAll('.column-1 .wp-block-post-title a[data-featured-src]');
  const targetImg  = document.querySelector('.column-3 .wp-block-post-featured-image img');
  if (!titleLinks.length || !targetImg) return;

  const originalSrc = targetImg.getAttribute('src');
  const originalAlt = targetImg.getAttribute('alt');

  // srcset/sizes will override a plain src swap — strip them once.
  targetImg.removeAttribute('srcset');
  targetImg.removeAttribute('sizes');

  titleLinks.forEach(link => {
    link.addEventListener('mouseenter', () => {
      targetImg.src = link.dataset.featuredSrc;
      targetImg.alt = link.dataset.featuredAlt || '';
    });
    link.addEventListener('mouseleave', () => {
      targetImg.src = originalSrc;
      targetImg.alt = originalAlt;
    });
  });
});

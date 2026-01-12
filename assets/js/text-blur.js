document.addEventListener('DOMContentLoaded', function() {
    let timer;
    const blurElement = document.querySelector('.has-blur-effect');
    const DELAY = 2000;
    let isMouseMoving = false;
    
    // Function to wrap text nodes in spans
    function wrapTextNodes(element) {
        const childNodes = Array.from(element.childNodes);
        childNodes.forEach(node => {
            // Only process text nodes that aren't empty spaces
            if (node.nodeType === Node.TEXT_NODE && node.nodeValue.trim() !== '') {
                const span = document.createElement('span');
                span.textContent = node.nodeValue;
                node.replaceWith(span);
            }
        });
    }
    
    // Wrap text nodes on load
    if (blurElement) {
        wrapTextNodes(blurElement);
    }
    
    function startBlurTimer() {
        clearTimeout(timer);
        isMouseMoving = true;
        blurElement.classList.remove('is-blurred');
        
        setTimeout(() => {
            isMouseMoving = false;
        }, 100);
        
        timer = setTimeout(() => {
            if (!isMouseMoving) {
                blurElement.classList.add('is-blurred');
            }
        }, DELAY);
    }

    let lastMove = 0;
    document.addEventListener('mousemove', () => {
        const now = Date.now();
        if (now - lastMove > 100) {
            lastMove = now;
            startBlurTimer();
        }
    });
    
    startBlurTimer();
});
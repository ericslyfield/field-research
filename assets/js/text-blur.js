document.addEventListener('DOMContentLoaded', function() {
    const blurElements = document.querySelectorAll('.has-blur-effect');
    let timer;
    const DELAY = 2000;
    let isMouseMoving = false;
    
    function wrapTextNodes(element) {
        const childNodes = Array.from(element.childNodes);
        childNodes.forEach(node => {
            // Skip links and elements, only wrap text nodes
            if (node.nodeType === Node.TEXT_NODE && node.nodeValue.trim() !== '') {
                const span = document.createElement('span');
                span.className = 'blur-target';
                span.textContent = node.nodeValue;
                node.replaceWith(span);
            }
            // Recursively wrap text in child elements (like <em>) but skip <a>
            else if (node.nodeType === Node.ELEMENT_NODE && node.tagName !== 'A') {
                wrapTextNodes(node);
            }
        });
    }
    
    blurElements.forEach(element => {
        wrapTextNodes(element);
    });
    
    function startBlurTimer() {
        clearTimeout(timer);
        isMouseMoving = true;
        blurElements.forEach(el => el.classList.remove('is-blurred'));
        
        setTimeout(() => {
            isMouseMoving = false;
        }, 100);
        
        timer = setTimeout(() => {
            if (!isMouseMoving) {
                blurElements.forEach(el => el.classList.add('is-blurred'));
            }
        }, DELAY);
    }

    document.addEventListener('mousemove', () => {
        startBlurTimer();
    });
    
    startBlurTimer();
});
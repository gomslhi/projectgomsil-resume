document.addEventListener('DOMContentLoaded', () => {
    // Custom Cursor
    const dot = document.querySelector('.cursor-dot');
    const outline = document.querySelector('.cursor-outline');
    
    // Check if device supports hover (disables custom cursor on mobile)
    if (window.matchMedia('(pointer: fine)').matches) {
        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;

            // Instant dot
            dot.style.left = `${posX}px`;
            dot.style.top = `${posY}px`;

            // Lagging outline using simple animation frame for smooth lerp
            outline.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, { duration: 500, fill: "forwards" });
        });

        // Hover effect for links
        const interactables = document.querySelectorAll('a, .btn, .skill-card');
        interactables.forEach(el => {
            el.addEventListener('mouseenter', () => {
                outline.style.width = '60px';
                outline.style.height = '60px';
                outline.style.borderColor = 'var(--primary-color)';
                outline.style.backgroundColor = 'rgba(0, 255, 136, 0.1)';
            });
            el.addEventListener('mouseleave', () => {
                outline.style.width = '40px';
                outline.style.height = '40px';
                outline.style.borderColor = 'var(--secondary-color)';
                outline.style.backgroundColor = 'transparent';
            });
        });
    } else {
        dot.style.display = 'none';
        outline.style.display = 'none';
    }

    // Typing Effect
    const typedTextSpan = document.querySelector(".typed-text");
    const textArray = ["DevOps Engineer", "Cloud Infrastructure", "CI/CD Automation", "Sysadmin & DBA"];
    const typingDelay = 100;
    const erasingDelay = 50;
    const newTextDelay = 2000;
    let textArrayIndex = 0;
    let charIndex = 0;

    function type() {
        if (charIndex < textArray[textArrayIndex].length) {
            typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, typingDelay);
        } else {
            setTimeout(erase, newTextDelay);
        }
    }

    function erase() {
        if (charIndex > 0) {
            typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
            charIndex--;
            setTimeout(erase, erasingDelay);
        } else {
            textArrayIndex++;
            if (textArrayIndex >= textArray.length) textArrayIndex = 0;
            setTimeout(type, typingDelay + 1100);
        }
    }

    if (textArray.length) setTimeout(type, newTextDelay + 250);
});

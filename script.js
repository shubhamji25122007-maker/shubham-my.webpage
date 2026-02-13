const typingElement = document.querySelector(".typing");

const words = ["Web Developer", "BCA Student", "Programmer"];
let wordIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeEffect() {
    let currentWord = words[wordIndex];
    let currentText = currentWord.substring(0, charIndex);

    typingElement.textContent = currentText;

    if (!isDeleting && charIndex < currentWord.length) {
        charIndex++;
        setTimeout(typeEffect, 100);
    } 
    else if (isDeleting && charIndex > 0) {
        charIndex--;
        setTimeout(typeEffect, 50);
    } 
    else {
        isDeleting = !isDeleting;
        if (!isDeleting) {
            wordIndex = (wordIndex + 1) % words.length;
        }
        setTimeout(typeEffect, 1000);
    }
}

typeEffect();
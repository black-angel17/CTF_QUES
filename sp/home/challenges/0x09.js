function typeWriter(element, text, speed) {
    let i = 0;
    const writer = setInterval(function() {
        element.innerHTML += text.charAt(i);
        i++;
        if (i > text.length - 1) {
            clearInterval(writer);
        }
    }, speed);
}


// Final Half -> Dev^&*}


const customTextElement = document.querySelector('.custom-text p');

// Define the text and speed for the typewriter effect
const textToType = "Go Hunt this Webpage and Find the Flag";
const typingSpeed = 100; // Adjust this value to change the typing speed

// Start the typewriter effect
typeWriter(customTextElement, textToType, typingSpeed);




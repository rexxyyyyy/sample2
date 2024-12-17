function showText(contentElement) {
    const textElement = contentElement.querySelector('.text'); // Finds the .text div inside the clicked element
    if (textElement.style.display === "block") {
        textElement.style.display = "none"; // Hides the text if it's already visible
    } else {
        textElement.style.display = "block"; // Shows the text if it's hidden
    }
}

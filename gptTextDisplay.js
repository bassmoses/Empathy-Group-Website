// Define a function called toggleAboutText
function toggleAboutText() {
    // Get the element with the ID of "about-text" and store it in a variable called aboutText
    var aboutText = document.getElementById("about-text");

    // If the display style of the aboutText element is "none"
    if (aboutText.style.display === "none") {
        // Set the display style of the aboutText element to "block"
        aboutText.style.display = "block";
        // Store the text content of the aboutText element in a variable called text
        var text = aboutText.textContent;
        // Set the text content of the aboutText element to an empty string
        aboutText.textContent = "";
        // Initialize a variable called i to 0
        var i = 0;
        // Set an interval to run every 50 milliseconds
        var intervalId = setInterval(function() {
            // If i is less than the length of the text variable
            if (i < text.length) {
                // Add the character at index i of the text variable to the text content of the aboutText element
                aboutText.textContent += text.charAt(i);
                // Increment i by 1
                i++;
            } else {
                // If i is not less than the length of the text variable, clear the interval
                clearInterval(intervalId);
            }
        }, 10);
    } else {
        // If the display style of the aboutText element is not "none", set it to "none"
        aboutText.style.display = "none";
    }
}
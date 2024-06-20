// Wait for the HTML content to fully load before executing JavaScript
document.addEventListener("DOMContentLoaded", function() {
    // Get the carousel container element
    const carousel = document.querySelector(".carousel");

    // Get all images inside the carousel
    const images = carousel.querySelectorAll("img");

    // Set initial index and image count
    let currentIndex = 0;
    const totalImages = images.length;

    // Function to show the next image
    function showNextImage() {
        // Hide the current image
        images[currentIndex].classList.remove("active");

        // Increment index to show the next image
        currentIndex = (currentIndex + 1) % totalImages;

        // Show the next image
        images[currentIndex].classList.add("active");
    }

    // Automatically show the next image every 3 seconds (adjust as needed)
    setInterval(showNextImage, 3000);
});

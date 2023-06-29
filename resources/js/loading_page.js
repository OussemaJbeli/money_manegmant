// Show loading element on DOMContentLoaded event
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("loading-overlay").style.display = "flex";
});

// Hide loading element on load event
window.addEventListener("load", function() {
    document.getElementById("loading-overlay").style.display = "none";
});

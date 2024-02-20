


document.querySelectorAll('header nav ul li a').forEach(link => {
    link.addEventListener('click', (event) => {
        // Prevent link default action
        event.preventDefault();

        
        const targetId = link.getAttribute('href').substring(1);

        
        const targetSection = document.getElementById(targetId);

        
        targetSection.scrollIntoView({ behavior: 'smooth' });
    });
});
// Function to scroll to the top of the page
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Show the button when scrolling down, hide when at the top
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollTopBtn").style.display = "block";
    } else {
        document.getElementById("scrollTopBtn").style.display = "none";
    }
}

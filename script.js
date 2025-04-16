document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.menu-button');
    const navbar = document.querySelector('.navbar');

    // Toggle navbar visibility
    menuButton.addEventListener('click', () => {
        navbar.classList.toggle('active'); // Toggle the active class
    });

    let lastScrollTop = 0;

    // Detect scrolling
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll > lastScrollTop) {
            // Scrolling down
            navbar.classList.remove('active'); // Hide the navbar
        } else {
            // Scrolling up
            navbar.classList.remove('active'); // Always hide the navbar
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
    });
});

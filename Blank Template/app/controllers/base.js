
// Listening for click events on the hamburger button
document.querySelector('.hamburger-btn').addEventListener('click', () => {
    // Selecting the sidebar element
    const sidebar = document.querySelector('.sidebar');

    // Checking if the sidebar is currently visible2
    if (sidebar.classList.contains('active')) {
        // Hiding the sidebar
        sidebar.classList.remove('active'); 
        sidebar.classList.add('closing');
        
        // Enable Scrolling
        document.body.style.overflow = 'auto';
        
    }
    else {
        // Showing the sidebar
        sidebar.classList.remove('closing');
        sidebar.classList.add('active');

        // Disable Scrolling 
        document.body.style.overflow = 'hidden';
        
    }
});
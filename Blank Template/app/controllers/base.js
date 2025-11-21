
// Listening for click events on the hamburger button
document.querySelector('.hamburger-btn').addEventListener('click', () => {
    // Selecting the sidebar element
    const sidebar = document.querySelector('.sidebar');

    // Checking if the sidebar is currently visible
    if (sidebar.classList.contains('active')) {
        // Hiding the sidebar
        sidebar.classList.remove('active'); 
    }
    else {
        // Showing the sidebar
        sidebar.classList.add('active');
    }
});
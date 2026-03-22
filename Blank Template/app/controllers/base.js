
function pause (ans){
    const main = document.querySelector('.main-block');

    if (ans === true){
        main.classList.add('paused')
    }
    else {
        main.classList.remove('paused')
    }
}

// Listening for click events on the hamburger button
document.querySelector('.hamburger-btn').addEventListener('click', () => {
    // Selecting the sidebar element
    const sidebar = document.querySelector('.sidebar');

    // Checking if the sidebar is currently visible
    if (sidebar.classList.contains('active')) {
        // Hiding the sidebar
        sidebar.classList.remove('active'); 
        sidebar.classList.add('closing');
        
        // Animation Timer
        setTimeout(() => {
            // Enable Scrolling
            document.body.style.overflow = 'auto';
            pause(false)
        },1000)
        
    }
    else {
        // Showing the sidebar
        sidebar.classList.remove('closing');
        sidebar.classList.add('active');

        // Disable Scrolling 
        document.body.style.overflow = 'hidden';
        pause(true)
    }
});
// Function to toggle the menu visibility
export function adminRedirect() {
    // Listen for key events, and if the combination of Shift key, Command key (metaKey), and 'L' key is pressed,
    // redirect the user to the admin page.
    document.addEventListener('keydown', function (event) {
        if (event.shiftKey && event.metaKey && event.key === 'l') {
            window.location.href = '../../../dashboard.php';
        }
    });
}
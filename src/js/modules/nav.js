// Function to toggle the menu visibility
export function toggleMenu() {
  // Get references to DOM elements
  const menuToggle = document.getElementById('menu-toggle'); // Checkbox for toggling menu
  const menuIcon = document.querySelector('.menu-icon'); // Icon indicating the menu
  const menuContent = document.getElementById('menu-content'); // Container for menu items

  // Event listener for the menu icon click
  menuIcon.addEventListener('click', function () {
    // Toggle the 'visible' class based on the checked state of the menu toggle checkbox
    menuContent.classList.toggle('visible', menuToggle.checked);
  });

  // Event listener for the menu toggle checkbox change event
  menuToggle.addEventListener('change', function () {
    // Toggle the 'visible' class based on the checked state of the menu toggle checkbox
    menuContent.classList.toggle('visible', menuToggle.checked);
  });

  // Event listeners for each menu item to close the menu when an item is clicked
  const menuItems = document.querySelectorAll('#menu-content a');
  menuItems.forEach(function (menuItem) {
    menuItem.addEventListener('click', function () {
      // Remove the 'visible' class to hide the menu
      menuContent.classList.remove('visible');
    });
  });
}

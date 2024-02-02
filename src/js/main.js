// Import the functions from the modules
import { toggleMenu } from './modules/nav.js';
import { adminRedirect } from './modules/admin-redirect.js';

document.addEventListener('DOMContentLoaded', function () {
  
  // Call the imported function from nav.js
  toggleMenu();

  // Call the imported function from admin-redirect.js
  adminRedirect();  
});

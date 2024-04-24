// // const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

// // allSideMenu.forEach(item=> {
// // 	const li = item.parentElement;

// // 	item.addEventListener('click', function () {
// // 		allSideMenu.forEach(i=> {
// // 			i.parentElement.classList.remove('active');
// // 		})
// // 		li.classList.add('active');
// // 	})
// // });




// // TOGGLE SIDEBAR
// const menuBar = document.querySelector('#content nav .bx.bx-menu');
// const sidebar = document.getElementById('sidebar');
// const searchButton = document.querySelector('#content nav form .form-input button');
// const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
// const searchForm = document.querySelector('#content nav form');
// const switchMode = document.getElementById('switch-mode');

// // Function to set dark mode in localStorage
// function setDarkMode(isDarkMode) {
//   localStorage.setItem('darkMode', isDarkMode);
// }

// // Function to toggle dark mode
// function toggleDarkMode(isDarkMode) {
//   document.body.classList.toggle('dark', isDarkMode);
//   setDarkMode(isDarkMode);
// }

// // Function to initialize dark mode based on localStorage
// function initializeDarkMode() {
//   const isDarkMode = localStorage.getItem('darkMode') === 'true';
//   toggleDarkMode(isDarkMode);
//   switchMode.checked = isDarkMode;
// }

// // Initialize dark mode when the script runs
// initializeDarkMode();

// // Toggle sidebar visibility
// menuBar.addEventListener('click', function () {
//   sidebar.classList.toggle('hide');
// });

// // Toggle search form visibility
// searchButton.addEventListener('click', function (e) {
//   if (window.innerWidth < 576) {
//     e.preventDefault();
//     searchForm.classList.toggle('show');
//     if (searchForm.classList.contains('show')) {
//       searchButtonIcon.classList.replace('bx-search', 'bx-x');
//     } else {
//       searchButtonIcon.classList.replace('bx-x', 'bx-search');
//     }
//   }
// });

// // Adjust elements on window resize
// window.addEventListener('resize', function () {
//   if (this.innerWidth > 576) {
//     searchButtonIcon.classList.replace('bx-x', 'bx-search');
//     searchForm.classList.remove('show');
//   }
// });

// // Toggle dark mode when switch changes
// switchMode.addEventListener('change', function () {
//   toggleDarkMode(this.checked);
// });




//fix mode


// const menuBar = document.querySelector('#content nav .bx.bx-menu');
// const sidebar = document.getElementById('sidebar');
// const searchButton = document.querySelector('#content nav form .form-input button');
// const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
// const searchForm = document.querySelector('#content nav form');
// const switchMode = document.getElementById('switch-mode');

// // Function to set cookie with name, value, and expiry in days
// function setCookie(name, value, days) {
//   const expires = new Date();
//   expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
//   document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
// }

// // Function to get cookie value by name
// function getCookie(name) {
//   const cookieName = `${name}=`;
//   const decodedCookie = decodeURIComponent(document.cookie);
//   const cookieArray = decodedCookie.split(';');
//   for (let i = 0; i < cookieArray.length; i++) {
//     let cookie = cookieArray[i];
//     while (cookie.charAt(0) === ' ') {
//       cookie = cookie.substring(1);
//     }
//     if (cookie.indexOf(cookieName) === 0) {
//       return cookie.substring(cookieName.length, cookie.length);
//     }
//   }
//   return null;
// }

// // Function to toggle dark mode
// function toggleDarkMode(isDarkMode) {
//   document.body.classList.toggle('dark', isDarkMode);
//   setCookie('darkMode', isDarkMode, 365); // Set cookie to expire in 365 days
// }

// // Function to initialize dark mode based on cookie
// function initializeDarkMode() {
//   const darkModeCookie = getCookie('darkMode');
//   const isDarkMode = darkModeCookie === 'true';
//   toggleDarkMode(isDarkMode);
//   switchMode.checked = isDarkMode;
// }

// // Initialize dark mode when the script runs
// initializeDarkMode();

// // Toggle sidebar visibility
// menuBar.addEventListener('click', function () {
//   sidebar.classList.toggle('hide');
// });

// // Toggle search form visibility
// searchButton.addEventListener('click', function (e) {
//   if (window.innerWidth < 576) {
//     e.preventDefault();
//     searchForm.classList.toggle('show');
//     if (searchForm.classList.contains('show')) {
//       searchButtonIcon.classList.replace('bx-search', 'bx-x');
//     } else {
//       searchButtonIcon.classList.replace('bx-x', 'bx-search');
//     }
//   }
// });

// // Adjust elements on window resize
// window.addEventListener('resize', function () {
//   if (this.innerWidth > 576) {
//     searchButtonIcon.classList.replace('bx-x', 'bx-search');
//     searchForm.classList.remove('show');
//   }
// });

// // Toggle dark mode when switch changes
// switchMode.addEventListener('change', function () {
//   toggleDarkMode(this.checked);
// });



const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');
const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');
const switchMode = document.getElementById('switch-mode');

// Function to set cookie with name, value, and expiry in days
function setCookie(name, value, days) {
  const expires = new Date();
  expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
  document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
}

// Function to get cookie value by name
function getCookie(name) {
  const cookieName = `${name}=`;
  const decodedCookie = decodeURIComponent(document.cookie);
  const cookieArray = decodedCookie.split(';');
  for (let i = 0; i < cookieArray.length; i++) {
    let cookie = cookieArray[i];
    while (cookie.charAt(0) === ' ') {
      cookie = cookie.substring(1);
    }
    if (cookie.indexOf(cookieName) === 0) {
      return cookie.substring(cookieName.length, cookie.length);
    }
  }
  return null;
}

// Function to toggle dark mode
function toggleDarkMode(isDarkMode) {
  document.body.classList.toggle('dark', isDarkMode);
  setCookie('darkMode', isDarkMode, 365); // Set cookie to expire in 365 days
}

// Function to initialize dark mode based on cookie
function initializeDarkMode() {
  const darkModeCookie = getCookie('darkMode');
  const isDarkMode = darkModeCookie === 'true';
  toggleDarkMode(isDarkMode);
  switchMode.checked = isDarkMode;
}

// Function to close sidebar if window width is less than 576 pixels
function closeSidebar() {
  if (window.innerWidth < 576) {
    sidebar.classList.add('hide');
  }
}

// Initialize dark mode when the script runs
initializeDarkMode();

// Toggle sidebar visibility
menuBar.addEventListener('click', function () {
  sidebar.classList.toggle('hide');
});

// Toggle search form visibility
searchButton.addEventListener('click', function (e) {
  if (window.innerWidth < 576) {
    e.preventDefault();
    searchForm.classList.toggle('show');
    if (searchForm.classList.contains('show')) {
      searchButtonIcon.classList.replace('bx-search', 'bx-x');
    } else {
      searchButtonIcon.classList.replace('bx-x', 'bx-search');
    }
  }
});

// Adjust elements on window resize
window.addEventListener('resize', function () {
  if (this.innerWidth > 576) {
    searchButtonIcon.classList.replace('bx-x', 'bx-search');
    searchForm.classList.remove('show');
  }
  closeSidebar(); // Close sidebar if window width changes
});

// Toggle dark mode when switch changes
switchMode.addEventListener('change', function () {
  toggleDarkMode(this.checked);
});

// Example of closing sidebar on route change (using React Router as an example)
// Replace this with the appropriate router's route change event listener
// Here we're just simulating a route change with a setTimeout
function simulateRouteChange() {
  closeSidebar();
}

// Simulating a route change after 3 seconds (replace this with your actual route change event)
setTimeout(simulateRouteChange, 3000); // Change to actual route change event










  
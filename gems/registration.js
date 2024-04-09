// JavaScript code for showing/hiding the registration form popup

const popup = document.querySelector('.registration-form-popup');
const openBtn = document.getElementById('open_popup_btn');
const closeBtn = document.getElementById('close_btn');

// Open the popup when the button is clicked
openBtn.addEventListener('click', function() {
  popup.style.display = 'block';
});

// Close the popup when the close button is clicked
closeBtn.addEventListener('click', function() {
  popup.style.display = 'none';
});

// Close the popup when clicked outside the form
window.addEventListener('click', function(event) {
  if (event.target === popup) {
    popup.style.display = 'none';
  }
});

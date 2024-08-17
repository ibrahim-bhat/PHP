// Get the modals
var loginModal = document.getElementById("loginModal");
var signupModal = document.getElementById("signupModal");

// Get the buttons that open the modals
var openLoginModalBtn = document.getElementById("openLoginModal");
var openSignupModalBtn = document.getElementById("openSignupModal");

// Get the <span> elements that close the modals
var closeLoginModalBtn = document.getElementById("closeLoginModal");
var closeSignupModalBtn = document.getElementById("closeSignupModal");

// Open the login modal
openLoginModalBtn.onclick = function () {
  loginModal.style.display = "block";
};

// Open the signup modal
openSignupModalBtn.onclick = function () {
  signupModal.style.display = "block";
};

// Close the login modal
closeLoginModalBtn.onclick = function () {
  loginModal.style.display = "none";
};

// Close the signup modal
closeSignupModalBtn.onclick = function () {
  signupModal.style.display = "block";
};

// Close the modal if the user clicks outside of it
window.onclick = function (event) {
  if (event.target == loginModal) {
    loginModal.style.display = "none";
  }
  if (event.target == signupModal) {
    signupModal.style.display = "none";
  }
};


    // Show the alert box and then hide it after 3 seconds
    window.onload = function() {
        var alertBox = document.getElementById('alertBox');
        if (alertBox) {
            setTimeout(function() {
                alertBox.classList.add('hide');
            }, 3000); // 3 seconds
        }
    };
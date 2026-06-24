document.addEventListener("DOMContentLoaded", function () {

  const password = document.getElementById("password");
  const confirmPassword = document.getElementById("confirmPassword");
  const confirmMsg = document.getElementById("confirmMsg");
  const form = document.getElementById("registerForm");

  // ===============================
  // PASSWORD MATCH CHECK
  // ===============================
  confirmPassword.addEventListener("input", function () {

    if (confirmPassword.value === "") {
      confirmMsg.innerText = "";
      return;
    }

    if (password.value === confirmPassword.value) {
      confirmMsg.innerText = "Passwords match ✅";
      confirmMsg.style.color = "lightgreen";
    } else {
      confirmMsg.innerText = "Passwords do not match ❌";
      confirmMsg.style.color = "red";
    }

  });

  // ===============================
  // FORM SUBMIT CHECK
  // ===============================
  form.addEventListener("submit", function (e) {
    if (password.value !== confirmPassword.value) {
      alert("Passwords do not match ❌");
      e.preventDefault();
    }
  });

});


// ===============================
// SHOW / HIDE PASSWORD
// ===============================
function togglePassword(id) {
  let input = document.getElementById(id);
  input.type = input.type === "password" ? "text" : "password";
}


// ===============================
// USERNAME CHECK
// ===============================
document.getElementById("username").addEventListener("keyup", function () {
  let username = this.value;
  let msg = document.getElementById("userMsg");

  if (username.length < 3) {
    msg.innerText = "Username too short ❌";
    msg.style.color = "red";
    return;
  }

  fetch("php/check_user.php?username=" + username)
    .then(res => res.text())
    .then(data => {
      msg.innerText = data;
      msg.style.color = data.includes("taken") ? "red" : "lightgreen";
    });
});


// ===============================
// EMAIL CHECK
// ===============================
document.getElementById("email").addEventListener("keyup", function () {
  let email = this.value;
  let msg = document.getElementById("emailMsg");

  if (!email.includes("@")) {
    msg.innerText = "Invalid email ❌";
    msg.style.color = "red";
  } else {
    msg.innerText = "Valid email ✅";
    msg.style.color = "lightgreen";
  }
});


// ===============================
// PASSWORD STRENGTH
// ===============================
document.getElementById("password").addEventListener("keyup", function () {
  let pass = this.value;
  let msg = document.getElementById("passMsg");

  if (pass.length < 6) {
    msg.innerText = "Weak password ❌";
    msg.style.color = "red";
  } else {
    msg.innerText = "Strong password ✅";
    msg.style.color = "lightgreen";
  }
});
document.getElementById("username").addEventListener("keyup", function () {
  let username = this.value;
  let msg = document.getElementById("userMsg");

  if (username.length < 3) {
    msg.innerText = "Username too short ❌";
    msg.style.color = "red";
    return;
  }

  fetch("php/check_user.php?username=" + username)
    .then(res => res.text())
    .then(data => {
      msg.innerText = data;
      msg.style.color = data.includes("taken") ? "red" : "lightgreen";
    });
});
// ===============================
// SHOW ERROR MESSAGE FROM URL
// ===============================
window.onload = function () {
  const params = new URLSearchParams(window.location.search);
  const error = params.get("error");
  const alertBox = document.getElementById("alertBox");

  if (error === "username") {
    alertBox.innerText = "Username already exists ❌";
    alertBox.style.display = "block";
  }

  if (error === "email") {
    alertBox.innerText = "Email already exists ❌";
    alertBox.style.display = "block";
  }

  // Auto hide after 3 sec
  setTimeout(() => {
    alertBox.style.display = "none";
  }, 3000);
};
setTimeout(() => {
  const alertBox = document.querySelector(".alert-box");
  if (alertBox) {
    alertBox.style.display = "none";
  }
}, 3000);
// Get elements
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");
const confirmMsg = document.getElementById("confirmMsg");
const form = document.getElementById("registerForm");

// Real-time check
confirmPassword.addEventListener("keyup", () => {
  if (password.value !== confirmPassword.value) {
    confirmMsg.style.color = "red";
    confirmMsg.innerText = "Passwords do not match ❌";
  } else {
    confirmMsg.style.color = "green";
    confirmMsg.innerText = "Passwords match ✅";
  }
});

// Prevent form submit if mismatch
form.addEventListener("submit", (e) => {
  if (password.value !== confirmPassword.value) {
    e.preventDefault(); // stop form
    confirmMsg.style.color = "red";
    confirmMsg.innerText = "Passwords do not match ❌";
  }
});

// Toggle password visibility
function togglePassword(id) {
  const input = document.getElementById(id);
  input.type = input.type === "password" ? "text" : "password";
}
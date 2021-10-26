function myFunction() {
    var x = document.getElementById("password");
    var y = document.getElementById("togglePassword");
    if (x.type === "password") {
      x.type = "text";
      y.classList.remove('bi-eye-slash');
      y.classList.add('bi-eye');
    } else {
      x.type = "password";
      y.classList.remove('bi-eye');
      y.classList.add('bi-eye-slash');
    }
  }

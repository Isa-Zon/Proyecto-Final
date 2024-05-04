document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting normally
    
    // Get the username and password entered by the user
    var username = document.getElementById("username").value;
    var password = document.getElementById("descripcion").value;
    var username = document.getElementById("precio").value;
  });
<!DOCTYPE html>
<html>
<head>
  <title>Feedback Form</title>
  <style>
    /* CSS Styles */
    body {
      background-color: cadetblue;
      margin: 0;
    }

    .form-group {
      margin-bottom: 20px;
      margin-left: 2%;
    }

    label {
      display: block;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="Number"],
    textarea {
      width: 90%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-left: 2%;
    }

    .h2 {
      margin-left: 2%;
    }

    button[type="submit"] {
      display: block;
      width: 90%;
      margin-left: 4%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 20px; /* Add margin-top to create a gap */
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }

    .container {
      width: 55%;
      margin-left: 22%;
    margin-top: -2%;
      border-radius: 4px;
      border: 2px solid black;
      margin-bottom: 20px; /* Add margin-bottom to create a gap */
      background-color: aliceblue;
    }
    .f{
      margin-left: 28%;
     margin-top: -2%;
      font-size: 50px;
    }
  </style>
</head>
<body>
<form action="FEEDBACK1.php" method="post" >
  <div class="f"><h2><svg xmlns="http://www.w3.org/2000/svg" width="70" height="60" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
  <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
</svg>Feedback Form</h2> </div>
  <div class="container" id="contact">
    <h2 class="h2">Contact Us:-</h2>
    <form id="contact-form">
      <div class="form-group">
        <label for="firstname">First name:</label>
        <input type="text" id="firstname" name="firstname" required>
      </div>
      <div class="form-group">
        <label for="lastname">Last name:</label>
        <input type="text" id="number" name="lastname" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="cno">Contact-no:</label>
        <input type="text" id="cno" name="cno" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <button type="submit">Submit</button><br>
    </form>
  </div>
  <script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission

      // Retrieve form values
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var message = document.getElementById('message').value;

      // Display alert message
      var alertMessage = 'Thank you for your message, ' + name + '! We will get back to you at ' + email + ' as soon as possible.';
      alert(alertMessage);

      // Clear form fields
      document.getElementById('name').value = '';
      document.getElementById('email').value = '';
      document.getElementById('message').value = '';
    });
  </script>
</body>
</html>

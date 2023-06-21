<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: #f5f5f5;
      margin: 0;
      padding: 20px;
    }

    h1 {
      color: #333;
    }

    .success {
      color: #006400;
      margin-top: 10px;
    }

    .error {
      color: #FF0000;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <h1>User Registration</h1>

  <?php
  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate form data (you can add more validation rules)
    if (empty($name) || empty($email) || empty($password)) {
      echo '<div class="error">Please fill in all fields.</div>';
    } else {
      // Perform registration logic (e.g., store data in a database)
      // Here, we'll just display a success message
      echo '<div class="success">Registration successful. Thank you, ' . $name . '!</div>';
    }
  }
  ?>
</body>
</html>

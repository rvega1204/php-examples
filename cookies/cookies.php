<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set character encoding to UTF-8 for better compatibility -->
    <meta charset="UTF-8">
    
    <!-- Ensure proper scaling on different devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page title for identification -->
    <title>PHP Form with Cookies</title>
    
    <!-- Add some basic styling for form -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            margin: auto;
        }
        input[type="text"], input[type="submit"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        label {
            font-weight: bold;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Main heading for the form -->
    <h1 class="center">Cookie Form</h1>
    
    <!-- Form to collect user input for name and age -->
    <form action="setcookie.php" method="POST">
        
        <!-- Label and input field for Name -->
         <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">
         </div>
        
        <!-- Label and input field for Age -->
         <div style="width: fit-content">
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" placeholder="Enter your age">
         </div>
        
        <!-- Submit button to send the form data -->
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
</head>
<body>
    <h1>Client-Side and Server-Side Scripting</h1>

    <!-- Client-side scripting: Display the client's current date and time using JavaScript -->
    <script type="text/javascript">
        // Write the current date and time of the client's browser
        document.write("Client's date: " + new Date() + "<br/>");
    </script>

    <!-- Server-side scripting: Display the server's current date and time using PHP -->
    <?php
        // Set the timezone to Costa Rica
        date_default_timezone_set("America/Costa_Rica");
        
        // Output the server's current date
        echo "Server's date is " . date("Y-m-d");
        
        // Output the server's current time in a 12-hour format with AM/PM
        echo " and the time is " . date("h:i:sa");
    ?>
</body>
</html>
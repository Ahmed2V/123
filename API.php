<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My APIs</title>
</head>
<body>
    <h1>Welcome to My APIs</h1>
    <p>Click the links below to access the APIs:</p>
    <ul>
        <?php
        // Define an array of API endpoints and their corresponding names
        $apis = array(
            "API 1" => "https://yourdomain.com/Favorite.php",
            "API 2" => "https://yourdomain.com/login.php",
            "API 3" => "https://yourdomain.com/provider.php",
            "API 4" => "https://yourdomain.com/MyData.php",
            "API 5" => "https://yourdomain.com/announcment.php",
            "API 6" => "https://yourdomain.com/resset.php",
            "API 7" => "https://yourdomain.com/signup.php",
            "API 8" => "https://yourdomain.com/function.php",
            // Add more API endpoints as needed
        );

        // Loop through the array and generate links for each API
        foreach ($apis as $name => $url) {
            echo "<li><a href='$url'>$name</a></li>";
        }
        ?>
    </ul>
</body>
</html>
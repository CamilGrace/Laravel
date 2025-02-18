<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Page</title>
    <style>
        /* Centering the content */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
        }

        .container {
            text-align: center;
        }

        h1 {
            font-size: 3rem;
            color: #333;
        }

        p {
            font-size: 1.5rem;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- <h1>Hello, Laravel!</h1>
        <p>Camil Grace J. Bumatay</p> -->
        
        <p>Hello, {{ $name }}</p> 
    </div>
</body>
</html>

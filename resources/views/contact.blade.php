<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Webpage</title>
    <style>
        /* Reset default margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #3498db, #8e44ad);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-10px);
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.1em;
            line-height: 1.5;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: #3498db;
            border-radius: 50px;
            color: white;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #2980b9;
        }

        .icon {
            display: inline-block;
            margin-top: 20px;
            font-size: 24px;
        }

        .icon i {
            margin: 0 10px;
            color: #fff;
            transition: color 0.3s ease;
        }

        .icon i:hover {
            color: #3498db;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My Stylish Page</h1>
        <p>This is an example of a modern webpage design using HTML5 and CSS3. It's responsive, clean, and easy on the eyes.</p>
        <a href="#" class="btn">Explore More</a>
        <div class="icon">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
        </div>
    </div>

    <!-- Font Awesome untuk ikon -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

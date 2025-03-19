<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System - Login</title>
    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f39c12, #d35400);
            color: #fff;
        }

        #maincontainer {
            width: 100%;
            max-width: 400px;
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.7);
            text-align: center;
            transition: 0.3s;
        }

        #maincontainer:hover {
            transform: translateY(-5px);
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #f39c12;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #f39c12;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            transition: 0.3s;
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 12px #f39c12;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #4caf50;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #45a049;
            transform: scale(1.05);
        }

        @media screen and (max-width: 600px) {
            #maincontainer {
                width: 90%;
                padding: 30px;
            }
        }
    </style>
</head>

<body>

    <div id="maincontainer">
        <h1>Library Management System</h1>
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>
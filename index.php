<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment #3 - Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E3F2FD;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
            max-width: 350px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: #0D47A1;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
            color: #333;
        }
        input[type="number"] {
            width: 90%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #0D47A1;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
            transition: background 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #1976D2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Assignment #3</h1>
        <form action="result.php" method="get">
            <label for="x">Value of x:</label>
            <input type="number" name="x" id="x" step="any" required>

            <label for="y">Value of y:</label>
            <input type="number" name="y" id="y" step="any" required>

            <label for="z">Value of z:</label>
            <input type="number" name="z" id="z" step="any" required>

            <input type="submit" value="Calculate">
        </form>
    </div>
</body>
</html>

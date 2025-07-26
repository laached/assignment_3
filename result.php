<?php
$output = "";

if (isset($_GET['x']) && isset($_GET['y']) && isset($_GET['z'])) {
    $x = floatval($_GET['x']);
    $y = floatval($_GET['y']);
    $z = floatval($_GET['z']);

    $x_escaped = escapeshellarg($x);
    $y_escaped = escapeshellarg($y);
    $z_escaped = escapeshellarg($z);

    $command = "python3 process_input.py $x_escaped $y_escaped $z_escaped";
    $output = shell_exec($command);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment #3 - Result</title>
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
            max-width: 600px;
            width: 100%;
        }
        h1 {
            color: #0D47A1;
            text-align: center;
            margin-bottom: 20px;
        }
        .result-box {
            background: #FFF3E0;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #FFD180;
            font-size: 14px;
            line-height: 1.6;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background: #0D47A1;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .back-link:hover {
            background: #1976D2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Assignment #3 - Result</h1>
        <div class="result-box">
            <?php echo $output ? $output : "No data received. Please go back and enter values."; ?>
        </div>
        <a href="index.php" class="back-link">← Back to Form</a>
    </div>
</body>
</html>

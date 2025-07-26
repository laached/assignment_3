
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
    <title>result</title>
</head>
<body>
    <div>
        <?php echo $output; ?>
    </div>
</body>
</html>

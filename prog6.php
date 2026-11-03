<?php
$file = "counter.txt";

// Check whether the counter file exists
if (!file_exists($file)) {
    file_put_contents($file, 0);
}

// Read the current visitor count
$count = (int)file_get_contents($file);

// Increment the visitor count
$count++;

// Save the updated count
file_put_contents($file, $count);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel ="stylesheet" href ="style2.css">
    <title>Visitor Counter</title>
</head>
<body>

    <h1>Welcome to My Website</h1>
    <h2>Website Visitor Counter</h2>

    <h3>
        Total Number of Visitors:
        <?php echo $count; ?>
    </h3>

</body>
</html>

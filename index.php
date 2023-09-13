<?php
$name = 'Avneesh';
$price = 2
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Variables</title>
        <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?php echo $name; ?></h2>
    <p>The cost of your candy is
        $<?php echo $price; ?> per pack. </p>
</body>
</html>
<?php
$name = 'Guest';
$name = 'Avneesh';

$price = 5;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Updating variables</title>
        <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Welcome<?php echo $name; ?></h2>
    <p> The cost of your candu is
        $<?php echo $price; ?>per pack.</p>
</body>
</html>
<?php
$nutrition = [
    'fat'   => 42,
    'sugar' => 60,
    'salt'  => 3.5,
    'protein' => 2.6,
];
?>
<!DOCTYPE html>
<html>
    <head> . . . </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>Nutrition (per100g)</h2>
        <p>Fat:   <?php echo $nutrition['fat']; ?>%</p>
        <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
        <p>Salt:  <?php echo $nutrition['salt']; ?>%</p>
        <p>Protein:  <?php echo $nutrition['Protein']; ?>%</p>
</body>
</html>
<?php
$best_sellers = ['chocolate', 'Mints', 'Fudge','Licorice', 'Bubble Gum', 'Toffee', 'Jelly beans',];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Updating Variables</title>
        <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <ul>
        <li><?php echo $best_sellers[0]; ?></li>
        <li><?php echo $best_sellers[1]; ?></li>
        <li><?php echo $best_sellers[2]; ?></li>
        <li><?php echo $best_sellers[3]; ?></li>
        <li><?php echo $best_sellers[4]; ?></li>

</ul>
</body>
</html>




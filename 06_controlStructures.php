
<?php 
$score = 80;

$colors = array("red", "green", "blue");
foreach ($colors as $color) {
    echo $color;
}

echo "<br>";
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 10);

echo "<br>";

for ($i = 0; $i < 10; $i++) {
    echo $i;
}
echo "<br>";
for ($i = 0;print $i, $i < 10; $i++) {
    echo $i;
}
echo "<br>";

?>

<?php
$day = "Wednesday";

switch ($day) {
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    case "Thursday":
        echo "Today is Thursday";
        break;
    case "Friday":
        echo "Today is Friday";
        break;
    default:
        echo "Today is a weekend!";
}
echo "<br>";
?>

<?php
$day = "Friday";

$result = match ($day) {
    "Monday" => "Today is Monday",
    "Tuesday" => "Today is Tuesday",
    "Wednesday" => "Today is Wednesday",
    "Thursday","Friday" => "Today is Thursday and friday",

    // "Friday" => "Today is Friday",
    default => "Today is a weekend!"
};

echo $result;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($score>50) :?>
        <h1>Congratulations! You passed the exam.</h1>
    <?php else :?>
        <h1>Sorry, you failed the exam.</h1>
    <?php endif;?>
</body>
</html>
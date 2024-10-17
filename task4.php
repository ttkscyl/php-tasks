<!DOCTYPE html>

<body>

<form method="post" action="">
    <label for="num">enter num of num</label>
    <input type="number" id="num" name="num" min="1" required><br><br>

    <?php
    if (isset($_POST['num']) && $_POST['num'] > 0) {
        $num = $_POST['num'];

        echo "<h3>Enter the numbers:</h3>";
        for ($i = 1; $i <= $num; $i++) {
            echo "<label for='num$i'>Number $i:</label>";
            echo "<input type='number' id='num$i' name='numbers[]' required><br><br>";
        }
        echo "<input type='submit' name='calculate' value='Calculate Average'><br><br>";
    }
    ?>

</form>

<?php
if (isset($_POST['calculate']) && !empty($_POST['numbers'])) {
    $numbers = $_POST['numbers'];
    $total = array_sum($numbers);

    $A = $total / count($numbers);

    echo "<p>Total: $total</p>";
    echo "<p>Average:  $A </p>"; 
}
?>

<!-- <?php

$num = (int)readline("Enter how many numbers you will enter: ");
$total = 0;

for ($i = 0; $i < $num; $i++) {
    $temp_num = (int)readline("Enter a number: ");
    $total += $temp_num;
}

echo $total;
echo ($total / $num);
?> -->

</body>
</html>
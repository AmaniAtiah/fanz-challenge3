<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Maximum And Minmum</h1>

            <?php
            include 'maxmin.php';

            $array = [5,4,9,3,10,14];
            $result = findMaxAndMin($array);
            echo "<p>The maximum number in the array is: ". $result['Max']. "</p>";
            echo "<p>The minimum number in the array is: ". $result['Min']. "</p>";

            ?>
        </div>
    </div>
</body>

</html>
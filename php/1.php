<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        echo "Title";
        $color = 'green';
        ?>
    </title>
</head>
<body bgcolor = '<?php echo $color;?>'>
    <?php
        echo "learning of php"; 
        // $veriablename = value;
        $year = 2025;
        $pi = 3.14;
        $class = " It ";
        echo "<br> year is= $year,<br>pi = $pi,<br>class= $class";

        $year ="2024";
        print "<br> year is= $year,<br>pi = $pi,<br>class= $class";
    ?>
</body>
</html>
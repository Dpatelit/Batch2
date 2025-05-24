<?php
    if(isset($_GET['length'],$_GET['submit'],$_GET['width'],$_GET['depth'])==TRUE)
    {
        header('location:../3_input_volume_calculator.php');
    }
    else
    {
        $length = $_GET['length'];
        $width = $_GET['width'];
        $depth = $_GET['depth'];
        echo $length,$width,$depth;

        $volume = $length *$width *$depth;
        echo "<h3>volume is = $volume</h3>";
    }
?>
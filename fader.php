<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Fade in and out slider</title>
<link href="styles.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="script.js"></script>


</head>

<body>

<?php
    $slideimages = array('<img src="http://lorempixel.com/abstract/600/400"/>','<img src="http://lorempixel.com/people/600/400"/>','<img src="http://lorempixel.com/birds/600/400"/>','<img src="http://lorempixel.com/animals/600/400"/>','<img src="http://lorempixel.com/cars/600/400"/>');
?>

<div id="slideshow">
    <?php
        foreach($slideimages as $slidim){
            echo '<div>'.$slidim.'</div>';
            
        }
    ?>



</div>



</body>
</html>
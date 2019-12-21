<?php

include './faceModel.php';

$probability = compare('./elon1.jpg', './obama.jpg');

// Compare is a function that takes 2 images and returns a probability match. 
// Anything over 0.4 is considered a match.

echo $probability;

?>

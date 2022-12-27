<?php

/*********** The match expression branches evaluation based on an identity check of a value. Similarly to a switch statement, a match expression has a subject expression that is compared against multiple alternatives.  
 ***********/

 $food = 'cake';

 $matchValue = match ($food) {
    'apple' => 'This food is apple',
    'orange' => 'This food is orange',
    'cake' => 'This food is cake',
 };


 echo $matchValue;

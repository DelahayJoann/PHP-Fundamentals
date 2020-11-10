<?php

$countries = array('Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine');
echo $countries[2];

$family = ["Benoit","Elodie","Vivianne","Paul"];
print_r($family);


// Then, create an array describing your favourite recipes
//Display its content using the print_r
$recipes = array(
    0 => 'pasta',
    1 => 'brown sugar',
    2 => 'salted butter',
);
print_r($recipes);

//Then, create an array listing your favourite films
//Then, using that array, display only the one film you like best using its index
$favorite_movies = ["Mickey","Minnie","Donald","Pluto"];
echo $favorite_movies[0];

var_dump($countries);
?><br><br><br><?php

$sister = array(
    'firstname' => 'Elodie',
    'lastname' => 'Delahay',
    'age' => 36,
    'favourite_movies' 	=> ["idk","idk2"],
);
$sister['hobbies'] = ["horses", "musics", "series", "drawing"];

$me = array(
    'firstname' => 'Joann',
    'lastname' => 'Delahay',
    'age' => 37,
    'favourite_movies' => $favorite_movies,
    'sister' => $sister,
);
$me['hobbies'] = ["video games", "musics", "live streaming", "programming"];

echo '<pre>';
print_r($me);
echo '</pre>';

echo '<br>'. count($me['sister']['hobbies']);
echo '<br>'. count($me['hobbies']);
//echo '<br>'. count($me['sister']['hobbies']) + count($me['hobbies']);
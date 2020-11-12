<?php

$countries = array('Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine');
echo $countries[2].'<br>';

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

$total=0;

echo '<br>'.$total += count($me['sister']['hobbies']);
echo '<br>'.$total += count($me['hobbies']);

$me['hobbies'][] = 'taxidermy';

$me['lastname'] = 'Durand';

echo '<pre>';
print_r($me);
echo '</pre>';

$soulmate = array(
    'firstname' => 'test',
    'lastname' => 'test1',
    'age' => 30,
    'favourite_movies' => $favorite_movies,
    'sister' => $sister,
);
$soulmate['hobbies'] = ["video games", "travel", "live streaming", "fiesta"];

$kid_intersect = [];
$kid_merge = [];

$kid_intersect['hobbies'] = array_intersect($me['hobbies'], $soulmate['hobbies']);
$kid_merge['hobbies'] = array_merge($me['hobbies'], $soulmate['hobbies']);

echo '<pre>';
print_r($kid_intersect);
echo '</pre>';

echo '<pre>';
print_r($kid_merge);
echo '</pre>';

$web_development = array(
    'frontend' => [],
    'backend' => [],
);

$web_development['frontend'][] = 'XHTML';
$web_development['backend'][] = 'Ruby on rails';
$web_development['frontend'][] = 'CSS';
$web_development['frontend'][] = 'Flash';
$web_development['frontend'][] = 'Javascript';
$web_development['frontend'] = array_replace($web_development['frontend'],array_fill_keys(array_keys($web_development['frontend'], 'XHTML'),'HTML'));
unset($web_development['frontend'][array_search('Flash',$web_development['frontend'])]);

echo '<pre>';
print_r($web_development);
echo '</pre>';
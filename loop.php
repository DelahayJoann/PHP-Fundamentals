<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach($pronouns as $key => $pronoun){
    echo ($key == 2)?$pronoun.' codes'.'<br>':$pronoun.' code'.'<br>';
}

$number = 1;

while($number < 121){
    echo $number.' ';
    $number++;
}
echo '<br>';
for($number = 1; $number < 121; $number++){
    echo $number.' ';
}

$employes = ["Alfred","Georges","Albert","Micheline","Rose Bertha"];
foreach($employes as $employe){
    echo '<br>'.$employe;
}

$countries = ["Belgium", "France", "Germany", "Switzerland", "Spain", "Italia", "Portugal", "Greece", "Finland", "Sweden"];
$countries_ISO = ["BE", "FR", "DE", "CH", "ES", "IT", "PT", "GR", "FI", "SE"];

echo '<br><br><select name="countries" id="country-select">';
foreach($countries as $country){
    echo '<option value="'.$country.'">'.$country.'</option>';
}
echo '</select>';

$countriesAndISO = array_combine($countries_ISO,$countries);

echo '<br><br><select name="countries" id="country-select">';
foreach($countriesAndISO as $ISO => $country){
    echo '<option value="'.$ISO.'">'.$country.'</option>';
}
echo '</select>';
<?php

echo capitalize('joann');

function capitalize($string){
    return ucfirst($string);
}

echo '<br>'.date("Y");

date_default_timezone_set("Europe/Brussels");
echo '<br>'.date("d-m-Y h:i:s");

echo '<br>'.sum(1,'a');

function sum($first,$second){
    if(is_integer($first) && is_integer($second)) return $first+$second;
    else return "Error: argument is the not a number.";
}

echo '<br>'.acronym('Je fais un test');

function acronym($string){
    if(preg_match_all('/\b(\w)/',strtoupper($string),$result)) {
        return implode('',$result[1]);
    }
    return 'ERROR';
}

$ae_string = "caecotrophie chaenichthys microsphaera sphaerotheca";
echo '<br>'.æ($ae_string);

$æ_string = "cæcotrophie chænichthys microsphæra sphærotheca";
echo '<br>'.ae($æ_string);

function æ($string){
    return preg_replace('/ae/','æ',$string);
}
function ae($string){
    return preg_replace('/æ/','ae',$string);
}

feedback("Incorrect email address", "error");

function feedback($msg,$type = 'notice'){
    $array = ["error","warning","notice"];
    foreach($array as $string)
    {
        if(!strcmp($string,strtolower($type))) 
        {
            echo '<br><div class="'.strtolower($type).'">'.ucfirst(strtolower($type)).': '.$msg.'.</div>';
        }
    }
}

echo '<br><br><br><H1>Generate a new word</H1>';
function generate2words(){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $rand1 = rand(1,5);
    $rand2 = rand(7,15);
    $randomString1 = '';
    $randomString2 = '';

    for ($i = 0; $i <= $rand2; $i++) {
        if($i < $rand1){
            $index = rand(0, strlen($characters) - 1); 
            $randomString1 .= $characters[$index]; 
        }
        $index = rand(0, strlen($characters) - 1); 
        $randomString2 .= $characters[$index]; 
    } 
    echo '<br>'.$randomString1;
    echo '<br>'.$randomString2;
}
if(isset($_GET['generate'])){generate2words();}
echo '<br><form><button type="submit" name="generate" value="generate">Generate</button></form>';

echo '<br><br>'.strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

echo '<br><br>'.calculate_cone_volume(5,2);
function calculate_cone_volume($r,$h){
    return $r**2 *pi() *$h *(1/3);
}
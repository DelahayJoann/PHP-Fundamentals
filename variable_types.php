<?php
$user_name = 'Joann';
$user_age = 37;
$user_eyes = 'pers';
$user_family = array(
    0 => 'Benoit',
    1 => 'Elodie',
    2 => 'Vivianne',
    3 => 'Paul',
);
$user_hungry_status = false;
?>

<html>
    <p>Hi! My name is <?php echo $user_name ?>.</p>
    <p>I am <?php echo $user_age ?> years old.</p>
    <p>My eyes are <?php echo $user_eyes ?>.</p>
    <p>The first person in my family is <?php echo $user_family[0] ?>.</p>
    <p>Am i hungry? <?php if($user_hungry_status){echo 'Yes';}else{echo 'No';} ?></p>
</html>

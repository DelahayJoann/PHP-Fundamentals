<?php
/**
 * Series of exercises on PHP conditional structures.
*/ 

// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if( $room_is_filthy ){
	echo "Yuk, Room is dirty : let's clean it up !";
	//cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

?><br><br><br><?php
// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4]; 

if( $room_filthiness == "health hazard" ){
	echo "<br>Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == "dirty" ){
    echo "<br>Yuk, Room is dirty : let's clean it up !";
} else if( $room_filthiness == "filthy" ){
    echo "<br>It's ok, Room is filthy!";
} else if( $room_filthiness == "clean" ){
	echo "<br>Yuk, Room is clean!";
} else {
	echo "<br>Nothing to do, room is neat/immaculate.";
}

?><br><br><br><?php
// 2. "Different greetings according to time" Exercise
date_default_timezone_set('Europe/Brussels');

$now = (time() - strtotime("today")) / 60; // How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.
if(300 <= $now && $now <= 540){
    echo "<br>Good morning !";
}
else if(541 <= $now && $now <= 720){
    echo "<br>Good day !";
}
else if(721 <= $now && $now <= 960){
    echo "<br>Good afternoon !";
}
else if(961 <= $now && $now <= 1260){
    echo "<br>Good evening !";
}
else{
    echo "<br>Good night !";
}

?><br><br><br><?php
// 3. "Different greetings according to age" Exercise

if (isset($_GET['age'],$_GET['gender'],$_GET['language'])){
    if(intval($_GET['age']) < 12){
        if($_GET['gender'] == 'male'){
            echo ($_GET['language'] == 'yes')? "<br>Hello little boy!" : "<br>Bonjour petit garçon!";
        }
        else if($_GET['gender'] == 'male'){
            echo ($_GET['language'] == 'yes')? "<br>Hello little girl!" : "<br>Bonjour petite fille!";
        }
        else{
            echo ($_GET['language'] == 'yes')? "<br>Hello little kid!" : "<br>Bonjour petit enfant!";
        }
        
    }
    else if((intval($_GET['age']) >= 12) && (intval($_GET['age']) < 18)){
        if($_GET['gender'] == 'male'){
            echo ($_GET['language'] == 'yes')? "<br>Hello mister Teen!" : "<br>Bonjour jeune adolescent!";
        }
        else if($_GET['gender'] == 'male'){
            echo ($_GET['language'] == 'yes')? "<br>Hello miss Teen!" : "<br>Bonjour jeune adolescente!";
        }
        else{
            echo ($_GET['language'] == 'yes')? "<br>Hello Teen!" : "<br>Bonjour l'ado!";
        }
    }
    else if((intval($_GET['age']) >= 18) && (intval($_GET['age']) < 115)){
        if($_GET['gender'] == 'male'){
            echo ($_GET['language'] == 'yes')? "<br>Hello Mister!" : "<br>Bonjour Monsieur!";
        }
        else if($_GET['gender'] == 'female'){
            echo ($_GET['language'] == 'yes')? "<br>Hello Madame!" : "<br>Bonjour Madame!";
        }
        else{
            echo ($_GET['language'] == 'yes')? "<br>Hello!" : "<br>Bonjour!";
        }
    }
    else if(intval($_GET['age']) >= 115){
        if($_GET['gender'] == 'male'){
            
            echo ($_GET['language'] == 'yes')? "<br>Wow! Still alive Mister? Are you a robot, like me ? Can I hug you ?" : "<br>Wow! Encore en vie Monsieur ? Etes-vous un robot, comme moi ? Puis-je vous enlacer ?";
        }
        else if($_GET['gender'] == 'female'){
            echo ($_GET['language'] == 'yes')? "<br>Wow! Still alive Madame? Are you a robot girl, like me ? Can I hug you ?" : "<br>Wow! Encore en vie Madame? Etes-vous un robot, comme moi ? Puis-je vous enlacer ?";
        }
        else{
            echo ($_GET['language'] == 'yes')? "<br>Wow! Still alive? Are you a robot, like me ? Can I hug you ?" : "<br>Wow! Encore en vie? Etes-vous un robot, comme moi ? Puis-je vous enlacer ?";
        }
    }
}
// Form (incomplete)
?>
<br><br><br>
<form method="get" action="#">
	<label for="age">Please type your age :</label>
	<input type="" name="age"><br>
    <label for="gender">Please type your gender :</label>
	<input type="radio" id="male" name="gender" value="male" checked>
    <label for="male">male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">female</label>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">other</label><br>
    <label for="language">Do you speak english :</label>
	<input type="radio" id="yes" name="language" value="yes" checked>
    <label for="yes">Yes</label>
    <input type="radio" id="no" name="language" value="no">
    <label for="no">No</label><br>
    <input type="submit" name="submit" value="Greet me now">

</form>

<br><br><br><?php

if (isset($_GET['age2'],$_GET['gender2'],$_GET['name2'])){
    if(intval($_GET['age2']) >= 21 && intval($_GET['age2']) <= 40){
        if($_GET['gender2'] == 'female'){
            echo "welcome to the team ".$_GET['name2']." !";
        }
        else{
            echo "Sorry you don't fit the criteria ".$_GET['name2'];
        }    
    }
}

if (isset($_GET['age2'],$_GET['gender2'],$_GET['name2'])){
    $returned = "<br>Sorry you don't fit the criteria ".$_GET['name2'];

    if(intval($_GET['age2']) >= 21 && intval($_GET['age2']) <= 40){
        if($_GET['gender2'] == 'female'){
            $returned =  "<br>welcome to the team ".$_GET['name2']." !";
        }    
    }
    echo $returned;
}

?>

<form name="Soccer_Team" method="get" action="#">

	<label for="age2">Please type your age :</label>
    <input type="" name="age2"><br>
    
    <label for="gender2">Please type your gender :</label>
	<input type="radio" id="male2" name="gender2" value="male" checked>
    <label for="male">male</label>
    <input type="radio" id="female2" name="gender2" value="female">
    <label for="female2">female</label>
    <input type="radio" id="other2" name="gender2" value="other">
    <label for="other2">other</label><br>

    <label for="name2">Name :</label>
    <input type="" name="name2"><br>
    
    <input type="submit" name="submit2" value="Check">
</form>

<br><br><br><?php
    if (isset($_GET['name3'],$_GET['grade3'])){
        switch(true){
            case $_GET['grade3'] < 4 : echo "This work is really bad. What a dumb kid! ";break;
            case $_GET['grade3'] < 10 : echo "This is not sufficient. More studying is required.";break;
            case $_GET['grade3'] == 10 : echo "barely enough!";break;
            case $_GET['grade3'] < 15 : echo "Not bad!";break;
            case $_GET['grade3'] < 19 : echo "Bravo, bravissimo!";break;
            default : echo "Too good to be true : confront the cheater!";
        }
    }
?>

<form name="Grade_Student" method="get" action="#">
   
    <label for="name3">Name :</label>
    <input type="" name="name3"><br>
    <label for="grade3">Grade:</label>
    <input type="" name="grade3"><br>
    
    <input type="submit" name="submit2" value="Check">
</form>

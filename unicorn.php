<?php

$img_human = '<iframe src="https://giphy.com/embed/l0HlSNOxJB956qwfK" width="360" height="480"</p>';
$img_cat = '<iframe src="https://giphy.com/embed/BzyTuYCmvSORqs1ABM" width="480" height="480"</p>'; 
$img_unicorn = '<iframe src="https://giphy.com/embed/j0kQJxo5mzGYb4EvWK" width="480" height="377"</p>';
    
    if(isset($_GET['question']))echo ($_GET['question'] == 'human' ? $img_human : ($_GET['question'] == 'cat' ? $img_cat : $img_unicorn));
?>

<form name="Unicorn" method="get" action="#">

    <label for="question">What are you? </label>
	<input type="radio" id="human" name="question" value="human" checked>
    <label for="human">human</label>
    <input type="radio" id="cat" name="question" value="cat">
    <label for="cat">cat</label>
    <input type="radio" id="unicorn" name="question" value="unicorn">
    <label for="unicorn">unicorn</label><br>
 
    <input type="submit" name="submit" value="Check">
</form>
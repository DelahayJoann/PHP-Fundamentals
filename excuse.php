<?php

class Apology{
    var $name;
    var $gender;
    var $teacherName;
    var $reasons = array(
        0 => ["a encore vomi ses céréales ce matin","souffre de l'écolite aigüe","ne s'est pas encore remit de la fessée qu'il a eu hier...tromatisme psychologique lourd"],
        1 => ["a encore perdu sa grand-mère hier soir","a son poisson rouge qui s'est noyé","a son chien qui s'est mit à miauler"],
        2 => ["a aqua-poney","fait le tour du monde en bicylette", "traverse le Sahara en sous-marin"],
        3 => ["s'est perdu sur le chemin de l'école", "est l'enfant de qui? Je n'ai pas d'enfant.","aide une petite vieille à traverser... toute la ville"],
    );

    function __construct($name, $gender,$teacherName)
   {
       $this->name = $name;
       $this->gender = $gender;
       $this->teacherName = $teacherName;
   }
}
?>

<form action="#" method="get">
      <label for="name">Kid name :</label>
      <input type="text" name="name" id="name"><br>

      <label for="gender">Male</label>
      <input type="radio" name="gender" id="male" value='male'>
      <label for="gender">Female</label>
      <input type="radio" name="gender" id="female" value='female'><br>

      <label for="teacherName">Teacher name :</label>
      <input type="text" name="teacherName" id="teacherName"><br>

      <label for="reasonCategory">Apology type :</label>
      <input type="radio" name="reasonCategory" id="illness" value='0'> illness
      <input type="radio" name="reasonCategory" id="death" value='1'> death
      <input type="radio" name="reasonCategory" id="extracurricular" value='2'> extracurricular
      <input type="radio" name="reasonCategory" id="others" value='3'> others<br>

      <input type="submit" value="submit">
</form>

<?php

if( isset($_GET['name'], $_GET['gender'], $_GET['teacherName'], $_GET['reasonCategory'] ) && !empty($_GET['name']) && !empty($_GET['teacherName'])){
    $anApology = new Apology($_GET['name'],$_GET['gender'],$_GET['teacherName']);
    $generate = "Monsieur ".$anApology->teacherName.", veuillez excuser l'absence de ".$anApology->name.". ".(($anApology->gender=="male")? "Il" : "Elle")." ".$anApology->reasons[$_GET['reasonCategory']][rand(0,count($anApology->reasons[$_GET['reasonCategory']])-1)].".";
    echo $generate;
}
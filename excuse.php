<?php

class Apology{
    var $name;
    var $gender;
    var $teacherName;
    var $reasonCategory;
    var $reasons = array(
        0 => ["a encore vomi ses céréales ce matin","souffre de l'écolite aigüe","ne s'est pas encore remit de la fessée qu'il a eu hier...tromatisme psychologique lourd","subit un vieillissement prématuré","n'arrive plus à ouvrir les yeux"],
        1 => ["a encore perdu sa grand-mère hier soir","a son poisson rouge qui s'est noyé","a son chien qui est encore décédé","a son chat qui est encore mort (oui...ils ont plusieurs vies)","subit la perte tragique de son hamster"],
        2 => ["a aqua-poney","fait le tour du monde en bicylette", "traverse le Sahara en sous-marin","organise une conférence au MIT","participe à «La roue de la fortune»"],
        3 => ["s'est perdu sur le chemin de l'école", "est l'enfant de qui? Je n'ai pas d'enfant.","aide une petite vieille à traverser... toute la ville","cherche encore sa voie...littéralement","est en pleine introspection et souhaite rester isolé"],
    );

    function __construct($name, $gender,$teacherName,$reasonCategory)
   {
       $this->name = $name;
       $this->gender = $gender;
       $this->teacherName = $teacherName;
       $this->reasonCategory = $reasonCategory;
   }

   function generateApology(){
        $generate = "<div style='border: 1px solid black;border-top: 0;'>";
        $generate .= "<p style='width: 100%; text-align: right; padding: 15px;'>".date('d m Y')."</p>";
        $generate .= "<p style='width: 100%;padding-left: 15px;'>Monsieur/Madame ".$this->teacherName.",</p>";
        $generate .= "<p style='width: 100%;padding-left: 15px;'>Veuillez excuser l'absence de ".$this->name.". ".(($this->gender=="male")? "Il" : "Elle")." ".$this->reasons[$this->reasonCategory][rand(0,count($this->reasons[$this->reasonCategory])-1)].".</p>";
        $generate .= "<p style='width: 100%;padding-left: 15px;'>Acceptez, Monsieur/Madame, mes salutations distinguées,</p>";
        $generate .= "<p style='width: 100%;padding-left: 15px;'>Un parent.</p>";
        $generate .= "</div>";
        return $generate;
    }
}
?>
<!doctype html>
<html>
    <head>
        <title>Apology</title>
        <link rel="icon" href="./favicon.ico" type="image/x-icon" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style type="text/css">
            .row {
                width: 100%;
            }
            .container {
                padding: 0;
            }
            form {
                margin-top: 100px;
            }
        </style>
    </head>
    <Body style="width:45%;margin:auto;">

        <form action="#" method="get" class="container" style='padding: 15px; border: 1px solid black;'>
            <div class="form-group row">
                <label for="name" class="col-4">Kid name :</label>
                <input type="text" class="form-control col-8" name="name" id="name">
            </div>
            <div class="form-check form-check-inline row">
                <label for="reasonCategory" class="form-check-label col-4">Gender :</label>
                <label for="gender" class="form-check-label col-4"><input type="radio" class="form-check-input" name="gender" id="male" value='male' checked> Male</label>
                <label for="gender" class="form-check-label col-4"><input type="radio" class="form-check-input" name="gender" id="female" value='female'> Female</label>
            </div>
            <br><br>
            <div class="form-group row">
                <label for="teacherName" class="col-4">Teacher name :</label>
                <input type="text" class="form-control col-8" name="teacherName" id="teacherName">
            </div>
            <div class="form-check form-check-inline row">
                <label for="" class="form-check-label col-4">Apology type :</label>
                <label for="illness" class="form-check-label col-2"><input type="radio" class="form-check-input" name="reasonCategory" id="illness" value='0' checked>illness</label>
                <label for="death" class="form-check-label col-2"><input type="radio" class="form-check-input" name="reasonCategory" id="death" value='1'>death</label>
                <label for="extracurricular" class="form-check-label col-2"><input type="radio" class="form-check-input" name="reasonCategory" id="extracurricular" value='2'>extra</label>
                <label for="others" class="form-check-label col-2"><input type="radio" class="form-check-input" name="reasonCategory" id="others" value='3'>others</label>      
            </div>
            <br><br>
            <div class="form-group row d-flex justify-content-center">
                <input type="submit" value="submit">
            </div>
        </form>

<?php
if( isset($_GET['name'], $_GET['gender'], $_GET['teacherName'], $_GET['reasonCategory'] ) && !empty($_GET['name']) && !empty($_GET['teacherName'])){
    $anApology = new Apology($_GET['name'],$_GET['gender'],$_GET['teacherName'],$_GET['reasonCategory']);
    echo $anApology->generateApology();   
}
?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
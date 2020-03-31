<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- En-tête de la page -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Template HTML</h1>
        <div class="nav_button">
            <button>Exos</button>
            <button>Algos</button>
            <button>BDD</button>
            <button>LaPoste</button>
        </div>
    </header>
    <form method="POST" action="#">

        <?php
        $form = new autoform;
        $form->getInputText("Nom","name");
        $form->getInputText("Sexe","gender");
        $form->getInputSubmit("Valider","submit");
        echo "</br>";
        $form->getInputText("Age","age");
        $form->getInputText("Taille","taille");
        $form->getInputSubmit("Valider","submit");
        if(!empty($_POST)){
            echo $_POST["Nom"];
        }

        public function getTextArea($name,$label){
            echo '<label for="'.$label.'">'.$name.'</label>';
            echo '<textarea name="'.$name.'"></textarea>';

        }
$auto->getTextArea("Votre texte: ","txt");
        ?>
    </form>
<footer>

</footer>
</body>
</html>
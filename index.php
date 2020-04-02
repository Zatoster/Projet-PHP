<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- En-tête de la page -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<?php
include 'header.php';
?>
<body>
<h2>État des Stories</h2>
<div class="tab">
    <div>
        <?php
        $us = array(
            1 => "User Story N.1",
            2 => "User Story N.2",
            3 => "User Story N.3",
            4 => "User Story N.4",
            5 => "User Story N.5",
            6 => "User Story N.6",
            7 => "User Story N.7",
            8 => "User Story N.8",
            9 => "User Story N.9",
            10 => "User Story N.10",
            11 => "User Story N.11",
            12 => "User Story N.12",
            13 => "User Story N.13",
            14 => "User Story N.14",
            15 => "User Story N.15",
            16 => "User Story N.16",
        );
        echo implode('<br/>', $us);
        ?>
    </div>
    <div>
        <?php
        $nbNotFinished = 0;
        $notFinished = "Inachevée";
        $stories = array(
            1 => "Achevée",
            2 => "Inachevée",
            3 => "Inachevée",
            4 => "Inachevée",
            5 => "Inachevée",
            6 => "Inachevée",
            7 => "Inachevée",
            8 => "Inachevée",
            9 => "Inachevée",
            10 => "Inachevée",
            11 => "Inachevée",
            12 => "Inachevée",
            13 => "Inachevée",
            14 => "Inachevée",
            15 => "Inachevée",
            16 => "Inachevée",
        );
        foreach ($stories as $it) {
            if ($it === $notFinished) {
                $nbNotFinished++;
            }
        }
        echo implode('<br/>', $stories);
        ?>
    </div>

</div>
<div class="result">
    <p>Le nombre de Stories finie(s) est de <?php echo 16 - $nbNotFinished; ?> </p>
    <p>Le nombre de Stories non-finie(s) est de <?php echo $nbNotFinished; ?> </p>
</div>
<?php
include 'footer.php';
?>
</body>
</html>
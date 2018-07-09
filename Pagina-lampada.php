<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lampada</title>
    <style>
        div {
            text-align :center;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $lampada = 'desligada.jpg';
            if (!empty($_POST['ligar']) 
            && $_POST['ligar']=='ligada') {
                $lampada = 'ligada.jpg';
            }
        ?>
        <img src="<?php echo $lampada ?>">
        <form method="post">
            <button type="submit" name="Ligar" value="ligada">
                Ligar
            </button>
            <button type="submit" name="Desligar" value="Desligada">
                Desligar
            </button>
        </form>
    </div>
</body>
</html>
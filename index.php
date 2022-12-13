<?php
    //Paragrafo a mia scelta
    $paragraph = "Quella bella ragazza con le tette grandi";
    $censoredWord = $_GET['tette'];
    $newParagraph = str_replace("$censoredWord", "***", $paragraph);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Paragrafo:<?php echo $paragraph?><p>
    <p>Lunghezza:<?php echo strlen($paragraph)?></p>
    <?php echo $newParagraph ?>
</body>
</html>
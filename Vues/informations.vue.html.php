<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations</title>
</head>
<body>

<?php
    foreach ($getInformations as $information) :
        ?>
    
    <?php echo $information['themail']; ?> 
    <hr>
    <?php echo $information['themessage']; ?>
    <hr>
<?php
endforeach;
?>

<div>    
    <form action="" name="monForm" method="POST">
        <input name="themail" type="email" placeholder="Votre mail" required><br>
        <textarea name="themessage" placeholder="Votre message" required></textarea><br>
        <input type="submit" value="Envoyer">
    </form>
</div>

</body>
</html>
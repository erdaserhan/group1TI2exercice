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
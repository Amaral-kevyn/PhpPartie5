<!--Exercice 2 Variable-->
<?php 
    $title = 'Exercice 2';
    include 'header.php';
    
?>

<h1>Exercice 2</h1>

<p>
    <?php
           
        include 'exercice1.php';
        echo $month[2];

    ?>
</p>

<?php 
    include 'footer.php';
?>
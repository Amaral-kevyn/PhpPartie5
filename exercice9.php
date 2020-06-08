<!--Exercice 9 Variable-->
<?php 
    $title = 'Exercice 9';

    include 'header.php';

?>

<h2>Exercice 9</h2>
    <p>
        <?php

            include 'exercice7.php';

            foreach($NumberDepartement as $element)
            {
                echo $element . ' ,'; 
            }

        ?>
    </p>

<?php 
    include 'footer.php';
?>
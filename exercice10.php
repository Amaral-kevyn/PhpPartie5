<!--Exercice 10 Variable-->
<?php 
    $title = 'Exercice 10';

    include 'header.php';

?>

<h2>Exercice 10</h2>

         <?php 

            include 'exercice7.php';

            foreach ($NumberDepartement as $key => $value) {?>
               <p> <?php  echo " Le département {$value} a le numéro {$key}";}?></p>
            
        
       
    

<?php 
    include 'footer.php';
?>
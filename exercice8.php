<!--Exercice 8 Variable-->
<?php 
    $title = 'Exercice 8';

    include 'header.php';
    
?>

<h2>Exercice 8</h2>
    <p>
        <?php

                $month[0] = 'Janvier';
                $month[1] = 'Fevrier';
                $month[2] = 'Mars';
                $month[3] = 'Avril';
                $month[5] = 'Mai';
                $month[6] = 'Juin';
                $month[7] = 'Juillet';
                $month[8] = 'Août';
                $month[9] = 'Septembre';
                $month[10] = 'Octobre';
                $month[11] = 'Novembre';
                $month[12] = 'Décembre';

                foreach($month as $element)
                {
                    echo $element . ' ,'; // affichera $month[0], $month[1] etc.
                }

        ?> 
    </p> 
      
<?php 
    include 'footer.php';
?>
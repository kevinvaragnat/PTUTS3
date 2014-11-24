<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title></title>
    </head>
    <body>
        
     
       
        
        <?php
        include ("planning.php") ;
        
//        $test = date ( "w"  );
//        echo '<table>';
//        echo "<tr><th>Numéro de semaine : $test</th></tr>";
//        echo '<tr><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th></tr>' ;
//        
//        for($i=0 ; $i<6 ; $i++)
//        {
//            echo '<tr>';
//            
//            for($j=0 ; $j<13 ;$j++)
//            {
//                echo '<td>';
//                echo "<p>j = $i</p>";
//                echo "<p>i = $j</p>";
//                echo '</td>';
//            }
//            echo '</tr>';
//        }
//        echo '</table>';
        
        $test = new planning();
        // faire la verif de contrainte sur la date et x
        if(isset($_GET["x"]))
        {
            $dateDebut = $_GET["d"] ;
            $x = $_GET["x"] ;
            if ($x == -1){
                $dateDebut = $test->afficherPlanning2($x , $dateDebut);
            }
            else {
                if ($x == 1){
                    $dateDebut = $test->afficherPlanning2($x , $dateDebut);
                }
                else {
                   $dateDebut = $test->afficherPlanning();
                }
            }
        }
        else {
            $dateDebut = $test->afficherPlanning();
        }
        
        
        
        echo "<p><a href='test.php?x=1&d=$dateDebut'> semaine suivante </a></p>";
        echo "<p><a href='test.php?x=-1&d=$dateDebut'> semaine precedente </a></p>";
        ?>
        
<!--        <form id="suivante" action="test.php" method="post">
        <input type="hidden" name="x" value=1/>
        <input type="hidden" name="d" value=<?php $dateDebut ?>>
        </form>
        <a href='test.php' onclick='document.getElementById("suivante").submit()'>lien suivant</a>
        
        <form id="prec" action="test.php" method="post">
        <input type="hidden" name="x" value=-1/>
        <input type="hidden" name="d" value=<?php $dateDebut ?>>
        </form>
        <a href='test.php' onclick='document.getElementById("prec").submit()'>lien prec</a>-->
        
        
        
        
        
    </body>
</html>

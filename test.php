<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
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
        //$lol = $test->getJour();
        echo "$lol";
        
        $test->affcherPlanning();
        
        
        
        ?>
    </body>
</html>

<?php
use DateTime;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

setlocale(LC_ALL, 'fr_FR');

class planning {
    
    private $jour ;
    private $listeCreneau ;
    private $semaine ;
    private $dateTime ;
    private $timestamp ;
    private $tab ;
    
    public function planning () {
        $this->dateTime = new DateTime() ;
        $this->timestamp = $this->dateTime->getTimestamp();
        $this->jour = strftime("%A - %d/%m/%Y",  mktime(0, 0, 0, date('m'), date('d')-date('N')+1, date('Y')));
        $this->tab = array(array());
        
        
        
    }
    
    public function getJour() {
        return $this->jour ;
    }
    // trop bien a garder   $troll = strftime("%A - %d/%m/%Y",  mktime(0, 0, 0, date('m'), date('d')-date('N')+($i+1), date('Y'))) ;
    
    public function affcherPlanning(){
        
        //remplissage du tableau avec les bonnes infos
         for ($j=1 ; $j<=6 ; $j++){
            $jourSemaine = strftime("%A - %d/%m/%Y",  mktime(0, 0, 0, date('m'), date('d')-date('N')+($j), date('Y'))) ;
            $this->tab[1][$j] = $jourSemaine ;
            echo $jourSemaine ;
         }
        

        
        for ($i=1 ; $i<=13 ; $i++){
        $this->tab[$i][1] = $i.":00 - " . ($i+1) . ":00" ;
            $this->tab[$i][1] = 0 ;
        }
        
        echo 'prout' ;
        
        
        //affichage v2
        
//        echo '<table>';
//        for ($i=0 ; $i<=7 ; $i++) {
//            echo '<tr>';
//            for ($j=0 ; $j<=14 ; $j++){
//                $prout = $this->tab[$i][$j];
//                echo'<td>';
//                echo 'test';
//                echo '</td>';
//            }
//            echo'</tr>';
//        }
//        
//        
//        echo '</table>';
//        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
//       echo '<table>';
//        //echo '<tr><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th></tr>' ;
//        
//        for($i=0 ; $i<6 ; $i++)
//        {
//            $troll = strftime("%A - %d/%m/%Y",  mktime(0, 0, 0, date('m'), date('d')-date('N')+($i+1), date('Y'))) ;
//            echo '<tr>';
//            echo '<td>';
//            echo "$troll";
//            echo '</td>';
//
//                
//            for($j=0 ; $j<13 ;$j++)
//            {
//                
//                echo '<td>';
//                //echo "<p>/*j = $i</p>";
//                //echo "<p>i = $j</p>";
//                echo '</td>';
//            }
//            echo '</tr>';
//        }
//        echo '</table>';
//    }

}
}
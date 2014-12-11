<?php
include("creneau.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

setlocale(LC_ALL, 'fr_FR');

class planning {
    
    private $tab ;
    private $listeCreneau ;
    
    public function planning () {

        $this->tab = array(array());
        $this->listeCreneau = array();
        
        
        
    }
    
//    public function getJour() {
//        return $this->jour ;
//    }
    // trop bien a garder   $troll = strftime("%A - %d/%m/%Y",  mktime(0, 0, 0, date('m'), date('d')-date('N')+($i+1), date('Y'))) ;
    
    public function afficherPlanning(){
        
        $this->generation(0);
        
        return 0;
        


    }
    
    public function afficherPlanning2($x , $semaineDebut){
        
        if ($x == -1)
        {
            $this->generation($semaineDebut-1);

            return ($semaineDebut-1);
        }
        
        if ($x== 1){
            
            $this->generation($semaineDebut+1);
            
            return $semaineDebut+1;
        }
        
    }
    
    private function generation($semaineDebut){
        $jourDebut = $semaineDebut*7;
        echo '<table>';
        for ($i=0 ; $i<=13 ; $i++){
            echo '<tr>';
            for ($j=0 ; $j<=6 ; $j++){
                if ($i==0 and $j==0)
                {
                    echo '<td>CaseVide</td>';
                }
                else {
                    if ($i == 0 and $j >= 1)
                    {
                        $jourSemaine = strftime("%A - %d/%m/%Y",  mktime(0, 0, 0, date('m'), (date('d')-date('N'))+$jourDebut+($j), date('Y'))) ;
                        $this->tab[$i][$j] = $jourSemaine ;
                        echo "<td>".$this->tab[$i][$j]."</td>";
                    }
                    else {
                        if ($j == 0 and $i >=1)
                        {
                            $this->tab[$i][$j] = ($i+6).":00 - " . ($i+7) . ":00" ;
                            echo "<td>".$this->tab[$i][$j]."</td>";
                        }
                        else {
                           //echo '<td onclick="location.href=\'lien.html\'">casevide</td>';
                            
                            $currentCreneau = new creneau(strftime("%Y-%m-%d",mktime(0, 0, 0, date('m'), (date('d')-date('N'))+$jourDebut+($j), date('Y'))), $i+6) ;
                            //$this->listeCreneau[] = $currentCreneau;
                            if ($currentCreneau->estLibre()){
                                echo "<td><a href=nouveauRDV.php?j=".$currentCreneau->getJour()."&h=".$currentCreneau->getHorraire().">Prendre Rendez-Vous</a></td>";
                                //echo '<td onclick="location.href=\'lien.html\'">libre</td>';
                            }
                            else {
                                echo "<td>Non Libre</td>";
                            }
                            
                            
                        }
                    }
                }
            }
        }
        
        echo '</table>';
        
                
       
    }
    
    
}
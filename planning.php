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
    
    public function afficherPlanning(){
        
        //remplissage du tableau avec les bonnes infos
        //$debut = date('d')-date('N');
        //$debut2 = generation($debut);
        
        //return $debut2;
        
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
                        $jourSemaine = strftime("%A - %d/%m/%Y",  mktime(0, 0, 0, date('m'), date('d')-date('N')+($j), date('Y'))) ;
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
                           echo '<td>casevide</td>';
                        }
                    }
                }
            }
        }
        
        echo '</table>';
                
        return date('d')-date('N');

    }
    
    public function afficherPlanning2($x , $dateDebut){
        
        if ($x == -1)
        {
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
                            $jourSemaine = strftime("%A - %d/%m/%Y",  mktime(0, 0, 0, date('m'), $dateDebut-7+$j, date('Y'))) ;
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
                               echo '<td>casevide</td>';
                            }
                        }
                    }
                }
            }

            echo '</table>';
            return $dateDebut-7;
        }
        
        if ($x== 1){
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
                            $jourSemaine = strftime("%A - %d/%m/%Y",  mktime(0, 0, 0, date('m'), $dateDebut+7+$j, date('Y'))) ;
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
                               echo '<td>casevide</td>';
                            }
                        }
                    }
                }
            }

            echo '</table>';
            return $dateDebut+7;
        }
        
    }
    
    private function generation($dateDebut){
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
                        $jourSemaine = strftime("%A - %d/%m/%Y",  mktime(0, 0, 0, date('m'), $dateDebut+($j), date('Y'))) ;
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
                           echo '<td>casevide</td>';
                        }
                    }
                }
            }
        }
        
        echo '</table>';
                
        return $dateDebut;
    }
}
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rendezVous
 *
 * @author Kevin
 */
class rendezVous {
    private $date ;
    private $heure ;

    public function rendezVous($date , $heure){
        $this->date = $date;
        $this->heure = $heure;   
        
    }
    
    
    public function ajoutRDVBase() {
        
        
        require '../admin/bin/params.php';
        mysql_connect($host,$user,$password) or die('Erreur de connexion au SGBD.');
        mysql_select_db($base) or die('La base de données n\'existe pas');
        
        $sql = "insert into RDV(jour , heure) values( $this->date , $this->heure) ";
        $req = mysql_query($sql) ;
        mysql_close();
    }
    
}

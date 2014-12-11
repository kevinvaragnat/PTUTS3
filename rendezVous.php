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
    private $dateRdv ;
    private $heure ;

    public function rendezVous($dateRdv , $heure){
        $this->dateRdv = date('Y-m-d' , strtotime($dateRdv) ) ;
        $this->heure = $heure;   
        
    }
    
    
    public function ajoutRDV() {
        
        
        
        require '../admin/bin/params.php';
        mysql_connect($host,$user,$password) or die('Erreur de connexion au SGBD.');
        mysql_select_db($base) or die('La base de données n\'existe pas');
        
        $sql = "insert into RDV(jour , heure) values( $this->dateRdv ,  $this->heure)";
        $req = mysql_query($sql) ;
        mysql_close();
    }
    
}



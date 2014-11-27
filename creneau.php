<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of creneau
 *
 * @author Kevin
 */
class creneau {
    
    private $jour;
    private $horaireDebut;
    //private $rdv;
    
    public function creneau($jour , $horairedebut) {
        $this->jour = $jour ;
        $this->horaireDebut = $horairedebut;
    }
    
    public function getJour(){
        return $this->jour ;
    }
    
    public function estLibre() {
        
        require '../admin/bin/params.php';
        mysql_connect($host,$user,$password) or die('Erreur de connexion au SGBD.');
        mysql_select_db($base) or die('La base de données n\'existe pas');
        
        $sql = "SELECT COUNT(NUMRDV) as nb FROM rendezVous where $jour = date and $horaireDebut = heure";
        $req = mysql_query($sql) ;
        $row = mysql_fetch_assoc($req);
        $nombre = $row['nb'];
        mysql_close();


	
        if( $nombre == 0 )
        {
                return true;
        }
        //else


        return false;
        
        // return true or false
    }
    
}

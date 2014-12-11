 <?php
        include 'rendezVous.php';
        
        $jour = $_GET['j'];
        $heure = $_GET['h'];
        
        
        $rdv = new rendezVous($jour , $heure);
        
        $rdv->ajoutRDV();
        
        header("location:test.php");
        
        
?>
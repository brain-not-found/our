<?php
include 'config.php';

class pubC{
	function afficherpubC ($pubC){
		echo 'Nom du produit: '.$pubC->getNomduproduit().'<br>';
		echo 'Reference du produit: '.$pubC->getReferenceduproduit().'<br>';
		echo 'Prix: '.$pubC->getPrix().'<br>';
		echo 'La description: '.$pubC->getLadescription().'<br>';
		
}
/*function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouterpub($pubC){
		$sql='insert into publiciter(Nomduproduit,Referenceduproduit,Prix,Ladescription) values (:Nomduproduit,:Referenceduproduit,:Prix,:Ladescription)';
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Nomduproduit=$pubC->getNomduproduit();
        $Referenceduproduit=$pubC->getReferenceduproduit();
        $Prix=$pubC->getPrix();
        $Ladescription=$pubC->getLadescription();
  
       
		$req->bindValue(':Nomduproduit',$Nomduproduit); 
		$req->bindValue(':Referenceduproduit',intval($Referenceduproduit));
		$req->bindValue(':Prix',intval($Prix));
		$req->bindValue(':Ladescription',$Ladescription);
       
	
            $req->execute();
         }   
             catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }   		
	}
	function afficherpub(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From publiciter";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherPub2()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		 $tableau=array();
		$tabeaui=array(
		'Nomduproduit'=>'',
		'Referenceduproduit'=>'',
		'Prix'=>'',
		'Ladescription'=>'',
		
	
		);
		$sql="select * From publiciter ";
		$db = config::getConnexion();
		try{
		return $db->query($sql);
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        return $tableau;
	
	}
	function supprimerpub($Nomduproduit){
		$sql="DELETE FROM publiciter where Nomduproduit= :Nomduproduit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Nomduproduit',$Nomduproduit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpub($pub,$Nomduproduit){
		$sql="UPDATE publiciter SET Referenceduproduit=:Referenceduproduit,Prix=:Prix,Ladescription=:Ladescription WHERE Nomduproduit=:Nomduproduit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Nomduproduit=$pub->getNomduproduit();
        $Referenceduproduit=$pub->getReferenceduproduit();
        $Prix=intval($pub->getPrix());
        $Ladescription=$pub->getLadescription();
   
           
		$datas = array(':Nomduproduit'=>$Nomduproduit, ':Referenceduproduit'=>$Referenceduproduit,':Prix'=>$Prix,':Ladescription'=>$Ladescription);
		$req->bindValue(':Nomduproduit',$Nomduproduit);
		$req->bindValue(':Referenceduproduit',$Referenceduproduit);
		$req->bindValue(':Prix',$Prix);
		$req->bindValue(':Ladescription',$Ladescription);
		
			
            if($s=$req->execute()){

            }else{
            	die("erreur");
            }
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	public static function recupererpub($Nomduproduit){
		$sql="SELECT * from publiciter where Nomduproduit='$Nomduproduit'";
		try{
		$db = config::getConnexion();
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur ici: '.$e->getMessage());
        }
	}

	
	
	function rechercherListepub($Nomduproduit){
		$sql="SELECT * from publiciter where Nomduproduit=$Nomduproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}
?>
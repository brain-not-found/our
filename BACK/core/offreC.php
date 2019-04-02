<?php
include 'config.php';
class offreC{
	function afficheroffreC($offreC){
		echo 'Nom du produit: '.$offreC->getNomduproduit().'<br>';
		echo 'Prix: '.$offreC->getPrix().'<br>';
		echo 'Reduction: '.$offreC->getReduction().'<br>';
		echo 'La description: '.$offreC->getLadescription().'<br>';
		
    }
/*function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouteroffre($offreC){
		$sql='insert into offre(Nomduproduit,Prix,Reduction,Ladescription) values (:Nomduproduit,:Prix,:Reduction,:Ladescription)';
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Nomduproduit=$offreC->getNomduproduit();
        $Prix=$offreC->getPrix();
        $Reduction=$offreC->getReduction();
        $Ladescription=$offreC->getLadescription();
       
		$req->bindValue(':Nomduproduit',$Nomduproduit); 
		$req->bindValue(':Prix',intval($Prix));
		$req->bindValue(':Reduction',intval($Reduction));
		$req->bindValue(':Ladescription',$Ladescription);

            $req->execute();
         }   
             catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }   		
	}
	function afficheroffre(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From offre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficheroffre2()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		 $tableau=array();
		$tabeaui=array(
		'Nomduproduit'=>'',
		'Prix'=>'',
		'Reduction'=>'',
		'Ladescription'=>'',
	     );
		$sql="select * From offre ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		$liste->execute();
		$i=0;
		while($data=$liste->fetch()){
			
			$tabeaui['Nomduproduit']=$data['Nomduproduit'];
			$tabeaui['Prix']=$data['Prix'];
			$tabeaui['Reduction']=$data['Reduction'];
			$tabeaui['Ladescription']=$data['Ladescription'];
			array_push($tableau,$tabeaui);
		}
		return $tableau;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        return $tableau;
	
	}
	function supprimeroffre($Nomduproduit){
		$sql="DELETE FROM offre where Nomduproduit= :Nomduproduit";
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
	function modifieroffre($offre,$Nomduproduit){
		$sql="UPDATE offre SET Prix=:Prix,Reduction=:Reduction,Ladescription=:Ladescription WHERE Nomduproduit=:Nomduproduit";
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Nomduproduit=$offre->getNomduproduit();
		   $Prix=$offre->getPrix();
        $Reduction=$offre->getReduction();
        $Ladescription=$offre->getLadescription();
        
		$datas = array(':Nomduproduit'=>$Nomduproduit, ':Prix'=>$Prix,':Reduction'=>$Reduction,':Ladescription'=>$Ladescription);
		$req->bindValue(':Nomduproduit',$Nomduproduit);
		$req->bindValue(':Prix',$Prix);
		$req->bindValue(':Reduction',$Reduction);
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

	public static function recupereroffre($Nomduproduit){
		$sql="SELECT * from offre where Nomduproduit='$Nomduproduit'";
		try{
		$db = config::getConnexion();
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur ici: '.$e->getMessage());
        }
	}
	
	
	function rechercheroffre($Nomduproduit){
		$sql="SELECT * from offre where Nomduproduit=$Nomduproduit";
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
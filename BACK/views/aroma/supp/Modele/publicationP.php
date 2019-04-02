<?PHP
require_once 'Modele.php';

include "config.php";
class PublicationP extends Modele {
function afficherPublication($Publication){
		echo "Titre: ".$Publication->gettitre()."<br>";
		echo "Catégorie: ".$Publication->getcate()."<br>";
		echo "Date_Debut: ".$Publication->getDD()."<br>";
		echo "Date_Fin: ".$Publication->getDF()."<br>";
		echo "Description: ".$Publication->getdesc()."<br>";
	    echo "type: ".$Publication->gettype()."<br>";
	}
	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}
	function ajouterPublication($Publication){
		$sql="insert into Publication (Description,Categorie,Date_debut,Date_fin,Titre,Type) values (:Description, :Categorie,:Date_debut,:Date_fin,:Titre,:Type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $titre=$Publication->gettitre();
        $desc=$Publication->getdesc();
        $cate=$Publication->getcate();
        $DD=$Publication->getDD();
        $DF=$Publication->getDF();
		$type=$Publication->gettype();
		$req->bindValue(':Description',$desc);
		$req->bindValue(':Titre',$titre);
		$req->bindValue(':Categorie',$cate);
		$req->bindValue(':Date_debut',$DD);
		$req->bindValue(':Date_fin',$DF);
		$req->bindValue(':Type',$type);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPublicationP(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		 $tableau=array();
		$tabeaui=array(
		'Description'=>'',
		'Categorie'=>'',
		'Date_debut'=>'',
		'Date_fin'=>'',
		'Titre'=>'',
		'Type'=>''
		);
		$sql='select * From publication';
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		$liste->execute();
		$i=0;
		while($data=$liste->fetch()){
			
			$tabeaui['Description']=$data['Description'];
			$tabeaui['Categorie']=$data['Categorie'];
			$tabeaui['Date_debut']=$data['Date_debut'];
			$tabeaui['Date_fin']=$data['Date_fin'];
			$tabeaui['Titre']=$data['Titre'];
			$tabeaui['Type']=$data['Type'];
			array_push($tableau,$tabeaui);
		}
		return $tableau;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        return $tableau;
	}
	function supprimerPublication($Description){
		$sql="DELETE FROM publication where Description= :Description";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Description',$Description);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEmploye($Publication,$des){
		$sql="UPDATE employer SET Desc=:des, titre=:titre,catégorie=:catégorie,date_debut=:date_debut,date_fin=:date_fin WHERE desc=:desc";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$des=$Publication->getdesc();
        $titre=$Publication->gettitre();
        $cate=$Publication->getcate();
        $DD=$Publication->getDD();
        $DF=$Publication->getDF();
		$datas = array(':des'=>$des, ':desc'=>$desc, ':titre'=>$titre,':catégorie'=>$cate,':date_debut'=>$DD,':date_fin'=>$DF);
		$req->bindValue(':des',$des);
		$req->bindValue(':desc',$desc);
		$req->bindValue(':titre',$titre);
		$req->bindValue(':catégorie',$cate);
		$req->bindValue(':date_debut',$DD);
		$req->bindValue(':date_fin',$DF);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($cin){
		$sql="SELECT * from employe where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


 public function getBillets() {
        $sql = 'select Description as description, Categorie as categorie,'
                . ' Date_debut as date_debut, Date_fin as date_fin Titre as titre Type as type from publication'
                . ' order by Description desc';
        $billets = $this->executerRequete($sql);
        return $billets;
    }

public function getBillet($idBillet) {
        $sql = 'select Description as description, Categorie as categorie,'
                . ' Date_debut as date_debut, Date_fin as date_fin Titre as titre Type as type from publication'
                . ' where Description=?';
        $billet = $this->executerRequete($sql, array($idBillet));
        if ($billet->rowCount() > 0)
            return $billet->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
    }

}

?>
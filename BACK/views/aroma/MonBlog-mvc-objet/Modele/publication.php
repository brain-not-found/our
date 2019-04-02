<?PHP
class Publication{
	private $titre;
	private $categorie;
	private $date_debut;
	private $date_fin;
	private $description;
	private $type;
	function __construct($titre,$categorie,$date_debut,$date_fin,$description){
		$this->titre=$titre;
		$this->categorie=$categorie;
		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
		$this->description=$description;
	}
	
	function gettitre(){
		return $this->titre;
	}
	function getcate(){
		return $this->categorie;
	}
	function getDD(){
		return $this->date_debut;
	}
	function getDF(){
		return $this->date_fin;
	}
	function getdesc(){
		return $this->description;
	}
 
    function gettype(){
		return $this->type;
	}
 
	function settitre($titre){
		$this->titre=$titre;
	}
	function setCate($categorie){
		$this->categorie;
	}
	function setDD($date_debut){
		$this->date_debut=$date_debut;
	}
	function setDF($date_fin){
		$this->date_fin=$date_fin;
	}
	function settype($type){
		$this->type;
	}
}

?>
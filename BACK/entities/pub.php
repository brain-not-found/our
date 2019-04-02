<?PHP
class pub{
	private $Nomduproduit;
	private $Referenceduproduit;
	private $Prix;
	private $Ladescription;
   
	
	public function __construct($Nomduproduit,$Referenceduproduit,$Prix,$Ladescription){
		$this->Nomduproduit=$Nomduproduit;
		$this->Referenceduproduit=$Referenceduproduit;
		$this->Prix=$Prix;
		$this->Ladescription=$Ladescription;
		
		
	}
	
	public function getNomduproduit(){
		return $this->Nomduproduit;
	}
	public function getReferenceduproduit(){
		return $this->Referenceduproduit;
	}
	public function getPrix(){
		return $this->Prix;
	}
	public function getLadescription(){
		return $this->Ladescription;
	}
	public function getimage(){
		return $this->image;
	}	
	

	public function setNomduproduit($Nomduproduit){
		$this->Nomduproduit=$Nomduproduit;
	}
	public function setReferenceduproduit($Referenceduproduit){
		$this->Referenceduproduit=$Referenceduproduit;
	}
	public function setPrix($Prix){
		$this->Prix=$Prix;
	}
	public function setLadescription($Ladescription){
		$this->Ladescription=$Ladescription;
	}
	public function setimage($image){
		$this->image=$image;
	}
	
}

?>
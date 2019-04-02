<?PHP
class offre{
	private $Nomduproduit;
	private $Prix;
	private $Reduction;
	private $Ladescription;
	
	public function __construct($Nomduproduit,$Prix,$Reduction,$Ladescription){
		$this->Nomduproduit=$Nomduproduit;
		$this->Prix=$Prix;
		$this->Reduction=$Reduction;
		$this->Ladescription=$Ladescription;
		
	}
	
	public function getNomduproduit(){
		return $this->Nomduproduit;
	}
	public function getPrix(){
		return $this->Prix;
	}
	public function getReduction(){
		return $this->Reduction;
	}
	public function getLadescription(){
		return $this->Ladescription;
	}
	

	public function setNomduproduit($Nomduproduit){
		$this->Nomduproduit=$Nomduproduit;
	}
	public function setPrix($Prix){
		$this->Prix=$Prix;
	}
	public function setReduction($Reduction){
		$this->Reduction=$Reduction;
	}
	public function setLadescription($Ladescription){
		$this->Ladescription=$Ladescription;
	}
	
}

?>
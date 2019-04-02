function verifier(obj){

var expressionReguliere = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$/;

	chaine=obj.value;
	i=0;
	resultat=" ";
	erreur="c";
	tip=obj.getAttribute("tip");
	carractere_speciaux=['&','\"','\'','(','-','_',')','^','$','¨','£',',','?',';','.','/',':','§','!";"\\','=','+','-','*','~','#','{','[',
	'|','`','@'];
	numero=['0','1','2','3','4','5','6','7','8','9'];
	alphabet=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

	if(tip=="chaine"){
		for(i=0;i<chaine.length;i++){

			if(carractere_speciaux.indexOf(chaine[i])!=-1){
				resultat="pas de caractères speciaux ";
			}
			if(numero.indexOf(chaine[i])!=-1){
				resultat="pas de chiffres";
			}
		}
	}

		if(tip=="mail"){
		if (!expressionReguliere.test(chaine))
{
resultat="adresse non valide";
}
	}

	if(tip=="numero"){
		for(i=0;i<chaine.length;i++){

			if(carractere_speciaux.indexOf(chaine[i])!=-1){
				resultat="pas de caractères speciaux ";
			}
			if(alphabet.indexOf(chaine[i])!=-1){
				resultat="pas de lettres";
			}
		}
	}

	if(resultat!=" "){

		if(obj.parentElement.getElementsByTagName("p").length==0){
		erreur=document.createElement("p");
		erreur.setAttribute("id", "err")
		erreur.textContent=resultat;
		erreur.style.color="#fe4d2e";
		erreur.style.fontSize="12px";
		obj.parentElement.appendChild(erreur);
		}
		else{
		document.getElementById("err").textContent=resultat;	
		}
	}	else{
		if(obj.parentElement.getElementsByTagName("p").length==1){
		obj.parentElement.removeChild(document.getElementById("err"));
	}
	}

}
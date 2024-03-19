function Trocar(){
    let tipo = document.getElementById("veiculo").value 

    if(tipo == "Básico"){
        Document.getElementById("imagem").src="basico.png"
    }else if(tipo == "Esporte"){
        Document.getElementById("imagem").src="esporte.png"
    }else{
        Document.getElementById("imagem").src="completo.png"
    }
}
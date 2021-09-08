function alteraUnidadeFrente() {
    var unidades = document.getElementsByClassName("containerImagemTexto");
    var numUnidades = unidades.length;

    var indiceAtual = 0;

    for (i = 0; i < numUnidades; i++) {
        if (unidades[i].className == "containerImagemTexto "){
            unidades[i].className = "containerImagemTexto inativo";

            if (i == numUnidades-1){
                indiceAtual = 0;
            } else {
                indiceAtual = i+1;
            }
        }
    }

    unidades[indiceAtual].className = "containerImagemTexto ";
}

  function alteraUnidadeAtras() {
    var unidades = document.getElementsByClassName("containerImagemTexto");
    var numUnidades = unidades.length;

    var indiceAtual = 0;

    for (i = 0; i < numUnidades; i++) {
        if (unidades[i].className == "containerImagemTexto "){
            unidades[i].className = "containerImagemTexto inativo";

            if (i == 0){
                indiceAtual = numUnidades-1;
            } else {
                indiceAtual = i-1;
            }
        }
    }

    unidades[indiceAtual].className = "containerImagemTexto ";
}
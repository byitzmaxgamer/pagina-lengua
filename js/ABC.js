let count = 0;
let segundos = 30;
let minutos = 0;
let estado = 0;
let tiempo = 0;
let respuestaCorrecta = "";
let respuestaIncorrecta = "";
let letraIngresada = "";

let inicio = Date.now();

function letraAlfabeto(indice){
    arrayAlfabeto = [];
    for (var i = 65; i <= 90; i++) arrayAlfabeto.push(i);
    arrayAlfabeto.splice(14, 0, 209);
    return String.fromCharCode(arrayAlfabeto[indice])
}

function obtenerLetra(){
    let letra = document.querySelector('.entrada').value;
    return letra;
}

function cronometro(){
    segundos--;
    const tiempo = document.querySelector('.tiempo');
    tiempo.innerHTML = 'Tiempo: ' + segundos;
    if (segundos == 0) {
        juegoPerdido();
    }
}

let intervalo = setInterval(cronometro, 1000)

function juegoGanado(){
    clearInterval(intervalo);
    console.log("ganaste");
    tiempo = (Date.now()-inicio) / 1000;
    estado = 1;
    escribirDatos();

}

function juegoPerdido(){
    clearInterval(intervalo);
    console.log("perdiste");
    tiempo = (Date.now()-inicio) / 1000;
    estado = 0;
    respuestaCorrecta = letraAlfabeto(count);
    respuestaIncorrecta = letraIngresada;
    escribirDatos();
}

function compararLetras(){
    letraIngresada = obtenerLetra()
    if (letraIngresada == letraAlfabeto(count)){
        const respuesta = document.querySelector('.respuesta');
        respuesta.style.color = 'green';
        respuesta.innerHTML = 'Respuesta correcta'
        count++;
    }else{
        const respuesta = document.querySelector('.respuesta');
        respuesta.style.color = 'red';
        respuesta.innerHTML = 'Respuesta incorreta';
        juegoPerdido();
    }
    document.querySelector('.entrada').value = "";
    if (count >= 27) juegoGanado();
}

document.addEventListener("keyup", function(event) {
    if (event.code === 'Enter') {
        compararLetras();
    }
});

function escribirDatos(){
   window.location = "../recibir.php?estado="+ estado + "&tiempo=" + tiempo + "&respuestaCorrecta=" + respuestaCorrecta + "&respuestaIncorrecta=" + respuestaIncorrecta;
}
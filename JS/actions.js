function clickImageVyl(){
    window.open("https://twitter.com/CcRVyl", "", "");
}

function clickImageAthzi(){
    window.open("https://twitter.com/Athziri80732043", "", "");
}

function clickImageJoaquinz(){
    window.open("https://twitter.com/JuaquinzOficial", "", "");
}

function clickTutotiales(){
    window.open("../html/Tutoriales.html", "_self");
}

function clickNoticias(){
    window.open("../html/Noticias.html", "_self");
}

function clickRecursos(){
    window.open("../html/Recursos.html", "_self");
}

function clickPreguntas(){
    window.open("../html/Preguntas.html", "_self");
}

function addElement () {
    var corr = document.getElementById("correo").value;
    var ques = document.getElementById("pregunta").value;
    if (corr == "" || !(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(corr))) {
        corr = "Anónimo"
    }
    if (ques == ""){
        document.getElementById("pregunta").focus();
        alert('¡Debe ingresar una pregunta!');
    } else{
        var correo = document.createElement("h3");
        var pregunta = document.createElement("p");
        var salto = document.createElement("br");
        document.getElementById("correo").value = "";
        document.getElementById("pregunta").value = "";
        var newCorr = document.createTextNode(corr + " preguntó:");
        var newPreg = document.createTextNode(ques);
        correo.appendChild(newCorr);
        pregunta.appendChild(newPreg);
        var currentDiv = document.getElementById("articuloBlog"); 
        currentDiv.appendChild(correo);
        currentDiv.appendChild(pregunta);
        currentDiv.appendChild(salto);
    }
}
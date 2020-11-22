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
    window.open("html/Tutoriales.html", "_self");
}

function clickNoticias(){
    window.open("html/Noticias.html", "_self");
}

function clickRecursos(){
    window.open("html/Recursos.html", "_self");
}

function clickPreguntas(){
    window.open("html/Preguntas.php", "_self");
}

function addElement () {
    var corr = document.getElementById("correo").value;
    var ques = document.getElementById("pregunta").value;
    if (corr == "" || !(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(corr))) {
        corr = "Anónimo"
        if (document.getElementById("correo").value === "") {
            document.getElementById("correo").value = corr;
        }else {
            alert('¡Debe ingresar un correo válido o déjelo vacío!');
            document.getElementById("correo").value = "";
            return false;
        }
    }
    if (ques == ""){
        document.getElementById("pregunta").focus();
        alert('¡Debe ingresar una pregunta!');
        return false;
    } else{
        var correo = document.createElement("h3");
        var pregunta = document.createElement("p");
        var salto = document.createElement("br");
        var newCorr = document.createTextNode(corr + " preguntó:");
        var newPreg = document.createTextNode(ques);
        correo.appendChild(newCorr);
        pregunta.appendChild(newPreg);
        var currentDiv = document.getElementById("articuloBlog"); 
        currentDiv.appendChild(correo);
        currentDiv.appendChild(pregunta);
        currentDiv.appendChild(salto);
        return true;
    }
}

function addAnswer () {
    var corr = document.getElementById("correorespuesta").value;
    var ques = document.getElementById("respuesta").value;
    if (corr == "" || !(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(corr))) {
        corr = "Anónimo"
        if (document.getElementById("correorespuesta").value === "") {
            document.getElementById("correorespuesta").value = corr;
        }else {
            alert('¡Debe ingresar un correo válido o déjelo vacío!');
            document.getElementById("correorespuesta").value = "";
            return false;
        }
    }
    if (ques == ""){
        document.getElementById("respuesta").focus();
        alert('¡Debe ingresar una respuesta!');
        return false;
    } else{
        return true;
    }
}

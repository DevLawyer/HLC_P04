$(document).ready(function(){
    $("#mostrarmodal").modal("show");

    $("#panel1").hide();
    $("#flip1").click(function(){
        $("#panel1").slideToggle("slow");
    });
    
    $("#panel2").hide();
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
    
    $("#panel3").hide();
    $("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
    });
    
    $("#panel4").hide();
    $("#flip4").click(function(){
        $("#panel4").slideToggle("slow");
    });
    
    $("#panel5").hide();
    $("#flip5").click(function(){
        $("#panel5").slideToggle("slow");
    });
});

let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");
let searchBtn = document.querySelector(".bx-search");

btn.onclick = function() {

    sidebar.classList.toggle("active");
}

searchBtn.onclick = function() {
    sidebar.classList.toggle("active");
}

function modalJquery(){
    $("#modalJQUERY").modal("show");
}

/* VALIDACION DE NEWSLETTER */
function validar(){
    var nombre = document.getElementById("textName").value.length;
    var email = document.getElementById("textEmail").value.length;

    if(nombre == 0 && email == 0){
        console.log("Nombre y E-mail vacíos.");
        alert("Debe introducir un nombre y un correo electrónico.");
    }
    else if(nombre == 0){
        console.log("Nombre vacío.");
        alert("Debe introducir un nombre.");
    }
    else if(email == 0){
        console.log("E-mail vacío.");
        alert("Debe introducir un correo electrónico.");
    }
    
}

/* FUNCIONES DE EJEMPLO */
function ejemplo1(){
    alert('Hola')
}

function ejemplo2(){
    alert('Función insertada en la etiqueta <a>.')
}

function ejemplo3(){
    alert(''+document.title)
}
function desaparecerMainMenu(){
    document.getElementById("icono-menu-abierto").style.display = "block";
    document.getElementById("icono-menu-cerrado").style.display = "none";
    document.getElementById("main-content").style.display = "none";
}

function aparecerMainMenu(){
    document.getElementById("icono-menu-abierto").style.display = "none";
    document.getElementById("icono-menu-cerrado").style.display = "block";
    document.getElementById("main-content").style.display = "block";
}

function abrirSidebar(){
    document.getElementById("sidebarportaldelcliente").style.display = "block";
}

function cerrarSidebar(){
    document.getElementById("sidebarportaldelcliente").style.display = "none";
}


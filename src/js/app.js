const menusDesplegables = document.querySelectorAll(".dropdown");

//cambiar imagen de fondo

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  var scrollPosition = window.scrollY || window.pageYOffset;
  const elementosOcultos = document.querySelectorAll(".dropdown-content");
  const logotipoScrolled = document.getElementById("logotipo-scrolled");
  const logotipo = document.getElementById("logotipo");

  if (scrollPosition >= 150) {
    header.classList.add("scrolled");
    elementosOcultos.forEach(function (elemento) {
      elemento.classList.add("cambio-color");
    });
    logotipoScrolled.classList.remove("hidden");
    logotipo.classList.add("hidden");
  } else {
    header.classList.remove("scrolled");
    elementosOcultos.forEach(function (elemento) {
      elemento.classList.remove("cambio-color");
    });
    logotipoScrolled.classList.add("hidden");
    logotipo.classList.remove("hidden");
  }
});

menusDesplegables.forEach(function (i) {
  i.addEventListener("click", function () {
    i.classList.toggle("mostrar");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  //menu overlay
  const openMenuButton = document.getElementById("openMenuButton");
  const closeMenuButton = document.getElementById("closeMenuButton");
  const overlayMenu = document.getElementById("overlayMenu");
  openMenuButton.addEventListener("click", function () {
    overlayMenu.style.display = "flex";
    document.body.style.overflow = "hidden"; // Bloquear el desplazamiento
  });

  closeMenuButton.addEventListener("click", function () {
    closeOverlayMenu();
  });

  overlayMenu.addEventListener("click", function (event) {
    if (event.target === overlayMenu) {
      closeOverlayMenu();
    }
  });

  function closeOverlayMenu() {
    overlayMenu.style.display = "none";
    document.body.style.overflow = "auto"; // Habilitar el desplazamiento
  }
});

//function para cambiar clases

function cambiarClases(id, nuevaClase) {
  var div = document.getElementById(id);
  div.removeAttribute("class");
  div.classList.add(nuevaClase);
}


//tablist
document.addEventListener("DOMContentLoaded", function (event) {
  // Mostrar el contenido del primer tab y agregar la clase "active" al enlace del primer tab
  var firstTab = document.getElementsByClassName("tablinks")[0];
  var tabName = firstTab.getAttribute("data-tab");
  document.getElementById(tabName).style.display = "block";
  firstTab.className += " active";
});

function openTab(evt, tabName) {
  // Ocultar todos los contenidos de las pestañas
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Eliminar la clase "active" de todos los enlaces de pestañas
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Mostrar el contenido de la pestaña seleccionada y agregar la clase "active" al enlace de la pestaña
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}


//click en la tablist
var clickableTexts = document.getElementsByClassName("clickable-text");

// Recorrer todos los elementos de texto clicables
for (var i = 0; i < clickableTexts.length; i++) {
  clickableTexts[i].addEventListener("click", function() {
    // Eliminar la clase "active" de todos los elementos de texto
    for (var j = 0; j < clickableTexts.length; j++) {
      clickableTexts[j].classList.remove("active");
    }

    // Agregar la clase "active" al elemento de texto que se ha hecho clic
    this.classList.add("active");
  });
}

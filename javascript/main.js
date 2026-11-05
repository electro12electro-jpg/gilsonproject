const btnmenu = document.querySelector('#btnmenu');
const menu = document.querySelector('#menu');
const titulos = document.querySelectorAll('.accordion .titulo');



btnmenu.addEventListener('click', () => {
    menu.classList.toggle('abierto');
btnmenu.classList.toggle('activo');
}); 

document.querySelectorAll("#menu a").forEach((link) => {
    link.addEventListener("click", () => {
        menu.classList.remove("abierto");
        btnmenu.classList.remove("activo");
    });
}  );

titulos.forEach((titulo) => {
  titulo.addEventListener("click", () => {
    const item = titulo.parentElement;

    document.querySelectorAll(".acordion .item").forEach((otro) => {
      if (otro != item) otro.classList.remove("activo");
    });
    item.classList.toggle("activo");
  });
});

const servicios = [

{titulo: "entrenamientpo personalizado", descripcion: "Programas adaptados a tus necesidades y objetivos.", imagen: "imagenes/img3.jpg", enlace: "servicios.html"},
{titulo: "clases grupales", descripcion: "Sesiones motivadoras y divertidas para todos los niveles.", imagen: "imagenes/img4.jpg", enlace: "servicios.html"},
{titulo: "nutrición y dietética", descripcion: "Asesoramiento nutricional para mejorar tu rendimiento y bienestar.", imagen: "imagenes/img5.jpg", enlace: "servicios.html"},
];

const contenedor= document.querySelector("#cards");

function pintarcards(lista) {
contenedor.innerHTML = "";
lista.forEach((servicio) => {
const art = document.createElement("article");
art.innerHTML = `
  <img src="${servicio.imagen}" alt="${servicio.titulo}">
  <h3>${servicio.titulo}</h3>
  <p>${servicio.descripcion}</p>
  <a href="${servicio.enlace}" class="boton">Más información</a>
`;
contenedor.appendChild(art);
});
}

if (contenedor) pintarcards(servicios);

const slides = document.querySelectorAll(".slide");
let actual = 0;

function mostrar(i) {
    slides.forEach(s => s.classList.remove("activa"));
    slides[i].classList.add("activa");
}

if (slides.length > 0) {
    document.querySelector("#siguiente").addEventListener("click", () => {
        actual = (actual + 1) % slides.length;
        mostrar(actual);
    });
    document.querySelector("#anterior").addEventListener("click", () => {
        actual = (actual - 1 + slides.length) % slides.length;
        mostrar(actual);
    });
}



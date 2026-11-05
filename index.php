<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php include "header.php"; ?>
            <main> 

                <section class="hero">
                    <h1>Bienvenido a Omega Gym</h1>
                    <p>Mejora tu salud y forma física con nuestros entrenamientos especializados</p> 
                    <section class="galeria">
                    <h2>Galería de nuestro gimnasio</h2>
                     <p>Descubre nuestras instalaciones y equipos de última generación</p>
                     <img src="imagenes/img2.jpg" alt="Equipo de ejercicios">
                     <img src="imagenes/img3.jpg" alt="Área de clases">
                </section>
 


               <section class="preguntas">
  <h2>Preguntas frecuentes</h2>
  <div class="accordion">
    <div class="item">
      <button class="titulo">¿Cuáles son los horarios de apertura del gimnasio?</button>
      <div class="contenido">
        <p>Estamos abiertos de lunes a sábado de 6:00 a.m. a 10:00 p.m., y domingos de 8:00 a.m. a 6:00 p.m.</p>
      </div>
    </div>

    <div class="item">
      <button class="titulo">¿Necesito reservar para asistir a las clases grupales?</button>
      <div class="contenido">
        <p>Sí, puedes reservar tu espacio desde nuestra página web o directamente en recepción.</p>
      </div>
    </div>

    <div class="item">
      <button class="titulo">¿El gimnasio cuenta con estacionamiento?</button>
      <div class="contenido">
        <p>Sí, ofrecemos estacionamiento gratuito para nuestros clientes.</p>
      </div>
    </div>
  </div>
</section>

    <div class = "servicios"
    <h2>Servicios Destacados</h2>
    <div class"cards">
   </div>
</section>

<div class="carrusel">
    <img class="slide" src="imagenes/carrusel1.jpg" alt="Imagen 1">
    <img class="slide" src="imagenes/carrusel2.jpg" alt="Imagen 2">
    <img class="slide" src="imagenes/carrusel3.jpg" alt="Imagen 3">
    <button id="anterior" type="button">anterior</button>
    <button id="siguiente" type="button">siguiente</button>

                <section class="membresia">
                <h2>Nuestras membresías</h2>   
                
                    <li>Membresía básica: Acceso a todas las instalaciones</li>
                    <li>Membresía premium: Acceso a todas las instalaciones + clases grupales</li>
                    <li>Membresía VIP: Acceso a todas las instalaciones + clases grupales + asesoría nutricional</li>
                   </section>
                    <section class="promociones">
    <h2>Promociones del Mes</h2>
    <p>Inscríbete en octubre y recibe un 20% de descuento en tu primera membresía.</p>
          </section>
                
           <?php include "footer.php"; ?>
           
    <script src="javascript/main.js" defer></script> 

    </body>
</html>

<?php include 'config/conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda de Helados</title>
  <link rel="icon" href="img/icon.jpg" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/normalize.css">
</head>

<body>

  <!-- Loader -->
  <div class="loader-overlay" id="loader">
    <div class="loader-spinner"></div>
    <p>Cargando paginas ejemplo. :)</p>
  </div>

  <!-- ENCABEZADO -->
  <header>
    <nav class="menu-nav">
      <div class="logo-titulo">
        <img src="img/logo.jpg" alt="Logo de la tienda" class="logo">
        <h1>Tienda de Helados</h1>
      </div>
      <div class="enlaces">
        <a href="#inicio">Inicio</a>
        <a href="#servicios">Servicios</a>
        <a href="#populares">Populares</a>
        <a href="#contacto">Contáctenos</a>
      </div>
    </nav>
  </header>

  <!-- SECCIÓN INICIO -->
  <section id="inicio" class="bloque-inicio">
    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80" alt="Helado delicioso" class="img-inicio">
    <div class="texto-inicio">
      <h2>Bienvenido a nuestra Tienda de Helados</h2>
      <p>Disfruta de los mejores helados artesanales, elaborados con ingredientes frescos y naturales.</p>
      <a href="#servicios" class="btn">Ver servicios</a>
    </div>
  </section>

  <!-- SECCIÓN SERVICIOS -->
  <section id="servicios" class="bloque-servicios">
    <p> En nuestra Tienda de Helados combinamos tradición y creatividad para ofrecerte una experiencia deliciosa e inolvidable. Elaboramos helados artesanales con ingredientes naturales, seleccionados cuidadosamente para garantizar frescura, sabor y calidad en cada cucharada. Descubre una amplia variedad de sabores clásicos y exclusivos, ideales para compartir con tus seres queridos o darte un merecido gusto. ¡Endulza tu día con nosotros! </p>
  </section>

  <!-- SECCIÓN POPULARES -->
  <section id="populares" class="seccion">
    <h2 class="titulo-populares">Helados Populares</h2>
    <div class="container">
      <div class="row">
        <div class="columna columna-33">
          <div class="bloque-servicio">
            <div class="bloque-img-servicio cuadrado-perfecto">
              <img src="img/popular.jpg" alt="Helado de Fresa">
            </div>
            <div class="bloque-contenido-servicio">
              <h3>Helados Populares</h3>
              <p>Nuestros helados más pedidos, preferidos por grandes y chicos. Sabores que siempre vuelven por su frescura y tradición.</p>
              <a href="populares.php" class="boton boton-servicios">Ver más</a>
            </div>
          </div>
        </div>
        <div class="columna columna-33">
          <div class="bloque-servicio">
            <div class="bloque-img-servicio cuadrado-perfecto">
              <img src="img/clasicos.jpg" alt="Helado de Chocolate">
            </div>
            <div class="bloque-contenido-servicio">
              <h3>Helados Clasicos</h3>
              <p>Recetas tradicionales que nunca pasan de moda. Perfectos para quienes buscan un helado con el sabor de siempre y la calidad de antes.</p>
              <a href="clasicos.php" class="boton boton-servicios">Ver más</a>
            </div>
          </div>
        </div>
        <div class="columna columna-33">
          <div class="bloque-servicio">
            <div class="bloque-img-servicio cuadrado-perfecto">
              <img src="img/normales.jpg" alt="Helado de Vainilla">
            </div>
            <div class="bloque-contenido-servicio">
              <h3>Helados normales</h3>
              <p>Opciones simples, ligeras y equilibradas para quienes prefieren algo práctico, sin dejar de disfrutar un buen helado.</p>
              <a href="normales.php" class="boton boton-servicios">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN CONTÁCTENOS -->
  <section id="contacto" class="bloque-contactenos">
    <div class="container-contacto">
      <h2 class="titulo-contacto">Contáctenos</h2>
      <form class="formulario-contacto" action="#" method="POST">
        <input type="text" name="nombre" placeholder="Tu nombre" required>
        <input type="email" name="correo" placeholder="Tu correo electrónico" required>
        <textarea name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
        <button type="submit" class="boton-contacto">Enviar mensaje</button>
      </form>
    </div>
  </section>

  <!-- PIE DE PÁGINA -->
  <footer>
    <div style="max-width: 800px; margin: auto;">
      <h3>¡Gracias por visitarnos!</h3>
      <p>¿Tienes dudas? Contáctanos o síguenos en nuestras redes sociales.</p>

      <div style="margin: 20px 0;">
        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i>Facebook</a>
        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i>Instagram</a>
        <a href="https://wa.me/51950030579" target="_blank"><i class="fab fa-whatsapp"></i>WhatsApp</a>
      </div>

      <p>📍 Dirección: Av. Dulce 123, Lima, Perú</p>
      <p>📞 Teléfono: +51 950030579</p>
      <p>📧 Correo: jhonfernandogomezquispe@gmail.com</p>

      <hr>

      <p>&copy; 2025 Tienda de Helados. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- Scripts al final del body -->
  <script src="js/main.js" defer></script>
  <script src="js/script.js"></script>

  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/v4-shims.min.js"></script>

</body>

</html>
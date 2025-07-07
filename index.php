<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Marián González - CV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      animation: fadeIn 1.5s ease-in;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .container {
      max-width: 900px;
      margin-top: 50px;
      background-color: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    h1,
    h2 {
      color: #0d6efd;
    }

    .btn-primary {
      background-color: #0d6efd;
      border: none;
    }

    ul {
      padding-left: 1.2rem;
    }

    img.profile {
      max-width: 200px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      margin-bottom: 1rem;
    }
  </style>
</head>

<body>
  <div class="container text-center">
    <!-- Imagen -->
    <img src="marian-foto.png" alt="Marián González con cámara profesional" class="profile">

    <!-- Encabezado -->
    <h1>Marián González</h1>
    <p><strong>Desarrolladora Web en formación | Operadora de Cámara y Editora</strong></p>

    <!-- Contacto -->
    <p>📞 650260529 | ✉ baalche07@gmail.com | 📍 Oviedo, Asturias</p>
    <section class="container">
      <h2>🎞️ Portafolio Audiovisual</h2>
      <video controls width="100%" style="max-width:800px; border-radius:10px;">
        <source src="BOBINA MARIAN.mp4" type="video/mp4">
        Tu navegador no soporta vídeo HTML5.
      </video>
    </section>

    <hr>

    <h2>🎯 Perfil Profesional</h2>
    <p>
     Profesional creativa con más de 10 años de experiencia en el sector audiovisual como operadora de cámara y editora de vídeo. Actualmente en transición hacia el desarrollo web. Estudiante del Ciclo Superior en Desarrollo de Aplicaciones Web, con conocimientos en JavaScript, Java, React, PHP, Laravel y herramientas de diseño multimedia.
    </p>

  <h2>💼 Experiencia Profesional</h2>
    <ul class="text-start mx-auto" style="max-width: 700px;">
      <li><strong>Auxiliar Educativa</strong> – Gobierno del Principado de Asturias (2023 - Actualidad)</li>
      <li><strong>Monitora Informática</strong> – Ayuntamiento de Oviedo (2021 – 2022)</li>
      <li><strong>Operadora de Cámara</strong> – Proima Zebrastur &amp; Asturmedia (2013 – 2021)
        <ul><li>Grabación en Conexión Asturias, Deportes TPA y Babel.</li></ul></li>
      <li><strong>Operadora de Cámara y Editora</strong> – Blaster TV (2008 – 2011)
        <ul><li>Publicidad, cortometrajes, programas para TPA, y vídeos industriales.</li></ul></li>
      <li><strong>Operadora de Cámara y Editora</strong> – MediaPro-Madrid (2007 – 2008)
        <ul><li>Grabación en Las Mañanas de La 1 y coberturas en directo.</li></ul></li>
    </ul>


    <h2>🎓 Formación</h2>
    <ul class="text-start mx-auto" style="max-width: 600px;">
      <li>CFGS Desarrollo de Aplicaciones Web – Monte Naranco (en curso)</li>
      <li>Técnica Superior en Iluminación, Captación y Tratamiento de la Imagen </li>
      <li>Técnica Superior en Realización de Proyectos Audiovisuales y Espectáculos </li>
      <li>Certificado en Docencia para el Empleo (Nivel 3)</li>

    </ul>

    <h2>💻 Tecnologías y Herramientas</h2>
    <p><strong>🖥️ Desarrollo:</strong> JavaScript, Java, React, PHP, Laravel, Spring Boot</p>
    <p><strong>🎨 Edición y diseño:</strong> Photoshop, Premiere, After Effects, Final Cut Pro, Illustrator</p>

    <h2>🌐 Idiomas</h2>
    <p>Inglés – Nivel B2</p>

    <div class="mt-4">
      <a href="Currículum Marián Gonzálezz.pdf" class="btn btn-primary" download>📄 Descargar CV en Pdf</a>
    </div>
  </div>
</body>

</html>
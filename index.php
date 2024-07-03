<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atacados Anónimos Tour 2024</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>¡La primera obra sobre Ciberseguridad de Latinoamérica!</h1>
        <p>Explora los desafíos de hoy y del futuro mediante esta experiencia única e inmersiva.</p>
    </header>
    <section id="event-info">
        <h2>Atacados Anónimos Tour 2024</h2>
        <p>Cuando sentimos que las situaciones nos exceden, buscamos ayuda. La ayuda se encuentra siempre en un lugar seguro, donde podemos dejar salir aquello que tenemos guardado y que intentamos esconder. En ese lugar seguro buscamos pares, confidentes, amigos que hayan transitado ese mismo camino oscuro, sorteando obstáculos que se convierten en el andamiaje de nuestro proceso de sanación.</p>
        <button id="register-btn">REGÍSTRATE A LA EXPERIENCIA AA</button>
    </section>
    <div id="form-container" class="hidden">
        <div class="modal-content">
            <form id="registration-form" action="php/contacto.php" method="POST">
                <span id="close-btn" class="close">&times;</span>
                <label for="nombre">Nombre *</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="apellido">Apellido *</label>
                <input type="text" id="apellido" name="apellido" required>
                <label for="correo">Correo electrónico *</label>
                <input type="email" id="correo" name="correo" required>
                <label for="telefono">Teléfono *</label>
                <input type="tel" id="telefono" name="telefono" required>
                <label for="empresa">Empresa *</label>
                <input type="text" id="empresa" name="empresa" required>
                <label for="cargo">Cargo *</label>
                <select id="cargo" name="cargo" required>
                    <option value="">--Selecciona una opción--</option>
                    <option value="Gerente">Gerente</option>
                    <option value="Analista">Analista</option>
                </select>
                <label for="evento">Confirma la función de tu interés *</label>
                <select id="evento" name="evento" required>
                    <option value="">- Selecciona el evento -</option>
                    <option value="Cordoba">Córdoba</option>
                    <option value="Mendoza">Mendoza</option>
                </select>
                <label>
                    <input type="checkbox" name="consentimiento" required>
                    Doy mi consentimiento para recibir comunicaciones promocionales.
                </label>
                <button type="submit">REGISTRARME</button>
            </form>
        </div>
    </div>
    <section id="tour-dates">
        <h2>Conoce las locaciones del Tour 2024</h2>
        <ul>
            <li><strong>14 de Marzo - Córdoba</strong><br>Centro Cultural Córdoba, Argentina, 18:00 a 21:00 hrs</li>
            <li><strong>11 de Abril - Mendoza</strong><br>Teatro Selectro, Argentina, 18:00 a 21:00 hrs</li>
            <li><strong>23 de Abril - Caracas</strong><br>Teatro Los Naranjos, Venezuela, 18:00 a 21:00 hrs</li>
            <li><strong>1 de Agosto - Asunción</strong><br>Teatro Guaraní, Paraguay, 18:00 a 21:00 hrs</li>
            <li><strong>3 de Septiembre - Santa Cruz</strong><br>Teatro Eagles, Bolivia, 18:00 a 21:00 hrs</li>
            <li><strong>5 de Septiembre - La Paz</strong><br>Cinemateca, Bolivia, 18:00 a 21:00 hrs</li>
        </ul>
    </section>
    <section id="gallery">
        <h2>Esto fue la experiencia AA: Real Ransomware 2023</h2>
        <p>Mediante una puesta en escena que recrea una sesión grupal de personas que fueron víctimas de ciberdelitos, al estilo AA, la propuesta busca enseñar y difundir los peligros propios del mundo virtual.
        <br> Deslice para ver más fotos</p>
        <div class="carousel">
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <div class="carousel-images">
                <img src="img/prueba.png" alt="Foto 1">
                <img src="img/prueba2.png" alt="Foto 2">
                <img src="img/prueba3.png" alt="Foto 3">
            </div>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Fortinet, Inc. Todos los derechos reservados.</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>

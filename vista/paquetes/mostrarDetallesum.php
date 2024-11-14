<?php include ("vista/layout/header.php"); ?>
<div class="detalle">
    <!-- Día 01 -->
    <div class="dia">
        <div class="etiqueta">Día 01</div>
        <div class="contenido">
            <h3>Parque Nacional Cañón del Sumidero</h3>
            <p>Recepción en el aeropuerto de Tuxtla Gutiérrez – visita en el parque nacional Cañón del Sumidero – visita Chiapa de Corzo – check-in en el hotel de San Cristóbal de las Casas (se recomienda tomar un vuelo matutino).</p>
        </div>
    </div>

    <!-- Día 02 -->
    <div class="dia">
        <div class="etiqueta">Día 02</div>
        <div class="contenido">
            <h3>San Cristóbal de las Casas</h3>
            <p>Explora los sitios históricos de San Cristóbal, visita el mercado de artesanías y disfruta de la cultura local.</p>
        </div>
    </div>
</div>


<div class="for_paquete">
    <form>
        <div class="fila">
            <input type="text" placeholder="Nombre" required>
            <input type="email" placeholder="Correo Electrónico" required>
        </div>
        <div class="fila">
            <input type="tel" placeholder="Teléfono" required>
            <input type="number" placeholder="Adultos" required>
            <input type="number" placeholder="Menores" required>
        </div>
        <textarea placeholder="Comentarios" rows="3"></textarea>
        <button type="submit">Reservar</button>
    </form>
</div>



<?php require("vista/layout/footer.php");?>
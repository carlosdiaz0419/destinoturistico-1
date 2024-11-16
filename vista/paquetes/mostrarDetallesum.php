<?php include("vista/layout/header.php"); ?>
<article>
    <h1 class="tour-title">Explora con Nosotros</h1>

    <!-- Día 01 -->
    <div class="detalle">
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
        <form action="">
            <div class="fila">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
            </div>
            <div class="fila">
                <input type="number" id="telefono" name="telefono" placeholder="Teléfono" required>
                <input type="email" id="correo" name="correo" placeholder="Correo Electrónico" required>
                <input type="text" id="curp" name="curp" placeholder="Curp" required>
            </div>
            <div class="fila">
                <input type="number" id="pasajeros" name="pasajeros" placeholder="No.Personas" required>
                <p>Precio de Paquete $</p>
                <input type="number" id="precio" name="precio" value="800" readonly>
            </div>
            <textarea id="comentarios" name="comentarios" placeholder="Comentarios" rows="3"></textarea>
            <button type="hidden" name="p" value="reservar">Comprar</button>
        </form>
    </div>
</article>
<?php require("vista/layout/footer.php"); ?>

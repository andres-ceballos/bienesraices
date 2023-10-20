<?php
require_once('functions/functions.php');
include_once('templates/header.php');
?>

<h2 class="fw-300 text-center">Contacto</h2>
<img src="public/img/destacada.jpg" alt="Imagen Destacada Contacto">

<main class="container content-center section">
    <h2 class="text-center fw-300">Llena el formulario de contacto</h2>

    <form action="" class="contact">
        <fieldset>
            <legend>Información personal</legend>
            <label for="name">Nombre:</label>
            <input type="text" id="name" placeholder="Nombre">

            <label for="email">E-mail:</label>
            <input type="email" id="email" placeholder="Correo electrónico">

            <label for="phone_number">Teléfono</label>
            <input type="tel" id="phone_number" placeholder="Teléfono">

            <label for="message">Mensaje:</label>
            <textarea id="message"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información sobre Propiedad</legend>
            <label for="selector">Vende o Compra</label>
            <select id="selector">
                <option selected disabled>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="amount">Cantidad:</label>
            <input type="number" id="amount" min="0" max="100" step="5">
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>

            <div class="contact-form">
                <label for="phoneRadio">Teléfono</label>
                <input type="radio" name="contact" value="telefono" id="phoneRadio">

                <label for="emailRadio">E-mail</label>
                <input type="radio" name="contact" value="email" id="emailRadio">
            </div>

            <p>Si eligió teléfono, elija la fecha y la hora</p>
            <label for="datetime">Fecha:</label>
            <input type="date" id="datetime">

            <label for="hour">Hora:</label>
            <input type="time" id="hour">
        </fieldset>

        <input class="btn btn-green" type="submit" value="Enviar">
    </form>
</main>

<?php
include_once('templates/footer.php');

<?php
include_once('templates/header.php');
?>

<h2 class="fw-300 text-center">Contacto</h2>
<img src="public/img/destacada.jpg" alt="Imagen Destacada Contacto">

<main class="container content-center section">
    <h2 class="text-center fw-300">Llena el formulario de contacto</h2>

    <form role="form" class="contact" name="save_form" id="save_form" method="POST" action="controller/c_contact.php">
        <fieldset>
            <legend>Información personal</legend>
            <label for="name_user">Nombre completo:</label>
            <input type="text" id="name_user" name="name_user" placeholder="Nombre">

            <label for="e_mail">E-mail:</label>
            <input type="email" id="e_mail" name="e_mail" placeholder="Correo electrónico">

            <label for="phone_number">Teléfono</label>
            <input type="number" id="phone_number" name="phone_number" placeholder="Teléfono">

            <label for="ta_message">Mensaje:</label>
            <textarea id="ta_message" name="ta_message"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información sobre Propiedad</legend>
            <label for="selector">Vende o Compra</label>
            <select id="selector" name="property_type">
                <option selected disabled>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="price">Precio:</label>
            <input type="number" id="price" name="price" min="0">
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>

            <div class="contact-form">
                <label for="phoneRadio">Teléfono</label>
                <input type="radio" name="contact_type" value="telefono" id="phoneRadio">

                <label for="emailRadio">E-mail</label>
                <input type="radio" name="contact_type" value="email" id="emailRadio">
            </div>

            <p>Si eligió teléfono, elija la fecha y la hora</p>
            <label for="datetime">Fecha:</label>
            <input type="date" id="datetime" name="datetime">

            <label for="hour">Hora:</label>
            <input type="time" id="hour" name="hour">

        </fieldset>

        <input class="btn btn-green" type="submit" value="Enviar">
        <input type="hidden" name="action" value="save">
    </form>
</main>

<?php
include_once('templates/footer.php');
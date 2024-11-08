const urlContact = 'controller/c_contact.php';
const formContact = document.querySelector('#save_form');

eventListeners();

function eventListeners() {

    if (formContact) {
        formContact.addEventListener('submit', addContact)
    }
}

function addContact(e) {
    e.preventDefault();

    //ADD FORM VALUES IN VAR DATA WITH CONSTRUCTOR FORMDATA
    const data = new FormData(formContact);

    //CONVERT FORMDATA TO JSON FOR VALIDATE EMPTY INPUT FIELDS
    const jsonForm = Object.fromEntries(data.entries())

    const { name_user, e_mail, phone_number, ta_message, property_type, price, contact_type, datetime, hour } = jsonForm;

    if (name_user === '' || e_mail === '' || phone_number === '' || ta_message === '' || property_type === undefined || price === '' || contact_type === undefined || datetime === '' || hour === '') {

        printMessage('error', 'Todos los campos son obligatorios', 'Por favor, ingrese toda la información.');
        return;
    }

    //console.log(jsonForm)

    //SEND INFORMATION WITH FETCH
    fetch(urlContact, {
        method: 'POST',
        body: data

        //AJAX CALL
    }).then(function (response) {
        if (response.ok) {
            return response.text()
        } else {
            throw "Error en la llamada Ajax";
        }

        //MESSAGE SUCCESSFULL
    }).then(function (texto) {
        //console.log(texto);
        printMessage('success', 'Datos registrados', 'Se le enviará un correo para confirmar la cita.');

        setTimeout(function () {
            formContact.reset();
        }, 3000);

        //MESSAGE WITH ERROR
    }).catch(function (err) {
        //console.log(err);
        printMessage('error', 'Ha habido un problema...', 'Se ha presentado un error al guardar la información.');
    });
}

function printMessage(result, title, msg) {
    Swal.fire({
        icon: result,
        title: title,
        html: msg,
        confirmButtonText: 'OK'
    })
}

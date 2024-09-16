/*                              Creado por: [Arbey]
Descripción: Aplicación SPA para generar RFC y consultar una API REST
Uso: Este archivo estructura la interfaz de la aplicación web que permite generar un RFC a partir
de los datos ingresados
y consultar un recurso externo a través de una API REST. */

$(document).ready(function () {
    // Evento para generar el RFC cuando se envía el formulario
    $('#rfc-form').submit(function (event) {
        event.preventDefault(); // Evitar el comportamiento por defecto del formulario (recargar la página)

        // Obtener los valores ingresados por el usuario
        const nombre = $('#nombre').val().toUpperCase();
        const primerApellido = $('#primer-apellido').val().toUpperCase();
        const segundoApellido = $('#segundo-apellido').val().toUpperCase();
        const fechaNacimiento = $('#fecha-nacimiento').val().split('-'); // Separar el año, mes y día

        // Generar el RFC concatenando partes del nombre, apellido y fecha de nacimiento
        const rfc = primerApellido.substring(0, 2) + segundoApellido.substring(0, 1) + nombre.substring(0, 1) + fechaNacimiento[0].substring(2) + fechaNacimiento[1] + fechaNacimiento[2];

        // Mostrar el RFC generado en el campo correspondiente
        $('#rfc').val(rfc);
    });

    // Evento para consultar la API REST cuando se envía el formulario
    $('#api-form').submit(function (event) {
        event.preventDefault(); // Evitar el comportamiento por defecto del formulario

        // Realizar la solicitud GET a la API usando jQuery
        $.get('https://jsonplaceholder.typicode.com/users/7', function (data) {
            // Mostrar el nombre devuelto por la API en el campo de nombre
            $('#nombre-api').val(data.name);

            // Mostrar el email devuelto por la API en el campo de email
            $('#email-api').val(data.email);
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("msg-form");

  form.addEventListener("submit", function (e) {
    const confirmacion = confirm("¿Estás seguro de enviar el formulario?");

    if (confirmacion) {
      const nombre = document.getElementById("msg-name").value;
      const email = document.getElementById("msg-email").value;
      const mensaje = document.getElementById("msg-msg").value;

      mostrarDatos(nombre, email, mensaje);
      console.log("Datos enviados al servidor");
    } else {
      e.preventDefault();
    }
  });

  function mostrarDatos(nombre, email, mensaje) {
    alert(`Mensaje enviado!\nNombre: ${nombre}\nEmail: ${email}\nMensaje: ${mensaje}`);
  }
});

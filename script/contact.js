//Recuperamos el formulario
const form = document.getElementById("msg-form");

// Envia datos a la funcion que formatea el alert
// +1 Evento manejado
form.addEventListener("submit", (e) => {
  e.preventDefault();
  const nombre = document.getElementById("msg-name").value;
  const email = document.getElementById("msg-email").value;
  const mensaje = document.getElementById("msg-msg").value;
  mostrarDatos(nombre, email, mensaje);
});

// Funcion que formatea el alert para mostrar que se envian los datos
// +1 Funcion con 3 argumentos
function mostrarDatos(nombre, email, mensaje) {
  alert(
    `Mensaje enviado!\n Nombre: ${nombre}\nEmail: ${email}\nMensaje: ${mensaje}`
  );
}

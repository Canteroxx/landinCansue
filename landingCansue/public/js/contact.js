const form = document.getElementById("msg-form");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const nombre = document.getElementById("msg-name").value;
  const email = document.getElementById("msg-email").value;
  const mensaje = document.getElementById("msg-msg").value;

  mostrarDatos(nombre, email, mensaje);
});

function mostrarDatos(nombre, email, mensaje) {
  alert(
    `Mensaje enviado!\nNombre: ${nombre}\nEmail: ${email}\nMensaje: ${mensaje}`
  );
}

/*const nombre = document.querySelector('#nombre');
const apellido = document.querySelector('#apellidos');
const email = document.querySelector('#email');
const consulta = document.querySelector('#consulta');






-------------------------
document.getElementById("miFormulario").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que el formulario se envíe de la manera convencional
  
    var nombre = document.getElementById("nombre").value;
    var email = document.getElementById("email").value;
  
    // Aquí puedes realizar validaciones o procesamiento adicional si es necesario
  
    // Crear un objeto FormData para enviar los datos
    var formData = new FormData();
    formData.append("nombre", nombre);
    formData.append("email", email);
  
    // Enviar los datos usando Fetch u otra técnica, aquí se utiliza Fetch
    fetch("url_del_servidor", {
      method: "POST",
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      // Aquí puedes manejar la respuesta del servidor si es necesario
      console.log(data);
    })
    .catch(error => {
      console.error("Error:", error);
    });
  });
  */
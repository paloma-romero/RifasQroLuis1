 // Obtiene el botón para abrir la ventana modal externa
 var openOuterModalBtn = document.getElementById('openOuterModalBtn1');
 // Obtiene la ventana modal externa
 var outerModal = document.getElementById('outerModal1');
 // Obtiene el botón para cerrar la ventana modal externa
 var closeOuterModalBtn = document.getElementById('closeOuterModalBtn1');

 // Función para abrir la ventana modal externa
 openOuterModalBtn.onclick = function() {
     outerModal.style.display = 'block';
 }

 // Función para cerrar la ventana modal externa
 closeOuterModalBtn.onclick = function() {
     outerModal.style.display = 'none';
 }

 // Cierra la ventana modal externa si el usuario hace clic fuera de ella
 window.onclick = function(event) {
     if (event.target == outerModal) {
         outerModal.style.display = 'none';
     }
 }
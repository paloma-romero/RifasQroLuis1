// Función para agregar un boleto a la lista
function agregarElemento(valor, boton) {
    var nuevoElemento = document.createElement('li');
    nuevoElemento.className = 'list-inline-item boletos1-content d-inline-block mr-2 mb-2';
    
    // Contenido del elemento
    nuevoElemento.textContent = valor;
    
    // Escuchar el clic en el boleto para eliminarlo
    nuevoElemento.onclick = function() {
        this.parentNode.removeChild(this); // Eliminar el boleto al hacer clic en él
        boton.disabled = false; // Habilitar el botón nuevamente cuando se elimina el elemento de la lista
    };
    
    // Agregar el nuevo elemento a la lista
    document.getElementById('lista').appendChild(nuevoElemento);
    
    // Deshabilitar el botón seleccionado
    boton.disabled = true;
}
// JavaScript para manejar la apertura y cierre de las ventanas modales

// Obtener elementos y botones
var outerModal = document.getElementById('outerModal');
var innerModal = document.getElementById('innerModal');
var openOuterModalBtn = document.getElementById('openOuterModalBtn');
var closeOuterModalBtn = document.getElementById('closeOuterModalBtn');
var openInnerModalBtn = document.getElementById('openInnerModalBtn');
var closeInnerModalBtn = document.getElementById('closeInnerModalBtn');

// Función para abrir la Ventana Modal Externa
openOuterModalBtn.onclick = function () {
    outerModal.style.display = 'block';
}

// Función para cerrar la Ventana Modal Externa
closeOuterModalBtn.onclick = function () {
    outerModal.style.display = 'none';
}

// Función para abrir la Ventana Modal Interna
openInnerModalBtn.onclick = function () {
    innerModal.style.display = 'block';
}

// Función para cerrar la Ventana Modal Interna
closeInnerModalBtn.onclick = function () {
    innerModal.style.display = 'none';
}

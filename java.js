// Hacer el  uso del evento DOMContentLoaded para asegurarse de que todos los elementos del documento estén disponibles antes de ejecutar el código.
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('formul');
    const inputsContainer = document.getElementById('input');
    const addInputBtn = document.getElementById('agregar');
    const removeInputBtn = document.getElementById('eliminar');

    let inputCount = 0;


        // aqui se crea una Función para crear un nuevo input tipo texto 
        function createInput() {
            const input = document.createElement('input');
            input.type = 'text';
            input.name = `input${inputCount}`;
            input.placeholder = 'Escriba el nombre del usuario';
    
            inputsContainer.appendChild(input);
    
            inputCount++;
        }
            // aqui se creo un Evento para agregar un nuevo input en el formulario
        addInputBtn.addEventListener('click', function() {
            createInput();
        });

        // Evento para eliminar el último input que se creo
        removeInputBtn.addEventListener('click', function() {
            if (inputCount > 0) {
                inputsContainer.removeChild(inputsContainer.lastChild);
                inputCount--;
            }
        });
});
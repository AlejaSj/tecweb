function validarFormulario() {
            
    const e1 = document.getElementById('e1') 
    
    const e2 = document.getElementById('e2') 
    
    const e3 = document.getElementById('e3') 
    
    const e4 = document.getElementById('e4') 
    
    const e5 = document.getElementById('e5') 
    
    const e6 = document.getElementById('e6') 
    
    const e7 = document.getElementById('e7') 

    const nombre = document.getElementById('nombre').value;
    if (nombre.trim() === "" || nombre.length > 100) {
      e1.innerHTML = "El nombre del producto es obligatorio y debe tener 100 caracteres o menos."

        return false;
    }

    const marca = document.getElementById('marca').value;
    if (marca === "") {
        e2.innerHTML = "Debe seleccionar una marca.";
        return false;
    }

    // Validación del modelo del producto
    const modelo = document.getElementById('modelo').value;
    const modeloRegex = /^[a-zA-Z0-9\s]+$/;
    if (modelo.trim() === "" || !modeloRegex.test(modelo) || modelo.length > 25) {
        e3.innerHTML="El modelo es obligatorio, debe ser alfanumérico y tener 25 caracteres o menos.";
        return false;
    }

    // Validación del precio del producto
    const precio = parseFloat(document.getElementById('precio').value);
    if (isNaN(precio) || precio <= 99.99) {
        e4.innerHTML = "El precio es obligatorio y debe ser mayor a 99.99.";
        return false;
    }

    // Validación de los detalles del producto
    const detalles = document.getElementById('detalles').value;
    if (detalles.length > 250) {
        e5.innerHTML = "Los detalles deben tener 250 caracteres o menos.";
        return false;
    }

    // Validación de las unidades disponibles
    const unidades = parseInt(document.getElementById('unidades').value, 10);
    if (isNaN(unidades) || unidades < 0) {
        e6.innerHTML = "Las unidades son obligatorias y deben ser un número mayor o igual a 0.";
        return false;
    }

    // Validación de la ruta de la imagen
    const imagen = document.getElementById('imagen').value;
    if (imagen.trim() === "") {
        document.getElementById('imagen').value = 'ruta/a/imagen/por/defecto.jpg';
    }

    // Si todas las validaciones son correctas
    return true;
}
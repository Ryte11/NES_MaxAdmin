const openModalBtn = document.getElementById('openModalBtn');
        const modalOverlay = document.getElementById('modalOverlay');

        openModalBtn.addEventListener('click', () => {
            modalOverlay.style.display = 'flex';
        });

        modalOverlay.addEventListener('click', (event) => {
            if (event.target === modalOverlay) {
                modalOverlay.style.display = 'none';
            }
        });

document.getElementById("agregar-dispositivo-btn").addEventListener("click", function (event) {
    event.preventDefault(); // Evitar el envío predeterminado del formulario

    const form = document.getElementById("dispositivo-form");

    // Obtener los campos del formulario
    const id = form.querySelector(".id");
    const fecha = form.querySelector(".fecha");
    const ubicacion = form.querySelector(".ubicacion");
    const instalador = form.querySelector(".instalador");
    const zona = form.querySelector(".zona");
    const comentario = form.querySelector(".comentario");
    const estado = form.querySelector(".estado-dispositivo");
    const errorMessages = form.querySelectorAll(".error-message");

    // Limpiar mensajes de error anteriores
    errorMessages.forEach(msg => {
        msg.style.display = "none";
        msg.textContent = "";
    });

    let isValid = true;

    // Validar cada campo
    if (!id.value.trim()) {
        id.nextElementSibling.textContent = "El ID del dispositivo es obligatorio.";
        id.nextElementSibling.style.display = "block";
        isValid = false;
    }

    if (!fecha.value.trim()) {
        fecha.nextElementSibling.textContent = "La fecha de instalación es obligatoria.";
        fecha.nextElementSibling.style.display = "block";
        isValid = false;
    } else if (!/^\d{4}-\d{2}-\d{2}$/.test(fecha.value)) {
        fecha.nextElementSibling.textContent = "La fecha debe estar en formato YYYY-MM-DD.";
        fecha.nextElementSibling.style.display = "block";
        isValid = false;
    }

    if (!ubicacion.value.trim()) {
        ubicacion.nextElementSibling.textContent = "La ubicación geográfica es obligatoria.";
        ubicacion.nextElementSibling.style.display = "block";
        isValid = false;
    } else if (ubicacion.value.replace(/[^0-9]/g, '').length < 8) {
        ubicacion.nextElementSibling.textContent = "La ubicación debe contener al menos 8 números.";
        ubicacion.nextElementSibling.style.display = "block";
        isValid = false;
    }

    if (!instalador.value.trim()) {
        instalador.nextElementSibling.textContent = "El nombre del instalador o responsable es obligatorio.";
        instalador.nextElementSibling.style.display = "block";
        isValid = false;
    }

    if (!zona.value.trim()) {
        zona.nextElementSibling.textContent = "La zona de referencia es obligatoria.";
        zona.nextElementSibling.style.display = "block";
        isValid = false;
    }

    if (!comentario.value.trim()) {
        comentario.nextElementSibling.textContent = "El comentario es obligatorio.";
        comentario.nextElementSibling.style.display = "block";
        isValid = false;
    }

    if (!estado.value.trim()) {
        estado.nextElementSibling.textContent = "El estado del dispositivo es obligatorio.";
        estado.nextElementSibling.style.display = "block";
        isValid = false;
    }

    // Si todo es válido, enviar el formulario
    if (isValid) {
        form.submit(); // Solo se envía si no hay errores
    }
});

function showOptions(id) {
    const menu = document.getElementById(`options-${id}`);
    const allMenus = document.querySelectorAll('.options-menu');
    
    // Ocultar todos los menús abiertos
    allMenus.forEach(m => {
        if (m.id !== `options-${id}`) {
            m.style.display = 'none';
        }
    });
    
    // Mostrar/ocultar el menú seleccionado
    menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
}

function editDevice(id) {
    // Implementar lógica de edición
    console.log('Editar dispositivo:', id);
}

function deleteDevice(id) {
    if (confirm('¿Está seguro de que desea eliminar este dispositivo?')) {
        fetch(`php/eliminar_dispositivo.php?id=${id}`, {
            method: 'DELETE'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Error al eliminar el dispositivo');
            }
        });
    }
}

function viewDetails(id) {
    // Implementar lógica para ver detalles
    console.log('Ver detalles del dispositivo:', id);
}

function obtenerHoraActual() {
    fetch('apis/apiHora.php')
        .then(response => response.json())
        .then(data => {
            const horaActual = data.hora_actual;
            document.getElementById('hora-actual').textContent = `Hora Neza: ${horaActual}`;
        })
        .catch(error => {
            console.error('Error al obtener la hora actual:', error);
        });
}

obtenerHoraActual();
setInterval(obtenerHoraActual, 1000);
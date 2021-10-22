function borrarRes() {
    const cantidad = document.getElementById("inputCantidad");
    const total = document.getElementById("total");
    total.innerHTML = "";
    cantidad.value = "";
}

function calcResumen() {

    const total = document.getElementById("total");
    const precioTicket = 200;
    const cantidad = document.getElementById("inputCantidad").value;
    const categoria = document.getElementById("inputCategoria").value;

    if (cantidad >= 0) {
        if (categoria == "Estudiante") {
            total.innerHTML = precioTicket * cantidad * 0.2;
        } else if (categoria == "Trainee") {
            total.innerHTML = precioTicket * cantidad * 0.5;
        } else {
            total.innerHTML = precioTicket * cantidad * 0.85;
        }
    } else {
        total.innerHTML = "<span class=\"invalid\"'>Escribir cantidad positiva.</span>"
    }
}
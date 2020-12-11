function confirmacion(e) {
    if (confirm("¿esta seguro que desea eliminar este registro?")) {
        return true;
    } else { 
        e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".btn btn-danger");

for (var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click', confirmacion);

}
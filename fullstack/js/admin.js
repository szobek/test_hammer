function deleteFunction(id) {
    if (confirm("are you sure?")) {
        window.location.href = `../controllers/newscontroller.php?function=delete&id=${id}`
    } else {

    }
}

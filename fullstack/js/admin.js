function deleteFunction(id) {
    if (confirm("are you sure?")) {
        window.location.href = `../controllers/setNews.php?function=delete&id=${id}`
    } else {

    }
}

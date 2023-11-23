
panels = ['users', 'books', 'logs'];

function show(show_elem) {
    console.log(show_elem)
    check = panels.slice();
    console.log(check);
    check.splice(check.indexOf(show_elem), 1);
    console.log(check);
    document.getElementById(show_elem).style.display = 'block';
    document.getElementById(check[0]).style.display = 'none';
    document.getElementById(check[1]).style.display = 'none';
}

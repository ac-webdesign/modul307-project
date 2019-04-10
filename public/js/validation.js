document.querySelector('#form').addEventListener('submit', function (e) {
    // Formular kann nicht mehr abgesendet werden
    var name = document.querySelector('#name').value;
    var errorbox = document.querySelector('#errorbox');
    var errors = [];
    if (name === '') {
        errors.push("Error");
    }

    errorbox.innerHTML = '';

    errors.forEach(error => {
        var li = document.createElement('li');
        li.innerHTML = error;
        errorbox.appendChild(li);
    });

    if (errors.length !== 0) {
        e.preventDefault();
    }
});
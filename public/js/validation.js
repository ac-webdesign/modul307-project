document.querySelector('#form').addEventListener('submit', function (e) {
    // Formular kann nicht mehr abgesendet werden
    var name = document.querySelector('#name').value;
    var errorbox = document.querySelector('#errorbox');
    var errors = [];
    if (name === '') {
        errors.push("Error");
    }

    errors.forEach(error => {
        var li = document.createElement('li');
        li.innerHTML = error;
        errorbox.appendChild(li);
        setTimeout(function () {
            errorbox.removeChild(li);
            errorbox.style.display = 'none';
        }, 3000);
        errorbox.style.display = 'block';
    });

    if (errors.length !== 0) {
        e.preventDefault();
    }
});
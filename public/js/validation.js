document.querySelector('#form').addEventListener('submit', function (e) {
    var errors = [];

    controlHasValue('#start-date') === true ? true : errors.push('start-date not passed');
    controlHasValue('#urgent') === true ? true : errors.push('urgent not passed');
    controlHasValue('#end-date') === true ? true : errors.push('end-date not passed');
    controlHasValue('#is-done') === true ? true : errors.push('is_done not passed');
    controlHasValue('#tool') === true ? true : errors.push('tool not passed');
    controlHasValue('#firstname') === true ? true : errors.push('firstname not passed');
    controlHasValue('#lastname') === true ? true : errors.push('lastname not passed');
    controlHasValue('#email') === true ? true : errors.push('email not passed');
    validateEmail('#email') === true ? true : errors.push('email not correct format');
    validateTel('#tel') === true ? true : errors.push('tel not correct format');

    if (errors.length > 0) {
        e.preventDefault();
    }
});

function controlHasValue(controlId) {
    var control = document.querySelector(controlId);
    if (control.value.trim() === '') {
        control.style.border = 'thick solid red';
        control.value = 'Bitte Feld ausfüllen';
        return false;
    }
    return true;
}

function validateEmail(controlId) {
    var control = document.querySelector(controlId);
    var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (regexEmail.test(control.value.trim()) === false) {
        control.style.border = 'thick solid red';
        control.value = 'Bitte korrektes Format für Email';
        return false;
    }
    return true;
}

function validateTel(controlId) {
    var control = document.querySelector(controlId);
    if (isNaN(control.value.trim()) === true) {
        control.style.border = 'thick solid red';
        control.value = 'Bitte korrektes Format für Telefon';
        return false;
    }
    return true;
}
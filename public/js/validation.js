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
    validateControlWithRegex('#email', /^[^\s@]+@[^\s@]+\.[^\s@]+$/) === true ? true : errors.push('email not correct format');
    validateControlWithRegex('#tel', /^[\d\s\-\+\(\)\/]*$/) === true ? true : errors.push('tel not correct format');

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
    } else {
        control.style.border = '1px solid transparent';
        return true;
    }
}

function validateControlWithRegex(controlId, regexString) {
    var control = document.querySelector(controlId);
    var regex = regexString;
    if (regex.test(control.value.trim()) === false) {
        control.style.border = 'thick solid red';
        return false;
    } else {
        control.style.border = '1px solid transparent';
        return true;
    }
}
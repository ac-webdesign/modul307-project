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

    console.log(errors);
    e.preventDefault();
    if (errors.length > 0) {
        e.preventDefault();
    }
});

function controlHasValue(controlId) {
    var control = document.querySelector(controlId);
    if (control.trim() === '') {
        control.style.border = 'thick solid red';
        return true;
    }
    return false;
}
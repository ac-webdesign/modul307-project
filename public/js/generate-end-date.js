document.querySelector('#start-date').addEventListener('input', generateEndDate);
document.querySelector('#urgent').addEventListener('input', generateEndDate);

var urgents = [
    {
        name: 'sehr tief',
        days: 25
    },
    {
        name: 'tief',
        days: 20
    },
    {
        name: 'normal',
        days: 15
    },
    {
        name: 'hoch',
        days: 10
    },
    {
        name: 'sehr hoch',
        days: 5
    }
]

function generateEndDate() {
    var newStartDate = new Date(document.querySelector('#start-date').value);
    var selectedUrgent = document.getElementById('urgent').value;
    var endDate = document.querySelector('#end-date');

    urgents.forEach(urgent => {
        addCorrectUrgentDays(newStartDate, endDate, selectedUrgent, urgent.name, urgent.days);
    })
}

function addCorrectUrgentDays(startDate, endDate, selectedUrgent, specificUrgent, days) {
    if (selectedUrgent === specificUrgent) {
        endDate.value = new Date(addDaysToStartDate(startDate, days)).toLocaleDateString();
    }
}

function addDaysToStartDate(startDate, addDays) {
    var startDate = new Date(startDate);
    startDate.setDate(startDate.getDate() + addDays);
    return startDate;
}
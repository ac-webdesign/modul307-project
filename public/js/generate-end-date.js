var startDate = document.querySelector('#startdate');

// Add Event Listeners to form controls
document.addEventListener('DOMContentLoaded', generateEndDate);
startDate.addEventListener('input', generateEndDate);
document.querySelector('#urgent').addEventListener('input', generateEndDate);

// Declare Array-Object urgents
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

// Methods
function generateEndDate() {
    var newStartDate = new Date(startDate.value);
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
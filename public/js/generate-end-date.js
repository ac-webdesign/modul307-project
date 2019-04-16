document.querySelector('#start-date').addEventListener('input', generateEndDate);

function generateEndDate() {
    console.log(this.value);
}
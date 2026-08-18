// Set the minimum selectable date for pickup fields to today
const targetInputs = document.querySelectorAll('input[type="date"]');
const todayDateString = new Date().toISOString().split('T')[0];

targetInputs.forEach((input) => {
  if (input.name === 'pickup_date') {
    input.min = todayDateString;
  }
});

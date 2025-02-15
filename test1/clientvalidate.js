function validateForm() {
    let isValid = true;

// Validate Name
    const name = document.getElementById('name').value;
    const nameError = document.getElementById('nameError');
if (name.trim() === "") {
    nameError.textContent = "Name is required.";
    isValid = false;
} else if (name.length < 4) {
    nameError.textContent = "Name must be at least 4 characters long.";
    isValid = false;
} else {
    nameError.textContent = "";
}

// Validate Age
const age = document.getElementById('age').value;
const ageError = document.getElementById('ageError');
if (age.trim() === "") {
    ageError.textContent = "Age is required.";
    isValid = false;
} else if (age < 18) {
    ageError.textContent = "Age must be at least 18 years.";
    isValid = false;
} else {
    ageError.textContent = "";
}

// Validate Description
const description = document.getElementById('description').value;
const descriptionError = document.getElementById('descriptionError');
if (description.trim() === "") {
    descriptionError.textContent = "Description is required.";
    isValid = false;
} else {
    descriptionError.textContent = "";
}

return isValid;
}
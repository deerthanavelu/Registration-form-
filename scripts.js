function toUpperCase() {
    let lastNameInput = document.getElementById("lastName");
    lastNameInput.value = lastNameInput.value.toUpperCase();
    let firstNameInput = document.getElementById("firstName");
    firstNameInput.value = firstNameInput.value.toUpperCase();
}


function validateMobile() {
    let mobileNumberInput = document.getElementById("mobileNumber");
    mobileNumberInput.value = mobileNumberInput.value.replace(/[^\d]/g, '').substring(0, 10);
}

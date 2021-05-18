// update profile form toggle
function updateProfileBtnToggle() {
  let inputField = document.querySelectorAll('.profile-field');
  document.getElementById("cancelChanges").classList.toggle("d-none");
  document.getElementById("saveChanges").classList.toggle("d-none");
  document.getElementById("updateProfile").classList.toggle("d-none");


  for(let i = inputField.length - 1; i >= 0; i--){
    inputField[i].toggleAttribute("disabled");
  }

}

function nameCheck() {
  var displayName = document.getElementById('display-name');
  var dNameWarn = document.getElementById('dNameWarning');
  if (displayName.value != "") {
    displayName.classList.remove("is-invalid");
    displayName.classList.add("is-valid");
    dNameWarn.classList.add("d-none");
    document.getElementById("saveChanges").removeAttribute("disabled");
  }
  else {
    displayName.classList.remove("is-valid");
    displayName.classList.add("is-invalid");
    dNameWarn.classList.remove("d-none");
    document.getElementById("saveChanges").setAttribute("disabled", true);
  }
}

// email regex validator
function validateEmail(email) {
  const regexEmail = /([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+)/;
  return regexEmail.test(email);
}

function emailCheck() {
  var email = document.getElementById('email');
  var emailWarn = document.getElementById('emailWarning');
  if (email.value != "" && validateEmail(email.value)) {
    email.classList.remove("is-invalid");
    email.classList.add("is-valid");
    emailWarn.classList.add("d-none");
    document.getElementById("saveChanges").removeAttribute("disabled");
  }
  else {
    email.classList.remove("is-valid");
    email.classList.add("is-invalid");
    emailWarn.classList.remove("d-none");
    document.getElementById("saveChanges").setAttribute("disabled", true);
  }
}
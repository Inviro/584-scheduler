// update profile form toggle
function updateProfileBtnToggle() {
  let inputField = document.querySelectorAll('.profile-field');
  document.getElementById("cancelChanges").classList.toggle("d-none");
  document.getElementById("saveChanges").classList.toggle("d-none");
  document.getElementById("updateProfile").classList.toggle("d-none");
  document.getElementById('old-pass').classList.add('is-invalid');
  document.getElementById('passwordWarning').classList.remove('d-none');
  
  
  document.getElementById("saveChanges").setAttribute("disabled", true);

  for(let i = inputField.length - 1; i >= 0; i--){
    inputField[i].toggleAttribute("disabled");
  }

}

function cancelChangesBtn() {
  let inputField = document.querySelectorAll('.profile-field');
  let passwordField = document.getElementById('old-pass');
  passwordField.classList.remove('is-invalid');
  passwordField.classList.remove('is-valid');
  passwordField.value = "";

  document.getElementById("cancelChanges").classList.toggle("d-none");
  document.getElementById("saveChanges").classList.toggle("d-none");
  document.getElementById("updateProfile").classList.toggle("d-none");
  document.getElementById('passwordWarning').classList.add('d-none');
  document.getElementById("saveChanges").removeAttribute("disabled");

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

function passwordCheck() {
  var password = document.getElementById('old-pass');
  var passWarn = document.getElementById('passwordWarning');
  if (password.value != "") {
    password.classList.remove("is-invalid");
    password.classList.add("is-valid");
    passWarn.classList.add("d-none");
    document.getElementById("saveChanges").removeAttribute("disabled");
  }
  else {
    password.classList.remove("is-valid");
    password.classList.add("is-invalid");
    passWarn.classList.remove("d-none");
    document.getElementById("saveChanges").setAttribute("disabled", true);
  }
}

// weather widget 
!function(d,s,id){
  var js,fjs=d.getElementsByTagName(s)[0];
  if(!d.getElementById(id)){
    js=d.createElement(s);
    js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';
    fjs.parentNode.insertBefore(js,fjs);
  }
}(document,'script','weatherwidget-io-js');

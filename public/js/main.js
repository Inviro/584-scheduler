// update profile form toggle
function updateProfileBtnToggle() {
  document.getElementById("cancelChanges").classList.toggle("d-none");
  document.getElementById("saveChanges").classList.toggle("d-none");
  document.getElementById("updateProfile").classList.toggle("d-none");

  let inputField = document.querySelectorAll('.profile-field');

  for(let i = inputField.length - 1; i >= 0; i--){
    inputField[i].toggleAttribute("disabled");
  }

}
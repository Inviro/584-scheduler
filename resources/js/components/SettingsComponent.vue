<template>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Update Account Information</div>
            <div class="card-body">
              <form method="POST" action="updateProfile">
                <input type="hidden" name="_token" v-bind:value="csrf">
                <div class="form-group">
                  <label for="display-name">Display Name</label>
                  <input type="text" name="name" class="form-control profile-field" id="display-name" :value="user.name" onkeyup="nameCheck()" disabled>
                  <span id="dNameWarning" class="text-danger d-none" style="margin-top:.25rem;font-size:.875em;">Display Name CAN NOT be empty!</span>
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email" class="form-control profile-field" id="email" :value="user.email" onkeyup="emailCheck()" disabled>
                  <span id="emailWarning" class="text-danger d-none" style="margin-top:.25rem;font-size:.875em;">Please provide a valid email address</span>
                </div>
                <div class="form-group">
                  <label for="old-pass">Enter Password to Confirm Changes</label>
                  <input type="password" name="oldpassword" class="form-control profile-field" id="old-pass" onkeyup="passwordCheck()" disabled>
                  <span id="passwordWarning" class="text-danger d-none" style="margin-top:.25rem;font-size:.875em;">Password field cannot be empty</span>
                </div>
                <div class="form-check">
                </div>
                <button id="updateProfile" type="button" class="btn btn-info" style="color:white" onclick="updateProfileBtnToggle()">Update Account</button>
                <button id="cancelChanges" type="button" class="btn btn-outline-danger d-none" onclick="cancelChangesBtn()"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Cancel</button>
                <button id="saveChanges" type="submit" class="btn btn-success d-none"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Save Changes</button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-8 mt-4">
          <div class="card">
            <div class="card-header">Change Theme</div>
              <div class="card-body">
                <form method="POST" action="toggleDarkMode">
                  <div class="form-group">
                    <div class="custom-control custom-switch">
                      <input type="hidden" name="_token" v-bind:value="csrf">
                      <input class="custom-control-input" type="checkbox" id="dark-mode-toggle" name="darkmode" v-bind:checked="dark_mode" v-on:click="toggleDarkMode">
                      <label class="custom-control-label" for="dark-mode-toggle">Enable Dark Mode</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success" :disabled="this.darkModeSubmitDisabled" id="submit-dark-mode">&nbsp;Save Changes</button>
                  </div>
                </form>
              </div> 
          </div>
        </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      darkModeSubmitDisabled: true,
    }
  },
  methods: {
    toggleDarkMode() {
      this.darkModeSubmitDisabled = !this.darkModeSubmitDisabled
    }
  },
  props: ['user', 'dark_mode']
}
</script>

 
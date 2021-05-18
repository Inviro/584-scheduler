<template>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Update Account Information</div>
            <div class="card-body">
              <form>
                <input type="hidden" name="_token" v-bind:value="csrf">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input class="form-control profile-field" id="exampleInputEmail1"  :value="user.name" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control profile-field" :value="user.email" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control profile-field" id="exampleInputPassword1" placeholder="Password" disabled>
                </div>
                <div class="form-check">
                </div>
                <button id="updateProfile" type="button" class="btn btn-info" style="color:white" onclick="updateProfileBtnToggle()">Update Account</button>
                <button id="cancelChanges" type="button" class="btn btn-outline-danger d-none" onclick="updateProfileBtnToggle()"><i class="fas fa-times"></i>&nbsp;Cancel</button>
                <button id="saveChanges" type="submit" class="btn btn-success d-none"><i class="fas fa-check"></i>&nbsp;Save Changes</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</template>
<script>
export default {
  data(){
    return {
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    }
  },
  props: ['user']
}
</script>


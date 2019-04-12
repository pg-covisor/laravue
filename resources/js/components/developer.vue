<template>
  <div>

    <!-- Error Page for Unauthorised Users -->
    <div class="text-center" v-show="!$gate.isAdmin()">
      <!-- <h3>Oops! seems like you don't have proper authorization to access this page</h3> -->
      <page-not-found></page-not-found>
      <a class="btn btn-primary btn-lg mt-5" href="/dashboard">Go To Dashboard</a>
    </div>

    <!-- ONLY ADMIN HAS ACCESS TO THIS SECTION -->
    <div v-show="$gate.isAdmin()">
      <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">Developer Section</div>
                <div class="card-body">
                  <passport-clients></passport-clients>
                  <passport-authorized-clients></passport-authorized-clients>
                  <passport-personal-access-tokens></passport-personal-access-tokens>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>

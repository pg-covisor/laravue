<template>
  <div>
    <!-- Error Page for Unauthorised Users -->
    <div v-show="!$gate.canAccessAllMember()">
      <unauthorized-access></unauthorized-access>
    </div>

    <!-- ONLY ADMIN HAS ACCESS TO THIS SECTION -->
    <div v-show="$gate.canAccessAllMember()">
      <div>
        <!-- Header -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h1>Dashboard</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item">
                    <a href="/dashboard">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Body -->
        <div class="container">
          <div class="row">
            <div class="col-12">
           
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

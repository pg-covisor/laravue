<template>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Members List</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-primary" @click="createUserModal">
                <i class="fas fa-user-plus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <th>ID</th>
                  <th></th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Type</th>
                  <th>Bio</th>
                  <th>Joined</th>
                  <th>Action</th>
                </tr>
                <tr v-for="user in users" :key="user.id">
                  <td>{{ user.id }}</td>
                  <td>
                    <img src="img/avatar04.png" class="img-circle profile-image" alt="User Image">
                  </td>
                  <td>{{ user.name }}</td>
                  <td>{{ user.mobile }}</td>
                  <td>{{ user.email }}</td>
                  <td>{{ user.type | capFirst }}</td>
                  <td>{{ user.bio }}</td>
                  <td>{{ user.created_at | shortDate }}</td>
                  <td>
                    <a href="#" @click="editUserModal(user)">
                      <i class="far fa-edit d-icon red"></i>
                    </a>
                    <a href="#" @click="deleteUser(user.id)">
                      <i class="far fa-trash-alt d-icon blue"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

    <!-- Add New Member Modal -->
    <div
      class="modal fade"
      id="userModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="userModalTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="userModalTitle">{{ modalTitle }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form
            id="userForm"
            @submit.prevent="modalMode ? createUser() : editUser()"
            @keydown="form.onKeydown($event)"
          >
            <div class="modal-body">
              <!-- Name -->
              <div class="form-group">
                <input
                  v-model="form.name"
                  type="text"
                  name="name"
                  placeholder="Name"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('name') }"
                >
                <has-error :form="form" field="name"></has-error>
              </div>

              <!-- Mobile -->
              <div class="form-group">
                <input
                  v-model="form.mobile"
                  type="tel"
                  name="mobile"
                  placeholder="Mobile"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('mobile') }"
                >
                <has-error :form="form" field="mobile"></has-error>
              </div>

              <!-- Email -->
              <div class="form-group">
                <input
                  v-model="form.email"
                  type="email"
                  name="email"
                  placeholder="Email"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('email') }"
                >
                <has-error :form="form" field="email"></has-error>
              </div>

              <!-- Member Type -->
              <div class="form-group">
                <select
                  v-model="form.type"
                  name="type"
                  id="type"
                  class="form-control"
                  :class="{'is-invalid': form.errors.has('type')}"
                >
                  <option disabled value>Please select member type</option>
                  <option value="admin">Admin</option>
                  <option value="member">member</option>
                  <option value="staff">Staff</option>
                  <option value="trainer">Trainer</option>
                  <option value="nutritionist">Nutritionist</option>
                </select>
                <has-error :form="form" field="type"></has-error>
              </div>

              <!-- Password -->
              <div class="form-group">
                <input
                  v-model="form.password"
                  name="password"
                  type="password"
                  class="form-control"
                  placeholder="Password"
                  id="password"
                  :class="{'is-invalid': form.errors.has('password')}"
                >
                <has-error :form="form" field="password"></has-error>
              </div>

              <!-- Bio -->
              <div class="form-group">
                <textarea
                  v-model="form.bio"
                  type="text"
                  name="bio"
                  placeholder="Bio"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('bio') }"
                ></textarea>
                <has-error :form="form" field="bio"></has-error>
              </div>

              <!-- File Attachment -->
              <div class="form-group">
                <label for="memberProfilePicture">Member profile picture</label>
                <input
                  @change="processFile($event)"
                  name="photo"
                  type="file"
                  class="form-control-file"
                  id="memberProfilePicture"
                  :class="{ 'is-invalid': form.errors.has('photo') }"
                >
                <has-error :form="form" field="photo"></has-error>
              </div>

              <!-- Accept Terms -->
              <div class="form-check">
                <input
                  v-model="form.terms"
                  type="checkbox"
                  class="form-check-input"
                  id="agreeterms"
                >
                <label class="form-check-label" for="agreeterms">I agree terms and conditions.</label>
                <has-error :form="form" field="terms"></has-error>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" @click="resetForm">Reset</button>
              <button :disabled="form.busy" type="submit" class="btn btn-primary">{{ modalAction }}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      modalMode: true,
      modalTitle: "",
      modalAction: "",
      editUserId: 0,
      users: {},
      form: new Form({
        name: "",
        mobile: "",
        email: "",
        password: "",
        type: "",
        bio: "",
        photo: "",
        terms: ""
      })
    };
  },
  methods: {
    loadUser() {
      axios.get("api/user").then(({ data }) => (this.users = data.data));
    },
    createUserModal() {
      this.form.reset();
      $("#userModal").modal("show");
      this.modalTitle = "Add New User";
      this.modalAction = "Create";
      this.modalMode = true; // means onSubmit it will send CREATE request
    },
    editUserModal(user) {
      $("#userModal").modal("show");
      this.modalTitle = "Edit User";
      this.modalAction = "Update";
      this.form.fill(user);
      this.editUserId = user.id;
      this.modalMode = false; // means onSubmit it will send UPDATE request
    },
    createUser() {
      this.$Progress.start();
      this.form
        .post("api/user")
        .then(() => {
          Fire.$emit("reloadData");
          $("#userModal").modal("hide");
          Toast.fire({
            type: "success",
            title: "User created successfully"
          });
          this.$Progress.finish();
        })
        .catch(() => {
          this.$Progress.fail();
        });
    },
    editUser() {
      if (this.editUserId > 0) {
        this.$Progress.start();
        this.form
          .put("api/user/" + this.editUserId)
          .then(() => {
            Fire.$emit("reloadData");
            $("#userModal").modal("hide");
            Toast.fire({
              type: "success",
              title: "User updated successfully"
            });
            this.editUserId = 0;
            this.$Progress.finish();
          })
          .catch(() => {
            this.editUserId = 0;
            this.$Progress.fail();
          });
      }
    },
    deleteUser(userId) {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then(result => {
        if (result.value) {
          // Send request to server
          this.form.delete("api/user/" + userId).then(() => {
            Fire.$emit("reloadData");
            Swal.fire("Deleted!", "Your file has been deleted.", "success");
          });
        }
      });
    },
    resetForm() {
      this.form.reset();
    },
    processFile(event) {
      this.photo = event.target.files[0];
    }
  },
  created() {
    this.$Progress.start();
    this.loadUser();
    Fire.$on("reloadData", () => {
      this.loadUser();
    });
  },
  mounted() {
    console.log("Component mounted.");
    this.$Progress.finish();
  }
};
</script>
<template>
  <section>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="/dashboard">Home</a>
              </li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img
                    class="profile-user-img img-fluid img-circle"
                    :src="getProfilePhoto()"
                    alt="User profile picture"
                  >
                </div>

                <h3 class="profile-username text-center">{{ form.name }}</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b>
                    <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b>
                    <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b>
                    <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block">
                  <b>Follow</b>
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong>
                  <i class="fa fa-book mr-1"></i> Education
                </strong>
                <p class="text-muted">{{ form.bio }}</p>
                <hr>
                <strong>
                  <i class="fa fa-map-marker mr-1"></i> Location
                </strong>
                <p class="text-muted">Malibu, California</p>
                <hr>
                <strong>
                  <i class="fa fa-pencil mr-1"></i> Skills
                </strong>
                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong>
                  <i class="fa fa-file-text-o mr-1"></i> Notes
                </strong>

                <p
                  class="text-muted"
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href="#activity" data-toggle="tab">Activity</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img
                          class="img-circle img-bordered-sm"
                          src="img/avatar3.png"
                          alt="user image"
                        >
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool">
                            <i class="fa fa-times"></i>
                          </a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2">
                          <i class="fa fa-share mr-1"></i> Share
                        </a>
                        <a href="#" class="link-black text-sm">
                          <i class="fa fa-thumbs-o-up mr-1"></i> Like
                        </a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="fa fa-comments-o mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input
                        class="form-control form-control-sm"
                        type="text"
                        placeholder="Type a comment"
                      >
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img
                          class="img-circle img-bordered-sm"
                          src="img/photo1.png"
                          alt="User Image"
                        >
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool">
                            <i class="fa fa-times"></i>
                          </a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img
                          class="img-circle img-bordered-sm"
                          src="img/photo2.png"
                          alt="User Image"
                        >
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool">
                            <i class="fa fa-times"></i>
                          </a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="img/photo2.png" alt="Photo">
                              <img class="img-fluid" src="img/photo3.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <img class="img-fluid mb-3" src="img/photo4.jpg" alt="Photo">
                              <img class="img-fluid" src="img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <p>
                        <a href="#" class="link-black text-sm mr-2">
                          <i class="fa fa-share mr-1"></i> Share
                        </a>
                        <a href="#" class="link-black text-sm">
                          <i class="fa fa-thumbs-o-up mr-1"></i> Like
                        </a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="fa fa-comments-o mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input
                        class="form-control form-control-sm"
                        type="text"
                        placeholder="Type a comment"
                      >
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <li class="time-label">
                        <span class="bg-danger">10 Feb. 2014</span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time">
                            <i class="fa fa-clock-o"></i> 12:05
                          </span>

                          <h3 class="timeline-header">
                            <a href="#">Support Team</a> sent you an email
                          </h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time">
                            <i class="fa fa-clock-o"></i> 5 mins ago
                          </span>

                          <h3 class="timeline-header no-border">
                            <a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time">
                            <i class="fa fa-clock-o"></i> 27 mins ago
                          </span>

                          <h3 class="timeline-header">
                            <a href="#">Jay White</a> commented on your post
                          </h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <li class="time-label">
                        <span class="bg-success">3 Jan. 2014</span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time">
                            <i class="fa fa-clock-o"></i> 2 days ago
                          </span>

                          <h3 class="timeline-header">
                            <a href="#">Mina Lee</a> uploaded new photos
                          </h3>

                          <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                      </li>
                    </ul>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <!-- Name -->
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupName">
                              <i class="fas fa-user"></i>
                            </span>
                          </div>
                          <input
                            v-model="form.name"
                            type="text"
                            name="name"
                            placeholder="Name"
                            class="form-control"
                            id="profileName"
                            aria-describedby="inputGroupName"
                            required
                            :class="{ 'is-invalid': form.errors.has('name') }"
                          >
                          <has-error :form="form" field="name"></has-error>
                        </div>
                      </div>

                      <!-- Mobile -->
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupMobile">
                              <i class="fas fa-phone"></i>
                            </span>
                          </div>
                          <input
                            v-model="form.mobile"
                            type="tel"
                            name="mobile"
                            placeholder="Mobile"
                            class="form-control"
                            id="profileMobile"
                            aria-describedby="inputGroupMobile"
                            required
                            :class="{ 'is-invalid': form.errors.has('mobile') }"
                          >
                          <has-error :form="form" field="mobile"></has-error>
                        </div>
                      </div>

                      <!-- Email -->
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupEmail">
                              <i class="fas fa-at"></i>
                            </span>
                          </div>
                          <input
                            v-model="form.email"
                            type="email"
                            name="email"
                            placeholder="Email"
                            class="form-control"
                            id="profileEmail"
                            aria-describedby="inputGroupEmail"
                            required
                            :class="{ 'is-invalid': form.errors.has('email') }"
                          >
                          <has-error :form="form" field="email"></has-error>
                        </div>
                      </div>

                      <!-- Password -->
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPassword">
                              <i class="fas fa-lock"></i>
                            </span>
                          </div>
                          <input
                            v-model="form.password"
                            name="password"
                            type="password"
                            class="form-control"
                            placeholder="leave empty if not changing"
                            id="profilePassword"
                            aria-describedby="inputGroupPassword"
                            required
                            :class="{'is-invalid': form.errors.has('password')}"
                          >
                          <has-error :form="form" field="password"></has-error>
                        </div>
                      </div>

                      <!-- Bio -->
                      <div class="form-group">
                        <!-- <label for="profileBio" class="col-sm-12 control-label">Bio</label> -->
                        <textarea
                          v-model="form.bio"
                          type="text"
                          name="bio"
                          placeholder="Bio"
                          class="form-control"
                          id="profileBio"
                          aria-describedby="inputGroupBio"
                          required
                          :class="{ 'is-invalid': form.errors.has('bio') }"
                        ></textarea>
                        <has-error :form="form" field="bio"></has-error>
                      </div>

                      <!-- File Attachment -->
                      <div class="form-group">
                        <input
                          @change="processFile"
                          name="photo"
                          type="file"
                          class="form-control-file"
                          id="profilePhoto"
                          required
                          :class="{ 'is-invalid': form.errors.has('photo') }"
                        >
                        <has-error :form="form" field="photo"></has-error>
                      </div>

                      <!-- Attach Profile Photo -->
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input
                                type="checkbox"
                                v-model="form.agree"
                                :class="{ 'is-invalid': form.errors.has('agree') }"
                              > I agree to the
                              <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                        <has-error :form="form" field="agree"></has-error>
                      </div>

                      <!-- Update Button -->
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button
                            type="submit"
                            class="btn btn-danger"
                            @click.prevent="updateInfo"
                          >Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
      </div>
    </section>
  </section>
</template>

<script>
export default {
  data() {
    return {
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
    fetchUserData() {
      axios.get("api/profile").then(({ data }) => this.form.fill(data));
    },
    processFile(e) {
      let file = e.target.files[0];
      //console.log(file);
      let limit = 1024 * 1024 * 2;
      if (file["size"] > limit) {
        Swal.fire({
          title: "File size exceed",
          text: "You are uploading a file larger then 2Mb",
          type: "error"
        });
        return false;
      }
      let reader = new FileReader();
      reader.onloadend = file => {
        //console.log("RESULT", reader.result);
        this.form.photo = reader.result;
      };
      reader.readAsDataURL(file);
    },
    updateInfo() {
      this.$Progress.start();
      this.form
        .put("api/profile")
        .then(() => {
          Fire.$emit("profileUpdated");
          Toast.fire({
            type: "success",
            title: "User updated successfully"
          });
          this.$Progress.finish();
        })
        .catch(() => {
          this.$Progress.fail();
        });
    },
    getProfilePhoto() {
      let photo =
        this.form.photo.length > 200
          ? this.form.photo
          : "img/profile/" + this.form.photo;
      return photo;
    }
  },
  mounted() {
    console.log("Component mounted.");
  },
  created() {
    this.$Progress.start();
    this.fetchUserData();
    Fire.$on("profileUpdated", () => {
      this.fetchUserData();
    });
  }
};
</script>

<style>
</style>

<template>
  <v-app style="background-color: #E0F7FA;">
    <v-container  fluid>
      <v-row style="height: 100vh;" align="center" justify="center">
        <v-col cols="12" sm="8" md="8">
          <v-card class="elevation-12"> 
            <v-window v-model="step">
              <v-window-item :value="1">
                <v-row>
                  <v-col cols="12" md="8">
                    <v-card-text class="mt-12">
                      <h1 class="text-center display-2">
                        <span style="color: #1b4188"> Sign in to codeSUM </span>
                      </h1>
                      <div class="text-center mt-4">
                        <v-btn class="mx-2" fab small color="#1B4188">
                          <v-icon>fab fa-facebook-f</v-icon>
                        </v-btn>
                        <v-btn class="mx-2" fab small color="#1B4188">
                          <v-icon>fab fa-instagram</v-icon>
                        </v-btn>
                        <v-btn class="mx-2" fab small color="#1B4188">
                          <v-icon>fab fa-youtube</v-icon>
                        </v-btn>
                      </div>
                      <br />
                      <h4 class="text-center mlt-4">
                        Enter your data for login
                      </h4>
                      <v-form>
                        <v-text-field
                          label="Email"
                          name="Email"
                          prepend-icon="fas fa-envelope"
                          type="text"
                          color="#1B4188"
                          v-model="user.email"
                        />
                        <v-text-field
                          id="password"
                          label="Password"
                          name="password"
                          prepend-icon="fas fa-lock"
                          type="password"
                          color="#1B4188"
                          v-model="user.password"
                        />
                      </v-form>
                    </v-card-text>
                    <div class="text-center mt-3">
                      <v-btn rounded color="#1B4188" dark @click="loginUser">SING IN</v-btn>
                    </div>
                  </v-col>
                  <v-col cols="12" md="4" style="background-color: #1b4188">
                    <v-card-text class="white--text mt-12">
                      <h1 class="text-center display-1">Hello, Friend!</h1>
                      <h5 class="text-center">
                        Enter your pesonnal details and start journay with us
                      </h5>
                    </v-card-text>
                    <div class="text-center">
                      <v-btn rounded outlined dark @click="step++"
                        >Register</v-btn
                      >
                    </div>
                  </v-col>
                </v-row>
              </v-window-item>
              <v-window-item :value="2">
                <v-row class="fill-height">
                  <v-col cols="12" md="4" style="background-color: #1b4188">
                    <v-card-text class="white--text mt-12">
                      <h1 class="text-center display-1">Welcome Back!</h1>
                      <h5 class="text-center">
                        To Keep connected with us please login with your
                        personnal info
                      </h5>
                    </v-card-text>
                    <div class="text-center">
                      <v-btn rounded outlined dark @click="step--"
                        >SING IN</v-btn
                      >
                    </div>
                  </v-col>
                  <v-col cols="12" md="8">
                    <v-card-text class="mt-12">
                      <h1 class="text-center display-2">
                        <span style="color: #1b4188"> Create Accaunt </span>
                      </h1>
                      <div class="text-center mt-4">
                        <v-btn class="mx-2" fab small color="#1B4188">
                          <v-icon>fab fa-facebook-f</v-icon>
                        </v-btn>
                        <v-btn class="mx-2" fab small color="#1B4188">
                          <v-icon>fab fa-instagram</v-icon>
                        </v-btn>
                        <v-btn class="mx-2" fab small color="#1B4188">
                          <v-icon>fab fa-youtube</v-icon>
                        </v-btn>
                      </div>
                      <h4 class="text-center mt-4">
                        Enter your data for registration
                      </h4>
                      <v-form ref="registerForm" :value="formValid">
                        <v-text-field
                          label="Name"
                          name="name"
                          prepend-icon="fas fa-user"
                          type="text"
                          color="#1B4188"
                          v-model="newUser.name"
                        />
                        <v-text-field
                          label="Email"
                          name="email"
                          prepend-icon="fas fa-envelope"
                          type="text"
                          color="#1B4188"
                          v-model="newUser.email"
                        />
                        <v-text-field
                          id="password"
                          label="Password"
                          name="password"
                          prepend-icon="fas fa-lock"
                          type="password"
                          color="#1B4188"
                          v-model="newUser.password"
                        />
                      </v-form>
                    </v-card-text>
                    <div class="text-center mt-n5">
                      <v-btn rounded color="#1B4188" dark @click="registerUser"
                        >Register</v-btn
                      >
                    </div>
                  </v-col>
                </v-row>
              </v-window-item>
            </v-window>
          </v-card>
        </v-col>
      </v-row>
    </v-container>

    <!-- Snackbar -->
    <v-snackbar
      top
      right
      v-model="snackbar.show"
      :timeout="snackbar.timeout"
      :color="snackbar.color"
    >
      {{ snackbar.text }}

      <template v-slot:action="{ attrs }">
        <v-btn color="blue" text v-bind="attrs" @click="snackbar.show = false">
          Close
        </v-btn>
      </template>
    </v-snackbar>
  </v-app>
</template>

<script>
import axios from "axios";
export default {
  name: "Auth",
  data() {
    return {
      step: 1,
      // -----------------------
      snackbar: {
        color: "success",
        show: false,
        text: "Registration is success!",
        timeout: 3000,
      },
      formValid: false,
      newUser: {
        email: "",
        name: "",
        password: "",
      },
      user: {
        email: "",
        password: "",
      },
    };
  },
  props: {
    source: String,
  },
  methods: {
    registerUser() {
      axios
        .post(
          "http://localhost/codeSUM_projekt/public/api/register",
          this.newUser
        )
        .then((response) => {
          console.log(response);
          if (response.data && response.data.success) {
            this.snackbar.show = true;
          }
        })
        .catch(() => {
          this.snackbar = {
            color: "#C62828",
            show: true,
            text: "The email has already been taken.",
            timeout: 3000,
          };
        });
    },
    loginUser() {
      axios
        .post("http://localhost/codeSUM_projekt/public/api/login", this.user)
        .then((response) => {
          console.log(response);
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
};
</script>

<style>
</style>
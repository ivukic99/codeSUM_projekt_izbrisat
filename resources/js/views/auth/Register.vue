<template>
  <div>
    <v-container class="fill-height" fluid>
      <v-row align="center" justify="center">
        <v-col cols="12">
          <v-card class="elevation-12">
            <v-toolbar color="primary" dark flat>
              <v-toolbar-title>Register form</v-toolbar-title>
            </v-toolbar>
            <v-card-text>
              <v-form ref="registerForm" :value="formValid">
                <v-text-field
                  label="Name"
                  name="name"
                  type="text"
                  v-model="name"
                />
                <v-text-field
                  label="Email"
                  name="email"
                  type="email"
                  v-model="email"
                />
                <v-text-field
                  id="password"
                  label="Password"
                  name="password"
                  type="password"
                  v-model="password"
                />
              </v-form>
            </v-card-text>

            <v-card-actions right>
              <v-btn color="primary" @click="registerUser"> Register </v-btn>
            </v-card-actions>
          </v-card>
        </v-col>
      </v-row>
    </v-container>

    <!-- Snackbar -->
    <v-snackbar
      v-model="snackbar.show"
      :timeout="snackbar.timeout"
      :color= "snackbar.color"
    >
      {{ snackbar.text }}

      <template v-slot:action="{ attrs }">
        <v-btn color="blue" text v-bind="attrs" @click="snackbar.show = false">
          Close
        </v-btn>
      </template>
    </v-snackbar>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Register",
  data() {
    return {
      snackbar: {
        color: "success",
        show: false,
        text: "Registration is success!",
        timeout: 3000,
      },
      formValid: false,
      email: "",
      name: "",
      password: "",
    };
  },
  methods: {
    registerUser() {
      axios
        .post("http://localhost/codeSUM_projekt/public/api/register", {
          name: this.name,
          email: this.email,
          password: this.password,
        })
        .then((response) => {
          console.log(response)
          if (response.data && response.data.success) {
            this.snackbar.show = true;
            this.$router.push({
              name: 'Login'
            });
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
  },
};
</script>

<style>
</style>
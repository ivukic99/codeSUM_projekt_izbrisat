<template>
  <div>
    <v-container class="fill-height" fluid>
      <v-row align="center" justify="center">
        <v-col cols="12">
          <v-card class="elevation-12">
            <v-toolbar color="primary" dark flat>
              <v-toolbar-title>Login form</v-toolbar-title>
            </v-toolbar>
            <v-card-text>
              <v-form ref="loginForm">
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
              <v-btn color="primary" @click="loginUser"> Login </v-btn>
            </v-card-actions>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Login",
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    loginUser() {
      axios
        .post("http://localhost/codeSUM_projekt/public/api/login", {
          email: this.email,
          password: this.password,
        })
        .then((response) => {
          console.log("+++++++++++++++++++++++")
          console.log(response)
        })
        .catch((err) => {
          console.log("ispis greska ------------------------")
          console.log(err)
        });
    },
  },
};
</script>

<style>
</style>
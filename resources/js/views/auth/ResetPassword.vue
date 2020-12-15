<template>
  <div>
    <Navbar />
    <v-row justify="center" align="center">
      <v-col cols="7">
        <v-img
          src="https://i.ibb.co/3hWd1fb/undraw-forgot-password-gi2d.png"
        ></v-img>
      </v-col>
      <v-col cols="5">
        <v-card class="mx-auto" max-width="450">
          <v-form>
            <v-card-text>
              <v-card-title> Unesite email za promjenu lozinke </v-card-title>
              <v-text-field label="Email" filled></v-text-field>
              <div class="text-right mt-3">
                <v-btn rounded color="#1B4188" dark 
                  >Pošalji email</v-btn
                >
              </div>
            </v-card-text>
          </v-form>
        </v-card>
      </v-col>
    </v-row>
  </div>
</template>

<script>
import Navbar from "../../components/Navbar.vue";
export default {
  name: "ResetPassword",
  components: {
    Navbar,
  },
};
</script>

<style></style>

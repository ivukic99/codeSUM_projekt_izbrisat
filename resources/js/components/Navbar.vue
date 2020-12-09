<template>
  <div>
    <v-app-bar app color="#1B4188">
      <v-app-bar-nav-icon
        class="hidden-lg-and-up"
        @click="drawer = true"
      ></v-app-bar-nav-icon>

      <v-toolbar-title class="light"
        >code<span class="font-weight-medium">SUM</span></v-toolbar-title
      >
      <v-spacer></v-spacer>

      <div class="hidden-md-and-down">
        <v-btn text to="/" class="light">Naslovnica</v-btn>
        <v-btn text to="/tecajevi" class="light">Tečajevi</v-btn>
        <v-btn text to="/postani_clan" class="light">Postani član</v-btn>
      </div>

      <v-spacer></v-spacer>

      <!-- <v-sheet v-if="isLoggedIn" color="#667fcc" class="hidden-md-and-down">
        <v-btn icon>
        <v-icon>mdi-magnify</v-icon>
        </v-btn>

        <v-btn icon>
        <v-icon>mdi-dots-vertical</v-icon>
        </v-btn>
    </v-sheet> -->
      <v-sheet color="#1B4188" class="hidden-md-and-down">
        <div v-if="isLoggedIn">
          <v-btn icon class="light">
            <v-icon>mdi-magnify</v-icon>
          </v-btn>
          <v-btn text to="/auth" class="light"> Prijava </v-btn>
        </div>
        <!-- <v-btn color="indigo lighten-5" to="/register">
            <span style="color: #1B4188;">Registracija</span>
        </v-btn> -->
        <div v-else>
          <v-btn icon class="light">
            <v-icon>mdi-magnify</v-icon>
          </v-btn>
        </div>
      </v-sheet>
    </v-app-bar>

    <!--Navigation drawer for small devices-->
    <v-navigation-drawer v-model="drawer" absolute temporary>
      <v-list nav dense>
        <v-list-item-group
          v-model="group"
          active-class="deep-purple--text text--accent-4"
        >
          <v-list-item>
            <v-list-item-icon>
              <v-icon>mdi-home</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Naslovnica</v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-icon>
              <v-icon>mdi-account</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Tečajevi</v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-icon>
              <v-icon>mdi-account</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Postani član</v-list-item-title>
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isLoggedIn: true,
      drawer: false,
      group: null,
    };
  },
  created() {
    if (localStorage.getItem("token")) {
      this.isLoggedIn = true;
    }
  },
  methods: {},
};
</script>

<style>
.v-btn__content,
.light {
  color: white !important;
}
</style>

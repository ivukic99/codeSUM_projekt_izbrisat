<template>
  <div>
    <v-app-bar app dark color="#1B4188">
      <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

      <v-toolbar-title class="light"
        >code<span class="font-weight-medium">SUM</span></v-toolbar-title
      >

      <v-spacer></v-spacer>

      <v-btn icon>
        <v-icon>mdi-magnify</v-icon>
      </v-btn>

      <v-btn icon>
        <v-icon>mdi-dots-vertical</v-icon>
      </v-btn>
    </v-app-bar>

    <!--Navigation drawer-->
    <v-navigation-drawer color="#1B4188" v-model="drawer" app dark>
      <template v-slot:prepend>
        <div>
          <v-container style="height: 200px" class="d-flex justify-center">
            <div class="d-flex flex-column justify-space-around align-center">
              <v-avatar size="100">
                <img
                  v-bind:src="
                    getUserDetails.img
                      ? getUserDetails.img
                      : 'https://cdn.pixabay.com/photo/2012/04/26/19/43/profile-42914__340.png'
                  "
                  alt="CodeSUM user"
                />
              </v-avatar>
              <div class="d-flex flex-column align-center justify-around pa-3">
                <span class="white--text text-h6">{{ getUserDetails.name }}</span>
                <!--
                <span class="white--text text-caption">{{ getUserDetails.role.type ? getUserDetails.role.type : 'Nije navedeno' }} | {{ getUserDetails.role.org ? getUserDetails.role.org : 'Nije navedno' }}</span>
                -->
              </div>
            </div>
          </v-container>
        </div>
      </template>

      <hr style="background: white" />

      <!--Links-->
      <v-list-item-group v-model="group">
        <v-list>
          <v-list-item v-for="item in items" :key="item.title" link :to="item.to">
            <v-list-item-icon>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title>{{ item.title }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-list-item-group>

      <!--Action buttons-->
      <template v-slot:append>
        <div class="pa-2">
          <v-btn block color="red" @click="logout"> Odjava </v-btn>
        </div>
      </template>
    </v-navigation-drawer>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  data() {
    return {
      drawer: true,
      group: null,
      items: [
        { title: "Naslovnica", icon: "mdi-view-dashboard", to: "/" },
        { title: "Profil", icon: "mdi-account", to: "/profil" },
        { title: "Tečajevi", icon: "mdi-notebook-edit-outline", to: "/tecajevi" },
        { title: "Izazovi", icon: "mdi-card-text-outline" },
        { title: "Klanovi", icon: "mdi-account-multiple-outline" },
        { title: "Postavke", icon: "mdi-card-bulleted-settings-outline" },
      ],
    };
  },
  computed: {
    ...mapGetters(["getUserDetails"]),
  },
  methods: {
    logout() {
      localStorage.removeItem("token");
      this.$router.push({ name: "Auth" });
    },
  },
};
</script>

<style></style>

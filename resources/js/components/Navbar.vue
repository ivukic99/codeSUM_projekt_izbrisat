<template>
<div>

    <v-app-bar app color="#1B4188">
    <v-app-bar-nav-icon @click="drawer = true"></v-app-bar-nav-icon>

    <v-toolbar-title class="light">codeSUM</v-toolbar-title>
    <v-spacer></v-spacer>
    
    <div class="hidden-md-and-down">
        <v-btn text to="/">Naslovnica</v-btn>
        <v-btn text to="/tecajevi">Tečajevi</v-btn>
        <v-btn text to="/postani_clan">Postani član</v-btn>
    </div>

    <v-spacer></v-spacer>

    <v-sheet v-if="isLoggedIn" color="#667fcc" class="hidden-md-and-down">
        <v-btn icon>
        <v-icon>mdi-magnify</v-icon>
        </v-btn>

        <v-btn icon>
        <v-icon>mdi-dots-vertical</v-icon>
        </v-btn>
    </v-sheet>
    <v-sheet v-else color="#1B4188" class="hidden-md-and-down">
        <v-btn icon>
            <v-icon>mdi-magnify</v-icon>
        </v-btn>
        <v-btn text>
            Prijava
        </v-btn>
        <v-btn color="indigo lighten-5">
            <span style="color: #1B4188;">Registracija</span>
        </v-btn>
    </v-sheet>
  </v-app-bar>

  <!--Navigation drawer for small devices-->
    <v-navigation-drawer
      v-model="drawer"
      absolute
      temporary
    >
      <v-list
        nav
        dense
      >
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
    data(){
        return{
            isLoggedIn: false,
            drawer: false,
            group: null
        }
    }
}
</script>

<style>

 .v-btn__content, .light{
     color: white;
 }

</style>
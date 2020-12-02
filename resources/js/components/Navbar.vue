<template>

    <v-app-bar app color="#667fcc">
    <v-app-bar-nav-icon></v-app-bar-nav-icon>

    <v-toolbar-title class="light">codeSUM</v-toolbar-title>
    <v-spacer></v-spacer>

    <v-btn text to="/">Naslovnica</v-btn>
    <v-btn text to="/tecajevi">Tečajevi</v-btn>
    <v-btn text to="/postani_clan">Postani član</v-btn>

    <v-spacer></v-spacer>

    <v-sheet v-if="isLoggedIn" color="#667fcc">
        <v-btn icon>
        <v-icon>mdi-magnify</v-icon>
        </v-btn>

        <v-btn icon>
        <v-icon>mdi-dots-vertical</v-icon>
        </v-btn>
    </v-sheet>
    <v-sheet v-else color="#667fcc">
        <v-btn icon>
            <v-icon>mdi-magnify</v-icon>
        </v-btn>
        <router-link to="/login">
            <v-btn text>
            Prijava
        </v-btn>
        </router-link>
        <router-link to="register">
            <v-btn color="indigo lighten-5">
            <span style="color: #667fcc;">Registracija</span>
        </v-btn>
        </router-link>
    </v-sheet>
  </v-app-bar>

</template>

<script>
export default {
    data(){
        return{
            isLoggedIn: false
        }
    }
}
</script>

<style>

 .v-btn__content, .light{
     color: white;
 }

</style>
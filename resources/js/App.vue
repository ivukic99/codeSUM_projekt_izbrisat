<template>
  <v-app>
    <Navbar />
  <v-main>

    {{ getTest }}
    <router-view />

  </v-main>
  </v-app>
</template>

<script>
import Navbar from './components/Navbar.vue';
import { mapGetters } from 'vuex';

export default {
  components: {
    Navbar
  },
   computed:{
    ...mapGetters([
      'getTest'
    ])
  }
}
</script>

<style>

</style>
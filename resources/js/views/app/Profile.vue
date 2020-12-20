<template>
  <div>

      <Navbar />
      <v-container>

        Profile

        {{ getUserDetails }}

      </v-container>
  </div>
</template>

<script>
import { mapGetters } from 'vuex';
import Navbar from '../../components/app/NavbarUser.vue';
export default {
    components:{
        Navbar
    },
    computed: {
        ...mapGetters([
            'getUserDetails'
        ])
    },
    mounted(){
        this.$store.dispatch('setUserDetails')
    }
}
</script>

<style>

</style>
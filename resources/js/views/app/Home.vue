<template>
    <div>
        <NavbarUser />
        
        <v-container>
            {{ getUserDetails }}
        </v-container>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
import NavbarUser from '../../components/app/NavbarUser.vue';
export default {
    components:{
        NavbarUser
    },
    computed: {
        ...mapGetters([
            'getUserDetails'
        ])
    },
    created(){
        this.$store.dispatch('setUserDetails')
    }
}
</script>

<style>

</style>
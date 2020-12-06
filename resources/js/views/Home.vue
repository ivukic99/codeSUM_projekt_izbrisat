<template>
    <div>
        {{ getUserDetails }}
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
export default {
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
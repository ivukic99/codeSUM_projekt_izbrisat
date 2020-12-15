<template>
  <div>
    <Navbar />

    <FilterSearch />

    <v-container>
        
        <v-row>
            <v-col v-for="i in 8" :key="i" xs="12" sm="12" md="6" lg="6">
                
                <v-card
                    :loading="loading"
                    class="mx-auto my-12"
                    max-width="374"
                >
                    <template slot="progress">
                    <v-progress-linear
                        color="deep-purple"
                        height="10"
                        indeterminate
                    ></v-progress-linear>
                    </template>

                    <v-img
                    height="200"
                    src="https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png"
                    ></v-img>


                    <v-card-text>
                    <v-row
                        justify="center"
                        align="center"
                        class="mx-0"
                    >
                        
                        <v-card-title>Test Course</v-card-title>

                    </v-row>

                    <div>
                        <p style="text-align: justify;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam a expedita nostrum assumenda vel dolorum dolore consequuntur?</p>
                    </div>
                    </v-card-text>

                    <div class="d-flex justify-content-end mt-3 mr-5">

                        <v-rating
                        :value="4.5"
                        color="amber"
                        dense
                        half-increments
                        readonly
                        size="14"
                        ></v-rating>

                        <div class="grey--text ml-4">
                        (112)
                        </div>
                    </div>

                    <v-divider class="mx-4"></v-divider>

                    <v-card-text>
                    <v-chip-group
                        v-model="selection"
                        active-class="deep-purple accent-4 white--text"
                        column
                    >
                        <v-chip
                        class="ma-2"
                        color="#1B4188"
                        label
                        text-color="white"
                        >
                        <v-icon left>
                            mdi-clock
                        </v-icon>
                            4h
                        </v-chip>

                        <v-chip
                        class="ma-2"
                        color="#1B4188"
                        label
                        text-color="white"
                        style="background: #1B4188 !important"
                        >
                        <v-icon left>
                            mdi-account
                        </v-icon>
                            218
                        </v-chip>

                        <v-chip
                        class="ma-2"
                        color="#1B4188"
                        label
                        text-color="white"
                        >
                        <v-icon left>
                            mdi-map
                        </v-icon>
                            24
                        </v-chip>

                        <v-chip
                        class="ma-2"
                        color="#1B4188"
                        label
                        text-color="white"
                        >
                        <v-icon left>
                            mdi-note
                        </v-icon>
                            32
                        </v-chip>

                    </v-chip-group>
                    </v-card-text>
                </v-card>

            </v-col>
        </v-row>

    </v-container>
  </div>
</template>

<script>
import Navbar from '../components/Navbar.vue';
import FilterSearch from '../components/FilterSearch';

export default {
    components: {
        Navbar,
        FilterSearch
    },

    data: () => ({
      loading: false,
      selection: 1,
    }),

    methods: {
      reserve () {
        this.loading = true

        setTimeout(() => (this.loading = false), 2000)
      },
    },

}
</script>

<style>

</style>
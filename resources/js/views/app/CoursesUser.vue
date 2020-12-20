<template>
  <div>
    <Navbar />

    <FilterSearch @changed_category="changeCategory($event)" @changed_term="changeTerm($event)"/>

    <v-container>
        
        <v-row>
            <v-col v-for="(course, index)  in filteredCourses" :key="index" xs="12" sm="12" md="6" lg="6">
                
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
                    :src="course.image"
                    ></v-img>


                    <v-card-text>
                    <v-row
                        justify="center"
                        align="center"
                        class="mx-0"
                    >
                        
                        <v-card-title>{{ course.name }}</v-card-title>

                    </v-row>

                    <div>
                        <p style="text-align: justify;"> {{ course.description }} </p>
                    </div>
                    </v-card-text>

                    <div class="d-flex justify-content-around mt-3 mr-5">

                        <v-btn color="#1B4188">
                            Upiši me
                        </v-btn>

                        <div class="d-flex">
                            <v-rating
                            :value="course.rating.stars"
                            color="amber"
                            dense
                            half-increments
                            readonly
                            size="14"
                            ></v-rating>

                            <div class="grey--text ml-4">
                            {{ course.rating.people_asked }}
                            </div>
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
                            {{ course.material_hours }}
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
                            {{ course.participants }}
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
                            {{ course.materials }}
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
                            {{ course.code_tasks }}
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
import { mapGetters } from 'vuex';
import Navbar from '../../components/app/NavbarUser.vue';
import FilterSearch from '../../components/FilterSearch';

export default {
    components: {
        Navbar,
        FilterSearch
    },

    data: () => ({
      loading: false,
      selection: 1,
      currentTerm: '',
      currentCategory: 'All',
      courses: [
          {
              image: 'https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png',
              name: 'Test Course 1',
              description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam a expedita nostrum assumenda vel dolorum dolore consequuntur',
              rating: {
                  stars: 4.5,
                  people_asked: 112
              },
              material_hours: 4,
              participants: 218,
              materials: 24,
              code_tasks: 32,
              category: 'Data science'
          },
          {
              image: 'https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png',
              name: 'Python data visualization',
              description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam a expedita nostrum assumenda vel dolorum dolore consequuntur',
              rating: {
                  stars: 4.5,
                  people_asked: 112
              },
              material_hours: 4,
              participants: 218,
              materials: 24,
              code_tasks: 32,
              category: 'Data science'
          },
          {
              image: 'https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png',
              name: 'Python 3',
              description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam a expedita nostrum assumenda vel dolorum dolore consequuntur',
              rating: {
                  stars: 4.5,
                  people_asked: 112
              },
              material_hours: 4,
              participants: 218,
              materials: 24,
              code_tasks: 32,
              category: 'Basics of programming'
          },
          {
              image: 'https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png',
              name: 'Test Course 4',
              description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam a expedita nostrum assumenda vel dolorum dolore consequuntur',
              rating: {
                  stars: 4.5,
                  people_asked: 112
              },
              material_hours: 4,
              participants: 218,
              materials: 24,
              code_tasks: 32,
              category: 'Web development'
          },
          {
              image: 'https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png',
              name: 'Test Course 5',
              description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam a expedita nostrum assumenda vel dolorum dolore consequuntur',
              rating: {
                  stars: 4.5,
                  people_asked: 112
              },
              material_hours: 4,
              participants: 218,
              materials: 24,
              code_tasks: 32,
              category: 'Data science'
          },
          {
              image: 'https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png',
              name: 'Test Course 6',
              description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam a expedita nostrum assumenda vel dolorum dolore consequuntur',
              rating: {
                  stars: 4.5,
                  people_asked: 112
              },
              material_hours: 4,
              participants: 218,
              materials: 24,
              code_tasks: 32,
              category: 'Web development'
          },
          {
              image: 'https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png',
              name: 'Test Course 7',
              description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam a expedita nostrum assumenda vel dolorum dolore consequuntur',
              rating: {
                  stars: 4.5,
                  people_asked: 112
              },
              material_hours: 4,
              participants: 218,
              materials: 24,
              code_tasks: 32,
              category: 'Mobile applications'
          },
          {
              image: 'https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png',
              name: 'Test Course 8',
              description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam a expedita nostrum assumenda vel dolorum dolore consequuntur',
              rating: {
                  stars: 4.5,
                  people_asked: 112
              },
              material_hours: 4,
              participants: 218,
              materials: 24,
              code_tasks: 32,
              category: 'Algorithms'
          },
          
          {
              image: 'https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png',
              name: 'Uvod u Python',
              description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam a expedita nostrum assumenda vel dolorum dolore consequuntur',
              rating: {
                  stars: 4.5,
                  people_asked: 112
              },
              material_hours: 4,
              participants: 218,
              materials: 24,
              code_tasks: 32,
              category: 'Basics of programming'
          },
          
          {
              image: 'https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png',
              name: 'Test Course 10',
              description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam a expedita nostrum assumenda vel dolorum dolore consequuntur',
              rating: {
                  stars: 4.5,
                  people_asked: 112
              },
              material_hours: 4,
              participants: 218,
              materials: 24,
              code_tasks: 32,
              category: 'Databases'
          },
      ]
    }),

    methods: {
      reserve () {
        this.loading = true

        setTimeout(() => (this.loading = false), 2000)
      },

      changeTerm: function(term){
          this.currentTerm = term
      },

      changeCategory: function(category) {
          this.currentTerm = ""
          this.currentCategory = category
		}
    },

    computed: {
        ...mapGetters([
            'getUserDetails'
        ]),
        filteredCourses(){
            var term = this.currentTerm
            var category = this.currentCategory
			
			if(category === "All" && term === "") {
				return this.courses;
			}else if(this.currentCategory === "All"){
                return this.courses.filter(function(course) {
                    return course.name.includes(term);
                });
            }else {
                return this.courses.filter(function(course) {
                    return course.category === category && course.name.includes(term);
                });
            }
        }
    },
    created(){
        this.$store.dispatch('setUserDetails')
    }

}
</script>

<style>

</style>
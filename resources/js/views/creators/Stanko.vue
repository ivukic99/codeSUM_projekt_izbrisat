<template>
  <div>
    <br />
    <v-card class="mx-auto">
      <v-img height="200" src="https://iili.io/FKWKMJ.jpg"></v-img>
      <v-row style="margin: 2.5%; position: absolute; top: 125px">
        <v-list-item>
          <v-list-item-avatar size="140">
            <img v-bind:src="'https://scontent-vie1-1.xx.fbcdn.net/v/t1.0-9/99424225_2554190311459227_4308358059136122880_o.jpg?_nc_cat=111&ccb=2&_nc_sid=174925&_nc_eui2=AeFLrHAaSQ75nMT6p1jr6qKcMknXUxRAO0oySddTFEA7SkYM4_Omi8t6OTJMvmyuHIJODkF2tzTrPI7Pnau38QcU&_nc_ohc=fdEeJ1s79eUAX_PRsXB&_nc_ht=scontent-vie1-1.xx&oh=623f7816333fa3dc82a04f5b50e01a14&oe=5FF4B3DC'" alt="Stanko" />
          </v-list-item-avatar>
          <v-list-item-content>
            <v-list-item-title class="title" style="margin-top: 20px"
              > <h2>Stanko Bebek</h2></v-list-item-title
            >
            <v-list-item-subtitle
              >Student | Informatika FPMOZ</v-list-item-subtitle
            >
          </v-list-item-content>
        </v-list-item>

        <v-row>
          <v-col cols="md-4">
            <v-card color="#cfd7d6">
              <v-card-title class="headline"> About me </v-card-title>
              <v-card-text class="text-justify">
                Moje ime je Stanko Bebek i imam 20 godina, dolazim iz Ljubuškog.
                Trenutno sam student treće godine preddiplomskog studija informatike.
                Pored studija od 2018. godine sam član udruge Switch, gdje sam zajedno sa kolegama
                uspio napraviti nekoliko projekata i naučiti puno toga novog. Također, kroz udrugu
                sam stekao i dosta drugih vještina, kao što su organizacijske.Od 2020 godine sam predsjednik
                studentskog zbora FPMOZ, gdje sam uspio upoznati dosta kolega sa drugih studija, a to nas je
                na kraju dovelo i do jako puno novih ideja i projekata.Na prvoj i drugoj godini sam bio demonstrator
                iz kolegija Programiranje 1.
                Do sad sam sudjelovao na nekoliko projekata: Don Quizotee, web stranica studija informatike,
                Smart Parking te codeSUM koji je u izradi.Od zanimanja, glazba i nogomet.
                Pink Floyd, Azra, EKV...Hajduk Split.
              </v-card-text>
            </v-card>
            <br />
            <h3 class="headline">Contact</h3>
            <br />

            <v-btn text href="https://github.com" target="_blank">
              <v-icon left>fab fa-github</v-icon> github.com/Stanko172
            </v-btn>
            <br />
            <v-btn text href="https://www.codewars.com/dashboard" target="_blank">
              <v-icon left>fas fa-code</v-icon> codewars.com/Stanko172
            </v-btn>
            <br />
            <v-btn text href="https://codepen.io" target="_blank">
              <v-icon left>fab fa-codepen</v-icon> codepen.io/Stanko172
            </v-btn>
          </v-col>

          <v-col cols="md-8">
            <h1 class="text-center headline">T I M E L I N E</h1>
            <br>
            <v-timeline>
              <v-timeline-item
                v-for="(year, i) in years"
                :key="i"
                :color="year.color"
                small
              >
                <template v-slot:opposite>
                  <span
                    :class="`headline font-weight-bold ${year.color}--text`"
                    v-text="year.year"
                  ></span>
                </template>

                <template>
                  <h2
                    :class="`headline font-weight-light mb-4 ${year.color}--text`"
                  >
                    {{ year.text }}
                  </h2>
                </template>
              </v-timeline-item>
            </v-timeline>
          </v-col>
        </v-row>
        <v-row>
          <v-col cols="md-12">
            <br>
            <hr color="#CFD8DC">
            <br>

            <div>
              <h1 class="text-center headline"> List of technologies </h1>
              <br>
              <v-progress-linear v-model="Python" color="blue-grey" height="25">
                <template v-slot:default="{ value }">
                  <strong>Python | {{ Math.ceil(value) }}%</strong>
                </template>
              </v-progress-linear>
              <br />
              <v-progress-linear v-model="C" color="blue-grey" height="25">
                <template v-slot:default="{ value }">
                  <strong>C | {{ Math.ceil(value) }}%</strong>
                </template>
              </v-progress-linear>
              <br />
              <v-progress-linear  v-model="HTML_CSS_JS" color="blue-grey" height="25">
                <template v-slot:default="{ value }">
                  <strong>HTML CSS JS | {{ Math.ceil(value) }}%</strong>
                </template>
              </v-progress-linear>
              <br />
              <v-progress-linear v-model="PHP" color="blue-grey" height="25">
                <template v-slot:default="{ value }">
                  <strong>PHP | {{ Math.ceil(value) }}%</strong>
                </template>
              </v-progress-linear>
              <br />
              <v-progress-linear v-model="JAVA" color="blue-grey" height="25">
                <template v-slot:default="{ value }">
                  <strong>JAVA | {{ Math.ceil(value) }}%</strong>
                </template>
              </v-progress-linear>
              <br />
              <v-progress-linear v-model="Vuejs" color="blue-grey" height="25">
                <template v-slot:default="{ value }">
                  <strong>Vuejs | {{ Math.ceil(value) }}%</strong>
                </template>
              </v-progress-linear>
              <br />
              <v-progress-linear
                v-model="Microsoft_Office"
                color="blue-grey"
                height="25"
              >
                <template v-slot:default="{ value }">
                  <strong>Microsoft_Office | {{ Math.ceil(value) }}%</strong>
                </template>
              </v-progress-linear>
            </div>
          </v-col>
        </v-row>
      </v-row>
    </v-card>
  </div>
</template>

<script>
import { mapActions } from 'vuex'
export default {
  name: "Stanko",
  data: () => ({
    user:{ 
    name: 'Stanko Bebek',
    img: 'https://scontent-vie1-1.xx.fbcdn.net/v/t1.0-9/117708432_2620170331527891_5357806687406333131_o.jpg?_nc_cat=107&ccb=2&_nc_sid=09cbfe&_nc_ohc=Y95B5AnOrKsAX_63FmC&_nc_oc=AQlQ6RFt8QPZxbvqIHHIqkSmzlyrWbVl8KJv7dN8xvsU5rh7_IQcPH70coHBfaT7ELc&_nc_ht=scontent-vie1-1.xx&oh=fb92ea0e054ae57f87bfa83b3733aba9&oe=5FCFDB27',
    role:{
      type: 'Student',
      org: 'FPMOZ Informatika'
    }
    },
    Python: 80,
    C: 55,
    HTML_CSS_JS: 90,
    JAVA: 60,
    PHP: 80,
    Vuejs: 90,
    MySQL: 70,
    Microsoft_Office: 80,
    years: [
      {
        text: "SSŠ Ruđer Bošković -Ekonomski tehničar",
        color: "amber",
        year: "2014",
      },
      {
        text: "FPMOZ -Informatika",
        color: "blue",
        year: "2018",
      },
      {
        text: "Udruga Switch",
        color: "blue",
        year: "2018",
      },
      
      {
        text: "Demonstrator na FPMOZ",
        color: "green",
        year: "2019",
      },
      {
        text: "Predavač na tečajevima Studentskog zbora",
        color: "purple",
        year: "2020",
      },
      {
        text: "Studentski zbor FPMOZ",
        color: "purple",
        year: "2020",
      },
    ],
  }),
  methods: {
          ...mapActions([
              'changeUser'
          ]),
          handleUser(){
            var payload = this.user
            this.changeUser(payload)
          }
  },
  created(){
    this.handleUser()
  }
};
</script>

<style scoped>
</style>
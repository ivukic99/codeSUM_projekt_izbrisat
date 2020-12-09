<template>
  <div>
    <br />
    <v-card class="mx-auto">
      <v-img height="200" src="https://iili.io/FKX3RS.png"></v-img>
      <v-row style="margin: 2.5%; position: absolute; top: 125px">
        <v-list-item>
          <v-list-item-avatar size="140">
            <img v-bind:src="user.img" alt="Igor" />
          </v-list-item-avatar>
          <v-list-item-content>
            <v-list-item-title class="title" style="margin-top: 20px"
              > <h2>{{ user.name }}</h2></v-list-item-title
            >
            <v-list-item-subtitle
              >{{ user.role.type }} | {{ user.role.org }}</v-list-item-subtitle
             >
          </v-list-item-content>
        </v-list-item>

        <v-row>
          <v-col cols="md-4">
            <v-card color="#cfd7d6">
              <v-card-title class="headline"> About me </v-card-title>
              <v-card-text class="text-justify">
                Moje ime je Igor Vukić, imam 21 godinu i dolazim iz sela Tolisa u općini Orašje.
                Nakon završetka SSŠ u Orašju započeo sam preddiplomski studij informatike na Svučilištu u Mostaru 
                trenutno sam na trećoj godini te tu ne mislim stati.
                Pored studija od 2019. godine sam član udruge Switch gdje zajedno sa kolegama radim
                na mnogo projekata gdje stečemo nova iskustva te učimo rad sa novim tehnologijama. 
                Dosada u svome školovanju koristio sam nekoliko vrsta tehnologija kao što je Python, Java, C++, 
                HTML, CSS, JS, PHP te framework kao što su VueJS, Vuetify, Quesar, Laravel, SQL, MC Oficce.
                Neki od projekata koje sam radio su: POKEDEX, stranica
                Informatike, Smart Parking te codeSUM koji je u izradi.
              </v-card-text>
            </v-card>
            <br />
            <h3 class="headline">Contact</h3>
            <br />

            <v-btn text href="https://github.com" target="_blank">
              <v-icon left>fab fa-github</v-icon> Github
            </v-btn>
            <br />
            <v-btn text href="https://www.codewars.com/dashboard" target="_blank">
              <v-icon left>fas fa-code</v-icon>codewars
            </v-btn>
            <br />
            <v-btn text href="https://codepen.io" target="_blank">
              <v-icon left>fab fa-codepen</v-icon>codepen
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
import { mapActions } from 'vuex';
export default {
  name: "Igor",
  data: () => ({
    user : {
      name: 'Igor Vukić',
      img: 'https://scontent-vie1-1.xx.fbcdn.net/v/t1.0-9/119899914_10217644272169835_2683984069419703109_o.jpg?_nc_cat=101&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeHvuZy9tIT-VnO1IVwd8o6FF6mKKOBxsggXqYoo4HGyCJmOi-aNASJ2gXR-jCkIxYA&_nc_ohc=XREUwx_BB_kAX8r2jcQ&_nc_ht=scontent-vie1-1.xx&oh=94e00e25a85157c2eaff374c70e705b0&oe=5FD26330',
      role: {
        type: 'Student',
        org: 'FPMOZ Informatika'
      }
    },
    Python: 60,
    C: 55,
    HTML_CSS_JS: 90,
    JAVA: 40,
    PHP: 70,
    Vuejs: 90,
    MySQL: 75,
    Microsoft_Office: 80,
    years: [
      {
        text: "Upisao SSŠ u Orašju",
        color: "blue",
        year: "2014",
      },
      {
        text: "Završio SSŠ u Orašju",
        color: "green",
        year: "2018",
      },
      {
        text: "Upisao preddiplomski studij Informatike na Sveučilištu u Mostaru",
        color: "blue",
        year: "2018",
      },
      {
        text: "Priključio se udruzi Switch",
        color: "amber",
        year: "2019",
      },
      {
        text: "Započeo praksu u SUMIT-u",
        color: "amber",
        year: "2019",
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
  mounted(){
    this.handleUser()
  }
};
</script>

<style scoped>
</style>
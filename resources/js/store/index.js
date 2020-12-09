import Vue from 'vue';
import Vuex from 'vuex';

import axios from 'axios';

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
      token: null,
      isUserLoggednIn: false,
      userDetails: {}
  },
  getters:{
    getLogged(state){
        return state.isUserLoggednIn;
    },
    getUserDetails(state){
      return state.userDetails
    }
  },
  mutations: {
    SET_TOKEN(state, token){
        state.token = token
        state.isUserLoggedIn = true
    },
    SET_USER_DETAILS(state, payload){
      state.userDetails = payload
      state.isUserLoggednIn = true
    }
  },
  actions: {
    saveUserToken({ commit }, token){
        commit('SET_TOKEN', token)
      },
    setUserDetails({ commit }){
      const token = localStorage.getItem('token')
      const config = {
        headers: { Authorization: `Bearer ${token}` }
      };
      axios.get('http://localhost/codeSUM_projekt/public/api/me', config)
      .then((response) => {
        commit('SET_USER_DETAILS', response.data)
        console.log(response)
      })
      .catch((err) => {
        console.log(err)
      })
    }
  },
  modules: {
  }
})
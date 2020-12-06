import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
      test: 'test message!'
  },
  getters:{
    getTest(state){
        return state.test;
    }
  },
  mutations: {

  },
  actions: {

  },
  modules: {
  }
})
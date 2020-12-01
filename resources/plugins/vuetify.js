import Vue from 'vue';
import Vuetify from 'vuetify/lib';

import colors from 'vuetify/lib/util/colors';

Vue.use(Vuetify)

const opts = {
    theme: {
          themes: {
              light: {
                  primary: colors.indigo.darken3, // #E53935
              },
          },
      },
  }

export default new Vuetify(opts)
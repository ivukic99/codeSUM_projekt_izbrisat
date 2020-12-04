import '@fortawesome/fontawesome-free/css/all.css';
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
    icons: {
        iconfont: 'mdi' || 'fa',  // 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4' || 'faSvg'
    },
}

export default new Vuetify(opts)
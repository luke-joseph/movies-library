window._ = require('lodash');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue').default;

import { genres } from './data/genres.js';

window.genres = genres;

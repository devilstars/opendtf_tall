import './state/spruce';
import 'alpinejs';

import ModalAuth from "./modules/modals/auth";
import Search from "./modules/search";
import Sidebar from "./modules/sidebar";
import PostSort from "./modules/post-sort";


/* modals */
new ModalAuth();
/* end of modals */


/* modules */
new Search();
new Sidebar();
new PostSort();
/* end of modules */

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

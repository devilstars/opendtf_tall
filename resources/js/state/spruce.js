import Spruce from '@ryangjchandler/spruce'
import ModalAuth from "./modals/auth";
import Search from "./modules/search";
import Sidebar from "./modules/sidebar";

/* modals */
new ModalAuth();
/* end of modals */

/* modules */
new Search();
new Sidebar();
/* end of modules */


export default Spruce

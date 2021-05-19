import Spruce from '@ryangjchandler/spruce'
import ModalAuth from "./modals/auth";
import Search from "./modules/search";
import Sidebar from "./modules/sidebar";
import ProfileMenu from "./modules/profile/profileMenu";

/* modals */
new ModalAuth();
/* end of modals */

/* modules */
new Search();
new Sidebar();
new ProfileMenu();
/* end of modules */


export default Spruce

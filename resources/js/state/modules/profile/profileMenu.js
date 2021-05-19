import Spruce from "@ryangjchandler/spruce";

class ProfileMenu {

    constructor() {
        this.init();
    }

    init() {
        Spruce.store('profileMenu', {
            open: false,
        });
    }

}

export default ProfileMenu;

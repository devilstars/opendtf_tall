import Spruce from "@ryangjchandler/spruce";

class Sidebar {

    constructor() {
        this.init();
    }

    init() {
        Spruce.store('sidebar', {
            open: false,
        });
    }

}

export default Sidebar;

import Spruce from "@ryangjchandler/spruce";

class modalAuth {

    constructor() {
        this.init();
    }

    init() {
        Spruce.store('modalAuth', {
            open: true,
        });
    }

}

export default modalAuth;

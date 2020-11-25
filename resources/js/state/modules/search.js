import Spruce from "@ryangjchandler/spruce";

class Search {

    constructor() {
        this.init();
    }

    init() {
        Spruce.store('search', {
            open: false,
        });
    }

}

export default Search;

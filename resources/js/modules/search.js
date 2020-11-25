class Search {

    constructor() {
        window.search = this.init;
    }

    init() {
        return {
            open() {
                setTimeout(() => {
                    this.$store.search.open = true;
                }, 100)
            },
            close() {
                this.$store.search.open = false;
            },
            toggle() {
                this.$store.search.open = !this.$store.search.open;
            },
            closeAway() {
                if (this.$store.search.open) {
                    this.$store.search.open = false;
                } else {
                    return false;
                }
            }
        }
    }

}

export default Search;

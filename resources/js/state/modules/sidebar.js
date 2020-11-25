class Sidebar {

    constructor() {
        window.sidebar = this.init;
        window.sidebarToggle = this.toggle;
    }

    /**
     * @returns {{hide(): void, hideAway(): void, open(): void}}
     */
    init() {
        return {
            open() {
                setTimeout(() => {
                    this.$store.sidebar.open = true;
                }, 100)
            },
            hide() {
                this.$store.sidebar.open = false;
            },
            hideAway() {
                if (this.$store.sidebar.open) {
                    this.$store.sidebar.open = false;
                }
            }
        }
    }

    /**
     * @returns {{toggle(): void}}
     */
    toggle() {
        return {
            toggle() {
                if (!this.$store.sidebar.open) {
                    setTimeout(() => {
                        this.$store.sidebar.open = true;
                    }, 100)
                } else {
                    this.$store.sidebar.open = false;
                }
            }
        }
    }

}

export default Sidebar;

class ProfileMenu {

    constructor() {
        window.profileMenu = this.init;
    }

    init() {
        return {
            open() {
                setTimeout(() => {
                    this.$store.profileMenu.open = true;
                    // window.livewire.rescan()
                }, 100)
            },
            close() {
                this.$store.profileMenu.open = false;
                // window.livewire.rescan()
            },
            closeAway() {
                if (this.$store.profileMenu.open) {
                    this.$store.profileMenu.open = false;
                    // window.livewire.rescan()
                } else {
                    return false;
                }
            }
        }
    }

}

export default ProfileMenu;

class ModalAuth {

    constructor() {
        window.modalAuth = this.init;
    }

    init() {
        return {
            openModal() {
                setTimeout(() => {
                    this.$store.modalAuth.open = true;
                    window.livewire.rescan()
                }, 100)
            },
            closeModal() {
                this.$store.modalAuth.open = false;
                window.livewire.rescan()
            },
            closeModalAway() {
                if (this.$store.modalAuth.open) {
                    this.$store.modalAuth.open = false;
                    window.livewire.rescan()
                } else {
                    return false;
                }
            }
        }
    }

}

export default ModalAuth;

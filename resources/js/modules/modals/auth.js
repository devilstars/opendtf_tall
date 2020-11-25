class ModalAuth {

    constructor() {
        window.modalAuth = this.init;
    }

    init() {
        return {
            openModal() {
                setTimeout(() => {
                    this.$store.modalAuth.open = true;
                }, 100)
            },
            closeModal() {
                this.$store.modalAuth.open = false;
            },
            closeModalAway() {
                if (this.$store.modalAuth.open) {
                    this.$store.modalAuth.open = false;
                } else {
                    return false;
                }
            }
        }
    }

}

export default ModalAuth;

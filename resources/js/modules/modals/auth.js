class modalAuth {

    constructor() {
        window.modalAuth = this.modalAuth;
    }

    modalAuth() {
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

export default modalAuth;

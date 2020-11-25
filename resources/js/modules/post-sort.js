class PostSort {

    constructor() {
        window.postSort = this.init;
    }

    init() {
        return {
            open: false,
            show() {
                setTimeout(() => {
                    this.open = true;
                }, 100)
            },
            hide() {
                this.open = false;
            },
            toggle() {
                this.open = !this.open;
            },
            hideAway() {
                if (this.open) {
                    this.open = false;
                }
            }
        }
    }
}

export default PostSort;

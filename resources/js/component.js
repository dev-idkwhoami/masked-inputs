import IMask from "imask";

export default function maskedInput({state, options}) {

    return {
        state,
        init() {
            const maskInstance = IMask(this.$refs.maskedInput, options);

            maskInstance.typedValue = this.state;

            maskInstance.on('accept', () => this.state = maskInstance.unmaskedValue);
            //maskInstance.on('complete', () => this.state = maskInstance.unmaskedValue);
        },
    }

}

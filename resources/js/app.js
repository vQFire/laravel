import {MDCTextField} from '@material/textfield';
import {MDCTextFieldHelperText} from '@material/textfield/helper-text';

const helperText = new MDCTextFieldHelperText(document.querySelector('.mdc-text-field-helper-text'));

const textFields = document.getElementsByClassName('mdc-text-field')

Array.prototype.forEach.call(textFields, textFieldDOM => {
    const textField = new MDCTextField(textFieldDOM);
    textField.shouldShake = true

    textField.listen('input', () => {
        const emailRegex = RegExp("^([a-zA-Z0-9_\\-\\.]+)@([a-zA-Z0-9_\\-\\.]+)\\.([a-zA-Z]{2,5})$")

        textField.helperText_.foundation.setPersistent(true)

        if (!emailRegex.test(textField.value)) {
            textField.helperTextContent = 'Provide a valid email address';
            textField.valid = false
        } else {
            textField.valid = true

            textField.helperTextContent = '';
            textField.helperText_.foundation.setPersistent(false);
        }
    })
})

require('./bootstrap');

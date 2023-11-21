// import JustValidate from '../node_modules/just-validate/';

const validation = new JustValidate('#form', {
    errorFieldCssClass: 'is-invalid',
    // submitFormAutomatically: true,
    validateBeforeSubmitting: true,
});


validation.addField('#firstname', [
    {
    rule: 'minLength',
    value: 1,
    errorMessage: 'Długość musi wynosić więcej niż 1 znak'
    },
    {
        rule: 'maxLength',
        value: 30,
        errorMessage: 'Długość nie może być większa niż 30 znaków'
    },
    {
        rule: 'required',
        errorMessage: 'Pole wymagane.'
    }
    ])
    .addField('#lastname', [
        {
            rule: 'minLength',
            value: 1,
            errorMessage: 'Długość musi wynosić więcej niż 1 znak'
        },
        {
            rule: 'maxLength',
            value: 30,
            errorMessage: 'Długość nie może być większa niż 30 znaków'
        },
        {
            rule: 'required',
            errorMessage: 'Pole wymagane.'
        }
    ])
    .addField('#email', [
        {
            rule: 'required',
            errorMessage: 'Pole wymagane.'
        },
        {
            rule: 'email',
            errorMessage: 'Email jest nieprawidłowy!',
        }
    ])
    .addField('#password', [
        {
            rule: 'required',
            errorMessage: 'Pole wymagane.'
        },
        {
            rule: 'password',
            errorMessage: 'Hasło jest za słabe!',
        }
    ])
    .addField('#pesel', [
        {
            rule: 'required',
            errorMessage: 'Pole wymagane.'
        },
        {
            rule: 'number',
            errorMessage: 'Tylko cyfry'
        }
    ])
    .addField('#phone', [
        {
            rule: 'required',
            errorMessage: 'Pole wymagane.'
        },
        {
            rule: 'number',
            errorMessage: 'Tylko cyfry'
        }
    ])
    
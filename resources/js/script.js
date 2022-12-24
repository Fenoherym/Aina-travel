let contact_form = document.getElementById('contact-form')


let nom = document.getElementById('name')
let email = document.getElementById('email')
let message = document.getElementById('message')

console.log(nom)
console.log(email)
console.log(message)

contact_form.onsubmit = (e) => {
    if (nom.value.trim() == "" || email.value.trim() == "" || message.value.trim() == "") {

        e.preventDefault()

        if (nom.value.trim() == "") {
            let name_error = document.getElementById('name-invalid')
            name_error.innerHTML = "The name field id required"
            nom.classList.add('is-invalid')

        }
        if (nom.value.trim().length < 3) {
            let name_error = document.getElementById('name-invalid')
            name_error.innerHTML = "The name field must contain at least 3 characters"
            nom.classList.add('is-invalid')
        }

        if (email.value.trim() == "") {
            let email_error = document.getElementById('email-invalid')
            email_error.innerHTML = "The email field is required"
            email.classList.add('is-invalid')
        }
        if (message.value.trim() == "") {
            let message_error = document.getElementById('message-invalid')
            message_error.innerHTML = "the message field is required"
            message.classList.add('is-invalid')
        }

    }
}



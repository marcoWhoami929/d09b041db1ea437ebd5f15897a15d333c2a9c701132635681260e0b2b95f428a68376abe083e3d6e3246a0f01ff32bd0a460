$(document).ready(function() {

    (function($) {
        "use strict";


        jQuery.validator.addMethod('answercheck', function(value, element) {
            return this.optional(element) || /^\bcat\b$/.test(value)
        }, "type the correct answer -_-");

        // validate contactForm form
        $(function() {
            $('#contactForm').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    subject: {
                        required: true,
                        minlength: 4
                    },
                    number: {
                        required: false,
                        minlength: 5
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true,
                        minlength: 20
                    }
                },
                messages: {
                    name: {
                        required: "Porfavor ingrese su nombre",
                        minlength: "El nombre debe contener almenos 2 caracteres"
                    },
                    subject: {
                        required: "Porfavor ingrese el asunto del mensaje",
                        minlength: "El asunto debe contener almenos 2 characters"
                    },
                    number: {
                        required: "Porfavor ingrese su numero telefónico",
                        minlength: ""
                    },
                    email: {
                        required: "Porfavor ingrese su email para poder enviar su mensaje"
                    },
                    message: {
                        required: "Porfavor ingrese el asunto de este mensaje",
                        minlength: ""
                    }
                },
                submitHandler: function(form) {
                    alert("dsfsdf");
                }
            })
        })

    })(jQuery)
})
/*
 *  Document   : formsValidation.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Forms Validation page
 */

var FormUsers = function() {

    return {
        init: function() {

            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

            /* Initialize Form Validation */
            
            $('#form-users').validate({
                errorClass: 'help-block animation-pullUp', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    'username': {
                        required: true
                    },
                    'name': {
                        required: true
                    },
                    'email':{
                        email: true,
                        required: true
                    }
                },
                messages: {
                    'username': 'Ingrese el username',
                    'name': 'Ingrese el nombre',
                    'email': {
                        required: 'Ingrese el email',
                        email: 'Ingrese una dirección de email correcto'
                    }

                }
            });
        }
    };
}();
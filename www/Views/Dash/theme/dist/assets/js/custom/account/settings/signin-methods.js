"use strict";

// Class definition
var KTAccountSettingsSigninMethods = function () {
    var signInForm;
    var signInMainEl;
    var signInEditEl;
    var passwordMainEl;
    var passwordEditEl;
    var signInChangeEmail;
    var signInCancelEmail;
    var passwordChange;
    var passwordCancel;

    var toggleChangeEmail = function () {
        signInMainEl.classList.toggle('d-none');
        signInChangeEmail.classList.toggle('d-none');
        signInEditEl.classList.toggle('d-none');
    }

    var toggleChangePassword = function () {
        passwordMainEl.classList.toggle('d-none');
        passwordChange.classList.toggle('d-none');
        passwordEditEl.classList.toggle('d-none');
    }

    // Private functions
    var initSettings = function () {  
        if (!signInMainEl) {
            return;
        }        

        // toggle UI
        signInChangeEmail.querySelector('button').addEventListener('click', function () {
            toggleChangeEmail();
        });

        signInCancelEmail.addEventListener('click', function () {
            toggleChangeEmail();
        });

        passwordChange.querySelector('button').addEventListener('click', function () {
            toggleChangePassword();
        });

        passwordCancel.addEventListener('click', function () {
            toggleChangePassword();
        });
    }

    var handleChangeEmail = function (e) {
        var validation;        

        if (!signInForm) {
            return;
        }

        validation = FormValidation.formValidation(
            signInForm,
            {
                fields: {
                    emailaddress: {
                        validators: {
                            notEmpty: {
                                message: 'Email is required'
                            },
                            emailAddress: {
                                message: 'The value is not a valid email address'
                            }
                        }
                    },

                    confirmemailpassword: {
                        validators: {
                            notEmpty: {
                                message: 'Password is required'
                            }
                        }
                    }
                },

                plugins: { //Learn more: https://formvalidation.io/guide/plugins
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row'
                    })
                }
            }
        );

        signInForm.querySelector('#kt_signin_submit').addEventListener('click', function (e) {
            e.preventDefault();
            var form = $('#kt_signin_change_email');
            var url = form.attr('action');
            var formData = form.serialize();
            validation.validate().then(function (status) {
                $.ajax({
                    type: "post",
                    url: url,
                    data: formData,
                    success:function (response) {
                        console.log(response);
                        //setTimeout(function () {
                        swal.fire({
                            text: "Sent password reset. Please check your email",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        }).then(function(){
                            signInForm.reset();
                            validation.resetForm(); // Reset formvalidation --- more info: https://formvalidation.io/guide/api/reset-form/
                            toggleChangeEmail();

                        });
                            form.submit(); // Submit form
                    }, // The comma here was missing
                        }, 200);
                         }, // The comma here was missing


            )

                if (true){
                    function test(error) {
                        swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }

                        });
                    }
                }
        }); // The comma here was missing
    };

    }

    var handleChangePassword = function (e) {
        var validation;
        // form elements
        var passwordForm = document.getElementById('kt_signin_change_password');
        if (!passwordForm) {
            return;
        }
        validation = FormValidation.formValidation(
            passwordForm,
            {
                fields: {
                    currentpassword: {
                        validators: {
                            stringLength : {
                                min: 8,
                                message: 'Password must be at least 8 character and contain number\n'
                            },
                            notEmpty: {
                                message: 'Current Password is required'
                            },

                        }
                    },

                    newpassword: {
                        validators: {
                            stringLength : {
                                min: 8,
                                message: 'Password must be at least 8 character and contain number\n'
                            },
                            notEmpty: {
                                message: 'New Password is required'
                            },
                            identical: {
                                compare: function() {
                                    return passwordForm.querySelector('[name="currentpassword"]').value;
                                },
                                message: 'The current password and the new one are the same'
                            }
                        }
                    },

                    confirmpassword: {
                        validators: {
                            stringLength : {
                                min: 8,
                                message: 'Password must be at least 8 character and contain number\n'
                            },
                            notEmpty: {
                                message: 'Confirm Password is required'
                            },
                            different: {
                                compare: function() {
                                    return passwordForm.querySelector('[name="newpassword"]').value;
                                },
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    },
                },
                // $2y$10$Ooi/gK2m1e3UiBSxP/jIg.psrmS4iZ3QM/BecKexUpZ19xFuit3hq
        plugins: { //Learn more: https://formvalidation.io/guide/plugins
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row'
                    })
                }
            }
        );

        passwordForm.querySelector('#kt_password_submit').addEventListener('click', function (e) {
            e.preventDefault();
            var form = $('#kt_signin_change_password');
            var url = form.attr('action');
            var formData = form.serialize();
            validation.validate().then(function (status) {
                $.ajax({
                    type: "post",
                    url: url,
                    data: formData,
                    success: function (response) {
                        console.log(response);
                        setTimeout(function () {
                            swal.fire({
                                text: "Sent password reset. Please check your email",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            }).then(function() {
                                signInForm.reset();
                                validation.resetForm(); // Reset formvalidation --- more info: https://formvalidation.io/guide/api/reset-form/
                                toggleChangeEmail();
                                form.submit(); // Submit form
                            });
                        }, 200);
                    }, // The comma here was missing
                    error: function (error){
                        swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        });
                    },
                })
            });
        });
    }


    // Public methods
    return {
    (function() {
        var signInForm, signInMainEl, signInEditEl, passwordMainEl,
            passwordEditEl, signInChangeEmail, signInCancelEmail, passwordChange,
            passwordCancel;

        function initSettings() {
            // Initialize settings here
        }

        function handleChangeEmail() {
            // Handle email change here
        }

        function handleChangePassword() {
            // Handle password change here
        }

        return {
            init: function () {
                signInForm = document.getElementById('kt_signin_change_email');
                signInMainEl = document.getElementById('kt_signin_email');
                signInEditEl = document.getElementById('kt_signin_email_edit');
                passwordMainEl = document.getElementById('kt_signin_password');
                passwordEditEl = document.getElementById('kt_signin_password_edit');
                signInChangeEmail = document.getElementById('kt_signin_email_button');
                signInCancelEmail = document.getElementById('kt_signin_cancel');
                passwordChange = document.getElementById('kt_signin_password_button');
                passwordCancel = document.getElementById('kt_password_cancel');

                initSettings();
                handleChangeEmail();
                handleChangePassword();
            }
        };



// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTAccountSettingsSigninMethods.init();
});})



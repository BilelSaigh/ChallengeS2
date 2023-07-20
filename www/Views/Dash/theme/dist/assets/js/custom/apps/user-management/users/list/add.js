"use strict";

// Class definition
var KTUsersAddUser = function () {
    // Shared variables
    const element = document.getElementById('kt_modal_add_user');
    const form = element.querySelector('#kt_modal_add_user_form');
    const modal = new bootstrap.Modal(element);

    // Init add schedule modal
    var initAddUser = () => {

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'user_name': {
                        validators: {
                            notEmpty: {
                                message: 'Full name is required'
                            }
                        }
                    },
                    'user_email': {
                        validators: {
                            notEmpty: {
                                message: 'Valid email address is required'
                            }
                        }
                    },
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Submit button handler
        const submitButton = element.querySelector('[data-kt-users-modal-action="submit"]');
         submitButton.addEventListener('click', function(e)  {
             e.preventDefault();
             console.log("ok")
             var form = $('#kt_modal_add_user_form');
             var status = document.querySelector('input[type=radio]:checked').value;
             var formData = form.serialize();
             formData += '&status='+ encodeURIComponent(status);
             formData += '&submit='+ encodeURIComponent("S'inscrire");
             $.ajax({
                 type: "post",
                 url: "users",
                 data : formData,
                 success: function (response) {
                     console.log(response);
                     // Show loading indication
                     submitButton.setAttribute('data-kt-indicator', 'on');
                     // Disable button to avoid multiple click
                     submitButton.disabled = true;

                     // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                     setTimeout(function () {
                         // Remove loading indication
                         submitButton.removeAttribute('data-kt-indicator');

                         // Enable button
                         submitButton.disabled = false;

                         // Show popup confirmation
                         Swal.fire({
                             text: "Form has been successfully submitted!",
                             icon: "success",
                             buttonsStyling: false,
                             confirmButtonText: "Ok, got it!",
                             customClass: {
                                 confirmButton: "btn btn-primary"
                             }
                         }).then(function (result) {
                             if (result.isConfirmed) {
                                 modal.hide();
                                 location.reload();
                             }
                         });

                         //form.submit(); // Submit form
                     }, 2000);

                 },
                 error: function (xhr,status,error){
                     console.error(error);
                     // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                     Swal.fire({
                         text: "Sorry, looks like there are some errors detected, please try again.",
                         icon: "error",
                         buttonsStyling: false,
                         confirmButtonText: "Ok, got it!",
                         customClass: {
                             confirmButton: "btn btn-primary"
                         }
                     });
                 }
             })
         });

        // Cancel button handler
        const cancelButton = element.querySelector('[data-kt-users-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();
            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form			
                    modal.hide();	
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Close button handler
        const closeButton = element.querySelector('[data-kt-users-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();
            console.log("ok")

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form			
                    modal.hide();	
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });
    }

    return {
        // Public functions
        init: function () {
            initAddUser();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTUsersAddUser.init();
});
"use strict";

// Class definition
var KTUsersAddUser = function () {
    // Shared variables
    const element= document.getElementById('kt_modal_add_user');
    const form = element.querySelector('#kt_modal_add_user_form');
    const modal = new bootstrap.Modal(element);

    // Init add schedule modal
    var initAddUser = () => {

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'user_name': {
                        validators: {
                            notEmpty: {
                                message: 'Full name is required'
                            }
                        }
                    },
                    'user_email': {
                        validators: {
                            notEmpty: {
                                message: 'Valid email address is required'
                            }
                        }
                    },
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Submit button handler
        const submitButton = element.querySelector('[data-kt-users-modal-action="submit"]');
         submitButton.addEventListener('click', function(e) {
             e.preventDefault();
             var form = $('#kt_modal_add_user_form');
             var status = document.querySelector('input[type=radio]:checked').value;
             var url = form.attr('action');
             var formData = form.serialize();
             formData += '&status=' + encodeURIComponent(status);
             formData += '&submit=' + encodeURIComponent("S'inscrire");
             if (validator) {
                 validator.validate().then(function (status) {
                     $.ajax({
                         type: "post",
                         url: url,
                         data: formData,
                         success: function (response) {
                             // Show loading indication
                             submitButton.setAttribute('data-kt-indicator', 'on');
                             // Disable button to avoid multiple click
                             submitButton.disabled = true;

                             // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                             setTimeout(function () {
                                 // Remove loading indication
                                 submitButton.removeAttribute('data-kt-indicator');

                                 // Enable button
                                 submitButton.disabled = false;

                                 // Show popup confirmation
                                 Swal.fire({
                                     text: "Form has been successfully submitted!",
                                     icon: "success",
                                     buttonsStyling: false,
                                     confirmButtonText: "Ok, got it!",
                                     customClass: {
                                         confirmButton: "btn btn-primary"
                                     }
                                 }).then(function (result) {
                                     if (result.isConfirmed) {
                                         modal.hide();
                                     }
                                 });

                                 form.submit(); // Submit form
                             }, 2000);

                         },
                         error: function (xhr, status, error) {
                             console.error(error);
                             // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                             Swal.fire({
                                 text: "Sorry, looks like there are some errors detected, please try again.",
                                 icon: "error",
                                 buttonsStyling: false,
                                 confirmButtonText: "Ok, got it!",
                                 customClass: {
                                     confirmButton: "btn btn-primary"
                                 }
                             });
                         }
                     })
                 });
             }
         })

        // Cancel button handler
        const cancelButton = element.querySelector('[data-kt-users-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form			
                    modal.hide();	
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Close button handler
        const closeButton = element.querySelector('[data-kt-users-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form			
                    modal.hide();	
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });
    }

    return {
        // Public functions
        init: function () {
            initAddUser();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTUsersAddUser.init();
});
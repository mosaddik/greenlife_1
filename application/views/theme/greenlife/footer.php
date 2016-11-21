
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  $( function() {
  	var datepicker = $( "#datepicker" );
    datepicker.datepicker();
    datepicker.datepicker({ dateFormat: "yy-mm-dd" }).val();
  } );
  </script>


<script>
  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
      // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
      feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
        name: {
          validators: {
            stringLength: {
              min: 2,
            },
            notEmpty: {
              message: 'Please supply your first name'
            }
          }
        },
        person_email: {
          validators: {
            stringLength: {
              min: 2,
            },
            emailAddress: {
              message: 'The value is not a valid email address'
            },
            notEmpty: {
              message: 'Please supply your email address'
            }
          }
        },

        person_phone: {
          validators: {
            stringLength: {
              min: 11,

            },
            notEmpty: {
              message: 'The mobile phone number is not valid'
            }
          }
        },
        person_date_of_birth: {
          validators: {
            stringLength: {

            },
            notEmpty: {
              message: 'enter date of birth'
            }
          }
        },
        area: {
          validators: {
            stringLength: {
              min: 4,

            },
            notEmpty: {
              message: 'address is not valid'
            }
          }
        },
        person_gender: {
          validators: {
            stringLength: {

            },
            notEmpty: {
              message: 'gender is required'
            }
          }
        },

        person_problems: {
          validators: {
            stringLength: {

            },
            notEmpty: {
              message: 'please enter some problem of patient'
            }
          }
        },






      }
    })
        .on('success.form.bv', function(e) {
          $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
          $('#contact_form').data('bootstrapValidator').resetForm();

          // Prevent form submission
          e.preventDefault();

          // Get the form instance
          var $form = $(e.target);

          // Get the BootstrapValidator instance
          var bv = $form.data('bootstrapValidator');

          // Use Ajax to submit form data
          $.post($form.attr('action'), $form.serialize(), function(result) {
            console.log(result);
          }, 'json');
        });
  });
</script>

  <script>
    $(document).ready(function() {
      $('#doctor_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
          doctor_name: {
            validators: {
              stringLength: {
                min: 2,
              },
              notEmpty: {
                message: 'Please supply your first name'
              }
            }
          },
          doctor_email: {
            validators: {
              stringLength: {
                min: 2,
              },
              emailAddress: {
                message: 'The value is not a valid email address'
              },
              notEmpty: {
                message: 'enter email address'
              }
            }
          },

          doctor_phone: {
            validators: {
              stringLength: {
                min: 11,

              },
              notEmpty: {
                message: 'The mobile phone number is not valid'
              }
            }
          },
          area: {
            validators: {
              stringLength: {
                min: 4,

              },
              notEmpty: {
                message: 'address is not valid'
              }
            }
          },
          doctor_gender: {
            validators: {
              stringLength: {

              },
              notEmpty: {
                message: 'gender is required'
              }
            }
          },


          doctor_date_of_birth: {
            validators: {
              stringLength: {

              },
              notEmpty: {
                message: 'enter date of birth'
              }
            }
          },
          doctor_qualification: {
            validators: {
              stringLength: {

              },
              notEmpty: {
                message: 'enter qualification'
              }
            }
          },






        }
      })
          .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
              console.log(result);
            }, 'json');
          });
    });
  </script>
 



</body>
</html>

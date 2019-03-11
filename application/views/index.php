<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<!-- <meta http-equiv="refresh" content="3"> -->
</head>
<body>
  <!-- header -->
  <div class="page-header jumbotron text-info text-center">
    <h1>Kiskayamukama</h1>
    <h3 class="text-light">This is my personal life project</h3>

  </div>



  <div class="container">

    <!-- Extra large modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button>

    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
          ...
        </div>
      </div>
    </div>

    <!-- login -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register" data-whatever="@mdo">Register</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Login</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactUs" data-whatever="@kisakyamukama">Contact us / feedback </button>

          <!-- form  errors -->
          <p class="err" style="text-align:center; color:red"><?php echo isset($form) ? $form : '' ?></p>


            <div class="modal fade " id="register" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registration form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            <form class="needs-validation" method="post" action="<?php echo base_url('index.php/kisakyamukama/register'); ?>" novalidate>
              <div class="modal-body">
                            <div class="form-row">
                              <div class="col-md-6 mb-3">
                                <label for="validationCustom01">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="fname" required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" ame="lname" required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="col-md-8 mb-3">
                                  <label for="validationCustomUsername">Username</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationCustomUsername" name="uname" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                      Please choose a username.
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="inlineFormCustomSelectPref">Gender</label>
                                      <div class="input-group">
                                        <select class="custom-selecT" name="gender" id="inlineFormCustomSelectPref">
                                          <option value="F" selected>Female</option>
                                        <option value="M">Male</option>
                                      </select>
                                      <div class="invalid-feedback">
                                        Please provide a gender
                                      </div>
                                      </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Residence</label>
                                <input type="text" class="form-control" name="residence" id="validationCustom03" placeholder="Residence" required>
                                <div class="invalid-feedback">
                                  Please provide a valid residence.
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Contact</label>
                                <input type="email" class="form-control" id="validationCustom04" name="contact" placeholder="Email address" required>
                                <div class="invalid-feedback">
                                  Please provide a valid email.
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col-md-6 mb-3">
                                <label for="validationCustom05">Career</label>
                                <input type="text" class="form-control" name="career" id="validationCustom05" placeholder="Career" required>
                                <div class="invalid-feedback">
                                  Please provide a valid career
                                </div>
                              </div>

                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input " type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck"> Agree to terms and conditions</label>
                                <div class="invalid-feedback">
                                  You must agree before submitting.
                                </div>
                              </div>
                            </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"  class="btn btn-primary">Register</button>
                      </div>
              </form>
            </div>
            </div>


            </div>
    <!-- login -->
      <!-- contact us -->
      <div class="modal fade" id="contactUs" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
      </div>
      </div>
      <!-- contact us -->


  </div>

  <!-- header -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>" charset="utf-8"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" charset="utf-8"></script>
    <script type="text/javascript">

              $('#contactUs').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('.modal-body input').val(recipient)
          })

    </script>

    <!-- signup -->
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
</body>
</html>

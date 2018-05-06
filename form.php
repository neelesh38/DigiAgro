<?php
session_start();
?>
<html>
<head>
  <script src="js/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.js"></script>
  <script>
  $(document).ready(function(){
    $('#exampleModal').modal('show');

  });
  </script>
</head>
<body>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
  <!--
  <button type="button" name="login" id="login" class="btn btn-success" data-toggle="modal" data-target="loginModal">Login</button>
  <div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="model-title">Login</h4>
        </div>
        <div class="modal-body">
          <label>UserName</label>
          <input type="text" name="username" id="username" class="form-control">
          <br>
          <label>Password</label>
          <input type="password" name="password" id="password" class="form-control">
          <br>
          <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>
        </div>
      </div>
      </div>
    </div>
-->

 </body>
</html>

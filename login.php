<?php include 'html5req.php';?>
<form action="">
  <div class="row">
    <div class="small-6 small-centered columns">
      <h2 class="text-center">Please sign in</h2>
      <input type="text" class="form-control" placeholder="Email address" autofocus>
      <input type="password" class="form-control" placeholder="Password">
      <div class="g-signin2" data-onsuccess="onSignIn"></div>
      </div>
    </div>
</form>
<?php include 'footer.php';?>
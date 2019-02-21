<?php session_start();
include 'include/header.php'; ?>
<?php if(!isset($_SESSION["username"])): ?>
  <h1>Sign in</h1>
  <div class="login">
    <form action="login.php" method="post" class="pure-form pure-form-aligned" id="login">
      <div class="pure-control-group">
        <label for="user">Username</label>
        <input id ="user" required="required" name="username" type="text" placeholder="name"><br><br>
        <label for="password">Password</label>
        <input id="password" required="required" name="password" type="password" >
      </div>
      <div class="pure-controls">
        <label for="remember" class="pure-checkbox">Login and pass: <strong>test</strong></label>
        <button type="submit" name="submit" value="login" class="login_btn pure-button pure-button-primary">Sign In</button>
      </div>
    </form>
  </div>
<?php else: ?>
  <?php 
    echo "<div class='success'>You are logged in as: ".$_SESSION["username"]."<br><br> <a href='logout.php' class='pure-button pure-button-primary'>Logout</a> <a href='add.php' class='pure-button pure-button-primary'>Panel</a></div>" 
  ?>
<?php endif; ?>
<?php include 'include/footer.php'; ?>
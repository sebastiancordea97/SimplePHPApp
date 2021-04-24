<div class="container pt-5">
  <h2 class="text-white">Register Here!</h2>
 
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()" name="registerForm" >
  
    <div class="form-group">
      <label for="uname" class="text-white">Username</label>
      <input type="text" class="form-control " id="uname" placeholder="Enter username" name="uname" required>
    </div>
    <div class="form-group">
      <label for="email" class="text-white">Email</label>
      <input type="text" class="form-control " id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd"  class="text-white">Password</label>
      <input type="password" class="form-control " id="pwd" placeholder="Enter password" name="pwd" required>
    </div>
    <div class="form-group">
      <label for="rpwd"  class="text-white">ReEnterPassword</label>
      <input type="password" class="form-control" id="rpwd" placeholder="Enter password" name="rpwd" required>
    </div>
    
    <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
    
  </form>
</div>
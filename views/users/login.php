<div class="container pt-5">
  <h2 class="text-white">Login Here!</h2>
 
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="loginForm" >
  
    <div class="form-group w-25">
      <label for="email" class="text-white">Email</label>
      <input type="text" class="form-control " id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group w-25">
      <label for="pwd"  class="text-white">Password</label>
      <input type="password" class="form-control " id="pwd" placeholder="Enter password" name="pwd" required>
    </div>
    <div class="form-check">
      <label class="form-check-label">
      <input type="checkbox" class="form-check-input" value=""> <p class="text-white">Persistent?</p>
      </label>
    </div>
    
    <button type="submit" name="submit" class="btn btn-outline-primary">LogIn</button>
    
  </form>
</div>
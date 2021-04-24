

<div class="text-center pt-5" >
    <h1 class="text-white"> Welcome to "Just make an account, login and that is it" Website </h1>
    <?php if(isset($_SESSION['isLoggedIn'])) : ?>
      <h2 class="b text-white"> Hello, <?php echo $_SESSION['userData']['name']?>. </h2>
      <button class="btn btn-outline-primary text-center" onClick="location.href='<?php echo ROOT_URL; ?>users/logout'" >logout</button>
      
    <?php else : ?>
      <p class="lead text-white"> have account ? login : register</p>
      <button class="btn btn-outline-success text-center" onClick="location.href='<?php echo ROOT_URL; ?>users/login'">login</button>
      <button class="btn btn-outline-primary text-center" onClick="location.href='<?php echo ROOT_URL; ?>users/register'" >register</button>
    <?php endif; ?>

</div>
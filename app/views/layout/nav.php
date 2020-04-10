<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo BASEURL; ?>">S MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo BASEURL; ?>" >Home <span class="sr-only">(current)</span></a>
      </li>
      <?php if(!$this->getSession('userId')): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>/account/index">Signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>/account/signin">Signin</a>
      </li>
      <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASEURL; ?>/fruit/index">Add Fruit</a>
      </li>

      <?php endif; ?>
      
    </ul>
    <?php if($this->getSession('userId')): ?>
    <ul class="my-2 my-lg-0">
      <a href="<?php echo BASEURL; ?>/account/logout" class="btn btn-secondary">Logout</a>
    </ul>
    
    <?php endif; ?>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
    <!-- Close Navbar  -->
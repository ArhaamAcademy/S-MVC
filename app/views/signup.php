<?php 
include 'layout/header.php'; 
include 'layout/nav.php';
?>
    <div class="container mt-5">
    <div class="row">
    <div class="col-md-5">
        <h2 class="">Create new account</h2>        
        <form action="<?php echo BASEURL; ?>/account/signup" method="post">
        <div class="form-group">
            <input class="form-control"  type="text" name="name" placeholder="Name..." value="<?php if(!empty($data['name'])): echo $data['name']; endif; ?>">
            <div class="text-danger">
                <?php if(!empty($data['nameError'])): echo $data['nameError']; endif; ?>
            </div>
        </div>
        <!-- Close form-group -->
        <div class="form-group">
            <input class="form-control"  type="email" name="email" placeholder="Email..."  value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>">
            <div class="text-danger">
                <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
            </div>
        </div>
        <!-- Close form-group -->
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password..."  value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>">
            <div class="text-danger">
                <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
            </div>
        </div>
        <!-- Close form-group -->
        <div class="form-group">
            <input class="btn btn-primary"  type="submit" name="inserteData" Value="Sign Up">
        </div>
        <!-- Close form-group -->
        </form>
    </div>
    <!-- Close col-md-5 -->
    </div>
    <!-- Colose row -->
    </div>

    <!--  Close container -->
<?php include 'layout/footer.php'; ?>
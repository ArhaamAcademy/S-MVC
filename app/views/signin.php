<?php 
include 'layout/header.php'; 
include 'layout/nav.php';
?>
    <div class="container mt-5">
    <div class="row">
    <div class="col-md-5">
    <?php $this->flash('accountCreated', 'alert alert-success'); ?>
        <h2 class="">User Login</h2>
        <form action="<?php echo BASEURL; ?>/account/login" method="post">    
        <div class="form-group">
            <input class="form-control"  type="email" name="email" placeholder="Email..." value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>">
            <div class="text-danger">
                <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
            </div>
        </div>
        <!-- Close form-group -->
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password..." value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>">
            <div class="text-danger">
                <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
            </div>
        </div>
        <!-- Close form-group -->
        <div class="form-group">
            <input class="btn btn-primary"  type="submit" name="signIn" Value="Sign In">
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
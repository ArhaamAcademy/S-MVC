<?php 
include 'layout/header.php'; 
include 'layout/nav.php';
?>
    <div class="container mt-5">
    <div class="row">
    <div class="col-md-5">
    <?php //$this->flash('fruitCreated', 'alert alert-success'); ?>
        <h2 class="">Edit fruit</h2>        
        <form action="<?php echo BASEURL; ?>/fruit/update" method="post">
        <div class="form-group">
            <input class="form-control"  type="text" name="name" placeholder="Name..." value="<?php echo $data['data']->name;?>">
            <div class="text-danger">
                <?php if(!empty($data['nameError'])): echo $data['nameError']; endif; ?>
            </div>
        </div>
        <!-- Close form-group -->
        <div class="form-group">
            <input class="form-control"  type="text" name="price" placeholder="Price..."  value="<?php echo $data['data']->price; ?>">
            <div class="text-danger">
                <?php if(!empty($data['priceError'])): echo $data['priceError']; endif; ?>
            </div>
        </div>
        <input type="hidden" name="hiddenId" value="<?php echo $data['data']->id; ?>">
        <!-- Close form-group -->
        <div class="form-group">            
            <select name="quality" id="" class="form-control">
                <option value="">Select a quality</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
            </select>
            <div class="text-danger">
                <?php //if(!empty($data['qualityError'])): echo $data['qualityError']; endif; ?>
            </div>
        </div>
        <!-- Close form-group -->
        <div class="form-group">
            <input class="btn btn-primary"  type="submit" name="inserteData" Value="Update Fruit">
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
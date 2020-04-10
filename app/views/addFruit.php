<?php 
include 'layout/header.php'; 
include 'layout/nav.php';
?>
    <div class="container mt-5">
    <div class="row">
    <div class="col-md-5">
    <?php 
    $this->flash('fruitCreated', 'alert alert-success'); 
    $this->flash('fruitUpdated', 'alert alert-success');
    $this->flash('deleted', 'alert alert-danger'); 
    ?>
        <h2 class="">Add new fruit</h2>        
        <form action="<?php echo BASEURL; ?>/fruit/create" method="post">
        <div class="form-group">
            <input class="form-control"  type="text" name="name" placeholder="Name..." value="<?php if(!empty($data['name'])): echo $data['name']; endif; ?>">
            <div class="text-danger">
                <?php if(!empty($data['nameError'])): echo $data['nameError']; endif; ?>
            </div>
        </div>
        <!-- Close form-group -->
        <div class="form-group">
            <input class="form-control"  type="text" name="price" placeholder="Price..."  value="<?php if(!empty($data['price'])): echo $data['price']; endif; ?>">
            <div class="text-danger">
                <?php if(!empty($data['priceError'])): echo $data['priceError']; endif; ?>
            </div>
        </div>
        <!-- Close form-group -->
        <div class="form-group">            
            <select name="quality" id="" class="form-control">
                <option value="">Select a quality</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
            </select>
            <div class="text-danger">
                <?php if(!empty($data['qualityError'])): echo $data['qualityError']; endif; ?>
            </div>
        </div>
        <!-- Close form-group -->
        <div class="form-group">
            <input class="btn btn-primary"  type="submit" name="inserteData" Value="Add Fruit">
        </div>
        <!-- Close form-group -->
        </form>
    </div>
    <!-- Close col-md-5 -->
    </div>
    <!-- Colose row -->
    
    <div class="row">
    <div class="col-md-12 mb-5">

        <h2 class="mt-5">Fruit's Data</h2>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quality</th>
                <th>Action</th>                
            </tr>
        </thead>
        <tbody>
            <?php 
            if(!empty($data)): 
            foreach($data as $fruit):
            ?>
            <tr>
                <td><?php echo $fruit->name; ?></td>
                <td><?php echo $fruit->price; ?></td>
                <td><?php echo $fruit->quality; ?></td>
                <td>
                    <div class="btn-group">
                        <a href="<?php echo BASEURL; ?>/fruit/edit/<?php echo $fruit->id; ?>" class="">Edit</a> 
                        &nbsp;|&nbsp;
                        <a href="<?php echo BASEURL; ?>/fruit/delete/<?php echo $fruit->id; ?>" class="">Delete</a>
                    </div>
                </td>
                
            </tr>
            <?php 
            endforeach;
            endif; 
            ?>           
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quality</th>
                <th>Action</th>                
            </tr>
        </tfoot>
    </table>
    </div>
    <!-- Close col-md-5 -->
</div>
<!-- Close Row -->

    </div>

    <!--  Close container -->
<?php include 'layout/footer.php'; ?>
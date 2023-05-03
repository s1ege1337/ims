<?php

?>
<!-- Add product Modal -->
<div class="modal" id="addProduct">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add product</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action="php/add_product.php">
          <div class="form-group">
              <label for="sel1">Category</label>
              <select class="form-control" id="selectCategory" name="category_id">
                <?php
                require 'php/db_connection.php';

                $sql = "SELECT * FROM tbl_category";
                $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
              ?>
                <option value="<?php echo $row['category_id'] ?>"><?php echo $row['category_name'] ?></option>
                <?php }} ?>
              </select>
          </div>
          <div class="form-group">
              <label for="selectBrand">Brand</label>
              <select class="form-control" id="selectBrand" name="brand_id">
                <?php
                require 'php/db_connection.php';

                $sql = "SELECT * FROM tbl_brand";
                $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
              ?>
                <option value="<?php echo $row['brand_id']?>"><?php echo $row['brand_name'] ?></option>
                <?php }} ?>
              </select>
          </div> 
          <div class="form-group">
            <label for="product_name">Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name">
          </div> 
          <div class="form-group">
            <label for="product_model">Model</label>
            <input type="text" class="form-control" id="product_model" name="product_model">
          </div> 
          <div class="form-group">
            <label for="product_qty">Quantity</label>
            <input type="text" class="form-control" id="product_qty" name="product_qty">
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Save">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form> 

    </div>
  </div>
</div>


<!-- Add category Modal -->
<div class="modal" id="addCategory">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form method="POST" action="php/add_category.php">
      <!-- Modal body -->
      <div class="modal-body">
          <div class="form-group">
            <label for="category_name">Name</label>
            <input type="text" class="form-control" id="category_name" name="category_name">
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Save">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form> 

    </div>
  </div>
</div>


<!-- Add brand Modal -->
<div class="modal" id="addBrand">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add brand</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form method="POST" action="php/add_brand.php">
      <!-- Modal body -->
      <div class="modal-body">
          <div class="form-group">
            <label for="brand_name">Name</label>
            <input type="text" class="form-control" id="brand_name" name="brand_name">
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Save">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form> 

    </div>
  </div>
</div>

<!-- Add user Modal -->
<div class="modal" id="addUser">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add user</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form method="POST" action="php/add_user.php">
      <!-- Modal body -->
      <div class="modal-body">
          <div class="form-group">
            <label for="user_name">Username</label>
            <input type="text" class="form-control" id="user_name" name="user_name">
          </div>
          <div class="form-group">
            <label for="user_pass">Password</label>
            <input type="password" class="form-control" id="user_pass" name="user_pass">
          </div>
          <div class="form-group">
            <label for="employee_name">Employee Name</label>
            <input type="text" class="form-control" id="employee_name" name="employee_name">
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Save">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form> 

    </div>
  </div>
</div>
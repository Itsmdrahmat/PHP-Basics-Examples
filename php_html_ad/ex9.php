<?php
$categories = array("CPU","RAM","peripherals","mother-board","storage");//used to print category dropdown
$filters = null;
foreach($_POST as $field => $field_val){
	if($field_val != ""){
		$filters[$field] = $field_val;
	}
}
$products = filter_products($filters, $products);
?>
<body> and Before <table>
<form class="row" method="POST" action="you_file.php">
   <div class="col-auto"><label>Filters:</label></div>
   <div class="col-auto"><input type="text" class="form-control" placeholder="Product name" name="product_name"/> 
   </div>
   <div class="col-auto"><input type="number" class="form-control" placeholder="price" min="0" name="price"/></div>
	<div class="col-auto">
	<select class="form-select" name="category">
	   <option value="" selected>Category</option>
	   <?php
	   foreach($categories as $cat){
	      echo "<option value='".$cat."'>".$cat."</option>";
	   }
	   ?>
	</select>
      </div>
   <div class="col-auto"><button type="submit" class="btn btn-secondary">Submit</button></div>
</form>

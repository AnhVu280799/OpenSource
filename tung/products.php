<?php 

	include 'inc/header.php';
	include 'inc/slider.php';
	$records = "";
	$connection = mysqli_connect('localhost','root','','web_mvcphu');	
	if(isset($_POST['search_product'])) {
		$sql = "select * from tbl_product where productName like '%". $_POST['search'] . "%'";
		$records = mysqli_query($connection, $sql)->fetch_all();
	}
 ?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3><?php  echo (isset($records) && !is_null($records)) ?"Tìm Kiếm: ". $_POST['search'] :"Khồng có sản phẩm"?></h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
		  <?php  foreach($records as $product) { ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview-3.php"><img src="images/feature-pic1.png" alt="" /></a>
					 <h2><?php echo  $product['productName']   ?> </h2>
					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					 <p><span class="price">$505.22</span></p>
				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>
				</div>
			<?php  } ?>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Latest from Acer</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview-3.php"><img src="images/new-pic1.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <p><span class="price">$403.66</span></p>
				    
				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview-4.php"><img src="images/new-pic2.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <p><span class="price">$621.75</span></p>
				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview-2.php"><img src="images/feature-pic2.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <p><span class="price">$428.02</span></p>
				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <img src="images/new-pic3.jpg" alt="" />
					 <h2>Lorem Ipsum is simply </h2>					 
					 <p><span class="price">$457.88</span></p>   
				     <div class="button"><span><a href="preview.php" class="details">Details</a></span></div>
				</div>
			</div>
    </div>
 </div>
<?php 
	include 'inc/footer.php';
 ?>


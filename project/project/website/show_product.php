<?php
include_once '../DB_CONNECTION.php';
// $category_id = $_GET['category_id'];
// $query1 = "SELECT * from product where category_id = $category_id";
// $result1 = mysqli_query($connection, $query1);
// print_r ($result1);
// $product_id=mysqli_fetch_assoc($result1)['id'];

// echo $query2;

?>


<!DOCTYPE html>
<html lang="en">
	<?php
    include_once 'partial/head.php';
    ?>
	<body>
    <?php
    include_once 'partial/header.php';
    include_once 'partial/nav.php';
    ?>

	


		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>
                    <?php
                    $category_id = $_GET['category_id'];
                    $query1 = "SELECT * from product where category_id = $category_id";
                    $query9 = "SELECT * from product where category_id = $category_id";
                   
                    $result1 = mysqli_query($connection, $query1);
                    $result9 = mysqli_query($connection, $query9);
                    // $q=mysqli_fetch_assoc($result1);
                    $product_id=mysqli_fetch_assoc($result1)['id'];
                    $query2 = 'SELECT * from product_file where product_id='.$product_id;
                    $result2 = mysqli_query($connection, $query2);
                    while ($row=mysqli_fetch_assoc($result2)) {
                        echo "<div class='col-md-3 col-xs-6'>
                        <div class='product'>
                            <div class='product-img'>
                            <img width='100px' height='100px' src='../uploads/images/".$row['image']."'>
                                <div class='product-label'>
                                    <span class='sale'>-30%</span>
                                </div>
                            </div>";
                        while ($row2=mysqli_fetch_assoc($result9)) {
                            echo "
                                <div class='product-body'>
                                    <p class='product-category'>Category</p>
                                    <h3 class='product-name'><a href='#'>".$row2['name']."</a></h3>
                                    <h4 class='product-price'>".$row2['price']."<del class='product-old-price'>".$row2['first_price']."</del></h4>
                                    <div class='product-rating'></div>
                                    
                                    <div class='product-btns'>
                                        <button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
                                        <button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
                                        <button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
                                    </div>
                                </div>
                                <div class='add-to-cart'>
                                    <button class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
                                </div>";
                            }
                            echo "</div>";
                    }
                    // while($product = mysqli_fetch_assoc($result1)){
                    //     echo "ss";
                    //     // echo $product['id'];
                    //     // $query2 = "SELECT * from product_file where product_id = $product_id";
                    //     // $result2 = mysqli_query($connection, $query2);
                    //     // echo $query2;
                    //     // $file = mysqli_fetch_assoc($result2);
                    //     // echo $file['image'];
                    //     echo "<div class='col-md-3 col-xs-6'>
					// 	<div class='product'>
					// 		<div class='product-img'>
					// 			sss
					// 			<div class='product-label'>
					// 				<span class='sale'>-30%</span>
					// 			</div>
					// 		</div>
					// 		<div class='product-body'>
					// 			<p class='product-category'>Category</p>
					// 			<h3 class='product-name'><a href='#'>".$product['name']."</a></h3>
					// 			<h4 class='product-price'>".$product['price']."<del class='product-old-price'>".$product['first_price']."</del></h4>
					// 			<div class='product-rating'>
					// 			</div>
					// 			<div class='product-btns'>
					// 				<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
					// 				<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
					// 				<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
					// 			</div>
					// 		</div>
					// 		<div class='add-to-cart'>
					// 			<button class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i> add to cart</button>
					// 		</div>
					// 	</div>
					// </div>";
                    // }
                    ?>

					<!-- product -->
					
					<!-- /product -->

				
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<?php
        include_once 'partial/footer.php';
        ?>
	</body>
</html>

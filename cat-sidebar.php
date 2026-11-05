<ul class="main-categories">
						
<?php

$q="select * from categorys";
$rsCat= mysqli_query($con,$q);
while($rowCat=mysqli_fetch_array($rsCat)){
    ?>
<li class="main-nav-list"><a  href="category.php?cat_id=<?php echo $rowCat['cat_id'] ?>" ></span><?php echo $rowCat['cat_name'] ?><span class="number"></span></a>
							
						</li>
<?php } ?>

                        
					</ul>
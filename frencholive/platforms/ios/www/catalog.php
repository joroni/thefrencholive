
 <?php 
$category = $_GET['category'];
include '../DBConfig.php';



$sql = "select product_id, item_name, fitem_name,
		description, fdescription, category, 
		price, fprice, sku, file_name, status from tblproducts WHERE category = $category AND status = 1";
		
$result = mysqli_query($link, $sql);

if(!$result)
{
	echo mysqli_error($link);
	exit();
}
//Loo through each row on array and store the data to $product_list[]
while($rows = mysqli_fetch_array($result))
{
	$product_list[] = array('product_id' => $rows['product_id'], 
							'item_name' => $rows['item_name'],
							'fitem_name' => $rows['fitem_name'],
							'description' => $rows['description'],
							'fdescription' => $rows['fdescription'],
							'category' => $rows['category'],
							'price' => $rows['price'],
							'fprice' => $rows['fprice'],
							'sku' => $rows['sku'],
							'file_name' => $rows['file_name']);
}
?>
<?php /*?><?php foreach($product_list as $product) : ?>
						
								<?php echo $product["item_name"]; ?>
						<?php echo $product["fitem_name"]; ?>
                            
								<?php echo $product["category"]; ?>
							<?php echo $product["description"]; ?>
							<?php echo $product["fdescription"]; ?>
								<?php echo $product["price"]; ?>
								<?php echo $product["fprice"]; ?>
								
							
						
								<?php echo $product["sku"]; ?>
							
								<?php echo $product["file_name"]; ?>
                                <?php echo $product["product_id"]; ?>
							
					<?php endforeach; ?><?php */?>



 <div class="image-set" >
 
 <?php foreach($product_list as $product) : ?>
                    <div class="item-prod box">
                    	
                        <a class="ex-ample-image-link swipebox" href="../img/uploads/<?php echo $product["file_name"]; ?>" data-lightbox="example-set" data-title="
                        <div>
                        <div class='overlay'><h1>Choose from</h1>
                        <br>
                        <ul id='addons'>
                        <li>
                         <div class='engL'>
                        <span>Smoked Salmon</span> <span>| 40 QAR</span>
                        </div>
                        <div class='arabL'>
                        	<span   dir='rtl' lang='ar' cite='Romeo and Juliet (II, ii, 1-2)'>السلمون المدخن</span> <span>| اختيار</span>
                            </div>
                        </li>
                        	
                        <li>
                         <div class='engL'>
                        <span>Smoked Salmon</span> <span>| 40 QAR</span>
                        </div>
                        <div class='arabL'>
                        	<span   dir='rtl' lang='ar' cite='Romeo and Juliet (II, ii, 1-2)'>السلمون المدخن</span> <span>| اختيار</span>
                            </div>
                        </li>
                     <li>
                         <div class='engL'>
                        <span>Smoked Salmon</span> <span>| 40 QAR</span>
                        </div>
                        <div class='arabL'>
                        	<span   dir='rtl' lang='ar' cite='Romeo and Juliet (II, ii, 1-2)'>السلمون المدخن</span> <span>| اختيار</span>
                            </div>
                        </li>
                        </ul>
                        
                        </div>
                           
                       
                        <div class='englang'>
                        	<div class='pName'><h1 id='prodName' class='name'><?php echo $product["item_name"]; ?></h1> </div>
                             <div id='priceBox'>
                            <label style='display: none;>Qty: <input class='item_Quantity form-control' value='1' type='text'></label>
                            <p class='item_price'><?php echo $product["price"]; ?> QR</p>
                            </div>
                            <div class='description'><?php echo $product["description"]; ?></div>
                            
                           
                        </div>
                            
                        <div class='arlang' dir='rtl' lang='ar' cite='Romeo and Juliet (II, ii, 1-2)'>
                        	<div class='pName'><h1 id='prodName' class='name'><?php echo $product["fitem_name"]; ?></h1> </div>
                            <div id='priceBox'>
                            <label style='display: none;>Qty: <input class='item_Quantity form-control' value='1' type='text'></label>
                            <p class='item_price' dir='rtl' lang='ar' cite='Romeo and Juliet (II, ii, 1-2)'><?php echo $product["fprice"]; ?></p>
                            </div>
                             <div class='description' dir='rtl' lang='ar' cite='Romeo and Juliet (II, ii, 1-2)'>	<?php echo $product["fdescription"]; ?></div>
                         </div>
                   
                         ">
                         <img class="example-image" src="../img/uploads/thumb_<? if(!empty($product['file_name']) && file_exists("../img/uploads/".$product['file_name'])) {
						   //show your image from db
						   echo($product["file_name"]);} else {
						   //show your default image
						   echo("no-image.jpg");}?>" alt=""/></a>
                       	<span class="prodName"><?php echo $product["item_name"]; ?></span>
                    </div>
                   <?php endforeach; ?>
                  
               
      
 
  </div>     
         
                
             
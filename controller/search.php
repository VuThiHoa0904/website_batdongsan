 <?php
  include '../model/m_product.php';
  include('../view/header.php');
?>
<section class="main-content search-page" style="margin-top:80px; ">
  <article>
    <div class="container">
      <div class="row">
        
        <div  class="col-xs-12">
         
           <?php
              @mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
              mysql_select_db("batdongsan") or die(mysql_error());

              $query = $_GET['search'];      
              $min_length = 1;    
              if(strlen($query) >= $min_length){      
                  $query = htmlspecialchars($query);       
                  $query = mysql_real_escape_string($query);           
                  $raw_results = mysql_query("SELECT * FROM product
                      WHERE (`product_name` LIKE '%".$query."%') OR (`product_id` LIKE '%".$query."%')") or die(mysql_error());
              
                  if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
                       
                      while($results = mysql_fetch_array($raw_results)){ ?>
                       
                          <div class="col-xs-12 col-sm-6 col-md-3">
                            <a href="index.php?action=productdetail&productid=<?php echo $results[0] ?>"><div class="product-h">
                              <img src="images/product/<?php echo $results[3];?>">
                            </div></a>
                          
                            <h3 class="sa-height"><a href="index.php?action=productdetail&productid=<?php echo $results[0] ?>"><?php echo $results[1];?></a></h3>
                            <span class="price"><?php echo $results[2];?></span>
                            <p class="vitri"><?php echo $results['vitri'];?></p>    
                          </div>
                      <?php }
                       
                  }
                  else{
                      echo "Không tìm thấy kết quả";
                  }
                   
              }
             
            ?>
         
         </div>   
      </div>    
    </div>
  </article>
</section>
<?php include('../view/footer.php'); ?>
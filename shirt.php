<?php include("inc/products.php"); 

if (isset($_GET["id"])) {
  $product_id = $_GET["id"];
  if (isset($products[$product_id])){
    $product = $products[$product_id];
  } 
} 
if (!isset($product)){
  header("Location: shirts.php");
  exit();
}


$section = "shirts";
$pageTitle = $product["name"];
include("inc/header.php"); ?>

      <div class="section page">

        <div class="wrapper">

            <div class="breadcrumb"><a href="shirts.php">Shirts</a> &gt; <?php echo $product["name"]; ?></div>

            <div class="shirt-picture">
              <span>
                <img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>"
              </span>
            </div>

            <div class="shirt-details">

              <h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1> 

              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>




              <p class="note-designer">designed by a frog</p>

            </div>

        </div>

      </div>

<?php include("inc/footer.php"); ?>


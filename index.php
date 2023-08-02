<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<!-- home section starts  -->

<div class="home">

   <section class="center">

      <form action="search.php" method="post">
         <h3>find your perfect home</h3>
         <div class="box">
            <p>enter location <span>*</span></p>
            <input type="text" name="h_location" required maxlength="100" placeholder="enter city name" class="input">
         </div>
         <div class="flex">
            <div class="box">
               <p>property type <span>*</span></p>
               <select name="h_type" class="input" required>
                  <option value="flat">flat</option>
                  <option value="house">house</option>
                  <option value="shop">shop</option>
               </select>
            </div>
            <div class="box">
               <p>offer type <span>*</span></p>
               <select name="h_offer" class="input" required>
                  <option value="sale">sale</option>
                  <option value="resale">resale</option>
                  <option value="rent">rent</option>
               </select>
            </div>
            <div class="box">
               <p>maximum budget <span>*</span></p>
               <select name="h_min" class="input" required>
               <option value="500000">R.S 500000</option>
                  <option value="800000">R.S 800000</option>
                  <option value="1000000">R.S 1000000</option>
                  <option value="2000000">R.S 2000000</option>
                  <option value="3000000">R.S 3000000</option>
                  <option value="4000000">R.S 4000000</option>
                  <option value="5000000">R.S 5000000</option>
                  <option value="6000000">R.S 6000000</option>
                  <option value="7000000">R.S 7000000</option>
                  <option value="8000000">R.S 8000000</option>
                  <option value="9000000">R.S 9000000</option>
                  <option value="10000000">R.S 10000000</option>
                  <option value="11000000">R.S 11000000</option>
                  <option value="12000000">R.S 12000000</option>
                  <option value="13000000">R.S 13000000</option>
                  <option value="14000000">R.S 14000000</option>
                  <option value="15000000">R.S 15000000</option>
                  <option value="16000000">R.S 16000000</option>
                  <option value="17000000">R.S 17000000</option>
                  <option value="18000000">R.S 18000000</option>
                  <option value="19000000">R.S 19000000</option>
                  <option value="20000000">R.S 20000000</option>
                  <option value="21000000">R.S 21000000</option>
                  <option value="22000000">R.S 22000000</option>
                  <option value="23000000">R.S 23000000</option>
                  <option value="24000000">R.S 24000000</option>
                  <option value="25000000">R.S 25000000</option>
                  <option value="26000000">R.S 26000000</option>
                  <option value="27000000">R.S 27000000</option>
                  <option value="28000000">R.S 28000000</option>
                  <option value="29000000">R.S 29000000</option>
                  <option value="30000000">R.S 30000000</option>
               </select>
            </div>
            <div class="box">
               <p>maximum budget <span>*</span></p>
               <select name="h_max" class="input" required>
               <option value="R.S 500000">R.S 500000</option>
               <option value="500000">R.S 500000</option>
                  <option value="800000">R.S 800000</option>
                  <option value="1000000">R.S 1000000</option>
                  <option value="2000000">R.S 2000000</option>
                  <option value="3000000">R.S 3000000</option>
                  <option value="4000000">R.S 4000000</option>
                  <option value="5000000">R.S 5000000</option>
                  <option value="6000000">R.S 6000000</option>
                  <option value="7000000">R.S 7000000</option>
                  <option value="8000000">R.S 8000000</option>
                  <option value="9000000">R.S 9000000</option>
                  <option value="10000000">R.S 10000000</option>
                  <option value="11000000">R.S 11000000</option>
                  <option value="12000000">R.S 12000000</option>
                  <option value="13000000">R.S 13000000</option>
                  <option value="14000000">R.S 14000000</option>
                  <option value="15000000">R.S 15000000</option>
                  <option value="16000000">R.S 16000000</option>
                  <option value="17000000">R.S 17000000</option>
                  <option value="18000000">R.S 18000000</option>
                  <option value="19000000">R.S 19000000</option>
                  <option value="20000000">R.S 20000000</option>
                  <option value="21000000">R.S 21000000</option>
                  <option value="22000000">R.S 22000000</option>
                  <option value="23000000">R.S 23000000</option>
                  <option value="24000000">R.S 24000000</option>
                  <option value="25000000">R.S 25000000</option>
                  <option value="26000000">R.S 26000000</option>
                  <option value="27000000">R.S 27000000</option>
                  <option value="28000000">R.S 28000000</option>
                  <option value="29000000">R.S 29000000</option>
                  <option value="30000000">R.S 30000000</option>
               </select>
            </div>
         </div>
         <input type="submit" value="search property" name="h_search" class="btn">
      </form>

   </section>

</div>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>buy house</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>rent house</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>sell house</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>flats and buildings</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>shops and malls</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>24/7 service</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">latest listings</h1>

   <div class="box-container">
      <?php
         $total_images = 0;
         $select_properties = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
         $select_properties->execute();
         if($select_properties->rowCount() > 0){
            while($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)){
               
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_user->execute([$fetch_property['user_id']]);
            $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

            if(!empty($fetch_property['image_02'])){
               $image_coutn_02 = 1;
            }else{
               $image_coutn_02 = 0;
            }
            if(!empty($fetch_property['image_03'])){
               $image_coutn_03 = 1;
            }else{
               $image_coutn_03 = 0;
            }
            if(!empty($fetch_property['image_04'])){
               $image_coutn_04 = 1;
            }else{
               $image_coutn_04 = 0;
            }
            if(!empty($fetch_property['image_05'])){
               $image_coutn_05 = 1;
            }else{
               $image_coutn_05 = 0;
            }

            $total_images = (1 + $image_coutn_02 + $image_coutn_03 + $image_coutn_04 + $image_coutn_05);

            $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? and user_id = ?");
            $select_saved->execute([$fetch_property['id'], $user_id]);

      ?>
      <form action="" method="POST">
         <div class="box">
            <input type="hidden" name="property_id" value="<?= $fetch_property['id']; ?>">
            <?php
               if($select_saved->rowCount() > 0){
            ?>
            <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>saved</span></button>
            <?php
               }else{ 
            ?>
            <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>save</span></button>
            <?php
               }
            ?>
            <div class="thumb">
               <p class="total-images"><i class="far fa-image"></i><span><?= $total_images; ?></span></p> 
               <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="">
            </div>
            <div class="admin">
               <h3><?= substr($fetch_user['name'], 0, 1); ?></h3>
               <div>
                  <p><?= $fetch_user['name']; ?></p>
                  <span><?= $fetch_property['date']; ?></span>
               </div>
            </div>
         </div>
         <div class="box">
         <div class="price"><span><b>R.S </b></span><span><?= $fetch_property['price']; ?></span></div>
            <h3 class="name"><?= $fetch_property['property_name']; ?></h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_property['address']; ?></span></p>
            <div class="flex">
               <p><i class="fas fa-house"></i><span><?= $fetch_property['type']; ?></span></p>
               <p><i class="fas fa-tag"></i><span><?= $fetch_property['offer']; ?></span></p>
               <p><i class="fas fa-bed"></i><span><?= $fetch_property['bhk']; ?> BHK</span></p>
               <p><i class="fas fa-trowel"></i><span><?= $fetch_property['status']; ?></span></p>
               <p><i class="fas fa-couch"></i><span><?= $fetch_property['furnished']; ?></span></p>
               <p><i class="fas fa-maximize"></i><span><?= $fetch_property['carpet']; ?>sqft</span></p>
            </div>
            <div class="flex-btn">
               <a href="view_property.php?get_id=<?= $fetch_property['id']; ?>" class="btn">view property</a>
               <input type="submit" value="send enquiry" name="send" class="btn">
            </div>
         </div>
      </form>
      <?php
         }
      }else{
         echo '<p class="empty">no properties added yet! <a href="post_property.php" style="margin-top:1.5rem;" class="btn">add new</a></p>';
      }
      ?>
      
   </div>

   <div style="margin-top: 2rem; text-align:center; margin-bottom: 2rem">
      <a href="listings.php" class="inline-btn">view all</a>
   </div>

</section>

<!-- listings section ends -->

<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>how to cancel booking?</span><i class="fas fa-angle-down"></i></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
      </div>

      <div class="box active">
         <h3><span>when will I get the possession?</span><i class="fas fa-angle-down"></i></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
      </div>

      <div class="box">
         <h3><span>where can I pay the rent?</span><i class="fas fa-angle-down"></i></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
      </div>

      <div class="box">
         <h3><span>how to contact with the buyers?</span><i class="fas fa-angle-down"></i></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
      </div>

      <div class="box">
         <h3><span>why my listing not showing up?</span><i class="fas fa-angle-down"></i></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
      </div>

      <div class="box">
         <h3><span>how to promote my listing?</span><i class="fas fa-angle-down"></i></h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus veritatis ducimus aut accusantium sunt error esse laborum cumque ipsum ab.</p>
      </div>

   </div>

</section>

<section class="about" style="margin-top: -5rem;">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolorem provident voluptatum distinctio laborum veritatis vitae suscipit praesentium fugiat unde?</p>
         <a href="contact.html" class="inline-btn">contact us</a>
      </div>
   </div>

</section>








<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

<script>

   let range = document.querySelector("#range");
   range.oninput = () =>{
      document.querySelector('#output').innerHTML = range.value;
   }

</script>

</body>
</html>
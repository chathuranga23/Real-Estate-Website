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
   <title>Search Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- search filter section starts  -->

<section class="filters" style="padding-bottom: 0;">

   <form action="" method="post">
      <div id="close-filter"><i class="fas fa-times"></i></div>
      <h3>filter your search</h3>
         
         <div class="flex">
            <div class="box">
               <p>enter location</p>
               <input type="text" name="location" required maxlength="50" placeholder="enter ciyt name" class="input">
            </div>
            <div class="box">
               <p>offer type</p>
               <select name="offer" class="input" required>
                  <option value="sale">sale</option>
                  <option value="resale">resale</option>
                  <option value="rent">rent</option>
               </select>
            </div>
            <div class="box">
               <p>property type</p>
               <select name="type" class="input" required>
                  <option value="flat">flat</option>
                  <option value="house">house</option>
                  <option value="shop">shop</option>
               </select>
            </div>
            <div class="box">
               <p>how many BHK</p>
               <select name="bhk" class="input" required>
                  <option value="1">1 BHK</option>
                  <option value="2">2 BHK</option>
                  <option value="3">3 BHK</option>
                  <option value="4">4 BHK</option>
                  <option value="5">5 BHK</option>
                  <option value="6">6 BHK</option>
                  <option value="7">7 BHK</option>
                  <option value="8">8 BHK</option>
                  <option value="9">9 BHK</option>
               </select>
            </div>
            <div class="box">
               <p>maximum budget</p>
               <select name="min" class="input" required>
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
               <p>maximum budget</p>
               <select name="max" class="input" required>
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
               <p>status</p>
               <select name="status" class="input" required>
                  <option value="ready to move">ready to move</option>
                  <option value="under construction">under construction</option>
               </select>
            </div>
            <div class="box">
               <p>furnished</p>
               <select name="furnished" class="input" required>
                  <option value="unfurnished">unfurnished</option>
                  <option value="furnished">furnished</option>
                  <option value="semi-furnished">semi-furnished</option>
               </select>
            </div>
         </div>
         <input type="submit" value="search property" name="filter_search" class="btn">
   </form>

</section>

<!-- search filter section ends -->

<div id="filter-btn" class="fas fa-filter"></div>

<?php

if(isset($_POST['h_search'])){

   $h_location = $_POST['h_location'];
   $h_location = filter_var($h_location, FILTER_SANITIZE_STRING);
   $h_type = $_POST['h_type'];
   $h_type = filter_var($h_type, FILTER_SANITIZE_STRING);
   $h_offer = $_POST['h_offer'];
   $h_offer = filter_var($h_offer, FILTER_SANITIZE_STRING);
   $h_min = $_POST['h_min'];
   $h_min = filter_var($h_min, FILTER_SANITIZE_STRING);
   $h_max = $_POST['h_max'];
   $h_max = filter_var($h_max, FILTER_SANITIZE_STRING);

   $select_properties = $conn->prepare("SELECT * FROM `property` WHERE address LIKE '%{$h_location}%' AND type LIKE '%{$h_type}%' AND offer LIKE '%{$h_offer}%' AND price BETWEEN $h_min AND $h_max ORDER BY date DESC");
   $select_properties->execute();

}elseif(isset($_POST['filter_search'])){

   $location = $_POST['location'];
   $location = filter_var($location, FILTER_SANITIZE_STRING);
   $type = $_POST['type'];
   $type = filter_var($type, FILTER_SANITIZE_STRING);
   $offer = $_POST['offer'];
   $offer = filter_var($offer, FILTER_SANITIZE_STRING);
   $bhk = $_POST['bhk'];
   $bhk = filter_var($bhk, FILTER_SANITIZE_STRING);
   $min = $_POST['min'];
   $min = filter_var($min, FILTER_SANITIZE_STRING);
   $max = $_POST['max'];
   $max = filter_var($max, FILTER_SANITIZE_STRING);
   $status = $_POST['status'];
   $status = filter_var($status, FILTER_SANITIZE_STRING);
   $furnished = $_POST['furnished'];
   $furnished = filter_var($furnished, FILTER_SANITIZE_STRING);

   $select_properties = $conn->prepare("SELECT * FROM `property` WHERE address LIKE '%{$location}%' AND type LIKE '%{$type}%' AND offer LIKE '%{$offer}%' AND bhk LIKE '%{$bhk}%' AND status LIKE '%{$status}%' AND furnished LIKE '%{$furnished}%' AND price BETWEEN $min AND $max ORDER BY date DESC");
   $select_properties->execute();

}else{
   $select_properties = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
   $select_properties->execute();
}

?>

<!-- listings section starts  -->

<section class="listings">

   <?php 
      if(isset($_POST['h_search']) or isset($_POST['filter_search'])){
         echo '<h1 class="heading">search results</h1>';
      }else{
         echo '<h1 class="heading">latest listings</h1>';
      }
   ?>

   <div class="box-container">
      <?php
         $total_images = 0;
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
         echo '<p class="empty">no results found!</p>';
      }
      ?>
      
   </div>

</section>

<!-- listings section ends -->











<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

<script>

document.querySelector('#filter-btn').onclick = () =>{
   document.querySelector('.filters').classList.add('active');
}

document.querySelector('#close-filter').onclick = () =>{
   document.querySelector('.filters').classList.remove('active');
}

</script>

</body>
</html>
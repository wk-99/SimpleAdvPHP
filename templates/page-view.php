<?php include 'include/header.php'; ?>
<h1 class='cart_header'><?php echo $showByID['name']; ?></h1>
<div class="cart pure-g">
  <article class='advert pure-u-4-5'>
    <img class='advert_img' src='uploads/<?php echo $showByID['foto']; ?>'  alt=''>
    <div class="advert_body">
      <h5 class='advert_body-header pure-g'>
        <span class='advert_body-info pure-u-1-3'><strong><i class="fa fa-calendar-alt"></i> Data of add:</strong> <?php echo $showByID['data']; ?></span>
        <span class='advert_body-info pure-u-1-3'><strong>Advert Id:</strong> <?php echo $showByID['id']; ?></span>
        <span class='advert_body-info pure-u-1-3'><strong>Category:</strong> <?php echo $showByID['category']; ?></span>
      </h5>
      <div class="advert_body-content">
        <?php echo $showByID['body']; ?>
      </div>
    </div>
  </article>

  <aside class="info pure-u-1-5">
    <div class="info_box">
      <h6>Ending the offer:</h6>
      <?php
        $datetime1 = new DateTime($showByID['data_end']);
        $datetime2 = new DateTime($showByID['data']);
        $interval = $datetime1->diff($datetime2);
        echo $datetime1 == $datetime2 ? 'Oferta zakończona' : $interval->format('Pozostało <span class="info_box-red">%a dni</span>');
      ?>
    </div>
    <div class="info_box">
      <h6>Price:</h6>
      <span class="info_box-red"><?php echo $showByID['price']; ?> zł</span>
    </div>
    <div class="info_box">
      <h6>Place:</h6>
      <?php echo $showByID['title']; ?>
    </div>
    <div class="info_box">
      <h6>Contact:</h6>
      <i class="fa fa-envelope"></i> <?php echo $showByID['email']; ?><br><br>
      <i class="fa fa-phone"></i> <?php echo $showByID['phone']; ?>
    </div>
  </aside>
</div>
<?php include 'include/footer.php'; ?>
<?php include 'include/header.php'; ?>
<h1>latest ads</h1>
<div class="content pure-g">
  <?php foreach($last as $new): ?>
    <div class="ads">
      <div class="ads_cont_img pure-u-3-4">
        <a class='ads_img-link' href='page?id=<?php echo $new['id']; ?>'>
          <img class='ads_img' src='uploads/<?php echo $new['foto'] ? $new['foto'] : 'no_foto.gif' ?>' alt='<?php echo $new['foto']; ?>'>
        </a>
      </div>
      <div class="ads_txt pure-u-1-4">
        <h6 class='ads_head'><a class='ads_head-link' href='page?id=<?php echo $new['id']; ?>'><?php echo $new['name']; ?></a></h6>
        <div class="ads_body">
          <?php echo substr($new['body'], 0, 280) . "..."; ?>
        </div>
        <a class='ads_btn button-secondary pure-button' href='page?id=<?php echo $new['id']; ?>'>Read more</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?php include 'include/footer.php'; ?>




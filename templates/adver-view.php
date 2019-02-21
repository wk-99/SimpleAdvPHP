<?php include 'include/header.php'; ?>
<h1>all ads</h1>
<div class="content pure-g">
  <?php foreach($showAll as $adw): ?>
    <div class="ads">
      <div class="ads_cont_img pure-u-3-4">
        <a class='ads_img-link' href='page?id=<?php echo $adw['id']; ?>'>
          <img class='ads_img' src='uploads/<?php echo $adw['foto'] ? $adw['foto'] : 'no_foto.gif' ?>' alt='<?php echo $adw['foto']; ?>'>
        </a>
      </div>
      <div class="ads_txt pure-u-1-4">
        <h6 class='ads_head'><a class='ads_head-link' href='page?id=<?php echo $adw['id']; ?>'><?php echo $adw['name']; ?></a></h6>
        <div class="ads_body">
          <?php echo substr($adw['body'], 220, strrpos($adw['body'], ' ')) . "..."; ?>
        </div>
        <a class='ads_btn button-secondary pure-button' href='page?id=<?php echo $adw['id']; ?>'>Read more</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?php include 'include/footer.php'; ?>



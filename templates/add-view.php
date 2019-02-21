<?php include 'include/header-panel.php'; ?>
<h1>Add a new advertisement</h1>
<?php if($_POST): ?>
  <?php echo "<div class='success'>Success<br><br> <a href='add.php' class='pure-button pure-button-primary'>Add new</a></div>"; ?>
<?php else: ?>
<div class="form">
  <form action="add.php" method="post" enctype="multipart/form-data" class="pure-form pure-form-aligned">
    <fieldset>
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-3">
          <label for="name">Name</label>
          <input id="name" type="text" name="name" placeholder='name' class="pure-u-23-24" required>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
          <label for="place">Place</label>
          <input id="place" type="text" name="title" placeholder='place' class="pure-u-23-24" required>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
          <label for="price">Price</label>
          <input id="price" type="number" name="price" placeholder='price' class="pure-u-23-24" required>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
          <label for="date1">Date</label>
          <div class="date_inline">
            <input type='date' name='date' id="date1" class="pure-u-11-24" required> to
            <input type='date' name='date_end' id="date2" class="pure-u-11-24" required>
          </div>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
          <label for="email">E-mail</label>
          <input type="email" name="email" placeholder='email' id="e-mail" class="pure-u-23-24" required>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
          <label for="phone">Phone</label>
          <input type="tel" name="tel" placeholder='phone' id="phone" class="pure-u-23-24" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" maxlength="9" required>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
          <label for="image">Image</label>
          <input name="upload[]" type="file" multiple="multiple" id="image" accept="image/gif, image/jpeg, image/png" data-max-size="20000" class="pure-u-23-24"/>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
            <label for="category">Category</label>
              <select name='category' id="category" class="pure-input-1-2" required>
                <?php echo '<option value="">-- wybierz --</option>' ?>
                <?php foreach($getenum as $cat): ?>
                    <?php echo (@$cat == @$edit['category'] ? '': '<option value='.$cat.'>'.$cat.'</option>'); ?>
                <?php endforeach; ?>
              </select>
        </div>
        <div class="pure-u-1">
          <label for="body">Content</label>
          <textarea name='body' placeholder='content' class="tarea pure-u-23-24" id="body" required></textarea>
        </div>
        <input type="submit" name="submit" value="Submit" class="pure-button pure-button-primary">
    </div>
    </fieldset>
  </form>
</div>
<?php endif; ?>
<?php include 'include/footer.php'; ?>
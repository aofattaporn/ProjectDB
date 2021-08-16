<?php include('register_db.php') ?>

<?php if(count($erors) > 0): ?> 

   <div class="error">

      <?php foreach($erors as $eror) : ?>
         <p><?php echo $eror ?></p>
      <?php endforeach ?>

   </div>
<?php endif ?>
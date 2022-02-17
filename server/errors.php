<?php  if (count($errors) > 0) : ?>
    <div class="wrong-infos" style="margin-bottom:15px; color:rgb(248, 36, 36); text-decoration:underline; border:1px solid gray; padding:5px;">
        <?php foreach ($errors as $error) : ?>
          <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ?>
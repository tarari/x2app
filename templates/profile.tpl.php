<?php
 include 'header.tpl.php';
 ?>
 <main class="container">

 <?php if($user){ ?>
   <section class="my-auto">
    <h1>Username: <?= $user['uname']; ?></h1>
    <h3>Email:<?= $user['email']; ?></h3>
   </section>
   <button class="btn btn-secondary">Change</button>
    <a href="<?=BASE;?>user/dashboard">Back</a>
    <?php }else{ header("Location:".BASE);}
    ?>

 
 </main>
 <?php
    include 'footer.tpl.php';
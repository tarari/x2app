<?php

    include 'src/templates/header.tpl.php';
    ?>

    <main>
   
    <form class="form" method="POST" action="?url=logaction">
        <p>Sign in please...</p>
        <div class="form-row">
        <input type="text" name="email" placeholder="email" value="<?php 
            if (isset($_COOKIE['active'])&& isset($_COOKIE['email'])){
                echo $_COOKIE['email'];
            }
            
        ?>">
        </div>
        <div class="form-row">
        <input type="password" name="passw" placeholder="Password">
        </div>
        <div class="form-row">
        <button type="submit">Login</button>
        </div>
       
        <div class="form-row"><input type="checkbox" name="remember-me" id="remember-me" <?php if(isset($_COOKIE["remember"])) { ?> checked <?php } ?> />
        <label for="remember-me">Remember me</label>
        </div>

    </form>
    </main>

    <?php
    include 'src/templates/footer.tpl.php';
    ?>
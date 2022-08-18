    <div class="container-signup">
        <div class="desc-side login">
            <h1>Sign Up</h1>
            <form action="<?php echo base_url('index.php/Signup/signup_user');?>" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" class="login-box" placeholder="Masukkan Username" id="box-login" value="<?= set_value('username');?>">
                <label for="email">Email</label>
                <input type="email" name="email" class="login-box" placeholder="Masukkan Email" id="box-login" value="<?= set_value('email');?>">
                <label for="password">Password</label>
                <input type="password" name="password" class="login-box" placeholder="Masukkan Password" id="box-login">
                <?php if($this->session->flashdata('error')){ ?>
                    <div class="alert" style="margin: -20px 0px 20px 0px;">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php } ?>
                <input type="submit" value="Sign Up" class="login-box" id="submit">
            </form>
            <p class="login">
                Sudah punya akun..? 
                <a href="<?php echo base_url('index.php/Login/');?>" class="login">Login</a>
            </p>
        </div>
        <div class="pict-side">
            <img src="<?php echo base_url('/assets/img/kampus2.jpg');?>" style="box-shadow: 10px 10px 30px #1f1f1f35;">
        </div>
    </div>
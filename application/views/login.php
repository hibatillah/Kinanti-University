    <div class="container-signup">
        <div class="desc-side login" style="margin-top: 30px;">
            <h1>Login</h1>
            <?php if($this->session->flashdata('succes')){ ?>
                <div class="alert" style="margin: -20px 0px 20px 0px;">
                    <?php echo $this->session->flashdata('succes'); ?>
                </div>
            <?php } ?>
            <form action="<?php echo base_url('index.php/Login/checkLogin/');?>" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" class="login-box" placeholder="Masukkan Username" id="box-login" value="<?= set_value('username');?>">
                <label for="password">Password</label>
                <input type="password" name="password" class="login-box" placeholder="Masukkan Password" id="box-login">
                <?php if($this->session->flashdata('error')){ ?>
                    <div class="alert" style="margin: -20px 0px 20px 0px;">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php } ?>
                <input type="submit" name="login" value="Login" class="login-box" id="submit">
            </form>
            <p class="login">
                Belum punya akun..? 
                <a href="<?php echo base_url('index.php/Signup');?>" class="login">Sign Up</a>
            </p>
        </div>
        <div class="pict-side login">
            <img src="<?php echo base_url('/assets/img/kampus11.jpg');?>" alt="">
        </div>
    </div>
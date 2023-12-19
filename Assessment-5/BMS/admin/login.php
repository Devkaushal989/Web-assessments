<?php
// include();
// require();

include "header.php";





?>
<div class="container">
    <div class="left">
        <img src="Tablet login-bro.png" alt="">
    </div>
    <div class="right">
        <div class="login">
            <form action="admin/category.php"method="POST" enctype="multipart/form-data">
                <h4>Login</h4>
                <p>welcome back! log in your account</p>
                <label for="">Gmail</label><br>
                <input type="email" name="name2" id="" placeholder="enter gmail here"><br><br>
                <label for="">Password</label><br>
                <input type="password" name="pas" id="" placeholder="********"><br><br>
                <input type="checkbox" name="" id="">
                <input type="file" name="profile" id="">
                <label for="">remember password</label>
                <span>
                <a href="">forget password</a>
                </span>
                <br><br>
                <input type="submit" name="" id="">
                <br><br>
                <hr>
                <br><label for="" class="with">
                    sign in with
                </label><br><br>
                <div class="icon">
                    <i class="fa-brands fa-square-facebook"></i>
                    
                    <i class="fa-brands fa-square-instagram"></i>
                    <i class="fa-brands fa-square-twitter"></i><i class="fa-brands fa-linkedin"></i>
                </div>
            </form><label for="" class="abcd">
                don't have an account? 

            </label>
            <a href="">create account</a>
        </div>
    </div>
</div>
<?php
// include();
// require();

include "footer.php";
?>
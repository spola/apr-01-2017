<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" >  
        <div class="col-lg-4 col-md-3 col-sm-2"></div>
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="logo">
                <img src="http://32kaeru.up.seesaa.net/game/E382B8E383B3E382AAE382A6E382ACE7B48BE7ABA0s.gif"  alt="Logo"> 
            </div>
            <div class="row loginbox">                    
                <div class="col-lg-12">
                    <span class="singtext" >Sign in </span>   
                </div>
                <form action="<?php echo site_url("login")?>" method="POST">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <input class="form-control" type="text" name="username" placeholder="Please enter your user name" > 
                    </div>
                    <div class="col-lg-12  col-md-12 col-sm-12">
                        <input class="form-control" type="password" name="password" placeholder="Please enter password" >
                    </div>
                    <div class="col-lg-12  col-md-12 col-sm-12">
                        <input type="submit" value="Login" class="btn submitButton">
                    </div>  
                </form>                                
            </div>
        </div>
    </div>
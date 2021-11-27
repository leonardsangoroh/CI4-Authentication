<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>


    <!--Linking Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
<div class = "container">
    <div class="row" style = "margin-top:45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Sign Up</h4> 
            <hr>
            <form method = "post" action = "<?= base_url('auth/save'); ?> " autocomplete="off">

                <?= csrf_field() ?>

                <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                    <div class = "alert alert-danger"> <?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>

                <?php if(!empty(session()->getFlashdata('success'))) : ?>
                    <div class = "alert alert-success"> <?= session()->getFlashdata('success'); ?></div>
                <?php endif ?>

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder = "Enter your Name" value = "<?= set_value('name'); ?>">

                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input id = "password" type="text" class="form-control" name="email" placeholder = "Enter your Email" value = "<?= set_value('email'); ?>">
                    
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Enter password">
                   
                </div>

                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="text" class="form-control" name="cpassword" placeholder="Confirm password">
                   
                </div>

                <div class="form-group">
                    <button class = "btn btn-primary btn-block" type = "submit">Sign Up</button>
                </div>

                <br>

                <a href="index">Already have an account?</a>
                
            </form>
        </div>
    </div>
</div>






 <!--Linking jQuery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src = "public/js/register.js"></script>
</body>
</html>
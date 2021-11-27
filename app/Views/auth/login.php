<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>


    

    <!--Linking Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
<div class = "container">
    <div class="row" style = "margin-top:45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Sign In</h4> 
            <hr>
            <form action="<?= base_url('auth/check'); ?>" method = "post" autocomplete="off">

                <?= csrf_field(); ?>

                <?php if(!empty(session()->getFlashData('fail'))) : ?>
                    <div class = "alert alert-danger"> <?= session()->getFlashData('fail') ?> </div>
                <?php endif ?>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder = "Enter your Email" value = "<?= set_value('email') ?>">
                    <span class="text-danger"> <?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                    <span class="text-danger"> <?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                </div>

                <div class="form-group">
                    <button class = "btn btn-primary btn-block" type = "submit">Sign In</button>
                </div>

                
                <br>

                <a href="<?= site_url('auth/register') ?>">Don't have an account? Sign Up</a>

            </form>
        </div>
    </div>
</div>







    <!--Linking jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src = "public/assets/js/register.js"></script>
</body>
</html>
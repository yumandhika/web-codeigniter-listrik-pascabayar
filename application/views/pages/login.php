<html>
        <head>
                <title>Listrik Pascabayar</title>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <!-- Tell the browser to be responsive to screen width -->
                <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                <!-- Bootstrap 3.3.7 -->
                <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
                <!-- Font Awesome -->
                <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
                <!-- Ionicons -->
                <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css');?>">
                <link rel="stylesheet" href="<?php echo base_url('assets/css/mycustom.css');?>">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        </head>
        <body class="skin-blue sidebar-mini wysihtml5-supported">
        <div class="wrapper" style="height:100%">
            <div class = "row">
                <div class="col-md-4" style="height:100%; background-color:white">
                    <img src="<?php echo base_url('assets/images/banner1.jpg');?>" style="width:210vh;opacity:0.9">
                    <img src="<?php echo base_url('assets/images/photo2.png');?>" style="width:100%;">
                </div>
                <div class ="col-md-8">
                <div class="container" style="margin-top:80px">
                    <h1 style="color:white">Listrik Pasca bayar</h1>
                    <br><br><b>
                    <form class="form" method="post" action="login">
                        <input id="username" name="username" type="text" placeholder="Username">
                        <input id="password" name="password" type="password" placeholder="Password">
                        <button name="submit" value="submit" id="login-button">Login</button>
                    </form>
                </div>
                
                <ul class="bg-bubbles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                </div>
               
            </div>
        </div>
        </body>
            <!-- Login -->
        <script>
         $("#login-button").click(function(event){
		 event.preventDefault();
            $('form').fadeOut(500);
            $('.wrapper').addClass('form-success');
        });
        </script>
        <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    
</html>
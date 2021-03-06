<?php include('includes/db_connection.php');			
			include('common.php');
			include('messages/messages.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $lang['PAGE_TITLE']; ?></title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="index"><img src="images/logo.png"></a>
                
                <div id="languages">
                <a href="?lang=en"><img src="images/en.png"></a>
                <a href="?lang=es"><img src="images/es.png"></a>
                <a href="?lang=ar"><img src="images/ar.png"></a>  
                <a href="?lang=de"><img src="images/de.png"></a>
                <a href="?lang=fr"><img src="images/fr.png"></a>                
                </div>
        </div>
    </div>
     
        <div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading"><?php echo $lang['DEFAULT_MSG_SIGN_IN']; ?></p>
            <div class="block-body">
            	<p style="color:#990000; font-size:14px;" align="center">
					<?php if(isset($_SESSION['msg'])){ 
					
							echo $admin_lang[$_SESSION['msg']] ; 
							unset($_SESSION['msg']);		
							
					}?>
                    
                    </p>
                <form action="login_db" method="post">
                    <label><?php echo $lang['PAGE_PROFILE_USERNAME']; ?></label>
                    <input type="text" name="username" id="username" class="span12">
                    <label><?php echo $lang['PAGE_PROFILE_PASSWORD']; ?></label>
                    <input type="password" name="password" id="password" class="span12">

                    <input type="submit" name="" value="<?php echo $lang['DEFAULT_MSG_SIGN_IN']; ?>" class="btn btn-primary pull-right">
                     
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <p class="pull-right">A <a href="http://www.viaviweb.com" target="_blank">Design & Developed</a> by <a href="http://www.viaviweb.com" target="_blank">viaviweb.com</a></p>
    </div>
</div>

 
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>



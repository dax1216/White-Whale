<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <link rel="shortcut icon" href="images/favicon.ico" />

    <title>White Whale: </title>

    <meta name="author" content="White Whale LLC" />
    <meta name="copyright" content="Copyright White Whale LLC 2012, All Rights Reserved." />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="canonical" href="http://whitewhalecards.com/" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <?php
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');

		echo $scripts_for_layout;
	?>

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!-- Google Fonts API -->
    <link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- ////////// Header ////////// -->

    <!-- User Menu -->

    <div class="container">

        <div class="row">

            <div class="span12">

		<div class="spacer_10"></div>

	<?php 
		if (!empty($login_user_name)) {
        	
			echo "<p class='navbar-text pull-right'><span class='light'>Welcome back </span>";
			echo $login_user_name;
			echo '! &nbsp; &nbsp; &nbsp;';
			$link = "/myaccount/$login_user_id";
			echo $this->Html->link('My Account', $link);
			echo ' &nbsp; &nbsp; &nbsp;';
			echo $this->Html->link('Logout', '/logout');
			echo '</p>';
		}
		else
		{
			echo "<p class='navbar-text pull-right'>";
			echo $this->Html->link('Login', '/login');
			echo '</p>';
		}
		
	?>
            </div><!-- /.span12 -->

        </div><!-- /.row -->

    </div><!-- /.container -->

    <!-- Nav Bar -->

    <div class="navbar">

        <div class="navbar-inner">

            <div class="container">

                <a class="brand" href="/"></a>

                <center>

                <ul class="nav pull-center">

                    <li class="active"><?php echo $this->Html->link('Cards', '/cardhome'); ?></li>
                    <li><a href="#">White Whales</a></li>
                    <li><?php echo $this->Html->link('My Collection', '/mycollection'); ?></li>

                </ul>
                
                </center>

                <form class="navbar-search pull-right">

                    <input type="text" class="search-query" placeholder="Search">

                </form>

            </div><!-- /.container -->

        </div><!-- /.navbar-inner -->

    </div><!-- /.navbar -->

     <div id="content" class="container">

			<?php echo $this->Session->flash(); ?>
            <?php echo $this->Session->flash('auth'); ?>

			<?php echo $content_for_layout; ?>
		
	</div>

  <!-- ////////// Footer ////////// -->
             
    <!-- Footer Menu -->

    <div class="container">

        <div class="row">

            <div class="span12">

                 <ul class="nav nav-pills">
		    
		    <li>
			
			<?php echo $this->Html->link('Home', '/'); ?>
			
		    </li>
		    
		    <li>
			
			<?php echo $this->Html->link('Cards', '/cardhome'); ?>
			
		    </li>
		    
		    <li>
			
			<a href="#">White Whales</a>
			
		    </li>
		    
		    <li>
			
			<?php echo $this->Html->link('My Collection', '/mycollection'); ?>
			
		    </li>
		    
		    <li>
			
			<?php echo $this->Html->link('About', '/about'); ?>
			
		    </li>
		    
		  </ul>

            </div><!-- /.span12 -->

        </div><!-- /.row -->

    </div><!-- /.container -->
    
    <div id="footer">
	
	<div id="footer_inner">
	
	    <a href="#" class="footer_logo"><img src="img/logo_footer.png" alt="" /></a>
	    
	    <div id="footer_cards"></div>
	    
	    <p class="footer_text">
		
		&copy; 2012 &nbsp; &nbsp; All Rights Reserved<br />
		<?php echo $this->Html->link('Privacy', '/privacy'); ?> &nbsp; &nbsp; <?php echo $this->Html->link('Terms', '/terms'); ?>
		
	    </p>
	
	</div>
	
    </div>

  </body>
</html>

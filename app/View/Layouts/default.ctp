<!DOCTYPE html>

<html lang="en">

<head>

<?php echo $this->element('home_head');?>

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

   <?php echo $this->element('main_nav');?>

     <div id="content" class="container">

			<?php echo $this->Session->flash(); ?>
            <?php echo $this->Session->flash('auth'); ?>

			<?php echo $content_for_layout; ?>
		
	</div>

  <!-- ////////// Footer ////////// -->
  
  <?php echo $this->element('footer_nav');?>
    
  <?php echo $this->element('footer');?>

  </body>
</html>

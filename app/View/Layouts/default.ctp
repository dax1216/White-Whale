<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
     <?php echo $this->Html->charset(); ?>
	<title>White Whale Cards Home-Bootstrap</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');

		echo $scripts_for_layout;
	?>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style>
      body {
	padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	margin-left: 30px;
      }
    </style>

  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">White Whale Cards</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><?php echo $this->Html->link('Home', '/'); ?></li>
			  <li><?php echo $this->Html->link('Admin', '/admin'); ?></li>
              <li><?php echo $this->Html->link('Cards', '/cardhome'); ?></li>
              <li><?php echo $this->Html->link('Sets', '/sethome'); ?></li>
              <li><?php echo $this->Html->link('My Collection', '/mycollection'); ?></li>
             <<li><?php echo $this->Html->link('Account', '/myaccount'); ?></li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

  

     <div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

	</div>



  </body>
</html>

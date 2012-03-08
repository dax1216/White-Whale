    <meta charset="utf-8">

    <link rel="shortcut icon" href="images/favicon.ico" />

    <title>White Whale: </title>

      <?php echo $this->element('meta'); ?>

    <link rel="canonical" href="http://whitewhalecards.com/" />
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> //-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <?php
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('jquery.datatables');
		echo $this->Html->css('dt_bootstrap');
                
		echo $this->Html->script('jquery-1.7.1');
		echo $this->Html->script('jquery.datatables');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('dt_bootstrap');

		echo $scripts_for_layout;
	?>

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!-- Google Fonts API -->
    <!--<link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>//-->

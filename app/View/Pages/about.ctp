<?php

if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>

<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>

  <!-- ////////// Content ////////// -->
	
    <!-- About Content-->

    <div class="container">

        <div class="row">

            <div class="span12">

		<div class="spacer_10"></div>

		<center>About Page Content Here</center>
		
		<div class="spacer_30"></div>

            </div><!-- /.span12 -->

        </div><!-- /.row -->

    </div><!-- /.container -->

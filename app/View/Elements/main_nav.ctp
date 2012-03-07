  <!-- Nav Bar -->

    <div class="navbar">

        <div class="navbar-inner">

            <div class="container">

                <a class="brand" href="/"></a>

                <center>

                <ul class="nav pull-center">

                    <li class="active"><?php echo $this->Html->link('Card Wiki', '/cardwiki'); ?></li>
                    <li class="active"><?php echo $this->Html->link('Buy/Sell', '/buysell'); ?></li>
                    <li><?php echo $this->Html->link('Collections', '/collections'); ?></li>
                    <li><?php echo $this->Html->link('White Whales', '/whitewhales'); ?></li>
					
                </ul>
                
                </center>
                
				<?php echo $this->element('main_nav_search'); ?>
                 

            </div><!-- /.container -->

        </div><!-- /.navbar-inner -->

    </div><!-- /.navbar -->
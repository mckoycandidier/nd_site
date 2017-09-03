    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- NAVBAR
================================================== -->

        <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact" data-toggle="modal" data-target="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
		<div class="item active">
			<?php  echo views_embed_view('banner', $display_id = 'block'); ?> 
        </div> 
		<div class="item">
			<?php  echo views_embed_view('banner', $display_id = 'block_1'); ?> 
        </div>
		<div class="item">
			<?php  echo views_embed_view('banner', $display_id = 'block_2'); ?> 
        </div>
		<div class="item">
			<?php  echo views_embed_view('banner', $display_id = 'block_3'); ?> 
        </div>
		<div class="item">
			<?php  echo views_embed_view('banner', $display_id = 'block_4'); ?> 
        </div>		
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->  
     

    
	
	<div class="container">
		<div class="row">	
			<div class="col-md-3 animate"  data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
			
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
					  <h4 class="panel-title">
					 
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Calendar of Events
						</a>
					  </h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					  <div class="panel-body">
						<?php  echo views_embed_view('calendar', $display_id = 'block_1'); ?> 
					  </div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
					  <h4 class="panel-title">
					
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Upcoming Events
						</a>
					  </h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					  <div class="panel-body">
					  <?php  echo views_embed_view('calendar', $display_id = 'block_2'); ?> 
					  </div>
					</div>
				  </div> 
				</div>
			
			
				
			</div>
			<div class="col-md-3 ssg-block animate"  data-animate="fadeIn" data-duration="1.0s" data-delay="0.1s">

				<?php  echo views_embed_view('ssg', $display_id = 'block'); ?> 
				
			</div>
			<div class="col-md-3 ssg-block animate"  data-animate="fadeIn" data-duration="1.0s" data-delay="0.2s">

				<?php  echo views_embed_view('ssg', $display_id = 'block'); ?> 
				
			</div>
			
			<div class="col-md-3 animate"  data-animate="fadeIn" data-duration="1.0s" data-delay="0.1s">
				<?php  echo views_embed_view('school_admin', $display_id = 'block_1'); ?>
			</div>
		</div>
	</div>
	
 <div id="parallax1" class="parallaxParent">	
		<?php  echo views_embed_view('parallax', $display_id = 'block'); ?> 
	</div>

	<div class="container department-teaser">
		<div class="row">	
			<div class="col-md-3 animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.1s">
				<?php  echo views_embed_view('cite', $display_id = 'block'); ?> 
			</div>
			
			<div class="col-md-3 animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.2s">
			<?php  echo views_embed_view('cite', $display_id = 'block'); ?> 
				Department CBA
			</div>
			
			<div class="col-md-3 animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.3s">
			<?php  echo views_embed_view('cite', $display_id = 'block'); ?> 
				Department CED
			</div>
			
			<div class="col-md-3 animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.2s">
			<?php  echo views_embed_view('cite', $display_id = 'block'); ?> 
				Department CCJE
			</div>
		</div>
		
		<div class="row">	
			<div class="col-md-3 animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.1s">
			<?php  echo views_embed_view('cite', $display_id = 'block'); ?> 
				Department CN
			</div>
			
			<div class="col-md-3 animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.0s">
			<?php  echo views_embed_view('cite', $display_id = 'block'); ?> 
				Department CAS
			</div>
			
			<div class="col-md-3 animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.1s">
			<?php  echo views_embed_view('cite', $display_id = 'block'); ?> 
				Department DMMST
			</div>
			
			<div class="col-md-3 animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.2s">
			<?php  echo views_embed_view('cite', $display_id = 'block'); ?> 
				Department GRADUATE STUDIES
			</div>
		</div>
	</div>
	<!--
   <div id="parallax3" class="parallaxParent">	
		<?php  echo views_embed_view('parallax', $display_id = 'block'); ?> 
	</div>
	-->
	<div class="container">
		<div class="row">	
			<div class="col-md-3">
			
				REGINA PUBLICATION
			</div>
			
			<div class="col-md-3">
				GUIDANCE
			</div>
			
			<div class="col-md-6">
				<div class="row">	
					<div class="col-md-6">
						SHS
					</div>
					
					<div class="col-md-6">
						HS
					</div>
				</div>
				<div class="row">	
					<div class="col-md-6">
						ELEMENTARY
					</div>
					
					<div class="col-md-6">
						COMMUNITY EXTENSION
					</div>
				</div>
		</div>
	</div>
	<!-- backtoTop-->
	<a href="#0" class="cd-top">Top</a>
	
	<div class="container">
      <!-- FOOTER -->
      <footer>

        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
	<!-- Modal -->
		<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Contact Us</h4>
			  </div>
			  <div class="modal-body">
				<?php
				  print render(node_view(node_load(29), 'full', NULL));
				?>
			  </div>
			</div>
		  </div>
		</div>
    </div><!-- /.container -->

		
	<script src="http://localhost/ndmc/sites/all/themes/ndmc/assets/animate/scrolla.jquery.min.js"></script>	
	<script src="http://localhost/ndmc/sites/all/themes/ndmc/assets/js/custom.js"></script>	


    </body>
</html>

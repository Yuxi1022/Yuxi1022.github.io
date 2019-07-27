<?php 
	/* Copyright 2019 DeQin Group 351
	 * License controlled by Weian Wang */
	
	$isForm = FALSE;
	$activePage = 'About';
	
	require 'header.php';
/*
	function RenderTwitterLink($URL)
	{
		?>
		<a style="color:#00A3F3" href="<?=$URL?>" target="_blank">
			<span class="fa-stack fa-1x">
				<i class="fas fa-square fa-stack-2x"></i>
				<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
			</span>
		</a>
		<?php
	}
	
	function RenderLinkedInLink($URL)
	{
		?>
		<a style="color:#0078B5" href="<?=$URL?>" target="_blank">
			<span class="fa-stack fa-1x">
				<i class="fas fa-square fa-stack-2x"></i>
				<i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
			</span>
		</a>  
		<?php
	}
*/	
?>

	<div class="container-fluid">
	<div class="row">
	<div class="col-xl-9 col-lg-11 m-2 pb-4 rounded text-center text-light mx-auto">
	

			<section class="jumbotron text-center bg-dark border-primary border">
				<div class="container">
					<h1 class="jumbotron-heading">DEQIN-English Accent Recognize</h1>
					<p class="lead">This online English Accent Recognize system will help you bala bala bala.--TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST--.</p>
					<p>
						<a href="login.php" class="btn btn-primary">Start the Login</a>
						<a href="https://github.com/" target="_blank" class="btn btn-secondary">Fork us on GitHub</a>
					</p>
				</div>
			</section>
		
			<!-- Three columns of text below the jumbotron -->
			<div class="row">
			
				<div class="col-lg-4">
					<span class="fa-stack fa-5x mb-4">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="far fa-chart-bar fa-stack-1x"></i>
					</span>
					<h2>Start with Phonetic Test<br>音标发音</h2>
					<p class="text-justify">--TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST--</p>
					<p class="text-justify">--TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST--</p>
				</div><!-- /.col-lg-4 -->
			
				<div class="col-lg-4">
					<span class="fa-stack fa-5x mb-4">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-shoe-prints fa-stack-1x"></i>
					</span>
					<h2>Step on Word Test<br>单词发音</h2>
					<p class="text-justify">--TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST--</p>
				</div><!-- /.col-lg-4 -->
		  

				<div class="col-lg-4">
					<span class="fa-stack fa-5x mb-4">
						<i class="fas fa-circle fa-stack-2x text-primary"></i>
						<i class="fas fa-lock-open fa-stack-1x"></i>
					</span>
					<h2>Ultimately Textbook Analysis<br>教材解读</h2>
					<p class="text-justify">--TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST-- why not <a href="https://www.baidu.com" target="_blank">baidu it</a>?</p>
		
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
		  
			<div class="row">
				<div class="col-lg-12">
					<p align="center"><em>We do not harvest your data and we will not share your results with anyone else.</em></p>
				</div>
			</div>
		  
			<section class="jumbotron text-center border border-primary bg-dark mt-2">
				<div class="container">
					<h1 class="jumbotron-heading">Meet The Team</h1>
					<p class="lead">--TEST----TEST----TEST----TEST----TEST----TEST----TEST----TEST--	</p>
				</div>
			</section>
		  
			<div class="row">
			
				<div class="col-lg-12">
					
					<div class="card-deck">
					
						<div class="card bg-transparent text-center">
							<div class="text-center">
								<img class="rounded-circle border border-primary mb-2" src="team-photos/test.jpg" alt="Generic placeholder image" width="140" height="140">
							</div>
							<div class="card-body pb-0 pt-0">
								<h6>黄夏裔 Xiayi Huang</h6>	
								<p class="small">Head of Group 351</p>
							</div>
							<div class="card-footer text-center pt-0">
								<?//=RenderLinkedInLink('//')?> 
								<?//=RenderTwitterLink('//')?>	
							</div>
						</div>

	
						<div class="card bg-transparent text-center">
							<div class="text-center">
								<img class="rounded-circle border border-primary mb-2" src="team-photos/test.jpg" alt="Generic placeholder image" width="140" height="140">
							</div>
							
							<div class="card-body  pb-0 pt-0">
								<h6>盛一珺 Yijun Sheng</h6>
								<p class="small">Member of Group 351</p>
							</div>
							<div class="card-footer text-center pt-0">
								<?//=RenderLinkedInLink('//')?> 
							</div>
						</div>

		
						<div class="card bg-transparent text-center">
							<div class="text-center">
								<img class="rounded-circle border border-primary mb-2" src="team-photos/test.jpg" alt="Generic placeholder image" width="140" height="140">
							</div>
							<div class="card-body  pb-0 pt-0">
								<h6>孙瑜晰 Yuxi Sun</h6>								
								<p class="small">Member of Group 351</p>
							</div>
							<div class="card-footer text-center pt-0">
								<?//=RenderLinkedInLink('//')?>
								<?//=RenderTwitterLink('//')?>	
							</div>
						</div>
					

					</div>
					
				</div>
			</div>
			<div class="row mt-4">
				
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					
					<div class="card-deck">
					
						<div class="card bg-transparent text-center">
							<div class="text-center">
								<img class="rounded-circle border border-primary mb-2" src="team-photos/test.jpg" alt="Generic placeholder image" width="140" height="140">
							</div>
							<div class="card-body pb-0 pt-0">
								<h6>王玮安 Weian Wang</h6>	
								<p class="small">Member of Group 351</p>
							</div>
							<div class="card-footer text-center pt-0">
								<?//=RenderLinkedInLink('//')?>
								<?//=RenderTwitterLink('//')?>	
							</div>
						</div>

	
						<div class="card bg-transparent text-center">
							<div class="text-center">
								<img class="rounded-circle border border-primary mb-2" src="team-photos/test.jpg" alt="Generic placeholder image" width="140" height="140">
							</div>
							
							<div class="card-body  pb-0 pt-0">
								<h6>德勤支持</h6>
								<p class="small">Supervisor of Group 351</p>
							</div>
							<div class="card-footer text-center pt-0">
								<?//=RenderLinkedInLink('//')?>
								<?//=RenderTwitterLink('//')?> 
							</div>
						</div>
					

					</div>
					
				
				</div><!-- /.col-lg-12 -->
				<div class="col-lg-2"></div>
			</div><!-- /.row -->
		
		
	
	</div><!-- /.col-lg-8 -->
	
	</div><!-- /.row -->
	
	</div><!-- /.container -->
	
<?php
	
	//require 'footer.php';
	
?>		
<script>
	$.ajax({
	  type: 'POST',
	  url: "preload_resources.php"
	})
</script>
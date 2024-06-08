<style>
	.video-cards{

	}
	.video-cards h2{
		line-height:106%;
		font-size: 30px;
		text-align:center;
		margin-bottom:30px;

	}
	.video-cards h2 span{
		color:#00B1CC;
	}
	.video-card{
		border-radius: 10px;
		background: #E9E9F2;
		overflow:hidden;
		display:flex;
		flex-direction: column;
		width:276px;
	}
	.video-card .video-container{
		width:100%;
		border-radius:10px;
		overflow:hidden;
		display:flex;
		flex-direction: column;
	}
	.video-card video{
		max-width:100%;
		max-height:100%;
	}
	.video-card .video-card-text{
		padding:22px 13px;
	}
	.video-card h3{
		font-size:24px;
	}
	.video-cards .video-desktop-row{
		display:none;
	}
	@media(min-width:1200px){
		.video-cards .mobile-slider{
			display:none;
		}
		.video-cards .video-desktop-row{
			max-width:1425px;
			width:100%;
			margin:0 auto;
			display:flex;
			flex-direction:row;
			justify-content: space-between;
		}
		.video-cards .video-card{
			width:24%;
		}
		.video-card h3{
			font-size:26px;
			text-align:center;
		}
		.video-card .video-card-text{
			padding:25px 15px;
		}
		.video-cards h2{
			font-size:50px;
			margin-bottom:35px;
		}
	}
</style>
<section class="">
	<div class="container">
		<div class="video-cards">
			<h2>PROACTIVE <span>CARE NOW</span></h2>
			<div class="mobile-slider">
				<div class="owl-carousel owl-theme video-slide">
					<div class="item">
						<div class="video-card">
							<div class="video-container">
								<video autoplay muted poster="<?php echo get_template_directory_uri() ?>/assets/img/card-1-poster.png" loop="true">
									<source src="<?php echo get_template_directory_uri() ?>/assets/videos/card-1.mp4" type="video/mp4">
								</video>
							</div>
							<div class="video-card-text">
								<h3>
									Making Mobile Care Better for Patients
								</h3>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="video-card">
							<div class="video-container">
								<video autoplay muted poster="<?php echo get_template_directory_uri() ?>/assets/img/card-2-poster.png" loop="true">
									<source src="<?php echo get_template_directory_uri() ?>/assets/videos/card-2.mp4" type="video/mp4">
								</video>
							</div>
							<div class="video-card-text">
								<h3>
									A Game Changer for Seniors
								</h3>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="video-card">
							<div class="video-container">
								<video autoplay muted poster="<?php echo get_template_directory_uri() ?>/assets/img/card-3-poster.png" loop="true">
									<source src="<?php echo get_template_directory_uri() ?>/assets/videos/card-3.mp4" type="video/mp4">
								</video>
							</div>
							<div class="video-card-text">
								<h3>
									Revolutionizing At-Home Care
								</h3>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="video-card">
							<div class="video-container">
								<video autoplay muted poster="<?php echo get_template_directory_uri() ?>/assets/img/card-2-poster.png" loop="true">
									<source src="<?php echo get_template_directory_uri() ?>/assets/videos/card-2.mp4" type="video/mp4">
								</video>
							</div>
							<div class="video-card-text">
								<h3>
									Look Inside DocGo’s On-Demand Dispatch Technology
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="video-desktop-row">
				<div class="video-card">
					<div class="video-container">
						<video autoplay muted poster="<?php echo get_template_directory_uri() ?>/assets/img/card-1-poster.png" loop="true">
							<source src="<?php echo get_template_directory_uri() ?>/assets/videos/card-1.mp4" type="video/mp4">
						</video>
					</div>
					<div class="video-card-text">
						<h3>
							Making Mobile Care Better for Patients
						</h3>
					</div>
				</div>
				<div class="video-card">
					<div class="video-container">
						<video autoplay muted poster="<?php echo get_template_directory_uri() ?>/assets/img/card-2-poster.png" loop="true">
							<source src="<?php echo get_template_directory_uri() ?>/assets/videos/card-2.mp4" type="video/mp4">
						</video>
					</div>
					<div class="video-card-text">
						<h3>
							A Game Changer for Seniors
						</h3>
					</div>
				</div>
				<div class="video-card">
					<div class="video-container">
						<video autoplay muted poster="<?php echo get_template_directory_uri() ?>/assets/img/card-3-poster.png" loop="true">
							<source src="<?php echo get_template_directory_uri() ?>/assets/videos/card-3.mp4" type="video/mp4">
						</video>
					</div>
					<div class="video-card-text">
						<h3>
							Revolutionizing At-Home Care
						</h3>
					</div>
				</div>
				<div class="video-card">
					<div class="video-container">
						<video autoplay muted poster="<?php echo get_template_directory_uri() ?>/assets/img/card-4-poster.png" loop="true">
							<source src="<?php echo get_template_directory_uri() ?>/assets/videos/card-2.mp4" type="video/mp4">
						</video>
					</div>
					<div class="video-card-text">
						<h3>
							Look Inside DocGo’s On-Demand Dispatch Technology
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$('.video-slide').owlCarousel({
		loop:false,
		stagePadding:100,
		autoWidth:true,
		mergeFit:true,
		margin:22,
		nav:false,
		dots:false,
		center:false,
		video:true,
		lazyLoad:true,
		responsive:{
			0:{
				items:2
			},
			900:{
				items:3
			}
		},
		singleItem: true,afterAction: function(current) {
           current.find('video').get(0).play();
        }
	})
	$(".video-slide .video-container").children().each(function() { 
			console.log(this)
			this.get(0).play();
		}
	)
</script>
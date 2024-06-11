<?php $category = is_category('care-for-all') || is_category('healthcare-reimagined') || is_category('mobile-healthcare'); ?>
<style>
	.blog-section .blog-card{
		display:block;
		border-radius:10px;
		margin:0 0 35px;
	}
	.blog-section .blog-card:last-child{
		margin:0;
	}
	.blog-section h5{
		line-height:28px;
		font-size:20px;
		letter-spacing:-0.5px;
		margin-bottom:0;
	}
	.blog-category-title{
		font-size:12px;
		letter-spacing: 1.08px;
		text-transform: uppercase;
		font-weight:bold;
	}
	.blog-section .blog-date{
		opacity:0.5;
		line-height:24px;
		font-size:14.5px;
		margin:10px 0 5px;
	}
	.blog-section .blog-featured-img a{
		border-radius:5px;
		display:flex;
		flex-direction:column;
		overflow:hidden;
	}
	.blog-section h4{
		display:none;
	}
	.blog-section .blog-excerpt{
		display:none;
	}

	.blog-section{
		margin-top: 0px;
	}
	.blog-section hr{
		display:none;
	}
	.blog-section .load-more-container{
		text-align:center;
		margin-top:10px;
	}
	.blog-section .load-more{
		border-radius: 7px;
		border: 1px solid #000;
		font-weight:bold;
		padding:25px 48px;
	}
	@media(min-width:992px){
		.blog-section .blog-card{
			display:flex;
			flex-direction: row;
			justify-content: space-between;
			<?php if(!$category){ ?>background:#DFE7F0;<?php } ?>
			padding:62px 32px <?php if(!$category){ ?>82px<?php }else{ ?>38px<?php } ?>;
		}
		<?php if(!$category){ ?>
		.blog-section .blog-card:first-child{
			background:#E9E9F2;
		}
		<?php } ?>

		.blog-section h4{
			text-align:left;
			display:block;
			margin-bottom:30px;
			position:relative;
			margin-left:32px;
		}
		.blog-section h4:before{
			position:relative;
			content:'';
			left:0;
			background: #00B1CC;
			height:3px;
			width:20px;
			display:block;
			top:-3px;
		}
		.blog-section .blog-excerpt,
		.blog-section .blog-title-section{
			display:block;
			width:30%;
		}
		.blog-section .blog-featured-img{
			width:30%;
		}
		.blog-section .blog-category-title{
			font-size:13px;
		}
		.blog-section h5{
			font-size:27px;
			line-height:36px;
		}
		.blog-section .blog-date{
			margin:20px 0 5px;
		}
		.blog-section .blog-excerpt p{
			font-size:16px;
			line-height:25px;
			margin-bottom:20px;
			opacity:0.75;
		}
		.blog-section .blog-link{
			font-size:16px;
			line-height:25px;
			opacity:0.75;
			text-decoration: underline;
		}
		.blog-section hr{
			display:block;
			margin:0;
		}
		.blog-section .hr-padding{
			margin:0 32px;
		}
	}

	.blog-section.margins{
		margin-top: 0px;
		margin-bottom: 0px;
		padding-bottom: 45px;
	}
</style>
<section class="blog-section margins">
	<div class="container desktop-container-narrow">
		<h4>Recent Articles</h4>
		<div class="blog-list ">
			<?php 
				if($category){
			?>
			<div class="hr-padding">
				<hr>
			</div>
			<?php
				}
			?>
			<div class="blog-card" href="#">
				<div class="blog-title-section">
					<div class="blog-category-title font-brand-blue">
						Healthcare Reimagined
					</div>
					<h5>Linking Chronic Conditions: A New Appraoch to Disease Management</h5>
					<div class="blog-date">
						June 03, 2024
					</div>
				</div>
				<div class="blog-excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat ac tincidunt vitae semper. Bibendum enim facilisis gravida neque convallis. Consequat mauris....</p>
					<a href="#" class="blog-link">Read More</a>
				</div>
				<div class="blog-featured-img">
					<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-img-1.png"></a>
				</div>
			</div>
			<?php 
				if($category){
			?>
			<div class="hr-padding">
				<hr>
			</div>
			<?php
				}
			?>
			<div class="blog-card" href="#">
				<div class="blog-title-section">
					<div class="blog-category-title font-brand-blue">
						Care for All
					</div>
					<a href="#"><h5>Boosting Maternal Health: The Role of Population Health Programs</h5></a>
					<div class="blog-date">
						June 03, 2024
					</div>
				</div>
				<div class="blog-excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat ac tincidunt vitae semper. Bibendum enim facilisis gravida neque convallis. Consequat mauris....</p>
					<a href="#" class="blog-link" href="#">Read More</a>
				</div>
				<div class="blog-featured-img">
					<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-img-2.png"></a>
				</div>
			</div>
			<?php 
				if($category){
			?>
			<div class="hr-padding">
				<hr>
			</div>
			<?php
				}
			?>
			<div class="blog-card" href="#">
				<div class="blog-title-section">
					<div class="blog-category-title font-brand-blue">
						Care for All
					</div>
					<h5>Boosting Maternal Health: The Role of Population Health Programs</h5>
					<div class="blog-date">
						June 03, 2024
					</div>
				</div>
				<div class="blog-excerpt">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat ac tincidunt vitae semper. Bibendum enim facilisis gravida neque convallis. Consequat mauris....</p>
					<a href="#" class="blog-link">Read More</a>
				</div>
				<div class="blog-featured-img">
					<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-img-2.png"></a>
				</div>
			</div>
		</div>
		<?php if($category){ ?>
		<div class="load-more-container">
			<button class="load-more">LOAD MORE</button>
		</div>
		<?php } ?>
	</div>
</section>
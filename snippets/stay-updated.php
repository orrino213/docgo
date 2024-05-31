<style>
	.stay-updated{
		background-color:#01B2CD;
		border-radius:10px;
		background-image:url(<?php echo get_template_directory_uri() ?>/assets/img/stay-updated-bg-mobile.png);
		background-repeat:no-repeat;
		background-size:cover;
	}
	.stay-text{
		padding:22px 22px 0;
	}
	.stay-updated h4{
		color:#fff;
		text-shadow: 0px 3px 8px rgba(0, 0, 0, 0.13);
		font-size:30px;
		margin-top:76px;
		margin-bottom:10px;
	}
	.stay-updated .sub{
		color:#fff;
		font-size:22px;
		text-shadow: 0px 3px 9px rgba(0, 0, 0, 0.13);
	}
	.stay-updated-form-container{
		padding:34px 15px 40px;
		position:relative;
	}
	.stay-updated-form-container input[type="email"]{
		border-radius: 32.549px;
		border: 2px solid #9CD4DC;
		background: #F5F7FB;
		box-shadow: 0px 11px 17px 0px rgba(19, 30, 41, 0.10);
		padding:16px 18px;
		color: #7D8389 !important;
		font-size:15px;
	}
	.stay-updated-form-container button,
	.stay-updated-form-container input[type="submit"]{
	    background: none;
	    border: none;
	    position: absolute;
	    right: 28px;
	    top: calc(50% - 22px);
	}
</style>
<section class="section-padding">
	<div class="container">
		<div class="stay-updated">
			<div class="stay-text">
				<h4>Stay Updated</h4>
				<div class="sub">Subscribe to our email newsletter for all our latest insights.</div>
			</div>
			<div class="stay-updated-form-container">
				<form action="#" class="">
					<input type="email" name="subscribe" placeholder="Enter your email address" class="form-control">
					<button class="stay-updated-submit-mobile">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/submit-btn-mobile.svg">
					</button>
				</form>
				
			</div>
		</div>
	</div>
</section>
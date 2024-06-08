<style>
	.stay-updated{
		background-color:#01B2CD;
		border-radius:10px;
		background-image:url(<?php echo get_template_directory_uri() ?>/assets/img/stay-updated-bg-mobile.png);
		background-repeat:no-repeat;
		background-size:cover;
		display:flex;
		flex-direction:row;
		flex-wrap:wrap;
		width: calc(100vw - 2 * 20px); 
		margin: 0 20px 25px 20px;
	}
	.stay-updated .stay-text{
		padding:22px 22px 0;
		width:100%;
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
		width:100%;
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
	.stay-updated-form-container .stay-updated-submit-desktop{
		display:none;
	}
	@media(min-width:992px){
		.stay-updated{
			padding:80px 211px;
			background: linear-gradient(0deg, rgba(3, 170, 195, 0.45) 0%, rgba(3, 170, 195, 0.45) 100%), linear-gradient(90deg, rgba(0, 0, 0, 0.00) 0%, #02AEC8 100%), url(<?php echo get_template_directory_uri() ?>/assets/img/stay-updated-bg-desktop.png) lightgray 50% / cover no-repeat;
			align-items:center;
		}
		.stay-updated .stay-text{
			width:50%;
			padding:0;
		}
		.stay-updated-form-container{
			padding:0;
		}
		.stay-updated h4{
			margin-top:0;
			font-size:50px;
		}
		.stay-updated .sub{
			font-size:17.5px;
		}
		.stay-updated .stay-updated-form-container{
			width:50%;
			padding:0;
		}
		.stay-updated-form-container input[type="email"]{
			font-size:19px;
			padding:21px 29px;
			border-radius:45px;
		}
		.stay-updated-form-container .stay-updated-submit-mobile{
			display:none;
		}
		.stay-updated-form-container .stay-updated-submit-desktop{
			display:block;
		}
		.stay-updated-form-container button,
		.stay-updated-form-container input[type="submit"]{
			color:#fff;
		}
	}
</style>
<section class="">
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
					<button class="stay-updated-submit-desktop">
						Get Updates
					</button>
				</form>
			</div>
		</div>
</section>
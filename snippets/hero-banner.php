<style>
    .arrow-text::after {
      content: url('<?php echo get_template_directory_uri() ?>/assets/img/arrow-1.svg');
      display: inline-block;
      width: 1.6px;
      height: 1.6px;
      background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/banner-picture.png;)
      background-size: contain;
      background-repeat: no-repeat;
      margin-left: 5px; /* Space between text and arrow */
    }

    .banner-picture{
        width: 1035px;
        height: 810px;
        flex-shrink: 0;
        border-radius: 14px;
        background: #131E29;
        display: flex;
        justify-content: flex-start;
    }

    .banner-text{
        width: 100%;
        padding-left: 15%;
    }

    .care-for-all{
        color: #69BFDC;
        font-family: "NimbusSanL";
        font-size: 12.5px;
        font-style: normal;
        font-weight: 700;
        line-height: 24px; /* 192% */
        letter-spacing: 1.25px;
        text-transform: uppercase;
    }
    
    .hero-banner{
        flex-shrink: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 100px;
        padding-bottom: 100px;
        width: 100%;
        height: 810px;
        border-radius: 14px;
        background: #131E29;
        margin-bottom: 25px;
    }

    .mobile-clinics-title{
        width: 477px;
        max-width: 100%;
        color: #FFF;
        font-family: "NimbusSanL";
        font-size: 50px;
        font-style: normal;
        font-weight: 700;
        line-height: 60px; /* 120% */
        letter-spacing: -1.25px;
    }

    .mobile-clinics-text{
        width: 477px;
        color: #FFF;
        font-family: "NimbusSanL";
        font-size: 17px;
        font-style: normal;
        font-weight: 400;
        line-height: 25px;
    }

    .read-more-button{
        background: #00B1CC;
        color: #FFF;
        width: 205px;
        height: 70px;
        flex-shrink: 0;
        border-radius: 5px;
        background: #00B1CC;
        font-family: "NimbusSanL";
    }

    .full-wide{
        width: calc(100vw - 2 * 20px); 
        margin: 85px 20px 25px 20px;
    }
</style>


<section class="full-wide">
        <div class="hero-banner">
            <div class="banner-text">
                <h4 class="care-for-all">CARE FOR ALL</h4>
                <h3 class="mobile-clinics-title">Mobile Clinics Break Barriers: Expanding Healthcare in Rural Communities</h3>
                <p class="mobile-clinics-text">Mobile clinics are revolutionizing healthcare by reaching underserved rural communities, providing essential services right at their doorsteps.</p>
                <button class="read-more-button arrow-text">READ MORE
                </button>
            </div>
            <div class="banner-picture">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner-picture.png" alt="Banner" />
            </div>
        </div>
</section>
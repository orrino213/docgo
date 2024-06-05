<style>
    .container.pre-footer-container{
        background: #BAB8E5;
        border-radius: 10px;
        height: 350px;
        display: grid;
        place-items: center;
        grid-template-columns: 1fr; 
        background-image:url(<?php echo get_template_directory_uri() ?>/assets/img/pre-footer-banner.png);
        background-repeat:no-repeat;
        background-size:cover;
    }

    .custom-btn.learn-more{
        background: #00C1DE;
        border-radius: 200px;
        color: #FFF;
        font-family: "NimbusSanL";
        font-size: 18px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3); 
    }

    .pre-footer-title{
        color: #FFF;
        text-shadow: 0px 4px 22px rgba(147, 145, 196, 0.40);
        font-family: "NimbusSanL";
        font-size: 50px;
        font-style: normal;
        font-weight: 700;
        line-height: 58px;
    }

    .row.subscribe-wrap.align-items-center.me{
        padding-left: 200px;
    }
</style>





<div class="container pre-footer-container">
    <div class="row subscribe-wrap align-items-center me">
        <div class="col-lg-6">
            <div class="subs-txt">
                <h3 class="pre-footer-title">DocGo is leading the Proactive Health Care Revolution</h3>
            </div>
        </div>
        <div class="">
            <div class="subs-form">
                <form action="#" class="mailchimp-sform">
                    <button type="submit" id="subscribe-button2" class="custom-btn learn-more">Learn More About DocGo</button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    
    .custom-btn.play-button{
        background: #00B1CC;
    }

    .video-section{
        width: calc(100vw - 2 * 20px); 
        margin: 25px 20px 75px 20px;
        background: #DFE7F0;
        border-radius: 10px;
        display: flex;
          justify-content: flex-start;
          text-align: left;
    }

    .reimagined{
        color: #00B1CC;
        font-family: "NimbusSanL";
        font-size: 13px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        letter-spacing: 1.3px;
        text-transform: uppercase;
    }

    .talk-txt.leading{
        padding-left: 120px;
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .banner-split{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .video-image-container{
        max-width: 100%;
        max-height: 100%;
        padding-right: 80px;
        padding-left: 50px;
        padding-top: 150px;
        padding-bottom: 150px;
        position: relative;
        display: inline-block;
    }

    .video-image{
        display: block;
        width: 100%; 
        height: auto;
    }

</style>

    <section class="">
        <div class="video-section">
            <div class="row">
                <div class="col-lg-12 banner-split">
                    <div class="talk-txt leading">
                        <h4 class="reimagined">Healthcare Reimagined</h4>
                        <h2 class="section-title">Technology That Matters with Hawk Newton</h2>
                        <a href="contact.html" class="custom-btn play-button">Play</a>
                    </div>
                    <div class="video-image-container">
                        <img class="video-image" src="<?php echo get_template_directory_uri() ?>/assets/img/video-banner-image.png" alt="video"  />
                    </div>
                </div>
            </div>
        </div>
    </section>

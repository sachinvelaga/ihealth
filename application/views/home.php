    <style type="text/css">
    .our-team-saying-heading {
        width: 100%;
        height: 260px;
        background: #2ecc71;
        text-align: center;
        color: #FFFFFF;    
    }
    .rounded-circle {
        width: 160px;
        border-radius: 100%;
        background-color: #27ae60;
        height: 160px;
        margin: 0px auto;
        display: inline-block;
        margin-top: 16px;
    }
    .rounded-circle img {
        margin-top: 30px;
        width: 100px;
        height: 100px;
    }
    .our-team-saying-desc-main-container {
        width: 100%;
        height: 100vh;
        background: url(img/svgfiles/doctor.svg) no-repeat 100%;
        background-size: 28% 80%;
        display: table;
        position: relative;
        overflow: hidden;
    }
    .what-our-team-saying-heading {
        color: #2ecc71;
        font-size: 48px;
        padding-bottom: 2%;
        padding-left: 5%;  
        font-family: "rock"; 
        padding-top: 60px;
    }
    .our-team-saying-desc {
        width: 256px;
        border: 2px solid #2ecc71;  
        height: 400px;
        font-size: 14px;
        float: left;
        margin-right: 5%;
        background-color: white;
        padding: 40px;
        position: relative;
        font-size: 20px;
        font-family: "rock";
    }
    /* clear fix */
    .clear:before,
    .clear:after {
        content: " ";
        display: table;
    }
    .clear:after {
        clear: both;
    }
    .our-team-saying-individual-desc-container {
        vertical-align: middle;
        display: table-cell;
        position: absolute; 
        left: 0px; 
        right: 0px; 
        z-index: 1;
    }
    .addAnimateTraingular {
        width: 0;
        height: 0;
        border-left: 0px solid transparent;
        border-right: 0px solid transparent;
        border-bottom: 0px solid #2ecc71;
        position: absolute;
        bottom: 0px;
        left: 0px;
        -moz-transition: all 0.5s linear;
        -o-transition: all 0.5s linear;
        -webkit-transition: all 0.5s linear;
        transition: all 0.5s linear;
    }
    .team-member-2 {
        margin-top: -100px;
        opacity: 0;
    }
    .team-member-3 {
        margin-top: -100px;
        opacity: 0;
    }
    .show-full-desc-icon {
        float: right;
    }
    .animate-team-member-2 {
        opacity: 1;
        margin-top: 80px;
        -moz-transition: all 0.7s linear 0.5s;
      -o-transition: all 0.7s linear 0.5s;
      -webkit-transition: all 0.7s linear 0.5s;
      transition: all 0.7s linear 0.5s;
    }
    .animate-team-member-3 {
        opacity: 1;
        margin-top: 120px;
        -moz-transition: all 0.7s linear 1s;
      -o-transition: all 0.7s linear 1s;
      -webkit-transition: all 0.7s linear 1s;
      transition: all 0.7s linear 1s;
    }
    /*
    .team-member-saying-desc-container {
        padding: 5%;
    }*/

    .our-team-saying-desc .overlay {
      border-bottom: 0px solid #2ecc71;
      border-left: 0px solid transparent;
      bottom: 1px;
      height: 0;
      opacity: .95;
      position: absolute;
      right: 1px;
      text-indent: -9999px;
      -moz-transition: all 0.5s ease-out;
      -o-transition: all 0.5s ease-out;
      -webkit-transition: all 0.5s ease-out;
      transition: all 0.5s ease-out;
      width: 0;
    }
    .our-team-saying-desc:hover .overlay {
      border-bottom: 70px solid #2ecc71;
      border-left: 70px solid transparent;
      -moz-transition: all 0.5s ease-out;
      -o-transition: all 0.5s ease-out;
      -webkit-transition: all 0.5s ease-out;
      transition: all 0.5s ease-out;
    }
    .overlay-content {
      position: absolute;
      right: 1px;
      bottom: 1px;
      opacity: 0;
       -moz-transition: all 0.3s ease-out;
      -o-transition: all 0.3s ease-out;
      -webkit-transition: all 0.3s ease-out;
      transition: all 0.3s ease-out;
    }

    .our-team-saying-desc:hover .overlay-content {
      opacity: 1;
      -moz-transition: all 1.5s ease-out;
      -o-transition: all 1.5s ease-out;
      -webkit-transition: all 1.5s ease-out;
      transition: all 1.5s ease-out;
    }
    .team-member-1 {
        margin-left: 5%;
        opacity: 0;
    }
    .animate-team-member-1 {
        opacity: 1;
        -moz-transition: all 0.7s linear 0.2s;
        -o-transition: all 0.7s linear 0.5s;
        -webkit-transition: all 0.7s linear 0.5s;
        transition: all 0.7s linear 0.5s;
    }


    .what-we-do-main-container {
        background-color: #1c3855;
    }
    .what-we-do-1 {
        text-align: center;
        margin: 0px auto;
    }
    .what-we-do-icon1256 {
      width: 50%;
      float: left;
    }
    .centered-what-we-do-desc {
        float: left;
        background-color: white;
        height: 100%;
        overflow: hidden;
        position: relative;
    }
    .what-we-do-2 {
      height: 400px;
    }
    .addBackground {
      background-color: #34495e;
      -moz-transition: background-color 0.3s linear 1s;
      -o-transition: background-color 0.3s linear 1s;
      -webkit-transition: background-color 0.3s linear 1s;
      transition: background-color 0.3s linear 1s;
    }


    .zoomOutCenteredDiv {
         webkit-box-shadow: 0 0 0 110px white;
        -moz-box-shadow: 0 0 0 110px white;
        box-shadow: 0 0 0 110px white;
    }
    .zoomInCenteredDiv {
         webkit-box-shadow: 0 0 0 0px white;
        -moz-box-shadow: 0 0 0 0px white;
        box-shadow: 0 0 0 0px white;

        -moz-transition: all 0.7s linear 0.2s;
        -o-transition: all 0.7s linear 0.5s;
        -webkit-transition: all 0.7s linear 0.5s;
        transition: all 0.7s linear 0.5s;
    }
    .what-we-do-space2 {
        margin-top: 150px;
        opacity: 0.5;
    }
    .what-we-do-icon34 {
      float: left;
      height: 100%;
    }
    .what-we-do-space3 {
        /*float: right;*/
         margin-top: 150px;
    }
    .what-we-do-icon {
        opacity: 0;
    }

    /* add delay in opacity when loading */ 
    .what-we-do-initial-loading {
        opacity: 0.5;
        -moz-transition: opacity 0.5s linear 1.5s;
        -o-transition: opacity 0.5s linear 1.5s;
        -webkit-transition: opacity 0.5s linear 1.5s;
        transition: opacity 0.5s linear 1.5s;
    }

    /* remove delay in opacity when click */ 
    .what-we-do-click-loading {
        -moz-transition: opacity 0.5s linear;
        -o-transition: opacity 0.5s linear;
        -webkit-transition: opacity 0.5s linear;
        transition: opacity 0.5s linear;   
    }

    .what-we-do-hidden-div {
        position: absolute;
        left: 0px; 
        right: 0px; 
        top: 0px; 
        width: 100%;
        height: 100%;
        /*opacity: 0;*/
        background-color: #34495e;
    }
    .be-happy-be-healthy-main-container {
        width: 100%;
        height: 84vh;
        background-image: url(img/child.jpg);
        background-size: 100% 100%;
        display: table;
    } 
    .be-happy-be-healthy-sub-container {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        font-family: "rock";
        font-size: 48px;
    }

    .ihealth-footer-main-container {
        background-color: #2ecc71;
        width: 100%;
        height: 130px;
        bottom: 0px;
    }
    .footer-common-list {
        float: left;
        padding: 0px;
        padding-right: 70px;
        margin: 0px;
    }
    .footer-updates {
        float: left;
    }
    .footer-common-list li {
        text-decoration: none;
        color: white;
        margin-bottom: 10px;
    }
    .ihealth-footer-sub-container {
        width: 440px;
        margin: 0px auto;
        padding-top: 20px;
    }
    .footer-social-icon-name {
        position: relative;
        top: -5px;
    }
    .footer-social-icon {
        width: 24px;
        height: 24px;
    }
    .get-update {
        color: white;
        margin-bottom: 10px;
    }

    /*  animate what we do container */ 

    /* what we do default div */
    .what-we-do-heading {
        text-align: center;
        font-size: 48px;
        font-family: "rock";
        color: #55afaf;
    }
    .what-we-do-sub-heading {
        text-align: center;
        font-size: 24px;
        font-family: "rock";
        color: #333333;
        margin-bottom: 20px;
    }
    .what-we-do-individual-headingividual-desc-container {
        width: 300px;
        margin-right: 35px;
        float: left;
    }
    .what-we-do-individual-heading {
        font-size: 24px;
        font-family: "rock";
        color: #333333;
        margin-bottom: 10px;
    }

    .what-we-do-sub-container-default {
        height: 100%;
        opacity: 0;
        -moz-transition: opacity 0.5s linear 0.5s;
        -o-transition: opacity 0.5s linear 0.5s;
        -webkit-transition: opacity 0.5s linear 0.5s;
        transition: opacity 0.5s linear 0.5s;
        display: table;
    }
    .what-we-do-sub-container-default-animation {
        opacity: 1;
        -moz-transition: opacity 0.5s linear 0.5s;
        -o-transition: opacity 0.5s linear 0.5s;
        -webkit-transition: opacity 0.5s linear 0.5s;
        transition: opacity 0.5s linear 0.5s;
    }

    /* for 1st and 2nd icons */
    #what-we-do-icon1, #what-we-do-icon2 {
        width: 100%;
        height: 0%;
        overflow: hidden;
        -moz-transition: height 0.3s linear;
        -o-transition: height 0.3s linear;
        -webkit-transition: height 0.3s linear;
        transition: height 0.3s linear;
    }


    .showCurrentDiv.UpDownToggleIcon1Desc {
        height: 100% !important;
         -moz-transition: height 0.3s linear;
        -o-transition: height 0.3s linear;
        -webkit-transition: height 0.3s linear;
        transition: height 0.3s linear;
    }

    /* for 3rd icon */
    #what-we-do-icon3 {
        overflow: hidden;
        left: -100%;
        -moz-transition: left 0.3s linear;
        -o-transition: left 0.3s linear;
        -webkit-transition: left 0.3s linear;
        transition: left 0.3s linear;
    }

    .showCurrentDiv.UpDownToggleIcon3Desc {
        left: 0% !important;
         -moz-transition: left 0.3s linear;
        -o-transition: left 0.3s linear;
        -webkit-transition: left 0.3s linear;
        transition: left 0.3s linear;
    }

    /* for 4th icon */
    #what-we-do-icon4 {
        overflow: hidden;
        left: 100%;
        -moz-transition: left 0.3s linear;
        -o-transition: left 0.3s linear;
        -webkit-transition: left 0.3s linear;
        transition: left 0.3s linear;
    }
    .showCurrentDiv.UpDownToggleIcon4Desc {
        left: 0% !important;
        -moz-transition: left 0.3s linear;
        -o-transition: left 0.3s linear;
        -webkit-transition: left 0.3s linear;
        transition: left 0.3s linear;
    }


    /* for 5th and 6th icons */
    #what-we-do-icon5, #what-we-do-icon6 {
        overflow: hidden;
        top: 100%;
        -moz-transition: top 0.3s linear;
        -o-transition: top 0.3s linear;
        -webkit-transition: top 0.3s linear;
        transition: top 0.3s linear;
    }
    .showCurrentDiv.UpDownToggleIcon56Desc {
        top: 0% !important;
         -moz-transition: top 0.3s linear;
        -o-transition: top 0.3s linear;
        -webkit-transition: top 0.3s linear;
        transition: top 0.3s linear;
    }


    /* close current animation tab */
    .close-current-tab {
        position: absolute;
        right: 10px;
        top: 10px;
    }


    /* second slideshow animation */

    .health-slideshow-container {
        width: 100%;
        height: 85vh    ;
        overflow: hidden;
        position: relative;
    }
    .common-slide-desc {
        width: 100%;
        height: 100%;
        float: left;
        /*opacity: 0;
        -moz-transition: opacity 0.5s ease-out 0.5s;
        -o-transition: opacity 0.5s ease-out 0.5s;  
        -webkit-transition: opacity 0.5s ease-out 0.5s;
        transition: opacity 0.5s ease-out 0.5s;*/
        display: none;
        position: absolute;
        left: 0px;
    }
    #show-slide1-container {
        /*opacity: 1;*/
        display: block;
    }
    .carousel {
        height: auto;
    }
    .health-slide-img {
        float: left;
        width: 30%;
        margin-left: 32px;
    }
    .health-slide-img-desc {
        float: left;
        width: 60%;
        margin-left: 5%;
    }
    .health-slide-img img {
        width: 100%;
    }
    .health-slide-heading {
        font-size: 48px;
        color: #31d4e7;
        margin-bottom: 50px;
        padding-left:32px;
        font-family: "rock";
    }

    /* add arrow to second slideshow */
    .slide-arrow-down {
      width: 0; 
      height: 0; 
      border-left: 10px solid transparent;
      border-right: 10px solid transparent;
      border-top: 10px solid #31D4E7;
      position: relative;
      left: 9%;
      -moz-transition: left 0.5s ease-out;
      -o-transition: left 0.5s ease-out;  
      -webkit-transition: left 0.5s ease-out;
      transition: left 0.5s ease-out;
    }

    .what-our-team-saying-for-future {
        height: 8vh;
        background: #2ecc71;
        text-align: center;
        color: #FFFFFF;
        padding-top: 16px;
        font-size: 20px;
        font-family: "Proxima Nova Regular";
    }

    .slide-cintent1 {
        font-size:18px;  
        line-height:30px;
        font-family: 'Proxima Nova Regular';
    }
    .slide-cintent2 {
        font-size:24px;
        font-family: 'rock';
        line-height: 36px;
    }
    .slide-cintent3 {
        font-size:18px; 
        line-height:30px; 
        padding-top:10px;
        font-family: 'Proxima Nova Regular';
    }
    .overlay-content img {
        width: 20px;
        height: 20px;
        margin-bottom: 10px;
        margin-right: 10px;
    }
    .about-health-heading1 {
        font-size: 36px;
        color: white;
        font-family: "rock";
    }
    .about-health-heading2 {
        font-size: 24px;
        color: #a4a4a4;
        font-family: "rock";
    }
    .individual-part-icon span {
        font-size: 20px;
        font-family: "rock";
        color: white;
        float: left;
    }
    .individual-part-icon-desc {
        font-family: 'Proxima Nova Regular';
        color: #969fa8;
        font-size: 14px;
    }
    .individual-part {
        width: 282px;
        background-color: #2c3e50;
        float: left;
        margin-right: 20px;
        margin-top: 20px;
        height: 122px;
        padding: 10px;
    }
    .individual-part-icon span img {
        width: 20px;
        margin-right: 10px;
    }
    .individual-part-icon {
        margin-bottom: 10px;
    }
    .what-we-do-padding {
        padding-left: 40px;
    }
    .what-we-do-individual-desc-container {
        float: left;
        width: 33%;
        padding: 5%;
        text-align: center;
    }
    .what-we-do-default-vertical-line {
        border-right: 1px solid rgb(229, 229, 229);
        float: left;
        margin-top: 4%;
    }
    .what-we-do-individual-desc {
        font-size: 16px;
        font-family: 'Proxima Nova Regular';
        color: #969fa8;
    }
    .default-align-middle {
        display: table-cell;
        vertical-align: middle;
    }

    </style>
    <link rel="stylesheet" type="text/css" href="../../fonts/rock/font.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/proxima-nova-rg/style.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome/css/font-awesome.min.css">
    <div id="layout">
        <header class="site-header">
            <h1 class="logo">
                <img src="../img/logo.png">
            </h1>
            <nav class="site-nav">
                <a href="">Who are we?</a>
                <a href="">Contact Us</a>
                <a class="login-link" href="#">Login</a>
            </nav>
        </header>
        <nav class="carousel">
            <div class="items">
                <div class="item fade-in" data-id="eye"></div>
                <div class="item" data-id="ear"></div>
                <div class="item" data-id="teeth"></div>
                <div class="item" data-id="lungs"></div>
                <div class="item" data-id="brain"></div>
            </div>

            <div class="index slide-icon-container">
                <span class="show-slide1-container" data-icon-num="0" data-id="eye"></span>
                <span class="show-slide2-container" data-icon-num="1" data-id="ear"></span>
                <span class="show-slide3-container" data-icon-num="2" data-id="teeth"></span>
                <span class="show-slide4-container" data-icon-num="3" data-id="lungs"></span>
                <span class="show-slide5-container" data-icon-num="4" data-id="brain"></span>
            </div>
            <div class="slide-arrow-down"></div>
            <div class="health-slideshow-container">

                <div class="common-slide-desc" id="show-slide1-container">
                    <div class="health-slide-heading">
                        The twinkle in your child's eye... 
                    </div>
                    <div class="clearfix">
                        <div class="health-slide-img"><img src="img/slideshow/eye.jpg" /></div>
                        <div class="health-slide-img-desc">
                            <div>
                                <div class="slide-cintent1">Your child's eyes see a beautiful world. However, modern day education and the new age kid (what with all the hours in front of all kinds of screens) make for ever decreasing eye-health. 
                                </div>
                                <div class="slide-cintent2">"Surveys show that 10-15 in every 100 children have vision defects and 70% of these children are unaware of their abnormality."</div>
                                <div class="slide-cintent3"> We truly understand the required eye-care for your cild. In entirely non-invasive and non-mediatric fashion, we check for all the essentials in quick time. We all wish to see the world through a child's eyes, don't we?</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="common-slide-desc" id="show-slide2-container">
                    <div class="health-slide-heading">
                         The sounds of silence...
                    </div>
                    <div class="clearfix">
                        <div class="health-slide-img"><img src="img/slideshow/ear.jpg" /></div>
                        <div class="health-slide-img-desc">
                            <div>
                                <div class="slide-cintent1">Hearing disabilities are often the silent killers. In a child, these are often the most easy to neglect and consequently the most difficult to identify or cure. When was the last time you even wondered about how your child's hearing abilities are doing these days? 
                                </div>
                                <div class="slide-cintent2">""At least 12-14% children have hard wax or ear infection or drainage, all of which could affect their hearing abilities."</div>
                                <div class="slide-cintent3"> We truly understand the required eye-care for your cild. In entirely non-invasive and non-mediatric fashion, we check for all the essentials in quick time. We all wish to see the world through a child's eyes, don't we?</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="common-slide-desc" id="show-slide3-container">
                    <div class="health-slide-heading">
                        The twinkle in your child's eye... 
                    </div>
                    <div class="clearfix">
                        <div class="health-slide-img"><img src="img/slideshow/teeth.jpg" /></div>
                        <div class="health-slide-img-desc">
                            <div>
                                <div class="slide-cintent1">Your child's eyes see a beautiful world. However, modern day education and the new age kid (what with all the hours in front of all kinds of screens) make for ever decreasing eye-health. 
                                </div>
                                <div class="slide-cintent2">"Surveys show that 10-15 in every 100 children have vision defects and 70% of these children are unaware of their abnormality."</div>
                                <div class="slide-cintent3"> We truly understand the required eye-care for your cild. In entirely non-invasive and non-mediatric fashion, we check for all the essentials in quick time. We all wish to see the world through a child's eyes, don't we?</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="common-slide-desc" id="show-slide4-container">
                    <div class="health-slide-heading">
                        The twinkle in your child's eye... 
                    </div>
                    <div class="clearfix">
                        <div class="health-slide-img"><img src="img/slideshow/lungs.jpg" /></div>
                        <div class="health-slide-img-desc">
                            <div>
                                <div class="slide-cintent2">Your child's eyes see a beautiful world. However, modern day education and the new age kid (what with all the hours in front of all kinds of screens) make for ever decreasing eye-health. 
                                </div>
                                <div class="slide-cintent2">"Surveys show that 10-15 in every 100 children have vision defects and 70% of these children are unaware of their abnormality."</div>
                                <div class="slide-cintent3"> We truly understand the required eye-care for your cild. In entirely non-invasive and non-mediatric fashion, we check for all the essentials in quick time. We all wish to see the world through a child's eyes, don't we?</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="common-slide-desc" id="show-slide5-container">
                    <div class="health-slide-heading">
                        The twinkle in your child's eye... 
                    </div>
                    <div class="clearfix">
                        <div class="health-slide-img"><img src="img/slideshow/teeth.jpg" /></div>
                        <div class="health-slide-img-desc">
                            <div>
                                <div class="slide-cintent1">Your child's eyes see a beautiful world. However, modern day education and the new age kid (what with all the hours in front of all kinds of screens) make for ever decreasing eye-health. 
                                </div>
                                <div class="slide-cintent2">"Surveys show that 10-15 in every 100 children have vision defects and 70% of these children are unaware of their abnormality."</div>
                                <div class="slide-cintent3"> We truly understand the required eye-care for your cild. In entirely non-invasive and non-mediatric fashion, we check for all the essentials in quick time. We all wish to see the world through a child's eyes, don't we?</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </nav>


        <div class="our-team-saying-desc-container">
            <div class="our-team-saying-heading">
                <div class="rounded-circle">
                    <img src="img/svgfiles/plus.svg" />
                </div>
                <div class="what-our-team-saying-for-future">We strive for healthy next generation! </div>
            </div>
            <div class="our-team-saying-desc-main-container">  
                <div class="our-team-saying-individual-desc-container clearfix">

                    <div class="what-our-team-saying-heading">What they are saying...</div>

                    <div class="our-team-saying-desc team-member-1">  
                        <div class="team-member-saying-desc-container">
                            I take great pleasure in mentoring the teams at i-health. Being a parent, my utmost priority pleasure in at i-health Being a parent, i-health Being a my utmost priority pleasure Being a parent, my utmost towards... 
                        </div>

                        <div class="overlay"></div>
                        <div class="overlay-content">
                           <img src="img/svgfiles/plus_circle.svg" />
                        </div>
                    </div>
                    <div class="our-team-saying-desc team-member-2">  
                        <div class="team-member-saying-desc-container">
                            I take great pleasure in mentoring the teams at i-health. Being a parent, my utmost priority pleasure in at i-health Being a parent, my utmost priority pleasure Being a parent,i-health Being a my utmost towards... 
                        </div>
                        <div class="overlay"></div>
                        <div class="overlay-content">
                           <img src="img/svgfiles/plus_circle.svg" />
                        </div>
                    </div>
                    <div class="our-team-saying-desc team-member-3">  
                            <div class="team-member-saying-desc-container">
                            I take great pleasure in mentoring the teams at i-health. Being a parent, my utmost priority pleasure in at i-health Being a parent, my utmost priority pleasure Being a parent, my utmost i-health Being a towards... 
                        </div>
                        <div class="overlay"></div>
                        <div class="overlay-content">
                           <img src="img/svgfiles/plus_circle.svg" />
                        </div>
                    </div>
                </div>
                <div class="addAnimateTraingular"></div>
            </div>
        </div>

        <div class="what-we-do-main-container">
            <div class="what-we-do-sub-container">
                <div class="what-we-do-1 clearfix">
                  <div class="what-we-do-icon1256">
                    <img class="what-we-do-space1 what-we-do-icon" data-id="what-we-do-icon1" src="img/parent.png" />
                  </div>
                  <div class="what-we-do-icon1256">
                    <img class="what-we-do-icon" data-id="what-we-do-icon2" src="img/school.png" />
                  </div>
                </div>

                <div class="what-we-do-2 clearfix">
                    <div class="what-we-do-icon34">
                      <img class="what-we-do-space2 what-we-do-icon" data-id="what-we-do-icon3" src="img/success.png" />
                    </div>
                    <div class="centered-what-we-do-desc zoomOutCenteredDiv">
                        <div class="what-we-do-sub-container-default">
                            <div class="default-align-middle">
                            <div class="what-we-do-heading">What we do</div>
                            <div class="what-we-do-sub-heading">Lorem Ispem is simpy dummy text of the<br> printing and typesetting industry.</div>
                            <div class="clearfix">
                                <div class="what-we-do-individual-desc-container">
                                    <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                    <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry Lorem Ispem has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</div>
                                </div>
                                <div class="what-we-do-default-vertical-line"></div>
                                <div class="what-we-do-individual-desc-container">
                                    <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                    <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry Lorem Ispem has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</div>
                                </div>
                                <div class="what-we-do-default-vertical-line"></div>
                                <div class="what-we-do-individual-desc-container">
                                    <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                    <div class="what-we-do-individual-desc">When an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ispem is simpy dummy text of the printing and typesetting industry Lorem Ispem has</div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="what-we-do-hidden-div UpDownToggleIcon1Desc" id="what-we-do-icon1"> 
                                <div class="what-we-do-padding">
                                <img  class="close-current-tab" src="img/fancy_closebox.png" />
                                <div class="about-health-heading1">
                                    Health is not valued till<br>sickness comes.
                                </div>
                                <div class="about-health-heading2">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </div>
                                <div class="all-parts clearfix">
                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/eye.svg" /></span><span>Eyes</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/ear.svg" /></span><span>Ears</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/brain.svg" /></span><span>Brain</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Standard dummy text ever since the 1550s, when an unknown printer took a gallery of type and ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/teeth.svg" /></span><span>Teeth</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Standard dummy text ever since the 1550s, when an unknown printer took a gallery of type and ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/lungs.svg" /></span><span>Lungs</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="what-we-do-hidden-div UpDownToggleIcon1Desc" id="what-we-do-icon2"> 
                                <div class="what-we-do-padding">
                                <img  class="close-current-tab" src="img/fancy_closebox.png" />
                                <div class="about-health-heading1">
                                    Health is not valued till<br>sickness comes.
                                </div>
                                <div class="about-health-heading2">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </div>
                                <div class="all-parts clearfix">
                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/eye.svg" /></span><span>Eyes</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/ear.svg" /></span><span>Ears</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/brain.svg" /></span><span>Brain</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Standard dummy text ever since the 1550s, when an unknown printer took a gallery of type and ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/teeth.svg" /></span><span>Teeth</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Standard dummy text ever since the 1550s, when an unknown printer took a gallery of type and ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/lungs.svg" /></span><span>Lungs</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="what-we-do-hidden-div UpDownToggleIcon3Desc" id="what-we-do-icon3">
                            <div class="what-we-do-padding">
                                <img  class="close-current-tab" src="img/fancy_closebox.png" />
                                <div class="about-health-heading1">
                                    Health is not valued till<br>sickness comes.
                                </div>
                                <div class="about-health-heading2">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </div>
                                <div class="all-parts clearfix">
                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/eye.svg" /></span><span>Eyes</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/ear.svg" /></span><span>Ears</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/brain.svg" /></span><span>Brain</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Standard dummy text ever since the 1550s, when an unknown printer took a gallery of type and ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/teeth.svg" /></span><span>Teeth</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Standard dummy text ever since the 1550s, when an unknown printer took a gallery of type and ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/lungs.svg" /></span><span>Lungs</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="what-we-do-hidden-div UpDownToggleIcon4Desc" id="what-we-do-icon4"> 
                                <div class="what-we-do-padding">
                                <img  class="close-current-tab" src="img/fancy_closebox.png" />
                                <div class="about-health-heading1">
                                    Health is not valued till<br>sickness comes.
                                </div>
                                <div class="about-health-heading2">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </div>
                                <div class="all-parts clearfix">
                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/eye.svg" /></span><span>Eyes</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/ear.svg" /></span><span>Ears</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/brain.svg" /></span><span>Brain</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Standard dummy text ever since the 1550s, when an unknown printer took a gallery of type and ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/teeth.svg" /></span><span>Teeth</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Standard dummy text ever since the 1550s, when an unknown printer took a gallery of type and ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/lungs.svg" /></span><span>Lungs</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="what-we-do-hidden-div UpDownToggleIcon56Desc" id="what-we-do-icon5"> 
                                <div class="what-we-do-padding">
                                <img  class="close-current-tab" src="img/fancy_closebox.png" />
                                <div class="about-health-heading1">
                                    Health is not valued till<br>sickness comes.
                                </div>
                                <div class="about-health-heading2">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </div>
                                <div class="all-parts clearfix">
                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/eye.svg" /></span><span>Eyes</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/ear.svg" /></span><span>Ears</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/brain.svg" /></span><span>Brain</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Standard dummy text ever since the 1550s, when an unknown printer took a gallery of type and ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/teeth.svg" /></span><span>Teeth</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Standard dummy text ever since the 1550s, when an unknown printer took a gallery of type and ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/lungs.svg" /></span><span>Lungs</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="what-we-do-hidden-div UpDownToggleIcon56Desc" id="what-we-do-icon6"> 
                                <div class="what-we-do-padding">
                                <img  class="close-current-tab" src="img/fancy_closebox.png" />
                                <div class="about-health-heading1">
                                    Health is not valued till<br>sickness comes.
                                </div>
                                <div class="about-health-heading2">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </div>
                                <div class="all-parts clearfix">
                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/eye.svg" /></span><span>Eyes</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/ear.svg" /></span><span>Ears</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/brain.svg" /></span><span>Brain</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Standard dummy text ever since the 1550s, when an unknown printer took a gallery of type and ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/teeth.svg" /></span><span>Teeth</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Standard dummy text ever since the 1550s, when an unknown printer took a gallery of type and ...
                                        </div>
                                    </div>

                                    <div class="individual-part">
                                        <div class="individual-part-icon clearfix">
                                            <span><img src="../img/svgfiles/lungs.svg" /></span><span>Lungs</span>
                                        </div>
                                        <div class="individual-part-icon-desc">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ...
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="what-we-do-icon34">
                      <img class="what-we-do-space3 what-we-do-icon" data-id="what-we-do-icon4" src="img/nurse.png" />
                    </div>
                </div>

                <div class="what-we-do-1 clearfix">
                  <div class="what-we-do-icon1256">
                    <img class="what-we-do-space1 what-we-do-icon" data-id="what-we-do-icon5" src="img/report.png" />
                  </div>
                  <div class="what-we-do-icon1256">
                    <img class="what-we-do-icon" data-id="what-we-do-icon6" src="img/school.png" />
                  </div>
                </div>

            </div>
        </div>

        <!-- login popup start -->
        <div class="login-popup-content" id="login-popup" style="display:none;">
            <div class="login-container" id="login-container">
                <div class="login-logo-container">
                   <div>
                        <img src="<?php echo base_url('/img/web-images/logo.png')?>" alt="logo" class="login-img">
                    </div>
                </div>
                <div class="login-form">
                    <div id="logindiv"> 
                        <p><input type="name" class="form-field" placeholder="User ID"></p>
                        <p><input type="password" class="form-field" placeholder="Password"></p>
                        <p id="lower"><input type="button" value="SIGN IN" class="submit-button"></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- login popup end -->

        <div class="be-happy-be-healthy-main-container">
            <div class="be-happy-be-healthy-sub-container">
                Be Healthy. Be Happy.
            </div>
        </div>

        <footer class="ihealth-footer-main-container">
            <div class="ihealth-footer-sub-container clearfix">
                <ul class="footer-common-list">
                    <li>About us</li>
                    <li>e-Health Care Team</li>
                    <li>Contact details</li>
                </ul>
                <ul class="footer-common-list">
                    <li>Parent</li>
                    <li>School</li>
                    <li>Nurse</li>
                    <li>Doctors</li>
                </ul>
                <ul class="footer-common-list">
                    <li><span><img class="footer-social-icon" src="../img/social-icons/facebook.png" /></span><span class="footer-social-icon-name">Facebook</span></li>
                    <li><span><img class="footer-social-icon" src="../img/social-icons/twitter.png" /></span><span class="footer-social-icon-name">Twitter</span></li>
                    <li><span><img class="footer-social-icon" src="../img/social-icons/gp.png" /></span><span class="footer-social-icon-name">Google</span></li>
                </ul>

            </div>
        </footer>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.login-link').bind('click', function(e) {
                $.fancybox({ 
                         type:'inline',
                        content:$("#login-popup").html()
                 }); 
             });

            $(".fancybox-inner input.submit-button").on("click",function(){
                   alert('123');
            });

            function setWhatWeDoContainerDimentions () {
                //set width
                var get_what_we_do_icon_width = 95;
                var getLeftRightIconWidth = get_what_we_do_icon_width * 2;
                var setCentered_what_wedo_width = $(window).width() - getLeftRightIconWidth;
                $(".centered-what-we-do-desc, .what-we-do-1").css("width",setCentered_what_wedo_width);

                //set height
                var TopBottomHeight = 110;
                var getTopBottomHeight = TopBottomHeight * 2;
                var setCentered_what_wedo_height = $(window).height() - getTopBottomHeight;
                $(".what-we-do-2").css("height",setCentered_what_wedo_height);

                //set content in middle of box
                //var getContentHeight = $(".what-we-do-padding").height();
                var getContentHeight = 396;
                var setMarginTop = (setCentered_what_wedo_height - 396)/2;
                $(".what-we-do-padding").css("margin-top", setMarginTop);

                //set height to vertical line for default opened div
                var getDefaultContentHeight = $(".what-we-do-individual-desc-container").height() + 30;
                $(".what-we-do-default-vertical-line").height(getDefaultContentHeight);


            }
            setWhatWeDoContainerDimentions();
            $(window).resize(function() {
                setWhatWeDoContainerDimentions();
            });

            $(window).scroll(function() {
                var getWindowHeight = $(window).height();
                var getPlusHeight = $(".our-team-saying-heading").height();
                var getTotalScrollHeight = getWindowHeight + getPlusHeight + 200;
                var scrollTop = $(window).scrollTop();

                var what_we_do_animate_scroll = getWindowHeight * 2 + 200;

                //animahe what what our tean saying container
                if(scrollTop >= getTotalScrollHeight) {
                    function animateTraingular() {
                        var borderRightWidth = $(window).width() + 200;
                        var borderBottomWidth = $(window).height() - 140;
                        $(".addAnimateTraingular").css("border-right-width", borderRightWidth);
                        $(".addAnimateTraingular").css("border-bottom-width", borderBottomWidth);    
                    }
                    animateTraingular();
                    $(window).resize(function() {
                        animateTraingular();
                    });
                    

                    $(".team-member-1").addClass("animate-team-member-1");
                    $(".team-member-2").addClass("animate-team-member-2");
                    $(".team-member-3").addClass("animate-team-member-3");
                }

                //animahe what what we do container
                if(scrollTop >= what_we_do_animate_scroll) {
                    $(".centered-what-we-do-desc").addClass("zoomInCenteredDiv");
                    $(".what-we-do-sub-container-default").addClass("what-we-do-sub-container-default-animation");
                    $(".what-we-do-icon").addClass("what-we-do-initial-loading");
                }            

                //animate footer container
                var getBodyScrollHeight = $('#layout')[0].scrollHeight;
                var animateFooterScroll = getBodyScrollHeight - getWindowHeight - 150;
                if(scrollTop >= animateFooterScroll) {
                    $(".ihealth-footer-main-container").slideDown(500);
                }
                else {
                    $(".ihealth-footer-main-container").slideUp(500);
                }

            });

            $(".what-we-do-icon").click(function() {

                $(".what-we-do-icon").css("opacity","0.5");

                //for removing delay in opacity when we click
                $(".what-we-do-icon").addClass("what-we-do-click-loading");

                $(this).css("opacity","1");

                var getcurrentId = $(this).attr("data-id");
            
                //show animations for current div
   
                var getSelectedDataId = $(".selected-icon").attr("data-id");
                $("#" + getSelectedDataId).removeClass("showCurrentDiv");
               // $(".selected-icon").removeClass("selected-icon");  

                if($(this).hasClass("selected-icon")) {
                     $(".selected-icon").removeClass("selected-icon");
                     $(this).addClass("selected-icon");
                }
                else {
                    $(".selected-icon").removeClass("selected-icon");
                }

                if($(this).hasClass("selected-icon")) {
                  var getSelectedDataId = $(".selected-icon").attr("data-id");
                  $("#" + getSelectedDataId).removeClass("showCurrentDiv");
                  $(this).removeClass("selected-icon")
                  $(this).css("opacity","0.5");
                }
                else {
                    $(this).addClass("selected-icon");
                    var getSelectedDataId = $(".selected-icon").attr("data-id");
                    //$("#" + getSelectedDataId).delay(5000).addClass("showCurrentDiv");
                    $("#" + getSelectedDataId).delay(1000).queue(function(){
                        $(this).addClass("showCurrentDiv");
                        $(this).dequeue();
                    });
                }

                //add background-color  for current icon container
                $(".what-we-do-icon1256, .what-we-do-icon34").removeClass("addBackground");
                $(".selected-icon").parent().addClass("addBackground");
                
            });

            
            $(".close-current-tab").click(function() {
                $(this).parent().parent().removeClass("showCurrentDiv");
                $(".selected-icon").removeClass("selected-icon")
                //remove background-color  for all icon containers
                $(".what-we-do-icon1256, .what-we-do-icon34").removeClass("addBackground");
                $(".what-we-do-icon").css("opacity","0.5");
            });

            $(".slide-icon-container span").click(function(e) {

                //set offset to top
                var class_name = e.currentTarget.className;
                $('html,body').animate({
                        scrollTop: $("."+class_name).offset().top},
                1000);

                //add fade in and fade out for next slides
                var getCurrentIcon = $(this).attr("class");
                $(".common-slide-desc").fadeOut(500);
                $("#" + getCurrentIcon).fadeIn(1000);

                var getIconNum = $(this).attr("data-icon-num") * 20;
                var slideToLeft = (9 + getIconNum) + "%";
                $(".slide-arrow-down").css("left",slideToLeft);
            });


        });
    $(".rounded-circle").click(function(){
       $('html,body').animate({
            scrollTop: $(".our-team-saying-desc-main-container").offset().top},
            1000);
    })
    </script>


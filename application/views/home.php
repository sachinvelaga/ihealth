    <style type="text/css">
    .our-team-saying-heading {
        width: 100%;
        height: 137px;
        background: #2ecc71;
        text-align: center;
        padding-top: 1%;
        color: #FFFFFF;    
    }
    .rounded-circle {
        width: 100px;
        border-radius: 100%;
        background-color: green;
        height: 100px;
        margin: 0px auto;
    }
    .rounded-circle img {
        margin-top: 30px;
    }
    .our-team-saying-desc-main-container {
        width: 100%;
        height: 100vh;
        background: url(img/doct.png) no-repeat 100%;
        background-size: cover;
        display: table;
        position: relative;
        overflow: hidden;
    }
    .what-our-team-saying-heading {
        color: #2ecc71;
        font-size: 48px;
        padding-bottom: 2%;
        padding-left: 5%;   
    }
    .our-team-saying-desc {
        width: 250px;
        border: 2px solid #2ecc71;
        font-size: 14px;
        float: left;
        margin-right: 5%;
        background-color: white;
        padding: 3%;
        position: relative;
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
      border-bottom: 100px solid #2ecc71;
      border-left: 100px solid transparent;
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
      background-color: #1C381E;
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
        background-color: #1C381E;
    }
    .be-happy-be-healthy-main-container {
        width: 100%;
        height: 84vh;
        background-image: url(img/child.jpg);
        background-size: 100% 100%;
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
    }
    .footer-common-list li {
        text-decoration: none;
        color: white;
        margin-bottom: 10px;
    }
    .ihealth-footer-sub-container {
        width: 700px;
        margin: 0px auto;
    }

    /*  animate what we do container */ 

    /* what we do default div */
    .what-we-do-heading {
        text-align: center;
        font-size: 25px;
        color: #55afaf;
    }
    .what-we-do-sub-heading {
        text-align: center;
        font-size: 20px;
        color: #333333;
        margin-bottom: 20px;
    }
    .what-we-do-individual-headingividual-desc-container {
        width: 300px;
        margin-right: 35px;
        float: left;
    }
    .what-we-do-individual-heading {
        font-size: 20px;
        color: #333333;
        margin-bottom: 10px;
    }

    .what-we-do-sub-container-default {
        height: 100%;
        padding: 30px;
        opacity: 0;
        -moz-transition: opacity 0.5s linear 0.5s;
        -o-transition: opacity 0.5s linear 0.5s;
        -webkit-transition: opacity 0.5s linear 0.5s;
        transition: opacity 0.5s linear 0.5s;
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
        width: 0%;
        height: 100%;
        overflow: hidden;
        -moz-transition: width 0.3s linear;
        -o-transition: width 0.3s linear;
        -webkit-transition: width 0.3s linear;
        transition: width 0.3s linear;
    }


    .showCurrentDiv.UpDownToggleIcon3Desc {
        width: 100% !important;
         -moz-transition: width 0.3s linear;
        -o-transition: width 0.3s linear;
        -webkit-transition: width 0.3s linear;
        transition: width 0.3s linear;
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
        height: 500px;
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

    </style>
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
                                <div style="font-size:18px;  line-height:30px;">Your child's eyes see a beautiful world. However, modern day education and the new age kid (what with all the hours in front of all kinds of screens) make for ever decreasing eye-health. 
                                </div>
                                <div style="padding-top: 20px;font-size:24px;">"Surveys show that 10-15 in every 100 children have vision defects and 70% of these children are unaware of their abnormality."</div>
                                <div style="font-size:18px; line-height:30px; padding-top:10px;"> We truly understand the required eye-care for your cild. In entirely non-invasive and non-mediatric fashion, we check for all the essentials in quick time. We all wish to see the world through a child's eyes, don't we?</div>
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
                                <div style="font-size:18px;  line-height:30px;">Hearing disabilities are often the silent killers. In a child, these are often the most easy to neglect and consequently the most difficult to identify or cure. When was the last time you even wondered about how your child's hearing abilities are doing these days? 
                                </div>
                                <div style="padding-top: 20px;font-size:24px;">""At least 12-14% children have hard wax or ear infection or drainage, all of which could affect their hearing abilities."</div>
                                <div style="font-size:18px; line-height:30px; padding-top:10px;"> We truly understand the required eye-care for your cild. In entirely non-invasive and non-mediatric fashion, we check for all the essentials in quick time. We all wish to see the world through a child's eyes, don't we?</div>
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
                                <div style="font-size:18px;  line-height:30px;">Your child's eyes see a beautiful world. However, modern day education and the new age kid (what with all the hours in front of all kinds of screens) make for ever decreasing eye-health. 
                                </div>
                                <div style="padding-top: 20px;font-size:24px;">"Surveys show that 10-15 in every 100 children have vision defects and 70% of these children are unaware of their abnormality."</div>
                                <div style="font-size:18px; line-height:30px; padding-top:10px;"> We truly understand the required eye-care for your cild. In entirely non-invasive and non-mediatric fashion, we check for all the essentials in quick time. We all wish to see the world through a child's eyes, don't we?</div>
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
                                <div style="font-size:18px;  line-height:30px;">Your child's eyes see a beautiful world. However, modern day education and the new age kid (what with all the hours in front of all kinds of screens) make for ever decreasing eye-health. 
                                </div>
                                <div style="padding-top: 20px;font-size:24px;">"Surveys show that 10-15 in every 100 children have vision defects and 70% of these children are unaware of their abnormality."</div>
                                <div style="font-size:18px; line-height:30px; padding-top:10px;"> We truly understand the required eye-care for your cild. In entirely non-invasive and non-mediatric fashion, we check for all the essentials in quick time. We all wish to see the world through a child's eyes, don't we?</div>
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
                                <div style="font-size:18px;  line-height:30px;">Your child's eyes see a beautiful world. However, modern day education and the new age kid (what with all the hours in front of all kinds of screens) make for ever decreasing eye-health. 
                                </div>
                                <div style="padding-top: 20px;font-size:24px;">"Surveys show that 10-15 in every 100 children have vision defects and 70% of these children are unaware of their abnormality."</div>
                                <div style="font-size:18px; line-height:30px; padding-top:10px;"> We truly understand the required eye-care for your cild. In entirely non-invasive and non-mediatric fashion, we check for all the essentials in quick time. We all wish to see the world through a child's eyes, don't we?</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </nav>


        <div class="our-team-saying-desc-container">
            <div class="our-team-saying-heading">
                <div class="rounded-circle">
                    <img src="http://www.grsno.org/iconfile/update_empty.gif" />
                </div>
            </div>
            <div class="our-team-saying-desc-main-container">  
                <div class="our-team-saying-individual-desc-container clearfix">

                    <div class="what-our-team-saying-heading">what our team saying...</div>

                    <div class="our-team-saying-desc team-member-1">  
                        <div class="team-member-saying-desc-container">
                            I take great pleasure in mentoring the teams at i-health. Being a parent, my utmost priority towards my child is her health and wellbeing. In spite of the acquaintance with medical practices, I fear to miss at times towards monitoring of my child vitals on regular basis. In present system, the children are exposed to many threats which may have adverse effect on healthy being at later stages of life. Children are... 
                        </div>

                        <div class="overlay"></div>
                        <div class="overlay-content">
                           abc info
                        </div>
                    </div>
                    <div class="our-team-saying-desc team-member-2">  
                        <div class="team-member-saying-desc-container">
                            It is a matter of pride for me, to be part of this great initiative for preventive medication for children. Ever so often, we come across paediatric patients in a very advanced stage of abnormality; those that could have easily been diagnosed and cured with minimal pain and effort, at a much earlier stage. The essential difficulty with paediatrics is that children don't recognize the abnormality...
                        </div>
                        <div class="overlay"></div>
                        <div class="overlay-content">
                           abc info
                        </div>
                    </div>
                    <div class="our-team-saying-desc team-member-3">  
                            <div class="team-member-saying-desc-container">
                            We've all heard the saying, "Prevention is better than cure". Nevertheless, not many of us really act accordingly. One example lies in the way we raise our children in the modern day. Be it due to a lack of awareness or constraints of time or the unavailability of appropriate technological or medical solutions, we constantly jeopardize the well-being of our children. And that too, in times when we ought....
                        </div>
                        <div class="overlay"></div>
                        <div class="overlay-content">
                           abc info
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
                            <div class="what-we-do-heading">What we do</div>
                            <div class="what-we-do-sub-heading">Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                            <div>
                                <div class="what-we-do-individual-desc-container">
                                    <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                    <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                </div>
                                <div class="what-we-do-individual-desc-container">
                                    <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                    <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                </div>
                                <div class="what-we-do-individual-desc-container">
                                    <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                    <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                </div>
                            </div>
                        </div>

                        <div class="what-we-do-hidden-div UpDownToggleIcon1Desc" id="what-we-do-icon1"> icon1 desc
                                <img  class="close-current-tab" src="img/fancy_closebox.png" />
                                <div class="what-we-do-heading">What we do</div>
                                <div class="what-we-do-sub-heading">Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                <div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                        </div>

                        <div class="what-we-do-hidden-div UpDownToggleIcon1Desc" id="what-we-do-icon2"> icon2 desc
                                <img  class="close-current-tab" src="img/fancy_closebox.png" />
                                <div class="what-we-do-heading">What we do</div>
                                <div class="what-we-do-sub-heading">Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                <div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                        </div>

                        <div class="what-we-do-hidden-div UpDownToggleIcon3Desc" id="what-we-do-icon3"> icon3 desc
                                <img  class="close-current-tab" src="img/fancy_closebox.png" />
                                <div class="what-we-do-heading">What we do</div>
                                <div class="what-we-do-sub-heading">Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                <div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                        </div>

                        <div class="what-we-do-hidden-div UpDownToggleIcon4Desc" id="what-we-do-icon4"> icon4 desc
                                <img  class="close-current-tab" src="img/fancy_closebox.png" />
                                <div class="what-we-do-heading">What we do</div>
                                <div class="what-we-do-sub-heading">Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                <div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                        </div>

                        <div class="what-we-do-hidden-div UpDownToggleIcon56Desc" id="what-we-do-icon5"> icon5 desc
                                <img  class="close-current-tab" src="img/fancy_closebox.png" />
                                <div class="what-we-do-heading">What we do</div>
                                <div class="what-we-do-sub-heading">Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                <div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                </div>
                        </div>
                        <div class="what-we-do-hidden-div UpDownToggleIcon56Desc" id="what-we-do-icon6"> icon6 desc
                                <img  class="close-current-tab" src="img/fancy_closebox.png" />
                                <div class="what-we-do-heading">What we do</div>
                                <div class="what-we-do-sub-heading">Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                <div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="what-we-do-individual-desc-container">
                                        <div class="what-we-do-individual-heading">Lorem Ispem</div>
                                        <div class="what-we-do-individual-desc">Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.Lorem Ispem is simpy dummy text of the printing and typesetting industry.</div>
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
                    <li><span></span><span>Facebook</span></li>
                    <li><span></span><span>Twitter</span></li>
                    <li><span></span><span>Google</span></li>
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

            function setWhatWeDoContainerWidth () {
                var get_what_we_do_icon_width = 95;
                var getLeftRightIconWidth = get_what_we_do_icon_width * 2;
                var setCentered_what_wedo_width = $(window).width() - getLeftRightIconWidth;
                $(".centered-what-we-do-desc, .what-we-do-1").css("width",setCentered_what_wedo_width);
            }
            setWhatWeDoContainerWidth();
            $(window).resize(function() {
                setWhatWeDoContainerWidth();
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
                        var borderBottomWidth = $(window).height() - 100;
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
                $(this).parent().removeClass("showCurrentDiv");
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


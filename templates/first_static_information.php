
    <!-- ************************************************************** -->
    <!-- *************************  informacion statica  ************************* -->
    <!-- ************************************************************** -->    
    <section class="staticDataHome">
    <h1><?= $lang == 'es' ? TIT_ES : TIT_EN ?></h1>
    <p><?= $lang == 'es' ? T_TXT_ES : T_TXT_EN ?> <br>
         </p>
</section>
<section class="callToAction">
     <h2>>><?= $lang == 'es' ? CTA_ES : CTA_EN ?><<</h2>
</section>
<section class="callToAction4">
    <h3> <?= $lang == 'es' ? T2_ES : T2_EN ?> </h3>
</section>
<section class="callToAction3">
    
    <div class="divImageText1">
        <div class="dIleft"><img src="img/logo-small.png" alt=""></div>
        <div class="dIright"></div>
    </div>
    <div class="divImageText2">
        <div class="dI2left ">
            <p>Nuestra embarcación el arapaima, ofrece a los huéspedes 

                la oportunidad de sumergirse en la belleza y la maravilla 
                
                de la selva tropical mientras disfrutan de un lujo sin igual. 
                
                Esta embarcación única les brinda la oportunidad de experimentar 
                
                la naturaleza y el confort al mismo tiempo.</p>
        </div>
        <div class="dI2right"><input id="btnSearch2" type="button" value="BUSCAR"></div>
    </div>
</section>
<section id="ourActivities">
    <div class="title">
        <div class="espacio"></div>
        <h3 class="title2"><?= $lang == 'es' ? T3_ES : T3_EN ?></h3>
    </div>
    <div class="activities">
        <!-- ********************** -->
        <!-- ******** box ********* -->
        <!-- ********************** -->
        <div class="act_box">
            <div class="titulo">
                <h4><?= $lang == 'es' ? OA_1_ES : OA_1_EN ?></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen1.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4><?= $lang == 'es' ? OA_2_ES : OA_2_EN ?></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen2.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4><?= $lang == 'es' ? OA_3_ES : OA_3_EN ?></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen3.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4><?= $lang == 'es' ? OA_4_ES : OA_4_EN ?></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen4.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4><?= $lang == 'es' ? OA_5_ES : OA_5_EN ?></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen5.jpg" alt="">
            </div>
        </div>
        <div class="act_box">
            <div class="titulo">
                <h4><?= $lang == 'es' ? OA_6_ES : OA_6_EN ?></h4>
            </div>
            <div class="imgBox">
                <img src="img/imagen6.jpg" alt="">
            </div>
        </div>
       
        <!-- ********************** -->
        <!-- ******* /box ********* -->
        <!-- ********************** -->        
    </div>
</section>
<section class="reviews">
    <div class="title">
        <div class="espacio"></div>
        <h3 class="title2"><?= $lang == 'es' ? T_R_ES : T_R_EN ?></h3>
    </div>
    <div class="rbox">
        <div class="rbLeft">
            <span class="" id="img1">
                <img src="img/rev1.png" alt="">
                <span>Juan Garcia</span>
            </span>
            <span class="hidden" id="img2">
                <img src="img/rev2.jpg" alt="">
                <span >Carla Perez</span>
            </span>
        </div>
        <div class="rbRight">
            <div class="star">
                <ul class="linksocial2">
                    <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star " aria-hidden="true"></i></a></li>
                   
                    
                </ul>
            </div>
            <div class="text" id="text1">
                <p><?= $lang == 'es' ? R1_ES : R1_EN ?></p>
            </div>
            <div class="text hidden" id="text2">
                <p><?= $lang == 'es' ? R2_ES : R2_EN ?></p>
            </div>
            <div class="text hidden" id="text3">
            <p><?= $lang == 'es' ? R1_ES : R1_EN ?></p>
            </div>
            <div class="bullets">
                <ul class="linksocial3">
                    <i onclick="carrouselRev(1)" id="c_btn1" class="fa fa-circle" aria-hidden="true"></i>
                    <i onclick="carrouselRev(2)" id="c_btn2" class="fa fa-circle-o" aria-hidden="true"></i>
                </ul>
            </div>

        </div>
    </div>
</section>
    <!-- ************************************************************** -->
    <!-- *************************  /informacion statica  ************************* -->
    <!-- ************************************************************** -->    
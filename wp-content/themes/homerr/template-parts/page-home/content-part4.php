<style>

#mixedSlider {
  position: relative;
}
#mixedSlider .MS-content {
  white-space: nowrap;
  overflow: hidden;
  /*
  display: flex;
  flex-wrap: wrap;
  */
}
#mixedSlider .MS-content .item {
  /*display: flex;*/
  display: inline-block;
  flex-direction: column;
  height: auto;
  width: 24%;
  margin-left: 1%;
  position: relative;
  vertical-align: top;
  overflow: hidden;
  height: 100%;
  white-space: normal;
  border: 1px solid #e2e2e2;
  height: auto;
}
#mixedSlider .MS-content .item:first-item {
  margin-left: 0%;
}
#mixedSlider .MS-content .item .imgTitle {
  position: relative;
}
#mixedSlider .blogTitle {
  margin-left: 20px;
}
#mixedSlider .description {
  margin-left: 20px;
  height: 80px;
}
#mixedSlider .MS-content .item .imgTitle img {
  height: auto;
  width: 100%;
}
#mixedSlider .MS-content .item p {
  font-size: 16px;
  margin: 2px 10px 0 5px;
  text-indent: 15px;
}
#mixedSlider .MS-content .item a {
  float: right;
  margin: 0 20px 0 0;
  font-size: 16px;
  font-style: italic;
  color: rgba(173, 0, 0, 0.82);
  font-weight: bold;
  letter-spacing: 1px;
  transition: linear 0.1s;
}
#mixedSlider .MS-content .item a:hover {
  text-shadow: 0 0 1px grey;
}
#mixedSlider .MS-controls button {
  position: absolute;
  border: none;
  background-color: transparent;
  outline: 0;
  font-size: 50px;
  top: 95px;
  color: rgba(0, 0, 0, 0.4);
  transition: 0.15s linear;
}
#mixedSlider .MS-controls button:hover {
  color: rgba(0, 0, 0, 0.8);
}

/*
@media (max-width: 992px) {
  #mixedSlider .MS-controls button {
    font-size: 30px;
  }
}
@media (max-width: 767px) {
  #mixedSlider .MS-controls button {
    font-size: 20px;
  }
}
#mixedSlider .MS-controls .MS-left {
  left: 0px;
}
@media (max-width: 767px) {
  #mixedSlider .MS-controls .MS-left {
    left: -10px;
  }
}
#mixedSlider .MS-controls .MS-right {
  right: 0px;
}
@media (max-width: 767px) {
  #mixedSlider .MS-controls .MS-right {
    right: -10px;
  }
}
*/

@media (max-width: 992px) {
  #mixedSlider .MS-content .item {
      width: 48%;
      margin-left:2%;
  }
}
@media (max-width: 600px) {
  #mixedSlider .MS-content .item {
      width: 96%;
      margin-left: 4%;
  }
}
</style>

<div class="section slider-section">
    <div class="heading">
        <h1 class="title">Het <span class="emphasized">netwerk</span> van
        <span class="emphasized emphasized-alternate">Homerr</span></h1>
    </div>

    <div id="mixedSlider">
        <div class="MS-content">
            <div class="item">
                <div class="imgTitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/home-slider-1.png" alt="" />
                </div>
                <h2 class="blogTitle">Tonnie & co</h2>
                <div class="description">"Door <span class="emphasized emphasized-alternate">Homerr</span> ben ik nu miljonair"</div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <img src="http://homerr.bm/wp-content/themes/homerr/images/home/home-slider-2.png" alt="" />
                </div>
                <h2 class="blogTitle">Langendijk</h2>
                <div class="description">"Gisteren geverifieerd <span class="emphasized emphasized-alternate">Homerr</span> geworden, dit maakt mij hele grote blij"</div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <img src="http://homerr.bm/wp-content/themes/homerr/images/home/home-slider-3.png" alt="" />
                </div>
                <h2 class="blogTitle">Delicious store</h2>
                <div class="description">"M'n hand past niet meer in m'n broekzak omdat die vol zit met euro's dankzij <span class="emphasized emphasized-alternate">Homerr</span>"</div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/home-slider-4.png" alt="" />
                </div>
                <h2 class="blogTitle">Elegance</h2>
                <div class="description">"Gelijk even een wasje draaien terwijl je je pakketje op komt halen, door <span class="emphasized emphasized-alternate">Homerr</span> heb ik veel meer klanten"</div>
            </div>

            <div class="item">
                <div class="imgTitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/home-slider-1.png" alt="" />
                </div>
                <h2 class="blogTitle">2. Tonnie & co</h2>
                <div class="description">"Door <span class="emphasized emphasized-alternate">Homerr</span> ben ik nu miljonair"</div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <img src="http://homerr.bm/wp-content/themes/homerr/images/home/home-slider-2.png" alt="" />
                </div>
                <h2 class="blogTitle">2. Langendijk</h2>
                <div class="description">"Gisteren geverifieerd <span class="emphasized emphasized-alternate">Homerr</span> geworden, dit maakt mij hele grote blij"</div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <img src="http://homerr.bm/wp-content/themes/homerr/images/home/home-slider-3.png" alt="" />
                </div>
                <h2 class="blogTitle">2. Delicious store</h2>
                <div class="description">"M'n hand past niet meer in m'n broekzak omdat die vol zit met euro's dankzij <span class="emphasized emphasized-alternate">Homerr</span>"</div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/home-slider-4.png" alt="" />
                </div>
                <h2 class="blogTitle">2. Elegance</h2>
                <div class="description">"Gelijk even een wasje draaien terwijl je je pakketje op komt halen, door <span class="emphasized emphasized-alternate">Homerr</span> heb ik veel meer klanten"</div>
            </div>

            <div class="item">
                <div class="imgTitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/home-slider-1.png" alt="" />
                </div>
                <h2 class="blogTitle">3. Tonnie & co</h2>
                <div class="description">"Door <span class="emphasized emphasized-alternate">Homerr</span> ben ik nu miljonair"</div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <img src="http://homerr.bm/wp-content/themes/homerr/images/home/home-slider-2.png" alt="" />
                </div>
                <h2 class="blogTitle">3. Langendijk</h2>
                <div class="description">"Gisteren geverifieerd <span class="emphasized emphasized-alternate">Homerr</span> geworden, dit maakt mij hele grote blij"</div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <img src="http://homerr.bm/wp-content/themes/homerr/images/home/home-slider-3.png" alt="" />
                </div>
                <h2 class="blogTitle">3. Delicious store</h2>
                <div class="description">"M'n hand past niet meer in m'n broekzak omdat die vol zit met euro's dankzij <span class="emphasized emphasized-alternate">Homerr</span>"</div>
            </div>
            <div class="item">
                <div class="imgTitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/home-slider-4.png" alt="" />
                </div>
                <h2 class="blogTitle">3. Elegance</h2>
                <div class="description">"Gelijk even een wasje draaien terwijl je je pakketje op komt halen, door <span class="emphasized emphasized-alternate">Homerr</span> heb ik veel meer klanten"</div>
            </div>
        </div>
        <div class="slider-wrapper">
            <div class="slider">
                <button class="slider-btn-left MS-left"></button>
                <div class="slider-link active" data-id="1" click="showSlideView(1)"></div>
                <div class="slider-link" data-id="2" click="showSlideView(2)"></div>
                <div class="slider-link" data-id="3" click="showSlideView(3)"></div>
                <button class="slider-btn-right MS-right"></button>
            </div>
            <div class="slider-text">
                Ons sociale netwerk bestaat uit Homerrs en HomerrPoints. Homerrs zijn particulieren zoals bijvoorbeeld buurmannen of -vrouwen die regelmatig thuis zijn en voor jou een pakketje kunnen aannemen. HomerrPoints zijn lokale ondernemingen zoals bijvoorbeeld een koffietentje of bakker die tot minimaal 20 uur ‘s avonds geopend zijn. Daardoor is er altijd een punt dicht bij jou in de buurt om je pakketje op te halen.
            </div>
        </div>
    </div>
    <div class="row wrapVraagInformationBtn" style="margin-top: 60px;">
        <a class="btn-default">Het netwerk van Homerr</a>
    </div>
</div>
<?php
    $name_full = $_SESSION['name'];
    if ($name_full == '') {
        header('location:index.php');
    }
    $name_final = explode(" ", $name_full);
 ?>

<span class="donate-button-parent">
     <span class="fb-like" data-href="https://www.facebook.com/treesforall.nl/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></span>
    <span class="donate-button-child"><a
            href="https://www.treesforall.nl/winkelwagen.html">Doneer nu</a></span>
</span>
<section id="section1" class="intro">
    <div class="outer">
        <div class="middle">
            <div class="inner">
                <div class="profile-pic">
                    <img src="app/images/kind.jpg" alt="">
                </div>
                <div class="welcome-text">
                    <h3>
                        <div class="name">Hoi <?php echo $name_final[0];  ?>!</div>
                        <div class='name-jose'>Mijn naam is Jose.</div><br> Leuk dat je de tijd neemt om mijn verhaal te
                        lezen.<br>Als je naar beneden
                        scrollt zal ik je meer vertellen.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="story">
    <div class="container-fluid line-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="timeline-row one">
                    <div class="timeline-item">
                        <span class="circle"></span>
                        <div class="center">
                            <div class="image image1">
                                <img src="app/images/banana.JPG" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="text text1">
                            <h3><br>Hallo, ik ben Jose. Ik woon samen met mijn ouders en mijn broertjes en zusjes in
                                het gebied aan de oostelijke kant van de Andes, waar de bergen overgaan in het
                                Amazonebekken.<br><br> Mijn familie heeft een boerderij, we hebben vooral fruitbomen op ons land staan.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="timeline-row">
                    <div class="timeline-item two">
                        <span class="circle"></span>
                        <div class="text text2">
                            <h3><br><br>Het gebied dreigt steeds verder aan getast te worden, door ontbossing en
                              klimaatverandering.<br><br> In het verleden kwam dit door grootschalige houtkap en
                              tegenwoordig wordt dit nog steeds veroorzaakt door illegale activiteiten.
                            </h3>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="center">
                            <div class="image image2">
                                <img src="app/images/img1.JPG" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="timeline-row three">
                    <div class="timeline-item">
                        <span class="circle"></span>
                        <div class="center">
                            <div class="imageSpecial image3">
                                <img src="app/images/jongboom.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="text text3">
                            <h3>Trees for All helpt ons sinds 2013 met het herstellen van bossen. Ook willen ze de
                              weerbaarheid verhogen voor de effecten van klimaatverandering en de CO2-
                              uitstoot als gevolg van de landbouw verminderen.<br><br> Er is al 1400 hectare
                              productiebos aangeplant, ook is er al 300 hectare voor fruitbomen aangeplant.
                              Dit wordt samengedaan met ongeveer 1000 boeren.<br> Onze familie en andere lokale
                              boeren benutten dit als gebruiksbos.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 facts">
                <div class="facts-header-text">
                    <h1>Wist je dat...</h1>
                </div>
                <div class="facts-text">
                    <h3>- U het Project gebied met uw relaties kunt bezoeken?<br><br>
                        - Het projectgebied zich uitstrekt over verschillende deelgebieden in de departementen Beni, La Paz, Cochabamba en Santa Cruz?
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="timeline-row">
                    <div class="timeline-item four">
                        <span class="circle"></span>
                        <div class="text text4">
                            <h3>Dankzij verbeterde landbouwmethoden en veeteelt kunnen wij ons inkomen
                                vergroten. Ook krijgen we training, advies, begeleiding en een kleine investering
                                voor het planten van de bomen.<br><br> Elk jaar planten de boeren ieder 20 ha nieuw bos
                                voor duurzame houtproductie, 4000 bomen voor agroforestry (combinatie
                                tussen bos- en landbouw) en ook nog eens 1600 fruitbomen.
                            </h3>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="center">
                            <div class="image image4">
                                <img src="app/images/farmers.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="timeline-row five">
                    <div class="timeline-item">
                        <div class="center">
                            <div class="imageBoy">
                                <img src="app/images/kind.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="textBoy">
                            <h3>Beste <?php echo $name_final[0]; ?>.
                                Hopelijk vond je mijn verhaal inspirerend en wil je ook bijdragen.
                                Alle kleine beetje helpen en voor maar 5 euro koop je al een boom en steun je ons!
                                <br><br>Kijk hieronder naar de mogelijkheden.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="donation">
    <div class="container-fluid line-container-white">
        <div class="row background">
            <div class="col-lg-6">
                <div class="header-donate">
                    <h3>Plant een virtuele boom in ons virtuele bos<br>en zie hoeveel mensen je al zijn voorgegaan!</h3>
                </div>
                <div class="virtual">
                    <a href="?action=virtual-forrest">Plant een virtuele boom</a>
                </div>
            </div>
            <hr class="line">
            <div class="col-lg-6">
                <div class="header-donate">
                    <h3>Bezoek onze website en plant een echte boom in een echt bos</h3>
                </div>
                <div class="real">
                    <a href="https://www.treesforall.nl/winkelwagen.html">Plant een echte boom</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="footer">
                    <h4>&#9400; TreesForAll</h4>
                </div>
            </div>
        </div>
    </div>
</section>

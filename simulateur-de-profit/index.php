<?php

    /*
    *
    * CAUTION: This is a standalone version of the simulator, and is not identical as the website version.
    * So look out when you edit something.
    *
    */

    require_once('../lang/fr.php');
    $lang = 'fr';

?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= $general['title']; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/main.css" rel="stylesheet" type="text/css">

        <link rel="apple-touch-icon" sizes="57x57" href="../img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../img/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="../img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="../img/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="../img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="../img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="../img/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="../img/favicons/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body data-lang="<?= $lang; ?>" class="standalone-profit-simulator">
        

        
        <main id="content">

            <a name="<?= $general['anker7']; ?>"></a>
            <section id="profit-simulator" data-magellan-destination="profit-simulator">
                <div class="row">
                    <div class="medium-12 columns">
                        <div class="simulator">
                            <div class="row">
                                <div class="medium-4 columns">
                                    <div class="side same-height">
                                        <h2><?= $simulator['title']; ?></h2>
                                        <div class="saving">
                                            <div class="before step-intro">
                                                <p><?= $simulator['intro']; ?></p>
                                                <div style="opacity: 0.8;">
                                                    <p><small><?= $simulator['win_bati']; ?></small></p>
                                                    <p><small><?= $simulator['win_bati_2']; ?></small></p>
                                                </div>
                                                <a class="button next">Start Profit Simulator</a>
                                            </div>

                                            <div class="before step-steps">
                                                <div class="steps">
                                                    <p><?= $simulator['step_intro']; ?></p>
                                                    <ul>
                                                        <li class="active"><a unselectable="on"><span><?= $simulator['step1']; ?></span></a></li>
                                                        <li><a unselectable="on"><span><?= $simulator['step2']; ?></span></a></li>
                                                        <li><a unselectable="on"><span><?= $simulator['step3']; ?></span></a></li>
                                                        <li><a unselectable="on"><span><?= $simulator['step4']; ?></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="before step-last">
                                                <p><?= $simulator['text2']; ?></p>
                                                <a href="<?= $general['link_dealer']; ?>"><?= $simulator['text3']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="medium-8 columns">
                                    <div class="main same-height">
                                        <div class="flexslider slider">
                                            <ul class="slides">
                                                <li>
                                                    <div class="row">
                                                        <div class="medium-12 columns text-center">
                                                            <span class="trophy"><?= $batibouw['heading']; ?></span>
                                                            <h3 class="headliner"><?= $batibouw['maak_kans']; ?></h3>
                                                            <a class="win-btn next <?= $general['lang']; ?>"><?= $batibouw['button2']; ?></a>
                                                            <br>
                                                            <br>
                                                            <small><a target="_blank" href="<?= $simulator['link1']; ?>" style="color:#fff;text-decoration:underline;"><?= $simulator['text12']; ?></a></small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="medium-12 columns">
                                                            <h3><?= $simulator['subtitle1']; ?></h3>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row whitespace">
                                                        <div class="large-12 columns">
                                                            <span><?= $simulator['labelTitle1']; ?></span>
                                                            <input type="radio" name="type_woning" value="1" id="nieuwbouw"><label class="btn" for="nieuwbouw"><?= $simulator['labelChoice1']; ?></label>
                                                            <input type="radio" name="type_woning" value="2" id="renovatie" checked><label class="btn checked" for="renovatie"><?= $simulator['labelChoice2']; ?></label>
                                                            <a class="question popup white" title="<?= $simulator['question4']; ?>"></a>
                                                        </div>
                                                    </div>
                                                    <div class="row whitespace">
                                                        <div class="large-12 columns">
                                                            <span><?= $simulator['labelTitle2']; ?></span>
                                                            <input type="text" name="oppervlakte" value="140" id="oppervlakte" class="small"><label for="oppervlakte">m<sup>2</sup></label>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row whitespace">
                                                        <div class="large-12 columns">
                                                            <span class="full"><?= $simulator['labelTitle3']; ?></span>
                                                            <p class="small smallLabel"><?= $simulator['labelChoice3']; ?> <?= $general['of']; ?> <?= $simulator['labelChoice4']; ?></p>
                                                            <input type="radio" name="type_verwarming" value="1" id="gewone_radiator" checked><label class="btn checked" for="gewone_radiator"><span class="verwarming1"><?= $simulator['labelChoice3']; ?></span></label>
                                                            <input type="radio" name="type_verwarming" value="2" id="vloerverwarming"><label class="btn" for="vloerverwarming"><span class="verwarming2"><?= $simulator['labelChoice4']; ?></span></label>
                                                        </div>
                                                    </div>
                                                    <div class="row whitespace">
                                                        <div class="large-12 columns">
                                                            <span class="full"><?= $simulator['labelTitle4']; ?></span>
                                                            <input type="radio" name="type_brandstof" value="1" id="aardgas" checked><label class="btn checked" for="aardgas"><?= $simulator['labelChoice5']; ?></label>
                                                            <input type="radio" name="type_brandstof" value="2" id="stookolie"><label class="btn" for="stookolie"><?= $simulator['labelChoice6']; ?></label>
                                                            <input type="radio" name="type_brandstof" value="3" id="warmtepomp"><label class="btn" for="warmtepomp"><?= $simulator['labelChoice7']; ?></label>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row whitespace">
                                                        <div class="large-12 columns">
                                                            <span class="full"><?= $simulator['labelTitle5']; ?> <a class="question popup white" title="<?= $simulator['question1']; ?>"></a></span>
                                                            <input type="radio" name="type_temperatuur" value="1" id="lager_50" checked><label class="btn checked" for="lager_50"><?= $simulator['labelChoice8']; ?></label>
                                                            <input type="radio" name="type_temperatuur" value="2" id="hoger_50"><label class="btn" for="hoger_50"><?= $simulator['labelChoice9']; ?></label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="medium-12 columns">
                                                            <h3><?= $simulator['subtitle2']; ?></h3>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="large-12 columns text-center">
                                                            <span><?= $simulator['labelTitle6']; ?></span>
                                                            <input type="text" name="energieverbruik" id="energieverbruik" class="small"><label for="energieverbruik" class="eenheid"></label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="large-8 large-offset-2 columns">
                                                            <p class="small"><?= $simulator['text4']; ?></p>         
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="large-12 columns">
                                                            <h4 class="text-center"><?= $simulator['text5']; ?></h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="large-12 columns text-center">
                                                            <div class="besparing_percentage readonly"></div>
                                                            <label><?= $simulator['text6']; ?></label>
                                                            <div class="besparing_jaar readonly medium"></div>
                                                            <label><span class="eenheid"></span></label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="medium-12 columns">
                                                            <h3><?= $simulator['subtitle3']; ?></h3>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row whitespace">
                                                        <div class="large-12 columns">
                                                            <span><?= $simulator['labelTitle7']; ?></span>
                                                            <input type="text" name="energieprijs" id="energieprijs" class="medium"><label for="energieprijs" class="eenheid_prijs"></label><a class="question popup white" title="<?= $simulator['question2']; ?>"></a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="large-12 columns">
                                                            <div class="row">
                                                                <div class="medium-8 columns">
                                                                    <span><?= $simulator['labelTitle8']; ?> <a class="question popup white" title="<?= $simulator['question5']; ?>"></a></span>
                                                                </div>
                                                                <div class="medium-4 columns">
                                                                    <input type="text" name="inflatie" value="1.5" id="inflatie" class="small"><label for="inflatie">%</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="large-12 columns">
                                                            <div class="row">
                                                                <div class="medium-8 columns">
                                                                    <span><?= $simulator['labelTitle9']; ?></span>
                                                                </div>
                                                                <div class="medium-4 columns">
                                                                    <input type="text" name="rente" value="1" id="rente" class="small"><label for="rente">%</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="large-12 columns">
                                                            <div class="row">
                                                                <div class="medium-8 columns">
                                                                    <span><?= $simulator['labelTitle10']; ?> <a class="question popup white" title="<?= $simulator['question3']; ?>"></a></span>
                                                                </div>
                                                                <div class="medium-4 columns">
                                                                    <input type="text" name="stijging_energieprijs" value="5" id="stijging_energieprijs" class="small"><label for="stijging_energieprijs">%</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="large-12 columns">
                                                            <a class="big-btn next"><?= $batibouw['button3']; ?></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="medium-12 columns">
                                                            <!--<h3><?= $simulator['subtitle4']; ?></h3>
                                                            <hr>-->
                                                        </div>
                                                    </div>
                                                    <div class="print-container">
                                                        <div class="row text-center">
                                                            <div class="medium-12 columns">
                                                                <h3 class="white-box-title"><?= $simulator['text8']; ?> <a class="question dark popup white" title="<?= $simulator['question6']; ?>"></a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="white-box">
                                                            <div class="row text-center">
                                                                <div class="medium-12 columns">
                                                                    <div class="readonly big">&euro; <span class="besparing_30_jaar"></span> <small>= <span class="co2_final"></span> kg CO<span class="h2o">2</span> <a class="question dark popup white" title="<?= $simulator['question7']; ?>"></a></small></div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center">
                                                                <div class="medium-12 columns">
                                                                    <a class="open-table open"><?= $simulator['openTable']; ?></a>
                                                                    <a class="open-table close"><?= $simulator['closeTable']; ?></a>
                                                                </div>
                                                            </div>

                                                            <div class="table toggle-table">
                                                                <div class="row">
                                                                    <div class="small-3 small-offset-3 columns">
                                                                        <span><?= $simulator['text9']; ?></span>
                                                                    </div>
                                                                    <div class="small-3 columns end">
                                                                        <span><?= $simulator['text10']; ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="inner-content">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="dark text-center">
                                                        <div class="row">
                                                            <div class="medium-12 columns">
                                                                <h3 style="margin-top: 20px;"><?= $batibouw['heading2']; ?></h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="large-12 columns">
                                                                <a class="big-btn next"><?= $batibouw['button4']; ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="medium-12 columns">
                                                            <h3 data-thanks="<?= $batibouw['heading4']; ?>" class="heading-thanks"><?= $batibouw['heading3']; ?></h3>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="large-12 columns">
                                                            <p style="color: #fff; width: 100%; margin:0;"><?= $batibouw['intro3']; ?></p>
                                                            <style type="text/css">
                                                                .contest p {
                                                                    width: 40%;
                                                                    float: left;
                                                                    padding-right: 12px;
                                                                }
                                                                .contest input {
                                                                    margin: 0 !important;
                                                                }
                                                                .contest-participate p {
                                                                    width: auto !important;
                                                                    float: none !important;
                                                                }
                                                                .contest-thanks {
                                                                    display: none;
                                                                }
                                                            </style>

                                                            <div class="contest-thanks">
                                                                <div class="medium-12 columns">
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <br>
                                                                    <h4><em><?= $simulator['thanks']; ?></em></h4>
                                                                </div>
                                                            </div>

                                                            <div class="contest">

                                                                <div class="contest-form">
                                                                    <p>
                                                                        <span><?= $simulator['labelTitle11']; ?></span>
                                                                        <input type="text" name="name" id="name">
                                                                    </p>
                                                                    <p>
                                                                        <span><?= $simulator['labelTitle12']; ?></span>
                                                                        <input type="text" name="address" id="address">
                                                                    </p>
                                                                    <p>
                                                                        <span><?= $simulator['labelTitle17']; ?></span>
                                                                        <input type="text" name="postcode" id="postcode">
                                                                    </p>
                                                                    <p>
                                                                        <span><?= $simulator['labelTitle18']; ?></span>
                                                                        <input type="text" name="city" id="city">
                                                                    </p>
                                                                    <p>
                                                                        <span><?= $simulator['labelTitle13']; ?></span>
                                                                        <input type="text" name="email" id="email">
                                                                    </p>
                                                                    <p>
                                                                        <span><?= $simulator['labelTitle16']; ?></span>
                                                                        <input type="text" name="phone" id="phone">
                                                                    </p>
                                                                </div>

                                                                <br clear="all" />
                                                                
                                                                <div class="contest-participate">
                                                                    <p>
                                                                        <span><?= $simulator['labelTitle14']; ?></span>
                                                                        <br>
                                                                        <input type="text" name="question" id="question" class="medium">
                                                                    </p>
                                                                    <p>
                                                                        <a class="big-btn" id="participate" href="javascript:void();" style="text-transform: uppercase; font-size: 20px; margin:0;"><?= $simulator['labelTitle15']; ?></a>
                                                                    </p>                                                                    
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="button-bar">
                                                <a class="grey-button next"><?= $simulator['step_next']; ?></a>
                                                <a class="prev"><?= $simulator['step_prev']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqtiofyAeLeenBHqVcPt7995DALlDogtU"></script>

        <script type="text/javascript" src="../js/min/main-min.js"></script>
    </body>
</html>
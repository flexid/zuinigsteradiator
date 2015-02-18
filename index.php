<?php


// Set language
$domains = array(
	'fr' => array(
		'www.radiateurlepluseconomique.be',
		'www.leradiateurlepluseconomique.be',
		'www.radiateurlepluseconomique.eu',
		'www.leradiateurlepluseconomique.eu',
		'www.radiateurlepluseconomique.lu',
		'www.leradiateurlepluseconomique.lu',
		'www.leradiateurlepluseconomique.com',
		'www.radiateurlepluseconomique.com'
	),
	'nl' => array(
		'www.zuinigsteradiator.be',
		'www.zuinigsteradiator.com',
		'www.dezuinigsteradiator.be',
		'www.dezuinigsteradiator.com',
		'www.zuinigsteradiator.eu',
		'www.dezuinigsteradiator.eu'
	)
);

if(substr($_SERVER['HTTP_HOST'], 0, 4) != 'www.') {
	$adress = 'www.' . $_SERVER['HTTP_HOST'];
} else {
	$adress = $_SERVER['HTTP_HOST'];
}


if(in_array($adress, $domains['fr'])) {
    require_once('lang/fr.php');
    $lang = 'fr';
} elseif(in_array($adress, $domains['nl'])) {
    require_once('lang/nl.php');
    $lang = 'nl';
} else {
    require_once('lang/nl.php');
    $lang = 'nl';
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= $general['title']; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body data-lang="<?= $lang; ?>">
        
        <a name="<?= $general['anker1']; ?>"></a>
        <header id="header" data-magellan-destination="home">
            <div class="sub-menu">
                <div class="row">
                    <div class="medium-12 columns">
                        <ul>
                            <li><a href="#<?= $general['anker8']; ?>"><?= $menu['item1']; ?></a></li>
                            <li><a href="#<?= $general['anker9']; ?>"><?= $menu['item2']; ?></a></li>
                        </ul>
                    </div> 
                </div>
            </div>
            <div class="topbar" data-magellan-expedition="fixed">
                <div class="row">
                    <div class="medium-12 columns">
                        <a href="#<?= $general['anker1']; ?>" class="logo">Jaga</a>
                        <a class="hamburger-menu"><span></span><span></span><span></span></a>
                        <div class="main-menu">
                            <ul>
                                <li data-magellan-arrival="home"><a href="#<?= $general['anker1']; ?>">Home</a></li>
                                <li data-magellan-arrival="zuinigsteradiator"><a href="#<?= $general['anker2']; ?>"><?= $menu['item3']; ?></a></li>
                                <li data-magellan-arrival="kenmerken"><a href="#<?= $general['anker3']; ?>"><?= $menu['item4']; ?></a></li>
                                <li data-magellan-arrival="technologie"><a href="#<?= $general['anker4']; ?>"><?= $menu['item5']; ?></a></li>
                                <li data-magellan-arrival="collectie"><a href="#<?= $general['anker5']; ?>"><?= $menu['item6']; ?></a></li>
                                <li data-magellan-arrival="dealers"><a href="#<?= $general['anker6']; ?>"><?= $menu['item7']; ?></a></li>
                                <li data-magellan-arrival="profit-simulator"><a href="#<?= $general['anker7']; ?>" class="green-button"><?= $menu['item8']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <main id="content">
            <section id="homepage">
                <div class="row">
                    <div class="medium-5 large-4 columns">
                        <div class="featured <?= $general['lang']; ?>">
                            <h1><?= $zuinigsteRadiator['featured']; ?></h1>
                        </div>
                        <a class="button green" href="#<?= $general['anker7']; ?>"><?= $zuinigsteRadiator['button1']; ?></a>
                        <a class="button" href="#<?= $general['anker5']; ?>"><?= $zuinigsteRadiator['button2']; ?></a>
                    </div>
                    <div class="medium-7 large-8 columns">
                        <div class="animation-box">
                            <img src="img/zuinigste_radiator@2x.png">
                            <img class="hearths" src="img/love.gif">
                        </div>
                        <a href="#<?= $general['anker3']; ?>" class="ribbon <?= $general['lang']; ?>"><?= $zuinigsteRadiator['ribbon1']; ?></a>
                        <a href="#epb" class="ribbon2 <?= $general['lang']; ?>"><?= $zuinigsteRadiator['ribbon2']; ?></a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="medium-12 columns">
                        <div class="social">
                            <ul>
                                <li><a href="https://www.facebook.com/Jaga.Experience" target="_blank" class="facebook">Facebook</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <a href="#<?= $general['anker2']; ?>" class="scroll"><?= $zuinigsteRadiator['scroll']; ?></a>
            </section>

            
            <section id="batibouw" class="text-center">
                
                <p>
                    <a href="#<?= $general['anker7']; ?>">
                        <img src="img/actie_batibouw_bottom_<?=$lang?>.png">
                    </a>
                </p>
                <? if($lang == 'nl') { ?>
                <p>
                    <br>
                    <br>
                    <a href="#<?= $general['anker7']; ?>">
                        <img src="img/jantrakteert.jpg" alt="Jan Kriekels">
                    </a>
                    <br>
                    <br>
                </p>
                <? } ?>
            </section>


            <a name="<?= $general['anker2']; ?>"></a>
            <section id="zuinigsteradiator" data-magellan-destination="zuinigsteradiator">
                <div class="dark">
                    <div class="row">
                        <div class="medium-12 columns">
                            <h2><?= $zuinigsteRadiator['title']; ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-8 medium-offset-2 columns">
                            <p class="intro"><?= $zuinigsteRadiator['intro']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-12 columns">
                            <p><?= $zuinigsteRadiator['text1']; ?></p>
                            <p><?= $zuinigsteRadiator['text2']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-12 columns">
                            <ul class="laboratoria small-block-grid-1 medium-block-grid-3 large-block-grid-5" data-equalizer>
                                <li>
                                    <a href="http://theradiatorfactory.com/downloads/studie/KIWA_kwaliteitsverklaring_JAGA.pdf" target="_blank" class="logo kiwa <?= $general['lang']; ?>"><span>Kiwa</span></a>
                                    <p data-equalizer-watch><?= $zuinigsteRadiator['laboText1']; ?></p>
                                    <p><?= $zuinigsteRadiator['laboPlace1']; ?></p>
                                </li>
                                <li>
                                    <a href="http://theradiatorfactory.com/downloads/studie/BBC_RT_2012.pdf" target="_blank" class="logo grenelle_environnement <?= $general['lang']; ?>"><span>Grenelle Environnement</span></a>
                                    <p data-equalizer-watch><?= $zuinigsteRadiator['laboText2']; ?></p>
                                    <p><?= $zuinigsteRadiator['laboPlace2']; ?></p>
                                </li>
                                <li>
                                    <a href="http://theradiatorfactory.com/downloads/studie/Final jaga project report BRE.pdf" target="_blank" class="logo bre <?= $general['lang']; ?>"><span>Bre</span></a>
                                    <p data-equalizer-watch><?= $zuinigsteRadiator['laboText3']; ?></p>
                                    <p><?= $zuinigsteRadiator['laboPlace3']; ?></p>
                                </li>
                                <li>
                                    <a href="http://theradiatorfactory.com/downloads/studie/van Schijndel article.pdf" target="_blank" class="logo tu <?= $general['lang']; ?>"><span>Technische Universiteit Eindhoven</span></a>
                                    <p data-equalizer-watch><?= $zuinigsteRadiator['laboText4']; ?></p>
                                    <p><?= $zuinigsteRadiator['laboPlace4']; ?></p>
                                </li>
                                <li>
                                    <a href="http://theradiatorfactory.com/downloads/studie/WTCB_1981_Afgifterendement%20rad-konv.pdf" target="_blank" class="logo wtcb <?= $general['lang']; ?>"><span>WTCB</span></a>
                                    <p data-equalizer-watch><?= $zuinigsteRadiator['laboText5']; ?></p>
                                    <p><?= $zuinigsteRadiator['laboPlace5']; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <a name="<?= $general['anker3']; ?>"></a>
            <section id="kenmerken" data-magellan-destination="kenmerken">
                <div class="white">
                    <div class="row">
                        <div class="medium-8 medium-offset-2 columns">
                            <h2><?= $kenmerken['title']; ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-8 medium-offset-2 columns">
                            <p class="intro"><?= $kenmerken['intro']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 columns">
                            <h3><?= $kenmerken['subtitle1']; ?></h3>
                            <p><?= $kenmerken['text1']; ?></p>
                            <p class="italic"><?= $kenmerken['text2']; ?></p>
                        </div>
                        <div class="medium-6 columns">
                            <h3><?= $kenmerken['subtitle2']; ?></h3>
                            <p><?= $kenmerken['text3']; ?></p>
                            <p><?= $kenmerken['text4']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-12 columns">
                            <table>
                                <tbody>
                                    <tr>
                                        <td colspan="4"><?= $kenmerken['tableTitle']; ?></td> 
                                    </tr>
                                    <tr>
                                       <td rowspan="5"><img src="img/pig.png"></td>
                                        <td></td>
                                        <td><?= $kenmerken['table1']; ?></td>
                                        <td><?= $kenmerken['table2']; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><?= $kenmerken['table3']; ?></td>
                                        <td><?= $kenmerken['table4']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?= $kenmerken['table5']; ?></td>
                                        <td>13%</td>
                                        <td>16%</td>
                                    </tr>
                                    <tr>
                                        <td><?= $kenmerken['table6']; ?></td>
                                        <td>9%</td>
                                        <td>10%</td>
                                    </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
                
                <div id="epb" class="light">
                    <div class="row">
                        <div class="medium-4 columns">
                            <img src="img/epb.png">
                        </div>
                        <div class="medium-8 columns">
                            <h3 style="text-transform: none;"><?= $kenmerken['subtitle3']; ?></h3>
                            <p><?= $kenmerken['text5']; ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="medium-12 columns">
                        <h2><?= $kenmerken['title2']; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-12 columns">
                        <div class="reasons">
                            <ul class="small-block-grid-1 medium-block-grid-4 large-block-grid-4">
                                <li class="pig"><?= $kenmerken['reason1']; ?> <a class="close">X</a></li>
                                <li class="hand"><?= $kenmerken['reason2']; ?> <a class="close">X</a></li>
                                <li class="recycle"><?= $kenmerken['reason3']; ?> <a class="close">X</a></li>
                                <li class="investment"><?= $kenmerken['reason4']; ?> <a class="close">X</a></li>
                                <li class="one"><?= $kenmerken['reason5']; ?> <a class="close">X</a></li>
                                <li class="meter"><?= $kenmerken['reason6']; ?> <a class="close">X</a></li>
                                <li class="temp"><?= $kenmerken['reason7']; ?> <a class="close">X</a></li>
                                <li class="warranty <?= $general['lang']; ?>"><?= $kenmerken['reason8']; ?> <a class="close">X</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <a name="<?= $general['anker4']; ?>"></a>
            <section id="technologie" data-magellan-destination="technologie">
                <div class="row">
                    <div class="medium-12 columns">
                        <h2><?= $technolie['title']; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-8 medium-offset-2 columns">
                        <p class="intro"><?= $technolie['intro']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns">
                        <img src="img/warmtewisselaar.png">
                        <span class="icon_warranty <?= $general['lang']; ?>">Garantie 30 jaar warmtewisselaar</span>
                    </div>
                    <div class="medium-6 columns">
                        <h3><?= $technolie['subtitle1']; ?></h3>
                        <p><?= $technolie['text1']; ?></p>
                        <a href="#<?= $general['anker11']; ?>" class="button green"><?= $technolie['button1']; ?></a>
                    </div>
                </div>

                <div class="dark">
                    <div class="row">
                        <div class="medium-6 columns">
                            <h4><?= $technolie['subtitle2']; ?></h4>
                            <p><?= $technolie['text2']; ?></p>
                        </div>
                        <div class="medium-6 columns">
                            <img src="img/optie_dbe.png">
                            <div class="popover"><span><?= $technolie['popover']; ?></span><span class="relative-right"><?= $technolie['popover2']; ?></span></div>
                        </div>
                    </div>
                </div>

                <div class="row brochure">
                    <div class="medium-12 columns">
                        <img src="img/brochure.png" width="130px" class="left">
                        <h4><?= $technolie['subtitle3']; ?></h4>
                        <p><?= $technolie['text3']; ?></p>
                        <ul>
                            <li class="preview"><a href="<?= $technolie['link1']; ?>" target="_blank"><?= $technolie['linkText1']; ?></a></li>
                            <li class="download"><a href="<?= $technolie['link2']; ?>" target="_blank"><?= $technolie['linkText2']; ?></a></li> 
                        </ul>
                        <img src="img/logos.png" class="right">
                    </div>
                </div>
            </section>
            
            <a name="<?= $general['anker10']; ?>"></a>
            <section id="earth">
                <div class="row">
                    <div class="medium-12 columns">
                        <div class="right text-center">
                            <h2><?= $earth['title']; ?></h2>
                            <p><?= $earth['text']; ?></p>
                            <a class="close">Close</a>
                            <a class="button outline earthToggle"><?= $earth['button']; ?></a>
                        </div>
                    </div>
                </div>
            </section>
           
            <a name="<?= $general['anker11']; ?>"></a>
            <section id="vergelijking">
                <div class="row">
                    <div class="medium-12 columns">
                        <h2><?= $vergelijking['title']; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-8 medium-offset-2 columns">
                        <p class="intro"><?= $vergelijking['intro']; ?></p>
                    </div>
                </div>
                
                <div class="dark">
                    <div class="table">
                        <div class="row no-gutter">
                            <div class="small-3 columns white">
                                <div class="row">
                                    
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="box">
                                            <span><?= $vergelijking['row1']; ?></span>
                                            <p class="icon right"><span class="afmetingen"></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="box">
                                            <span><?= $vergelijking['row2']; ?></span>
                                            <div class="icon right"><span class="waterinhoud"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="box">
                                            <span><?= $vergelijking['row3']; ?></span>
                                            <div class="icon right"><span class="totaalgewicht"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="box">
                                            <span><?= $vergelijking['row4']; ?></span>
                                            <div class="icon right"><span class="opwarmtijd"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="box">
                                            <span><?= $vergelijking['row5']; ?></span>
                                            <div class="icon right"><span class="opstartenergie"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="box">
                                            <span><?= $vergelijking['row6']; ?></span>
                                            <div class="icon right"><span class="opgeslagenwarmte"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="box">
                                            <span><?= $vergelijking['row7']; ?></span>
                                            <div class="icon right"><span class="materiaal"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="box">
                                            <span><?= $vergelijking['row8']; ?></span>
                                            <div class="icon right"><span class="lca_score"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="small-2 columns green">
                                <div class="row">
                                    <div class="small-12 columns">
                                        <span class="vergelijk_h20"><?= $vergelijking['subtitle1']; ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns text-center">
                                        <a class="popup red" title="<?= $vergelijking['popup1']; ?>"></a>
                                        <p><?= $vergelijking['afmetingen1']; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <a class="popup red" title="<?= $vergelijking['popup2']; ?>"></a>
                                        <div class="bar">
                                            <div class="arrow" style="left: 5%;"><span>3,2</span></div>
                                            <img src="img/bar.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <a class="popup red" title="<?= $vergelijking['popup3']; ?>"></a>
                                        <div class="bar">
                                            <div class="arrow" style="left: 5%;"><span>24,7**</span></div>
                                            <img src="img/bar.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <a class="popup red" title="<?= $vergelijking['popup4']; ?>"></a>
                                        <div class="bar">
                                            <div class="arrow" style="left: 5%;"><span>2</span></div>
                                            <img src="img/bar.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <a class="popup red" title="<?= $vergelijking['popup5']; ?>"></a>
                                        <div class="bar">
                                            <div class="arrow" style="left: 5%;"><span>0,05</span></div>
                                            <img src="img/bar.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <a class="popup red" title="<?= $vergelijking['popup6']; ?>"></a>
                                        <div class="bar">
                                            <div class="arrow" style="left: 5%;"><span>95</span></div>
                                            <img src="img/bar.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <a class="popup red" title="<?= $vergelijking['popup7']; ?>"></a>
                                        <div class="bar">
                                            <div class="arrow" style="left: 10%;"><span>40,5</span></div>
                                            <img src="img/bar.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <a class="popup red" title="<?= $vergelijking['popup7']; ?>"></a>
                                        <div class="bar">
                                            <div class="arrow" style="left: 10%;"><span>14551</span></div>
                                            <img src="img/bar.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="small-7 columns grey">
                                <div class="row">
                                    <div class="flexslider slider2">
                                        <ul class="slides">
                                            <li>
                                                <div class="small-12 columns dark-grey">
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <span class="vergelijk_paneel"><?= $vergelijking['subtitle2']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns text-center">
                                                            <p><?= $vergelijking['afmetingen2']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 60%;"><span>11</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 50%;"><span>89,3</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 50%;"><span>15</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 50%;"><span>0,38</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 50%;"><span>679</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 50%;"><span>11,2</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 70%;"><span>18585</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="small-12 columns light-grey">
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <span class="vergelijk_leden"><?= $vergelijking['subtitle3']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns text-center">
                                                            <p><?= $vergelijking['afmetingen3']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 97%;"><span>53,6</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 63%;"><span>148,6</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 63%;"><span>40</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 70%;"><span>0,84</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 63%;"><span>1490</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 70%;"><span>6,7</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 97%;"><span>24874</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="small-12 columns dark-grey">
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <span class="vergelijk_vloerverwarming"><?= $vergelijking['subtitle4']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns text-center">
                                                            <p><?= $vergelijking['afmetingen4']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 70%;"><span>29</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 90%;"><span>1403</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 90%;"><span>ca.120</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 75%;"><span>0.89</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 80%;"><span>1593</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 85%;"><span>0,7</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 65%;"><span>18410</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="small-12 columns light-grey">
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <span class="vergelijk_vloerverwarming2"><?= $vergelijking['subtitle5']; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns text-center">
                                                            <p><?= $vergelijking['afmetingen5']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 65%;"><span>29</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 97%;"><span>3126</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 97%;"><span>ca.240</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 97%;"><span>1,97</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 97%;"><span>3508</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 97%;"><span>0,3</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <div class="bar">
                                                                <div class="arrow" style="left: 97%;"><span>24870</span></div>
                                                                <img src="img/bar.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-10 medium-offset-1 end columns">
                            <p><?= $vergelijking['text']; ?></p>
                        </div>
                    </div>
                </div>
            </section>
            
            <a name="<?= $general['anker5']; ?>"></a>
            <section id="collectie" data-magellan-destination="collectie">
                <div class="row">
                        <div class="medium-12 columns">
                            <h2><?= $collectie['title']; ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-8 medium-offset-2 columns">
                            <p class="intro"><?= $collectie['intro']; ?></p>
                    </div>
                    </div>
                <div class="products">
                    <ul>
                        <?php for($i=0; $i < 12; $i++) { ?>
                        <li>
                            <div class="product">
                                <img src="<?= $collectie['products'][$i]['image']; ?>">
                                <a class="overlay">
                                    <div>
                                        <i class="zoom"><?= $collectie['zoom']; ?></i>
                                        <span><?= $collectie['products'][$i]['title']; ?></span>
                                        <p><?= $collectie['products'][$i]['subtitle']; ?></p>
                                    </div>
                                </a>
                            </div>
                            <div class="lightbox">
                                <div class="row box">
                                    <a class="close">Close</a>
                                    <div class="medium-4 columns">
                                        <span class="headline"><?= $collectie['headline']; ?></span>
                                        <div class="information">
                                            <h3><?= $collectie['products'][$i]['title']; ?></h3>
                                            <h4><?= $collectie['products'][$i]['subtitle']; ?></h4>
                                            <?= $collectie['products'][$i]['list1']; ?>
                                            <?= $collectie['products'][$i]['list2']; ?>
                                            
                                            <a href="<?= $collectie['products'][$i]['link1']; ?>" target="_blank" class="light-button brochure"><?= $collectie['linkText2']; ?></a>
                                            <a href="<?= $collectie['products'][$i]['link2']; ?>" target="_blank" class="light-button view"><?= $collectie['linkText1']; ?></a>
                                            <?php if($collectie['products'][$i]['more'] == true) : ?>
                                                <h3><?= $collectie['products'][$i]['title2']; ?></h3>
                                                <h4><?= $collectie['products'][$i]['subtitle2']; ?></h4>
                                                <?= $collectie['products'][$i]['list3']; ?>
                                                <?= $collectie['products'][$i]['list4']; ?>

                                                <a href="<?= $collectie['products'][$i]['link3']; ?>" target="_blank" class="light-button brochure"><?= $collectie['linkText1']; ?></a>
                                                <a href="<?= $collectie['products'][$i]['link4']; ?>" target="_blank" class="light-button view"><?= $collectie['linkText2']; ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="medium-8 columns">
                                        <img src="<?= $collectie['products'][$i]['image']; ?>">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
            
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
                                            <div class="before step1">
                                                <p><?= $simulator['intro']; ?></p>
                                                <div style="opacity: 0.8;">
                                                    <hr>
                                                    <p><small><?= $simulator['win_bati']; ?></small></p>
                                                    <p><small><?= $simulator['win_bati_2']; ?></small></p>
                                                </div>
                                            </div>
                                            <div class="before step2">
                                                <p><?= $simulator['text7']; ?></p>
                                                <div style="opacity: 0.8;">
                                                    <hr>
                                                    <p><small><?= $simulator['win_bati']; ?></small></p>
                                                    <p><small><?= $simulator['win_bati_2']; ?></small></p>
                                                </div>
                                            </div>
                                            <div class="before step3">
                                                <p><?= $simulator['text2']; ?></p>
                                                <a href="#<?= $general['anker6']; ?>"><?= $simulator['text3']; ?></a>
                                                <div style="opacity: 0.8;">
                                                    <hr>
                                                    <p><small><?= $simulator['win_bati']; ?></small></p>
                                                    <p><small><?= $simulator['win_bati_2']; ?></small></p>
                                                </div>
                                            </div>
                                            <div class="before step4">
                                                <p class="ajaxloader" style="display:none; ">
                                                    <img src="img/ajax-loader.gif" style="width: 32px !important;">
                                                </p>
                                                <p><?= $simulator['text11']; ?></p>
                                                <a href="<?= $simulator['link1']; ?>" target="_blank"><?= $simulator['text12']; ?></a>
                                                <div style="opacity: 0.8;">
                                                    <hr>
                                                    <p><small><?= $simulator['win_bati']; ?></small></p>
                                                    <p><small><?= $simulator['win_bati_2']; ?></small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="medium-8 columns">
                                    <div class="main same-height">
                                        <div class="steps">
                                            <ul>
                                                <li class="active"><span><?= $simulator['step']; ?> 1</span></li>
                                                <li><span><?= $simulator['step']; ?> 2</span></li>
                                                <li><span><?= $simulator['step']; ?> 3</span></li>
                                                <li><span><?= $simulator['step']; ?> 4</span></li>
                                            </ul>
                                        </div>
                                        <div class="flexslider slider">
                                            <ul class="slides">
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
                                                    <div class="white-box">
                                                        <div class="row text-center">
                                                            <div class="medium-12 columns">
                                                                <h3><?= $simulator['text8']; ?> <a class="question dark popup white" title="<?= $simulator['question6']; ?>"></a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center">
                                                            <div class="medium-12 columns">
                                                                <div class="readonly big">&euro; <span class="besparing_30_jaar"></span> <small>= <span class="co2_final"></span> kg CO<span class="h2o">2</span> <a class="question dark popup white" title="<?= $simulator['question7']; ?>"></a></small></div>
                                                            </div>
                                                        </div>
                                                        <div class="row whitespace text-center">
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
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="medium-12 columns">
                                                            <h3><?= $simulator['subtitle4']; ?></h3>
                                                        </div>
                                                        <div class="large-12 columns">
                                                            
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
                                                                        <br>
                                                                        <span><?= $simulator['labelTitle14']; ?></span>
                                                                        <br>
                                                                        <input type="text" name="question" id="question" class="medium">
                                                                    </p>
                                                                    <p>
                                                                        <a class="readonly medium" id="participate" href="javascript:void();" style="color: #cc0000;"><?= $simulator['labelTitle15']; ?></a>
                                                                    </p>                                                                    
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="button-bar">
                                                <a class="grey-button prev" style="display: none;"></a>
                                                <a class="grey-button next"><?= $simulator['step']; ?> 2 ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <a name="<?= $general['anker6']; ?>"></a>
            <section id="dealers" data-magellan-destination="dealers">
                <div class="row">
                    <div class="medium-12 columns text-center">
                        <h2><?= $dealers['title']; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-8 medium-offset-2 columns text-center">
                        <p class="intro"><?= $dealers['intro']; ?></p>
                    </div>
                </div>

                <div id="map-container" class="bh-sl-container">
                    <div class="bh-sl-loc-list">
                        <div class="bh-sl-form-container">
                            <form id="bh-sl-user-location" method="post" action="">
                                <div class="form-input">
                                    <label for="bh-sl-address"><?= $dealers['searchTitle']; ?></label>
                                    <input type="text" id="bh-sl-address" name="bh-sl-address" />
                                </div>

                                <button id="bh-sl-submit" type="submit"><?= $dealers['search']; ?></button>
                            </form>
                        </div>
                        <ul class="list"></ul>
                    </div>
                    <div id="bh-sl-map" class="bh-sl-map"></div>
                </div>
                
                <div class="clearfix"></div>
            </section>
            
            <a name="<?= $general['anker8']; ?>"></a>
            <section id="downloads">
                <div class="row">
                    <div class="medium-12">
                        <h2><?= $downloads['title']; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 medium-offset-3 columns end">
                        <img src="<?= $downloads['img']; ?>" class="left" width="159px">
                        <span><?= $downloads['subtitle']; ?></span>
                        <h3><?= $downloads['subtitle2']; ?></h3>
                        <ul>
                            <li class="preview"><a href="<?= $downloads['link1']; ?>" target="_blank"><?= $downloads['linkText1']; ?></a></li>
                            <li class="download"><a href="<?= $downloads['link2']; ?>" target="_blank"><?= $downloads['linkText2']; ?></a></li> 
                        </ul>
                        <ul>
                            <li class="beelden"><a href="<?= $downloads['link3']; ?>" target="_blank"><?= $downloads['linkText3']; ?></a></li>
                            <li class="perstekst"><a href="<?= $downloads['link4']; ?>" target="_blank"><?= $downloads['linkText4']; ?></a></li>
                        </ul>
                    </div>
                </div>
                
                
            </section>
            
            <a name="<?= $general['anker9']; ?>"></a>
            <section id="contact">
                <div class="row">
                    <div class="medium-12 columns">
                        <h2><?= $contact['title']; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-8 medium-offset-2 columns">
                        <p class="intro"><?= $contact['intro']; ?></p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="medium-6 columns">
                        <form id="form">
                            <div class="row">
                                <div class="medium-12 columns">
                                    <input type="text" name="name" id="name" placeholder="<?= $contact['input1']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="medium-12 columns">
                                    <input type="email" name="email" id="email" placeholder="<?= $contact['input2']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="medium-12 columns">
                                    <input type="text" name="number" id="number" placeholder="<?= $contact['input3']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="medium-12 columns">
                                    <input type="text" name="subject" id="subject" placeholder="<?= $contact['input4']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="medium-12 columns">
                                    <textarea name="message" id="message"><?= $contact['input5']; ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="medium-12 columns">
                                    <input type="text" name="hello" id="hello">
                                </div>
                            </div>
                            <div class="row">
                                <div class="medium-12 columns">
                                    <input type="submit" id="submit" value="<?= $contact['input6']; ?>"><span id="returnmessage"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="medium-5 medium-offset-1 columns">
                        <div class="row">
                            <div class="medium-12 columns">
                                <ul>
                                    <li class="mail"><span><?= $contact['contact1']; ?> <a href="mailto:info@jaga.be">info@jaga.be</a></span></li>
                                    <li class="phone"><span><?= $contact['contact2']; ?> <a href="tel:+3211294111">+32 11 29 41 11</a></span></li>
                                    <li class="like"><span><?= $contact['contact3']; ?> <a href="https://www.facebook.com/Jaga.Experience" target="_blank">Jaga Facebook</a></span></li>
                                    <li class="watch"><span><?= $contact['contact4']; ?> <a href="https://www.youtube.com/user/jagaexperience" target="_blank">Jaga Youtube Channel</a></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="medium-12 columns">
                                <div class="mapview"></div>
                                <div class="left">
                                    <h3><?= $contact['subtitle']; ?></h3>
                                    <p class="text-left"><?= $contact['text']; ?><br><a target="_blank" href="https://www.google.nl/maps/place/Jaga+nv/@50.902798,5.430089,17z/data=!3m1!4b1!4m2!3m1!1s0x47c11ff78b2096ff:0xaadad52b52732255" class="red-btn"><?= $contact['route']; ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        
        <footer id="footer">
            <p>Copyright &copy; 2014 Jaga NV. - <a href="http://theradiatorfactory.com/legal.aspx" target="_blank">Legal notice</a></p>
        </footer>
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqtiofyAeLeenBHqVcPt7995DALlDogtU"></script>
        <script>
		 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		 ga('create', 'UA-8894451-16', 'auto');
		 ga('send', 'pageview');
		
		</script>
        <script type="text/javascript" src="js/min/main-min.js"></script>
    </body>
</html>
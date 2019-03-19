<?php
if (!empty(cs_get_option('tophedbg'))) {
    $hedercoller = cs_get_option('tophedbg');
    $image = !empty($hedercoller['image']) ? $hedercoller['image'] . ';' : '';
    $repeat = !empty($hedercoller['repeat']) ? $hedercoller['repeat'] . ';' : '';
    $position = !empty($hedercoller['position']) ? $hedercoller['position'] . ';' : '';
    $attachment = !empty($hedercoller['attachment']) ? $hedercoller['attachment'] . ';' : '';
    $color = !empty($hedercoller['color']) ? $hedercoller['color'] . ';' : '';
}

if (!empty(cs_get_option('wlsecqbg'))) {
    $wlqbg = cs_get_option('wlsecqbg');
    $wqimage = !empty($wlqbg['image']) ? $wlqbg['image'] . ';' : '';
    $wqrepeat = !empty($wlqbg['repeat']) ? $wlqbg['repeat'] . ';' : '';
    $wqposition = !empty($wlqbg['position']) ? $wlqbg['position'] . ';' : '';
    $wqattachment = !empty($wlqbg['attachment']) ? $wlqbg['attachment'] . ';' : '';
    $wqcolor = !empty($wlqbg['color']) ? $wlqbg['color'] . ';' : '';
    $wqsize = !empty($wlqbg['size']) ? $wlqbg['size'] . ';' : '';
}

if (!empty(cs_get_option('formbg'))) {
    $formbg = cs_get_option('formbg');
    $formimage = !empty($formbg['image']) ? $formbg['image'] . ';' : '';
    $formrepeat = !empty($formbg['repeat']) ? $formbg['repeat'] . ';' : '';
    $formposition = !empty($formbg['position']) ? $formbg['position'] . ';' : '';
    $formattachment = !empty($formbg['attachment']) ? $formbg['attachment'] . ';' : '';
    $formcolor = !empty($formbg['color']) ? $formbg['color'] . ';' : '';
    $formsize = !empty($formbg['size']) ? $formbg['size'] . ';' : '';
}
if (!empty(cs_get_option('footerbg'))) {
    $footerbg = cs_get_option('footerbg');
    $footerimage = !empty($footerbg['image']) ? $footerbg['image'] . ';' : '';
    $footerrepeat = !empty($footerbg['repeat']) ? $footerbg['repeat'] . ';' : '';
    $footerposition = !empty($footerbg['position']) ? $footerbg['position'] . ';' : '';
    $footerattachment = !empty($footerbg['attachment']) ? $footerbg['attachment'] . ';' : '';
    $footercolor = !empty($footerbg['color']) ? $footerbg['color'] . ';' : '';
    $footersize = !empty($footerbg['size']) ? $footerbg['size'] . ';' : '';
}
$text_color = cs_get_option('headertextcolor');
$bannert1fntsiz = cs_get_option('bannert1fontsize');
$banner = cs_get_option('bannerimage');

$innerbg = cs_get_option('innertitle');
$menuhoveractive = cs_get_option('HoverActive');

$texttransform = cs_get_option('t1txttransform');
$t2transform = cs_get_option('t2txttransform');
$t2ftsize = cs_get_option('t2fontsize');
$t2ftwit = cs_get_option('t2fwidth');
$t1ftwit = cs_get_option('ban1fwidth');
$mapimage = cs_get_option('map_image');
$attachment = wp_get_attachment_image_src($mapimage, 'full');
//header  OPtion-3

$menupading = cs_get_option('padding_menu');
if (!empty($menupading)) {
    $top = $menupading["top"];
    $right = $menupading["right"];
    $bottom = $menupading["bottom"];
    $left = $menupading["left"];
}

//Menu

if (!empty(cs_get_option('menubg'))) {
    $menubg = cs_get_option('menubg');
    $menuimage = !empty($menubg['image']) ? $menubg['image'] . ';' : '';
    $menurepeat = !empty($menubg['repeat']) ? $menubg['repeat'] . ';' : '';
    $menuposition = !empty($menubg['position']) ? $menubg['position'] . ';' : '';
    $menuattachment = !empty($menubg['attachment']) ? $menubg['attachment'] . ';' : '';
    $menucolor = !empty($menubg['color']) ? $menubg['color'] . ';' : '';
    $menusize = !empty($menubg['size']) ? $menubg['size'] . ';' : '';
}

//srv
$srvpading = cs_get_option('sec-pad');
if (!empty($srvpading)) {
    $topsrv = $srvpading ["top"];
    $rightsrv = $srvpading['right'];
    $leftsrv = $srvpading ['left'];
    $bottomsrv = $srvpading ['bottom'];
}
if (!empty(cs_get_option('servicebg'))) {
    $srvbg = cs_get_option('servicebg');
    $srv_image = !empty($srvbg['image']) ? $srvbg['image'] . ';' : '';
    $srv_repeat = !empty($srvbg['repeat']) ? $srvbg['repeat'] . ';' : '';
    $srv_position = !empty($srvbg['position']) ? $srvbg['position'] . ';' : '';
    $srv_attachment = !empty($srvbg['attachment']) ? $srvbg['attachment'] . ';' : '';
    $srv_size = !empty($srvbg['size']) ? $srvbg['size'] . ';' : '';
    $srv_color = !empty($srvbg['color']) ? $srvbg['color'] . ';' : '';
}

//Gal
$galpading = cs_get_option('padding_gal');
if (!empty($galpading)) {
    $gltop = $galpading ["top"];
    $glright = $galpading['right'];
    $glleft = $galpading ['left'];
    $glbottom = $galpading ['bottom'];
}

//double grid section
if (!empty(cs_get_option('dblgrida'))) {
    $dsabg = cs_get_option('dblgrida');
    $dsa_image = !empty($dsabg['image']) ? $dsabg['image'] . ';' : '';
    $dsa_repeat = !empty($dsabg['repeat']) ? $dsabg['repeat'] . ';' : '';
    $dsa_position = !empty($dsabg['position']) ? $dsabg['position'] . ';' : '';
    $dsa_attachment = !empty($dsabg['attachment']) ? $dsabg['attachment'] . ';' : '';
    $dsa_size = !empty($dsabg['size']) ? $dsabg['size'] . ';' : '';
    $dsa_color = !empty($dsabg['color']) ? $dsabg['color'] . ';' : '';
}
if (!empty(cs_get_option('dblgridab'))) {
    $dsabbg = cs_get_option('dblgridab');
    $dsab_image = !empty($dsabbg['image']) ? $dsabbg['image'] . ';' : '';
    $dsab_repeat = !empty($dsabbg['repeat']) ? $dsabbg['repeat'] . ';' : '';
    $dsab_position = !empty($dsabbg['position']) ? $dsabbg['position'] . ';' : '';
    $dsab_attachment = !empty($dsabbg['attachment']) ? $dsabbg['attachment'] . ';' : '';
    $dsab_size = !empty($dsabbg['size']) ? $dsabbg['size'] . ';' : '';
    $dsab_color = !empty($dsabbg['color']) ? $dsabbg['color'] . ';' : '';
}

if (!empty(cs_get_option('dblgridac'))) {
    $dsacg = cs_get_option('dblgridac');
    $dsac_image = !empty($dsacbg['image']) ? $dsacbg['image'] . ';' : '';
    $dsac_repeat = !empty($dsacbg['repeat']) ? $dsacbg['repeat'] . ';' : '';
    $dsac_position = !empty($dsacbg['position']) ? $dsacbg['position'] . ';' : '';
    $dsac_attachment = !empty($dsacbg['attachment']) ? $dsacbg['attachment'] . ';' : '';
    $dsac_size = !empty($dsacbg['size']) ? $dsacbg['size'] . ';' : '';
    $dsac_color = !empty($dsacbg['color']) ? $dsacbg['color'] . ';' : '';
}

if (!empty(cs_get_option('othersrvicebg'))) {
    $osrvbg = cs_get_option('othersrvicebg');
    $osrv_image = !empty($osrvbg['image']) ? $osrvbg['image'] . ';' : '';
    $osrv_repeat = !empty($osrvbg['repeat']) ? $osrvbg['repeat'] . ';' : '';
    $osrv_position = !empty($osrvbg['position']) ? $osrvbg['position'] . ';' : '';
    $osrv_attachment = !empty($osrvbg['attachment']) ? $osrvbg['attachment'] . ';' : '';
    $osrv_size = !empty($osrvbg['size']) ? $osrvbg['size'] . ';' : '';
    $osrv_color = !empty($osrvbg['color']) ? $osrvbg['color'] . ';' : '';
}



$osrvpading = cs_get_option('otherservsec-pad');
if (!empty($galpading)) {
    $osrvtop = $osrvpading ["top"];
    $osrvright = $osrvpading['right'];
    $osrvleft = $osrvpading ['left'];
    $osrvbottom = $osrvpading ['bottom'];
}

$wlqtitlesec = cs_get_option('titlefield');
if (!empty($wlqtitlesec)) {
    $wlqfontsize = $wlqtitlesec['size'];
    $wlqfontweight = $wlqtitlesec ['font_weight'];
    $wlqcolor = $wlqtitlesec ['colour'];
}

if (!empty(cs_get_option('catonembg'))) {
    $catonembg = cs_get_option('catonembg');
    $catoneimage = !empty($catonembg['image']) ? $catonembg['image'] . ';' : '';
    $catonerepeat = !empty($catonembg['repeat']) ? $catonembg['repeat'] . ';' : '';
    $catoneposition = !empty($catonembg['position']) ? $catonembg['position'] . ';' : '';
    $catoneattachment = !empty($catonembg['attachment']) ? $catonembg['attachment'] . ';' : '';
    $catonecolor = !empty($catonembg['color']) ? $catonembg['color'] . ';' : '';
    $catonesize = !empty($catonembg['size']) ? $catonembg['size'] . ';' : '';
}


if (!empty(cs_get_option('catonembgtwo'))) {
    $cattwombg = cs_get_option('catonembgtwo');
    $cattwoimage = !empty($cattwombg['image']) ? $cattwombg['image'] . ';' : '';
    $cattworepeat = !empty($cattwombg['repeat']) ? $cattwombg['repeat'] . ';' : '';
    $cattwoposition = !empty($cattwombg['position']) ? $cattwombg['position'] . ';' : '';
    $cattwoattachment = !empty($cattwombg['attachment']) ? $cattwombg['attachment'] . ';' : '';
    $cattwocolor = !empty($cattwombg['color']) ? $cattwombg['color'] . ';' : '';
    $cattwosize = !empty($cattwombg['size']) ? $cattwombg['size'] . ';' : '';
}
if (!empty(cs_get_option('devideroneBg'))) {
    if (!empty(cs_get_option('devideroneBg'))) {
        $devideronbg = cs_get_option('devideroneBg');
        $devideronimage = !empty($devideronbg['image']) ? $devideronbg['image'] . ';' : '';
        $devideronrepeat = !empty($devideronbg['repeat']) ? $devideronbg['repeat'] . ';' : '';
        $devideronsize = !empty($devideronbg['size']) ? $devideronbg['size'] . ';' : '';
        $devideronposition = !empty($devideronbg['position']) ? $devideronbg['position'] . ';' : '';
        $devideronattachment = !empty($devideronbg['attachment']) ? $devideronbg['attachment'] . ';' : '';
        $devideroncolor = !empty($devideronbg['color']) ? $devideronbg['color'] . ';' : '';
    }
}
$dvdpadone = cs_get_option('deviderone-padding');
if (!empty($dvdpadone)) {
    $dvdpadonetop = $dvdpadone ["top"];
    $dvdpadoneright = $dvdpadone['right'];
    $dvdpadoneleft = $dvdpadone ['left'];
    $dvdpadonebottom = $dvdpadone ['bottom'];
}


if (!empty(cs_get_option('devidertwoBg'))) {
    $devidertwobg = cs_get_option('devidertwoBg');
    $devidertwoimage = !empty($devidertwobg['image']) ? $devidertwobg['image'] . ';' : '';
    $devidertworepeat = !empty($devidertwobg['repeat']) ? $devidertwobg['repeat'] . ';' : '';
    $devidertwosize = !empty($devidertwobg['size']) ? $devidertwobg['size'] . ';' : '';
    $devidertwoposition = !empty($devidertwobg['position']) ? $devidertwobg['position'] . ';' : '';
    $devidertwoattachment = !empty($devidertwobg['attachment']) ? $devidertwobg['attachment'] . ';' : '';
    $devidertwocolor = !empty($devidertwobg['color']) ? $devidertwobg['color'] . ';' : '';
}

$dvdpadtwo = cs_get_option('devidertwo-padding');
if (!empty($dvdpadtwo)) {
    $dvdpadtwotop = $dvdpadtwo ["top"];
    $dvdpadtworight = $dvdpadtwo['right'];
    $dvdpadtwoleft = $dvdpadtwo ['left'];
    $dvdpadtwobottom = $dvdpadtwo ['bottom'];
}
?>

<style>
    .dvsecone{
        background:url(<?php echo $devideronimage; ?>); 
        background-repeat: <?php echo $devideronrepeat; ?>;
        background-size: <?php echo $devidertwosize; ?>;
        background-position: <?php echo $devidertwoposition; ?>;
        background-attachment: <?php echo $devidertwoattachment; ?>;
        background-color: <?php echo $devidertwocolor; ?>; 
        padding-top:<?php echo $dvdpadonetop; ?>px;
        padding-right:<?php echo $dvdpadoneright; ?>px;
        padding-bottom:<?php echo $dvdpadonebottom; ?>px;
        padding-left:<?php echo $dvdpadoneleft; ?>px;
    } 
    .dvsectwo{
        background:url(<?php echo $devidertwoimage; ?>); 
        background-repeat: <?php echo $devidertworepeat; ?>;
        background-size: <?php echo $devidertwosize; ?>;
        background-position: <?php echo $devidertwoposition; ?>;
        background-attachment: <?php echo $devidertwoattachment; ?>;
        background-color: <?php echo $devidertwocolor; ?>; 
        padding-top:<?php echo $dvdpadtwotop; ?>px;
        padding-right:<?php echo $dvdpadtworight; ?>px;
        padding-bottom:<?php echo $dvdpadtwobottom; ?>px;
        padding-left:<?php echo $dvdpadtwoleft; ?>px;
    }

    .cat-single-one .catmenubg{
        background:url(<?php echo $catoneimage; ?>);         
        background-size: <?php echo $catonesize; ?>;
        background-color: <?php echo $catonecolor; ?>;
        background-attachment: <?php echo $catoneattachment; ?>;
        background-position: <?php echo $catoneposition; ?>;
        background-repeat: <?php echo $catonerepeat; ?>;
        padding: 60px 80px !important;
    }



    .cat-single-one .catmenubg{
        background:url(<?php echo $catoneimage; ?>);         
        background-size: <?php echo $catonesize; ?>;
        background-color: <?php echo $catonecolor; ?>;
        background-attachment: <?php echo $catoneattachment; ?>;
        background-position: <?php echo $catoneposition; ?>;
        background-repeat: <?php echo $catonerepeat; ?>;
        padding: 60px 80px !important;
    }

    .cat-single-two .catmenubg{
        background:url(<?php echo $cattwoimage; ?>);         
        background-size: <?php echo $cattwosize; ?>;
        background-color: <?php echo $cattwocolor; ?>;
        background-attachment: <?php echo $cattwoattachment; ?>;
        background-position: <?php echo $cattwoposition; ?>;
        background-repeat: <?php echo $cattworepeat; ?>;
        padding: 60px 80px !important;
    }


    header.float-panel{
        background:<?php echo $color; ?>;

    }
    #topheader, #topheader a{
        color:<?php echo cs_get_option('headertextcolor'); ?>;
    }

    #topheader a:hover{
        color:<?php echo cs_get_option('headertextcolorhover'); ?>;
    }

    #header-phone a{ color:<?php echo $phonecolor = cs_get_option('phone-Color'); ?> !important;}  
    /* ======================
        Social Media  ==========*/
    div#header-social li a i {
        color: <?php echo cs_get_option('smcolor'); ?>;
        font-size: <?php echo cs_get_option('smfontsize'); ?>;
    }
    div#header-social li:hover a i {
        color: <?php echo cs_get_option('smcolorhover'); ?>;
    }
    /* ======================
    Menu Start  ==========*/

    #cssmenu a{              
        padding-top:<?php echo $top; ?>px;
        padding-right:<?php echo $right; ?>px;
        padding-bottom:<?php echo $bottom; ?>px;
        padding-left:<?php echo $left; ?>px;
    }

    #top-header-menu{
        background:url(<?php echo $menuimage; ?>);         
        background-size: <?php echo $menusize; ?>;
        background-color: <?php echo $menucolor; ?>;
        background-attachment: <?php echo $menuattachment; ?>;
        background-position: <?php echo $menuposition; ?>;
        background-repeat: <?php echo $menurepeat; ?>;
    }

    #cssmenu a{
        color:<?php echo cs_get_option('textcolor'); ?>;
    }
    #cssmenu > ul > li > a {
        font-size: <?php echo cs_get_option('fontsize'); ?>px;
        font-weight:  <?php echo cs_get_option('font-weight'); ?>;
        text-transform:<?php echo cs_get_option('texttransform'); ?>;
    }


    #cssmenu .current-menu-item a{border-color:<?php echo $menuhoveractive; ?>;}
    ul#menu-main-menu li a:hover, .current-menu-item a { color:<?php echo $menuhoveractive; ?> !important;}

    #cssmenu ul li.has-sub > a:after {content:"<?php echo cs_get_option('dropdowniconroot'); ?>";}
    #cssmenu ul ul li  a span:before {content: "<?php echo cs_get_option('dropdownicon'); ?>";}

    #cssmenu ul ul{background:<?php echo cs_get_option('dropdownbg'); ?> }
    #cssmenu ul ul a{color:<?php echo cs_get_option('dropdowntextcolor'); ?> !important;}
    #cssmenu ul ul a:hover, #cssmenu ul ul  .active a {color:<?php echo cs_get_option('dropdownHoverActive'); ?> !important;}
    ul#menu-main-menu ul ul li:hover, ul#menu-main-menu ul li:hover{background:<?php echo cs_get_option('dropdownrow'); ?> !important;}


    /*====================
       welcome ===========    */
    section.welcome-section{
        background:url(<?php echo $wqimage; ?>);         
        background-size: <?php echo $wqsize; ?>;
        background-color: <?php echo $wqcolor; ?>;
        background-attachment: <?php echo $wqattachment; ?>;
        background-position: <?php echo $wqposition; ?>;
        background-repeat: <?php echo $wqrepeat; ?>;
    }
    .wlqcont {height: <?php echo cs_get_option('scorlhight'); ?>px;  
              overflow-y: scroll;
    }
    h2.wlq-sec-titel{
        font-size:<?php echo $wlqfontsize; ?>px;
        color:<?php echo $wlqcolor; ?>;
        font-weight:<?php echo $wlqfontweight; ?>;
    }

    /*====================
  Form ===========    */
    section#home-form{
        background:url(<?php echo $formimage; ?>);         
        background-size: <?php echo $formsize; ?>;
        background-color: <?php echo $formcolor; ?>;
        background-attachment: <?php echo $formattachment; ?>;
        background-position: <?php echo $formposition; ?>;
        background-repeat: <?php echo $formrepeat; ?>;
    }



    /*====================
   Banner ===========    */
    #banner{
        background:url(<?php echo $banner; ?>) no-repeat center;  
        background-size:cover;
        height:<?php echo cs_get_option('bannerheight'); ?>vh;
    }


    .bannert1 h1, .bannert2 h2 {              
        color:<?php echo cs_get_option('bannert1color'); ?>;           
    }

    .bannert1 h1{
        font-size:<?php echo $bannert1fntsiz; ?>px; 
        font-weight:<?php echo $t1ftwit; ?>; 
        text-transform:<?php echo $texttransform; ?>;

    }
    .bannert2 h2{
        text-transform:<?php echo $t2txttransform; ?>; 
        font-size:<?php echo $t2ftsize; ?>px; 
        font-weight:<?php echo $t2ftwit; ?>; 

    }

    /*====================
   slider ===========    */
    section#slider{       
        background-color: <?php echo $color; ?>;

    }

    /* ======================
       Gallery  ==========*/

    section.gallery{              
        padding-top:<?php echo $gltop; ?>px;
        padding-right:<?php echo $glright; ?>px;
        padding-bottom:<?php echo $glbottom; ?>px;
        padding-left:<?php echo $glleft; ?>px;
    }
    /*====================
  services-section ===========    */    

    section.services-section{              
        padding-top:<?php echo $topsrv; ?>px;
        padding-right:<?php echo $rightsrv; ?>px;
        padding-bottom:<?php echo $bottomsrv; ?>px;
        padding-left:<?php echo $leftsrv; ?>px;
        background:url(<?php echo $srv_image; ?>);         
        background-size: <?php echo $srv_size; ?>;
        background-color: <?php echo $srv_color; ?>;
        background-attachment: <?php echo $srv_attachment; ?>;
        background-position: <?php echo $srv_position; ?>;
        background-repeat: <?php echo $srv_repeat; ?>;
    }



    .otherservices-section{              
        padding-top:<?php echo $osrvtop; ?>px;
        padding-right:<?php echo $osrvright; ?>px;
        padding-bottom:<?php echo $osrvbottom; ?>px;
        padding-left:<?php echo $osrvleft; ?>px;
        background:url(<?php echo $osrv_image; ?>);         
        background-size: <?php echo $osrv_size; ?>;
        background-color: <?php echo $osrv_color; ?>;
        background-attachment: <?php echo $osrv_attachment; ?>;
        background-position: <?php echo $osrv_position; ?>;
        background-repeat: <?php echo $osrv_repeat; ?>;
    }


    /*====================
     Doublesec ===========    */
    section.dblgrd-sectionA{
        background:url(<?php echo $dsa_image; ?>);         
        background-size: <?php echo $dsa_size; ?>;
        background-color: <?php echo $dsa_color; ?>;
        background-attachment: <?php echo $dsa_attachment; ?>;
        background-position: <?php echo $dsa_position; ?>;
        background-repeat: <?php echo $dsa_repeat; ?>;
    }

    section.dblgrd-sectionB{
        background:url(<?php echo $dsab_image; ?>);         
        background-size: <?php echo $dsab_size; ?>;
        background-color: <?php echo $dsab_color; ?>;
        background-attachment: <?php echo $dsab_attachment; ?>;
        background-position: <?php echo $dsab_position; ?>;
        background-repeat: <?php echo $dsab_repeat; ?>;
    }
    section.dblgrd-sectionC{
        background:url(<?php echo $dsac_image; ?>);         
        background-size: <?php echo $dsac_size; ?>;
        background-color: <?php echo $dsac_color; ?>;
        background-attachment: <?php echo $dsac_attachment; ?>;
        background-position: <?php echo $dsac_position; ?>;
        background-repeat: <?php echo $dsac_repeat; ?>;
    }

    /*====================
     Inner Page ===========    */
    .tetel-inner-page{
        background:url(<?php echo $innerbg; ?>) no-repeat center;         

    }

    /*====================
        Gallery ===========    */
    h2.gal-titele{
        font-size:<?php echo cs_get_option('galfontsize'); ?>px;
        color:<?php echo cs_get_option('galcolour'); ?>;
        font-weight:<?php echo cs_get_option('galfwidth'); ?>;
    }

    /*====================
    Footer ===========    */
    .footer-section{
        background:url(<?php echo $footerimage; ?>);         
        background-size: <?php echo $footersize; ?>;
        background-color: <?php echo $footercolor; ?>;
        background-attachment: <?php echo $footerattachment; ?>;
        background-position: <?php echo $footerposition; ?>;
        background-repeat: <?php echo $footerrepeat; ?>;
    }

    section.copyright-section{
        color:<?php echo cs_get_option('copytextcoler'); ?>; 
        font-size:<?php echo cs_get_option('copytextsize'); ?>px;
    }
    .text-copy a{
        color:<?php echo cs_get_option('ancoretextcoler'); ?>; 
    }

    .text-copy{
        color:<?php echo cs_get_option('copytextcoler'); ?>; 
    }

    section.conutctpage-bg{ background:url(<?php echo $attachment[0]; ?>); }
</style>

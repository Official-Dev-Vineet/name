<?php 
$user = $_GET['user6'];
$nam = $_GET['name'];
include 'connection.php';

$icon = mysqli_query($sql_con, "SELECT * FROM introduction where RegistrationId='$user'");
while($ico = mysqli_fetch_array($icon))
{
    $logo = $ico['Logo'];
}
?>

<?php
$contact = mysqli_query($sql_con, "SELECT * FROM register where RegistrationId='$user'");
while($con = mysqli_fetch_array($contact))
{
    $MobileNo = $con['MobileNo'];
    $EmailId = $con['EmailId'];
    $location = $con['CompanyLocation'];
    $city = $con['CompanyCity'];
    $pincode = $con['CompanyPincode'];
    $State = $con['State'];
    $country = $con['Country'];
}

$link = mysqli_query($sql_con, "SELECT * FROM socialmedia where RegistrationId='$user'");
while($row = mysqli_fetch_array($link))
{
    $facebook = $row['Facebook'];
    $Twitter = $row['Twitter'];
    $Instagram = $row['Instagram'];
    $LinkedIn = $row['LinkedIn'];
    $youtube = $row['YouTube'];
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- molla/index-4.html  22 Nov 2019 09:53:08 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $nam; ?></title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="assets/css/demos/demo-4.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        @gm-Red-50: #FFEBEE;
@gm-Red-100: #FFCDD2;
@gm-Red-200: #EF9A9A;
@gm-Red-300: #E57373;
@gm-Red-400: #EF5350;
@gm-Red-500: #F44336;
@gm-Red-600: #E53935;
@gm-Red-700: #D32F2F;
@gm-Red-800: #C62828;
@gm-Red-900: #B71C1C;
@gm-Red-A100: #FF8A80;
@gm-Red-A200: #FF5252;
@gm-Red-A400: #FF1744;
@gm-Red-A700: #D50000;
@gm-Pink-50: #FCE4EC;
@gm-Pink-100: #F8BBD0;
@gm-Pink-200: #F48FB1;
@gm-Pink-300: #F06292;
@gm-Pink-400: #EC407A;
@gm-Pink-500: #E91E63;
@gm-Pink-600: #D81B60;
@gm-Pink-700: #C2185B;
@gm-Pink-800: #AD1457;
@gm-Pink-900: #880E4F;
@gm-Pink-A100: #FF80AB;
@gm-Pink-A200: #FF4081;
@gm-Pink-A400: #F50057;
@gm-Pink-A700: #C51162;
@gm-Purple-50: #F3E5F5;
@gm-Purple-100: #E1BEE7;
@gm-Purple-200: #CE93D8;
@gm-Purple-300: #BA68C8;
@gm-Purple-400: #AB47BC;
@gm-Purple-500: #9C27B0;
@gm-Purple-600: #8E24AA;
@gm-Purple-700: #7B1FA2;
@gm-Purple-800: #6A1B9A;
@gm-Purple-900: #4A148C;
@gm-Purple-A100: #EA80FC;
@gm-Purple-A200: #E040FB;
@gm-Purple-A400: #D500F9;
@gm-Purple-A700: #AA00FF;
@gm-Deep-Purple-50: #EDE7F6;
@gm-Deep-Purple-100: #D1C4E9;
@gm-Deep-Purple-200: #B39DDB;
@gm-Deep-Purple-300: #9575CD;
@gm-Deep-Purple-400: #7E57C2;
@gm-Deep-Purple-500: #673AB7;
@gm-Deep-Purple-600: #5E35B1;
@gm-Deep-Purple-700: #512DA8;
@gm-Deep-Purple-800: #4527A0;
@gm-Deep-Purple-900: #311B92;
@gm-Deep-Purple-A100: #B388FF;
@gm-Deep-Purple-A200: #7C4DFF;
@gm-Deep-Purple-A400: #651FFF;
@gm-Deep-Purple-A700: #6200EA;
@gm-Indigo-50: #E8EAF6;
@gm-Indigo-100: #C5CAE9;
@gm-Indigo-200: #9FA8DA;
@gm-Indigo-300: #7986CB;
@gm-Indigo-400: #5C6BC0;
@gm-Indigo-500: #3F51B5;
@gm-Indigo-600: #3949AB;
@gm-Indigo-700: #303F9F;
@gm-Indigo-800: #283593;
@gm-Indigo-900: #1A237E;
@gm-Indigo-A100: #8C9EFF;
@gm-Indigo-A200: #536DFE;
@gm-Indigo-A400: #3D5AFE;
@gm-Indigo-A700: #304FFE;
@gm-Blue-50: #E3F2FD;
@gm-Blue-100: #BBDEFB;
@gm-Blue-200: #90CAF9;
@gm-Blue-300: #64B5F6;
@gm-Blue-400: #42A5F5;
@gm-Blue-500: #2196F3;
@gm-Blue-600: #1E88E5;
@gm-Blue-700: #1976D2;
@gm-Blue-800: #1565C0;
@gm-Blue-900: #0D47A1;
@gm-Blue-A100: #82B1FF;
@gm-Blue-A200: #448AFF;
@gm-Blue-A400: #2979FF;
@gm-Blue-A700: #2962FF;
@gm-Light-Blue-50: #E1F5FE;
@gm-Light-Blue-100: #B3E5FC;
@gm-Light-Blue-200: #81D4FA;
@gm-Light-Blue-300: #4FC3F7;
@gm-Light-Blue-400: #29B6F6;
@gm-Light-Blue-500: #03A9F4;
@gm-Light-Blue-600: #039BE5;
@gm-Light-Blue-700: #0288D1;
@gm-Light-Blue-800: #0277BD;
@gm-Light-Blue-900: #01579B;
@gm-Light-Blue-A100: #80D8FF;
@gm-Light-Blue-A200: #40C4FF;
@gm-Light-Blue-A400: #00B0FF;
@gm-Light-Blue-A700: #0091EA;
@gm-Cyan-50: #E0F7FA;
@gm-Cyan-100: #B2EBF2;
@gm-Cyan-200: #80DEEA;
@gm-Cyan-300: #4DD0E1;
@gm-Cyan-400: #26C6DA;
@gm-Cyan-500: #00BCD4;
@gm-Cyan-600: #00ACC1;
@gm-Cyan-700: #0097A7;
@gm-Cyan-800: #00838F;
@gm-Cyan-900: #006064;
@gm-Cyan-A100: #84FFFF;
@gm-Cyan-A200: #18FFFF;
@gm-Cyan-A400: #00E5FF;
@gm-Cyan-A700: #00B8D4;
@gm-Teal-50: #E0F2F1;
@gm-Teal-100: #B2DFDB;
@gm-Teal-200: #80CBC4;
@gm-Teal-300: #4DB6AC;
@gm-Teal-400: #26A69A;
@gm-Teal-500: #009688;
@gm-Teal-600: #00897B;
@gm-Teal-700: #00796B;
@gm-Teal-800: #00695C;
@gm-Teal-900: #004D40;
@gm-Teal-A100: #A7FFEB;
@gm-Teal-A200: #64FFDA;
@gm-Teal-A400: #1DE9B6;
@gm-Teal-A700: #00BFA5;
@gm-Green-50: #E8F5E9;
@gm-Green-100: #C8E6C9;
@gm-Green-200: #A5D6A7;
@gm-Green-300: #81C784;
@gm-Green-400: #66BB6A;
@gm-Green-500: #4CAF50;
@gm-Green-600: #43A047;
@gm-Green-700: #388E3C;
@gm-Green-800: #2E7D32;
@gm-Green-900: #1B5E20;
@gm-Green-A100: #B9F6CA;
@gm-Green-A200: #69F0AE;
@gm-Green-A400: #00E676;
@gm-Green-A700: #00C853;
@gm-Light-Green-50: #F1F8E9;
@gm-Light-Green-100: #DCEDC8;
@gm-Light-Green-200: #C5E1A5;
@gm-Light-Green-300: #AED581;
@gm-Light-Green-400: #9CCC65;
@gm-Light-Green-500: #8BC34A;
@gm-Light-Green-600: #7CB342;
@gm-Light-Green-700: #689F38;
@gm-Light-Green-800: #558B2F;
@gm-Light-Green-900: #33691E;
@gm-Light-Green-A100: #CCFF90;
@gm-Light-Green-A200: #B2FF59;
@gm-Light-Green-A400: #76FF03;
@gm-Light-Green-A700: #64DD17;
@gm-Lime-50: #F9FBE7;
@gm-Lime-100: #F0F4C3;
@gm-Lime-200: #E6EE9C;
@gm-Lime-300: #DCE775;
@gm-Lime-400: #D4E157;
@gm-Lime-500: #CDDC39;
@gm-Lime-600: #C0CA33;
@gm-Lime-700: #AFB42B;
@gm-Lime-800: #9E9D24;
@gm-Lime-900: #827717;
@gm-Lime-A100: #F4FF81;
@gm-Lime-A200: #EEFF41;
@gm-Lime-A400: #C6FF00;
@gm-Lime-A700: #AEEA00;
@gm-Yellow-50: #FFFDE7;
@gm-Yellow-100: #FFF9C4;
@gm-Yellow-200: #FFF59D;
@gm-Yellow-300: #FFF176;
@gm-Yellow-400: #FFEE58;
@gm-Yellow-500: #FFEB3B;
@gm-Yellow-600: #FDD835;
@gm-Yellow-700: #FBC02D;
@gm-Yellow-800: #F9A825;
@gm-Yellow-900: #F57F17;
@gm-Yellow-A100: #FFFF8D;
@gm-Yellow-A200: #FFFF00;
@gm-Yellow-A400: #FFEA00;
@gm-Yellow-A700: #FFD600;
@gm-Amber-50: #FFF8E1;
@gm-Amber-100: #FFECB3;
@gm-Amber-200: #FFE082;
@gm-Amber-300: #FFD54F;
@gm-Amber-400: #FFCA28;
@gm-Amber-500: #FFC107;
@gm-Amber-600: #FFB300;
@gm-Amber-700: #FFA000;
@gm-Amber-800: #FF8F00;
@gm-Amber-900: #FF6F00;
@gm-Amber-A100: #FFE57F;
@gm-Amber-A200: #FFD740;
@gm-Amber-A400: #FFC400;
@gm-Amber-A700: #FFAB00;
@gm-Orange-50: #FFF3E0;
@gm-Orange-100: #FFE0B2;
@gm-Orange-200: #FFCC80;
@gm-Orange-300: #FFB74D;
@gm-Orange-400: #FFA726;
@gm-Orange-500: #FF9800;
@gm-Orange-600: #FB8C00;
@gm-Orange-700: #F57C00;
@gm-Orange-800: #EF6C00;
@gm-Orange-900: #E65100;
@gm-Orange-A100: #FFD180;
@gm-Orange-A200: #FFAB40;
@gm-Orange-A400: #FF9100;
@gm-Orange-A700: #FF6D00;
@gm-Deep-Orange-50: #FBE9E7;
@gm-Deep-Orange-100: #FFCCBC;
@gm-Deep-Orange-200: #FFAB91;
@gm-Deep-Orange-300: #FF8A65;
@gm-Deep-Orange-400: #FF7043;
@gm-Deep-Orange-500: #FF5722;
@gm-Deep-Orange-600: #F4511E;
@gm-Deep-Orange-700: #E64A19;
@gm-Deep-Orange-800: #D84315;
@gm-Deep-Orange-900: #BF360C;
@gm-Deep-Orange-A100: #FF9E80;
@gm-Deep-Orange-A200: #FF6E40;
@gm-Deep-Orange-A400: #FF3D00;
@gm-Deep-Orange-A700: #DD2C00;
@gm-Brown-50: #EFEBE9;
@gm-Brown-100: #D7CCC8;
@gm-Brown-200: #BCAAA4;
@gm-Brown-300: #A1887F;
@gm-Brown-400: #8D6E63;
@gm-Brown-500: #795548;
@gm-Brown-600: #6D4C41;
@gm-Brown-700: #5D4037;
@gm-Brown-800: #4E342E;
@gm-Brown-900: #3E2723;
@gm-Grey-50: #FAFAFA;
@gm-Grey-100: #F5F5F5;
@gm-Grey-200: #EEEEEE;
@gm-Grey-300: #E0E0E0;
@gm-Grey-400: #BDBDBD;
@gm-Grey-500: #9E9E9E;
@gm-Grey-600: #757575;
@gm-Grey-700: #616161;
@gm-Grey-800: #424242;
@gm-Grey-900: #212121;
@gm-Blue-Grey-50: #ECEFF1;
@gm-Blue-Grey-100: #CFD8DC;
@gm-Blue-Grey-200: #B0BEC5;
@gm-Blue-Grey-300: #90A4AE;
@gm-Blue-Grey-400: #78909C;
@gm-Blue-Grey-500: #607D8B;
@gm-Blue-Grey-600: #546E7A;
@gm-Blue-Grey-700: #455A64;
@gm-Blue-Grey-800: #37474F;
@gm-Blue-Grey-900: #263238;

.fa-spin-fast {
    -webkit-animation: fa-spin-fast .2s infinite linear;
    animation: fa-spin-fast .2s infinite linear;
}

@-webkit-keyframes fa-spin-fast {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg);
    }
}

@keyframes fa-spin-fast {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg);
    }
}

.opacity(@opacity) {
    opacity: @opacity;
    @opacity-ie: (@opacity * 100);
    filter: ~"alpha(opacity=@{opacity-ie})";
}

.mc-transtition (@duration: .3s) {
    -webkit-transition: all @duration;
    -moz-transition: all @duration;
    -ms-transition: all @duration;
    -o-transition: all @duration;
    transition: all @duration;
}

.materializr(@colorVar; @accent: '500'; @type: background-color) {
    @colorCalc: %('gm-%s-%s', replace(@colorVar, ' ', '-'), replace(@accent, ' ', '-'));
    @{type}: @@colorCalc;
}


.material-card {
    position: relative;
    height: 0;
    padding-bottom: calc(~'100% - 16px');
    margin-bottom: 6.6em;
    h2 {
        position: absolute;
        top: calc(~'100% - 16px');
        left: 0;
        width: 100%;
        padding: 10px 16px;
        color: #fff;
        font-size: 1.4em;
        line-height: 1.6em;
        margin: 0;
        z-index: 10;
        .mc-transtition();
        span {
            display: block;
        }
        strong {
            font-weight: 400;
            display: block;
            font-size: .8em;
        }
        &:before,
        &:after {
            content: ' ';
            position: absolute;
            left: 0;
            top: -16px;
            width: 0;
            border: 8px solid;
            .mc-transtition();
        }
        &:after {
            top: auto;
            bottom: 0;
        }
    }
    &.mc-active {
        @media screen and (max-width: 767px) {
            padding-bottom: 0;
            height: auto;
        }
        h2 {
            top: 0;
            padding: 10px 16px 10px 90px;
            &:before {
                top: 0;
            }
            &:after {
                bottom: -16px;
            }
        }
    }
    .mc-content {
        position: absolute;
        right: 0;
        top: 0;
        bottom: 16px;
        left: 16px;
        .mc-transtition();
    }
    .mc-btn-action {
        position: absolute;
        right: 16px;
        top: 15px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        border: 5px solid;
        width: 54px;
        height: 54px;
        line-height: 44px;
        text-align: center;
        color: #fff;
        cursor: pointer;
        z-index: 20;
        .mc-transtition();
    }
    &.mc-active .mc-btn-action {
        top: 62px;
    }
    .mc-description {
        position: absolute;
        top: 100%;
        right: 30px;
        left: 30px;
        bottom: 54px;
        overflow: hidden;
        .opacity(0);
        .mc-transtition(1.2s);
    }
    .mc-footer {
        height: 0;
        overflow: hidden;
        .mc-transtition();
        h4 {
            position: absolute;
            top: 200px;
            left: 30px;
            padding: 0;
            margin: 0;
            font-size: 16px;
            font-weight: 700;
            .mc-transtition(1.4s);
        }
        a {
            display: block;
            float: left;
            position: relative;
            width: 52px;
            height: 52px;
            margin-left: 5px;
            margin-bottom: 15px;
            font-size: 28px;
            color: #fff;
            line-height: 52px;
            text-decoration: none;
            top: 200px;
            &:nth-child(1) {
                .mc-transtition (.5s)
            }
            &:nth-child(2) {
                .mc-transtition (.6s)
            }
            &:nth-child(3) {
                .mc-transtition (.7s)
            }
            &:nth-child(4) {
                .mc-transtition (.8s)
            }
            &:nth-child(5) {
                .mc-transtition (.9s)
            }
        }
    }
    .img-container {
        overflow: hidden;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 3;
        .mc-transtition();
    }
    &.mc-active {
        .img-container {
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            left: 0;
            top: 12px;
            width: 60px;
            height: 60px;
            z-index: 20;
        }
        .mc-content {
            padding-top: 5.6em;
            @media screen and (max-width: 767px) {
                position: relative;
                margin-right: 16px;
            }
        }
        .mc-description {
            top: 50px;
            padding-top: 5.6em;
            .opacity(1);
            @media screen and (max-width: 767px) {
                position: relative;
                top: auto;
                right: auto;
                left: auto;
                padding: 50px 30px 70px 30px;
                bottom: 0;
            }
        }
        .mc-footer {
            overflow: visible;
            position: absolute;
            top: calc(~'100% - 16px');
            left: 16px;
            right: 0;
            height: 82px;
            padding-top: 15px;
            padding-left: 25px;
            a {
                top: 0;
            }
            h4 {
                top: -32px;
            }
        }
    }
}


.material-card-color (@color-palette) {
    .material-card.@{color-palette} {
        h2 {
            .materializr(@color-palette, '500');
            &:after {
                .materializr(@color-palette, '500', border-top-color);
                .materializr(@color-palette, '500', border-right-color);
                border-bottom-color: transparent;
                border-left-color: transparent;
            }
            &:before {
                border-top-color: transparent;
                .materializr(@color-palette, '900', border-right-color);
                .materializr(@color-palette, '900', border-bottom-color);
                border-left-color: transparent;
            }
        }
        &.mc-active {
            h2 {
                &:before {
                    border-top-color: transparent;
                    .materializr(@color-palette, '500', border-right-color);
                    .materializr(@color-palette, '500', border-bottom-color);
                    border-left-color: transparent;
                }
                &:after {
                    .materializr(@color-palette, '900', border-top-color);
                    .materializr(@color-palette, '900', border-right-color);
                    border-bottom-color: transparent;
                    border-left-color: transparent;
                }
            }
        }
        .mc-btn-action {
            .materializr(@color-palette, '500');
            &:hover {
                .materializr(@color-palette, '900');
            }
        }
        .mc-footer {
            h4 {
                .materializr(@color-palette, '900', color);
            }
            a {
                .materializr(@color-palette, '900');
            }
        }
        &.mc-active {
            .mc-content {
                .materializr(@color-palette, '50');
            }
            .mc-footer {
                .materializr(@color-palette, '100');
            }
            .mc-btn-action {
                .materializr(@color-palette, '50', border-color);
            }
        }
    }
}


.material-card-color(~"Red");
.material-card-color(~"Blue-Grey");
.material-card-color(~"Pink");
.material-card-color(~"Purple");
.material-card-color(~"Deep-Purple");
.material-card-color(~"Indigo");
.material-card-color(~"Blue");
.material-card-color(~"Light-Blue");
.material-card-color(~"Cyan");
.material-card-color(~"Teal");
.material-card-color(~"Green");
.material-card-color(~"Light-Green");
.material-card-color(~"Lime");
.material-card-color(~"Yellow");
.material-card-color(~"Amber");
.material-card-color(~"Orange");
.material-card-color(~"Deep-Orange");
.material-card-color(~"Brown");
.material-card-color(~"Grey");
.material-card-color(~"Blue-Grey");


@import (css) "https://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700";
body {
  background-color: #ECEFF1;
  color: #37474F;
  font-family: 'Raleway', sans-serif;
  font-weight: 300;
  font-size: 16px;
}

h1, h2, h3 {
  font-weight: 200;
}

@media screen and (min-width: 480px) {
  .view {
    display: none;
  }
}

    </style>
    
    <style>
        .sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:200px;
    width: 170px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    background-color:#fff;
    color:#efefef;
    height: 40px;
    padding:0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}

.sticky li img{
    float:left;
    margin:5px 4px;
    margin-right:5px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    color:#2C3539;
}
.sticky li p a:hover{
    text-decoration:underline;
}
    </style>
    
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
</head>

<body>
 <div class="sticky-container">
    <ul class="sticky">
        <li style="background-color: #3B5998; color: white;">
           <a href="<?php echo $facebook; ?>" target="_blank" style="background-color: #3B5998; color: white;"><i class="icon-facebook-f" style="font-size: 20px; text-align: center; padding-left: 14px;"></i>
           </a> 
        </li>
        <li style="background-color: #55ACEE; color: white;">
           <a href="<?php echo $Twitter; ?>" target="_blank" style="background-color: #55ACEE; color: white;"> <i class="icon-twitter" style="font-size: 20px; text-align: center; padding-left: 14px;"></i></a>
        </li>
         <li style="background-color: #bb0000; color: white;">
           <a href="<?php echo $youtube; ?>" target="_blank" style="background-color: #bb0000; color: white;"> <i class="icon-youtube" style="font-size: 20px; text-align: center; padding-left: 10px;"></i></a>
        </li>
         <li style="background-color: #125688; color: white;">
           <a href="<?php echo $Instagram; ?>" target="_blank" style="background-color: #125688; color: white;"> <i class="icon-instagram" style="font-size: 20px; text-align: center; padding-left: 14px;"></i></a>
        </li>
         <li style="background-color: #007bb5; color: white;">
           <a href="<?php echo $LinkedIn; ?>" target="_blank" style="background-color: #007bb5; color: white;"> <i class="icon-linkedin" style="font-size: 20px; text-align: center; padding-left: 14px;"></i></a>
        </li>
        <li style="background-color: green; color: white;">
           <a href="https://api.whatsapp.com/send?phone=<?php echo "+91".$MobileNo;?>" target="_blank" style="background-color: green; color: white;"> <i class="icon-whatsapp" style="font-size: 20px; text-align: center; padding-left: 14px;"></i></a>
        </li>
    </ul>
</div>

<div class="container-fluid" style="background-color:  #003153; text-align: center;">
            <div class="row">
                <div class="col-sm-12">
                   <p style="color: white; padding-left: 20px; margin: 5px; text-align: left"><i class="fa fa-phone"></i> &nbsp;<?php echo $MobileNo; ?>, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i> &nbsp;<?php echo $EmailId; ?></p>  </center> 
                </div>
                
            </div>
                 
             
            </div>
            
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4" >
            
            <div class="header-middle" style="background: white;" >
                <div class="container">
                    <div class="header-left">
                        
                        <a href="index.php" class="logo" style="margin-top: 10px; margin-bottom: 10px;">
                            <img src="../image/<?php echo $logo; ?>" alt="Molla Logo" style="height: 80px;">
                        </a>
                        
                    </div><!-- End .header-left -->

                   <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                
                                <li class="megamenu-container active">
                                 <a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 80px; font-weight: bold;">Home</a>
                                </li>
                                
                                <li class="megamenu-container">
                                 <a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 80px; font-weight: bold;">About</a>
                                </li>
                            
                                <li class="megamenu-container">
                                 <a href="product.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 80px; font-weight: bold;">Menu</a>
                                </li>
                                
                                <li class="megamenu-container">
                                 <a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 90px; font-weight: bold;">Gallery</a>
                                </li>
                                
                                 <li class="megamenu-container">
                                 <a href="team.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 80px; font-weight: bold;">Team</a>
                                </li>
                                
                                <li class="megamenu-container">
                                 <a href="blog.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 80px; font-weight: bold;">Blog</a>
                                </li>
                               
                               <li class="megamenu-container">
                                 <a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 80px; font-weight: bold;">Contact</a>
                                </li>
                                
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->
                    <div class="header-right">
                        
                        

                        <div class="wishlist">
                            <a href="wishlist.php" title="Wishlist" style="color: black; font-weight: bold;">
                                <div class="icon">
                                    <i class="icon-heart-o"></i>
                                    
                                </div>
                                <p style="color: black; font-weight: bold;">Wishlist</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="wishlist">
                            <a href="cart.php" style="color: black; font-weight: bold;">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    
                                </div>
                                <p style="color: black; font-weight: bold;">Cart</p>
                            </a>

                            
                        </div><!-- End .cart-dropdown -->
                        <button class="mobile-menu-toggler" style="background: black;">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars" style="color: white;"></i>
                        </button>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

           
        </header><!-- End .header -->



        <main class="main">
            <div class="intro-slider-container mb-5">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" 
                    data-owl-options='{
                        "dots": true,
                        "nav": false, 
                        "responsive": {
                            "1200": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    
    <?php
    $bann = mysqli_query($sql_con, "SELECT *  FROM banner where RegistrationId='$user'");
    while($ban = mysqli_fetch_array($bann))
    {
        $banner1 = $ban['Banner_One'];
        $banner2 = $ban['Banner_two'];
        $banner3 = $ban['Banner_three'];
    }
    ?>
                    <div class="intro-slide" style="background-image: url('../image/<?php echo $banner1; ?>');">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                               <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                 
                                </div><!-- End .col-lg-11 offset-lg-1 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url('../image/<?php echo $banner2; ?>');">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                   
                                </div><!-- End .col-md-6 offset-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="container">
                <h2 class="text-center" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold;">Different Popular Dishes / Cuisine</h2><!-- End .title text-center -->
                <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">
                <div class="cat-blocks-container">
                    <div class="row">
                        <?php 
                        $result = mysqli_query($sql_con, "SELECT any_value(ProductCategory) as ProductCategorys, any_value(Product) as Productes FROM product where RegistrationId='$user' group by ProductCategory");
                        while($row = mysqli_fetch_array($result))
                        {
                            $category = $row['ProductCategorys'];
                            $images = $row['Productes'];
                        ?>
                        <div class="col-6 col-sm-4 col-lg-2" >
                            <div style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; margin-bottom: 30px; background-color:  #003153;">
                            <a href="category.php?id=<?php echo $category; ?>&user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" class="cat-block" style="margin-bottom: 10px;">
                                <figure style="padding: 10px;">
                                    <span>
                                        <img src="../image/<?php echo $images; ?>" alt="Category image" class="rounded-circle">
                                    </span>
                                </figure>

                                <h2 class="cat-block-title" style="font-family: Arial; font-weight: bolder; font-size: 16px; color: white; padding: 0px; margin-top: 6px;"><?php echo $category; ?></h2><!-- End .cat-block-title -->
                            </a>
                            </div>
                        </div><!-- End .col-sm-4 col-lg-2 -->
<?php
}
?>
                    </div><!-- End .row -->
                </div><!-- End .cat-blocks-container -->
            </div><!-- End .container -->

           
            
            <div class="container-fluid new-arrivals" style="background-color: #f4f0ec; padding-top: 40px; padding-bottom: 60px;">
                <div >
                   
                        <h2 class="text-center" align="center" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold;">Our Top Dishes</h2><!-- End .title -->
                   <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">
                   
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel just-action-icons-sm">
                    <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link" >
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                         <?php
$Product = mysqli_query($sql_con,"SELECT * FROM `product` where RegistrationId='$user'");
   while($Cate = mysqli_fetch_array($Product))
   {
                            ?>
                            <div class="product product-2" style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset; width: 380px; background-color: #003153;">
                                <figure class="product-media">
                                   
                                    <a href="product-detail.php?id=<?php echo $Cate['id']; ?>&user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">
                                        <img src="../image/<?php echo $Cate['Product']; ?>" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body" style="padding-right: 5px; padding-left: 5px; background-color:  #003153;">
                                    <div class="product-cat">
                                    </div><!-- End .product-cat -->
                                    <p style="color: white; font-weight: bolder; text-align: center;"><?php echo $Cate['ProductCategory']; ?></p>
                                    <h5 class="product-title" style="display: block; text-align: center;"><a href="product-detail.php?id=<?php echo $Cate['id']; ?>&user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-family: Arial; font-weight: bolder; text-align: center; font-size: 14px; color: white;"><?php echo $Cate['ProductName']; ?></a></h5><!-- End .product-title -->
                                    
                                     <center> <div class="product-price" style="display: block; margin-top: 10px;">
                                      <p align="center" style="color: white; font-weight: 500px; text-align: left;"><b><?php echo $Cate['Veg']; ?></b> <font style="float: right"> <b>Rs.</b> <?php echo $Cate['ProductRate']; ?>/- </font></p>
                                    </div>
                                    </center>
     <style>
.checked {
  color: orange;
}
</style>

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>

                                    <!-- End .product-price -->
                                   
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
<?php
}
?>
                           
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                 
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            
            <div class="container">
                <div class="heading text-center mb-3">
                   <h2 class="text-center" align="center" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold;">Offer Of the Day</h2><!-- End .title -->
                   <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">
                </div><!-- End .heading -->

                <div class="row">
                    
                    <?php
                    $deals = mysqli_query($sql_con, "SELECT * FROM deal where RegistrationId='$user' limit 2");
                    while($rowed = mysqli_fetch_array($deals))
                    {
                        $imagesdeal = $rowed["Image"];
                    ?>
                    <div class="col-lg-6 deal-col">
                        <div class="deal" >
                            <div class="deal-top">
                                <img src="../image/<?php echo $imagesdeal; ?>" style="width: 100%;">
                            </div><!-- End .deal-top -->

                        </div><!-- End .deal -->
                    </div><!-- End .col-lg-6 -->
                    <?php
                    }
                    ?>
                    
                </div><!-- End .row -->

            </div><!-- End .container -->

            <div class="container-fluid">
                <h2 class="text-center" align="center" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold;">Our Partners</h2><!-- End .title -->
                   <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">
                <div class="owl-carousel mt-5 mb-5 owl-simple" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": false,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            }
                        }
                    }'>
                    <?php
                    $client = mysqli_query($sql_con, "SELECT * FROM client where RegistrationId='$user'");
                    while($rowese = mysqli_fetch_array($client))
                    {
                        $clientimage = $rowese['Image'];
                    ?>
                    <a href="../image/<?php echo $clientimage; ?>" target="_blank" class="brand">
                        <img src="../image/<?php echo $clientimage; ?>" alt="Brand Name" class="img-fluid img-thumbnail">
                    </a>
                    <?php
                    }
                    ?>

                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- End .mb-5 -->

<div class="about-testimonials bg-light-2 pt-6 pb-6">
                    <div class="container">
                      <h2 class="text-center" align="center" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold;">What Our Customer Say About Us</h2><!-- End .title -->
                   <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">

                        <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "1200": {
                                        "nav": true
                                    }
                                }
                            }'>
                            <?php
                            $testimonial = mysqli_query($sql_con, "SELECT * FROM testimonial where RegistrationId='$user'");
                            while($rowte = mysqli_fetch_array($testimonial))
                            {
                                $testname = $rowte['Name'];
                                $testdescri = $rowte['Designation'];
                                $testiImage = $rowte['Image'];
                            ?>
                            <blockquote class="testimonial text-center" style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px; margin-top: 20px; background: white; padding: 20px;">
                                <img src="../image/<?php echo $testiImage; ?>" alt="user">
                                <p style="color: black;">“ <?php echo $testdescri; ?> ”</p>
                                <cite>
                                    <?php echo $testname; ?>
                                </cite>
                            </blockquote><!-- End .testimonial -->
                            <?php
                            }
                            ?>
                            
                        </div><!-- End .testimonials-slider owl-carousel -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light-2 pt-5 pb-6 -->
          
        </main><!-- End .main -->

<?php
$de = mysqli_query($sql_con, "SELECT * FROM about_firm where RegistrationId='$user'");
while($des = mysqli_fetch_array($de))
{
    $desc = $des['Description'];
}
?>

<style>
.text-sm {
    font-size: 14px !important;
    overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 4; /* number of lines to show */
   -webkit-box-orient: vertical;
   text-align: justify;
}
</style>
               <footer class="footer" style="background: #003153;">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-4">
	            			<div class="widget widget-about">
	            			
	            			<img src="../image/<?php echo $logo; ?>" class="footer-logo img-thumbnail" alt="Footer Logo" style="height: 100px;">
	            		<h5 style="color: white; font-weight: bolder; font-family: Amasis MT Pro; "><?php echo $nam; ?></h5>
	            	
	            				<p style="color: white" class="text-sm"><?php echo $desc; ?></p>
	            				
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color: white; font-size: 22px;">Useful Links</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="index.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white;">Home</a></li>
	            					<li><a href="about.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white;">About Us</a></li>
	            					<li><a href="product.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white;">Menu</a></li>
	            					<li><a href="team.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white;">Team</a></li>
	            					<li><a href="contact.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white;">Contact Us</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color: white; font-size: 22px;">Our Menu</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            				    <?php
	            				    $menupr = mysqli_query($sql_con, "SELECT * FROM product where RegistrationId='$user' limit 6");
	            				    while($men = mysqli_fetch_array($menupr))
	            				    {
	            				        $produ = $men['ProductName'];
	            				        $ide = $men['id'];
	            				    ?>
	            					<li><a href="product-detail.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: white;"><?php echo $produ; ?></a></li>
	            					<?php
	            				    }
	            				    ?>
	            				
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color: white; font-size: 22px;">Contact Us</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#" style="color: white;"><?php echo $location; ?>, <?php echo $city; ?>, <?php echo $State; ?>, <?php echo $pincode; ?>, <?php echo $country; ?></a></li>
	            					<li><a href="#" style="color: white;"><?php echo $MobileNo; ?></a></li>
	            					<li><a href="#" style="color: white;"><?php echo $EmailId; ?></a></li>
	            					
	            				</ul><!-- End .widget-list -->
	            				<div class="social-icons" style="margin-top: 20px;">
                                    <a href="<?php echo $facebook; ?>" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f" style="color: white;"></i></a>
                                    <a href="<?php echo $Twitter; ?>" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter" style="color: white;"></i></a>
                                    <a href="<?php echo $Instagram; ?>" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram" style="color: white;"></i></a>
                                    <a href="<?php echo $LinkedIn; ?>" class="social-icon" target="_blank" title="Pinterest"><i class="icon-linkedin" style="color: white;"></i></a>
                                    <a href="<?php echo $youtube; ?>" class="social-icon" target="_blank" title="Pinterest"><i class="icon-youtube" style="color: white;"></i></a>
                                </div><!-- End .soial-icons -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        	
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    
    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
        
            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                               <a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Home</a>
                            </li>
                          <li>
                               <a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">About Us</a>
                            </li>
                            <li>
                               <a href="product.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Menu</a>
                            </li>
                            <li>
                               <a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Gallery</a>
                            </li>
                            <li>
                               <a href="team.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Team</a>
                            </li>
                            <li>
                               <a href="blog.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Blog</a>
                            </li>
                            <li>
                               <a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Contact</a>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                
            </div><!-- End .tab-content -->

        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                   
                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

 
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-4.js"></script>
    
    <script>
        $(function() {
        $('.material-card > .mc-btn-action').click(function () {
            var card = $(this).parent('.material-card');
            var icon = $(this).children('i');
            icon.addClass('fa-spin-fast');

            if (card.hasClass('mc-active')) {
                card.removeClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-arrow-left')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-bars');

                }, 800);
            } else {
                card.addClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-bars')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-arrow-left');

                }, 800);
            }
        });
    });
    </script>
</body>
<!-- molla/index-4.html  22 Nov 2019 09:54:18 GMT -->
</html>
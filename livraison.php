<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livraison</title>
    <link rel="stylesheet" href="site.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <div>
        <h1 class="disc" style="color: gold; background-color:black; width: 900px; margin-left:170px; padding-left: 160px;">CETTE DISCUTION NOUS PERMETTRA DE:</h1>
        <h2 style="background-color:black; width: 700px; border:none; padding-left:15px">DISCUTER SUR LADRESS ET LE PRIX DE LA LIVRAISON </h2>
    </div>
   <div id="whatsapp">
        <p style="position: absolute; top:273px; left:130px; background-color:black; font-weight: bold;">APPUYER ICI POUR COMMENCER</p>
        <i style="font-size: 30px;position:absolute; top:280px; left:400px;" class="ri-arrow-right-fill"></i>
        <a href="https://wa.me/22798896369" target="_blank" id="toggle1" class="wtsapp" style="position: fixed;transform: all .5s ease;background-color:white;display: block;text-align: center;box-shadow: 0 0 20px gold; border-radius: 50%;border-right: none; color: green;font-weight:bold;bottom:300px;left:480px; z-index:999;line: height 50px;">
            <i class="ri-whatsapp-fill" style="color:green;font-size: 100px; "></i>
        </a>
   </div>
   <div style="background-image:url(AdobeStock_1150690002_Preview.jpeg);position:absolute;right:100px;top:200px;border-radius:20px;animation-duration: 14s;animation-name: mlogo;animation-iteration-count: infinite;border:3px ridge gold">
    <h1 style="color:gold; background-color: black;padding-left:100px">Les etapes a suivre : </h1>
    <p style="background-color:black">1. CAPTURE <I class="ri-arrow-right-fill"></i> IL TELECHARGERA LE CAPTURE DECRAN COMPLET <br> DE VOTRE PANIER DANS VOTRE PC </p>
    <p style="background-color:black">2. DISCUSSION  <I class="ri-arrow-right-fill"></i> WHATSAPP</p>
    <P style="background-color:black">3. ENVOYEZ-NOUS LA CAPTURE DANS WATSAPP </P>
    <P></P>
   </div>
   <h2 class="disc" style="background-color:black; border:none;position:absolute;bottom:50px; left:190px">NB: FAUT DABORD FAIRE LA CAPTURE AVANT DAPPUYER SUR LA DISCUTION</h2>
  
    
    <script src="LIV.JS"></script>
    
</body>
</html>
<style>
    #whatsapp .wtsapp::before{
        content: "";
        position: absolute;
        z-index: -1;
        left: 50%;
        top:50%;
        transform: translateX(-50%) translateY(-50%);
        display: block;
        width: 125px;
        height: 125px;
        background-color: white;
        border-radius: 50%;
        -webkit-animation: pulse-border 1500ms ease-out infinite;
        animation: pulse-border 1500ms ease-out infinite;
        border: 3PX ridge gold;
    }
    #whatsapp .wtsapp:focus{
        border: 3PX ridge gold;
        outline: none;
    }
    @keyframes pulse-border{
        0%{transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1); opacity:1;}
        100%{transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5); opacity:1;}
    }
    .disc{
    animation-duration: 2s;
    animation-name: mlog;
    animation-iteration-count: infinite;
    }
    @keyframes mlog {
    0% {
        letter-spacing: 0px;
    }
    100% {
        letter-spacing: 3px;
    }
}
</style>
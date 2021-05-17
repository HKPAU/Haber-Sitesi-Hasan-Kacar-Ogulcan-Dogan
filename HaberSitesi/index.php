<?php
ob_start();
session_start();


require_once("Sayfalar.php");
require_once("Ayarlar.php");

if(FilterForNumber($_GET["Sayfa"]) == "" ){
    $PageValue  = 0;
}else{
    $PageValue  = FilterForNumber($_GET["Sayfa"]);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engelsiz Haber</title>
    <link href="bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/HaberSitesi.css">
    <script src="jquery/jquery-3.6.0.min.js"></script>
</head>
<body>
    <table id="MainTable">
        <tr>
            <td style="border-bottom: 1px solid black; height: 120px; width: 100%;">
                <table id="MenuBar">
                    <tr>
                        <td style="margin:0px ; padding:0px ;height: 120px;width: 300px;"><a href="index.php?Sayfa=0"><img id="LogoZone" src="Images/Logo.png" alt=""></a></td>
                        <td style="height: 120px;">
                            <table id="MenuZone">
                                <tr>
                                    <td id="MenuItem"><a id="MenuLinkAttr" href="index.php?Sayfa=0"><img src="Images/house.png" alt=""></a></td>
                                    <td id="MenuItem"><a id="MenuLinkAttr" href="index.php?Sayfa=1"><img src="Images/info.png" alt=""></a></td>
                                    <td id="MenuItem"><a id="MenuLinkAttr" href="index.php?Sayfa=2"><img src="Images/communicate.png" alt=""></a></td>
                                    <td id="MenuItem"><a id="MenuLinkAttr" href="index.php?Sayfa=3"><img src="Images/ManProfile.png" alt=""></a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td id="TVChannels">
                <table style="width: 100%;">
                    <tr>
                        <td class="LeftArrow"><img class="LeftClass" src="Images/left.png" alt=""></td>
                        <td style="text-align: center;width: 100%;">
                            <div id="ChannelZone1">
                                <table id="ChannelTable">
                                    <tr>
                                        <td id="ChannelName" style="border-right: 1px solid black;"><img id="ChannelsLogo" src="Images/ATVLogo.png" alt=""></td>
                                        <td id="ChannelName" style="border-right: 1px solid black;"><img id="ChannelsLogo" src="Images/KanalDLogo.png" alt=""></td>
                                        <td id="ChannelName" style="border-right: 1px solid black;"><img id="ChannelsLogo" src="Images/ShowTVLogo.png" alt=""></td>
                                        <td id="ChannelName" style="border-right: 1px solid black;"><img id="ChannelsLogo" src="Images/StarTVLogo.png" alt=""></td>
                                        <td id="ChannelName"><img id="ChannelsLogo" src="Images/FoxTVLogo.png" alt=""></td>
                                    </tr>
                                </table>
                            </div>
                            <div id="ChannelZone2">
                                <table id="ChannelTable">
                                    <tr>
                                        <td id="ChannelName" style="border-right: 1px solid black;"><img id="ChannelsLogo" src="Images/TV8Logo.png" alt=""></td>
                                        <td id="ChannelName" style="border-right: 1px solid black;"><img id="ChannelsLogo" src="Images/DiscoveryLogo.png" alt=""></td>
                                        <td id="ChannelName" style="border-right: 1px solid black;"><img id="ChannelsLogo" src="Images/BeinLogo.png" alt=""></td>
                                        <td id="ChannelName" style="border-right: 1px solid black;"><img id="ChannelsLogo" src="Images/BeyazTVLogo.png" alt=""></td>
                                        <td id="ChannelName"><img id="ChannelsLogo" src="Images/CNTVLogo.png" alt=""></td>
                                    </tr>
                                </table>
                            </div>
                            <div id="ChannelZone3">
                                <table id="ChannelTable">
                                    <tr>
                                        <td id="ChannelName" style="border-right: 1px solid black;"><img id="ChannelsLogo" src="Images/PamukkaleTVLogo.png" alt=""></td>
                                        <td id="ChannelName" style="border-right: 1px solid black;"><img id="ChannelsLogo" src="Images/FBTVLogo.png" alt=""></td>
                                        <td id="ChannelName" style="border-right: 1px solid black;"><img id="ChannelsLogo" src="Images/GSTVLogo.png" alt=""></td>
                                        <td id="ChannelName" style="border-right: 1px solid black;"><img id="ChannelsLogo" src="Images/BJKTVLogo.png" alt=""></td>
                                        <td id="ChannelName"><img id="ChannelsLogo" src="Images/TRT1Logo.png" alt=""></td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                        <td class="RightArrow"><img class="RightClass" src="Images/right.png" alt=""></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td id="NewsName">Gazete Bültenleri</td>
        </tr>
        <tr>
            <td id="ContentZone">
                <?php

                if($PageValue == 0 || $PageValue == "" || $PageValue == null){
                    require_once($Sayfa[0]);
                }else{  
                    require_once($Sayfa[$PageValue]);
                }
                ?>
            </td>
        </tr>
        <tr>
            <td id="FooterZone">
                Footer Alanı
            </td>
        </tr>
    </table>




<script src="js/HaberSitesi.js"></script>
<script src=bootstrap-5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
<?php
ob_flush();
session_unset();
session_destroy();
?>
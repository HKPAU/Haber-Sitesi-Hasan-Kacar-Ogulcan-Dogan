$(document).ready(function(){
    var ChannelDivNumber    = 1;
    $(".RightClass").click(function(){
        $("#ChannelZone"+ChannelDivNumber).fadeOut(500);
        $("#ChannelZone"+ChannelDivNumber).css({
            "display":"none"
        });
        ChannelDivNumber    = (ChannelDivNumber % 3 ) + 1;

        $("#ChannelZone"+ChannelDivNumber).fadeIn(1000);

    });

    $(".LeftClass").click(function(){
        $("#ChannelZone"+ChannelDivNumber).fadeOut(500);
        $("#ChannelZone"+ChannelDivNumber).css({
            "display":"none"
        });
        if(ChannelDivNumber == 1){
            ChannelDivNumber += 2;
        }else{
            ChannelDivNumber -= 1;
        }


        $("#ChannelZone"+ChannelDivNumber).fadeIn(1000);
    });
});
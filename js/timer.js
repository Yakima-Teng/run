$(document).ready(function(){
    for(let i=1;i<=2;i++){
        $.post("php/functions/time.php", {'type':i}, function(result){
            if(result != ""){

                $("#"+i+"_start_btn").attr('disabled', true);


                result = JSON.parse(result);
                // console.log(result);
                $("#"+i+"_start_time").text(result[0]);
                var timer = setInterval(function(){
                    var serverTime = result[1];
                    var now = Date.now()/1000;
                    var distance = now-serverTime;

                    var hours = Math.floor((distance % ( 60 * 60 * 24)) / ( 60 * 60));
                    var minutes = Math.floor((distance % ( 60 * 60)) / (60));
                    var seconds = Math.floor((distance %  60 ));
                    var timeString = "";
                    timeString +=timeString += hours+"時 "+minutes+"分 "+seconds+"秒 "
                    $("#"+i+"_passed_time").text(timeString);
                }, 1000);
            }else{
                $("#"+i+"_start_btn").click(function(){
                    $.post("php/functions/start.php", {'type':i}, function(result){
                        console.log(result);
                        if(result == "404_STARTED"){
                            alert("已開始！")
                        }else if(result == "SUCCESS"){
                            location.reload();
                        }
                    })
                })
            }
        });




    }



});
$(document).ready(function() {

	$("div").click(function() {
		alert("Hello world!");
		var urlPre = "http://www.corsproxy.com/"; //跨域中转
		var url1 = "www.webxml.com.cn/WebServices/TrainTimeWebService.asmx/getStationAndTimeDataSetByLikeTrainCode?TrainCode=G1&UserID=";
		var url = "www.baidu.com";
		var _data = {};


        $.ajax({
        	//type: "POST",
   			dataType:'jsonp',
  			url: "http://192.168.1.122:9999/v1/sms/verify_code/",
  			data: "app_uuid=1234&telephone=18600513120&vcode=3793",
  			beforeSend :function(){
  				alert('beforeSend');
			},
  			error:function(item){
				alert('error');
			},
   			success: function(msg){
    			 alert( "success: " + msg );
   			},
   			complete: function(){
   				alert('complete');
			}
		});

    });
});
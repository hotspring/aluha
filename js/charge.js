var chargeAluhaNickName,chargeAluhaId,chargeRMB,chargeCoins;
var ChargeAluhaFlag = true;
var ChargeNumFlag = false;
$(document).ready(function(){
	$("input[name='aluhaId']").keyup(function(e){
		if($(this).val().length >= 7)
		{
			vaildAluhaId($(this).val());
		}
	});

	$('#chargeOpt :radio').on('toggle', function() {
		ChargeNumFlag = true;
		console.log("radio box checked");
	});


	$("#modalShowBtn").click(function(e){

		if(ChargeAluhaFlag && ChargeNumFlag)
		{
			chargeRMB = $("#infoInput input[name='chargeNum']:checked").val()
			chargeCoins = chargeRMB * 100;

			$("#myModal .aluhaId").text(chargeAluhaId);
			$("#myModal .aluhaName").text(chargeAluhaNickName);
			$("#myModal .chargeCoinsNum").text(chargeCoins+"个");
			$("#myModal .chargeRMBNum").text(chargeRMB+"元");

			$('#myModal').modal('show');
		}else
		{
			$("#inputWarning").fadeIn(400).delay(2000).fadeOut(400);
		}
		e.preventDefault();
		
	})


	$("#submitCharge").click(function(e){
		window.open("url", 'charge coins' );
		$('#myModal').modal('hide');
		$("#pageone").hide();
		$("#pagetwo").show();
		$("#pagethree").hide();

		$(".progress-point").removeClass("curPoint");
		$($(".progress-point").get(1)).addClass("curPoint");
	});

	$("#chargeCompleted").click(function(){
		$("#chargeSuccessWapper u").text(chargeRMB+"元")
		$("#pageone").hide();
		$("#pagetwo").hide();
		$("#pagethree").show();

		$(".progress-point").removeClass("curPoint");
		$($(".progress-point").get(2)).addClass("curPoint");
	})

})

var vaildAluhaId = function(_id)
{
	
	$.get("http://localhost/easybird/html/vaild.api",{id:_id}).done(function(data){
		if(data.flag)
		{
			$("#aluhaIdInput").removeClass();
			$("#aluhaIdInput").addClass("inputSuccess");
			$(".IdSuccessTips u").text(data.name);
			chargeAluhaNickName = data.name;
			chargeAluhaId = _id;
			ChargeAluhaFlag = true;
		}else
		{
			$("#aluhaIdInput").removeClass();
			$("#aluhaIdInput").addClass("inputFaild");
			ChargeAluhaFlag = false;
		}
		
	});
}
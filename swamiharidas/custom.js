$(document).ready(function(){
	
			function validate(){
    var remember = document.getElementById('squaredOne');
    if (remember.checked){
        alert("checked") ;
    }else{
        alert("You didn't check it! Let me check it for you.")
    }
}
	
	// console.log('I am ready sir!!')

	//DISPLAY DATE ON EVENTS
	$('.transparentBox').click(function(){
		var day = $(this).attr('data-day');
		$('.transparentBox').removeClass('activeBox');
		$(this).addClass('activeBox');
		$('.day').css({'display':'none'});
		$('#day'+day).css({'display':'block'});
	})
	$('.artists').click(function(){
		var artist = $(this).attr('data-artist');
		$('.artists').removeClass('activeArtist');
		$(this).addClass('activeArtist');
		$('.artist').addClass('hide');
		$('#artist'+artist).removeClass('hide');
	})

	$('#getInvite').click(function(){
		var name = $('#name').val();
		var mobile = $('#number').val();
		var email = $('#email').val();
		var dayOne = ($('#squaredOne').is(':checked'))?1:0;
		var dayTwo = ($('#squaredTwo').is(':checked'))?1:0;
		var dayThree = ($('#squaredThree').is(':checked'))?1:0;
		var dayFour = ($('#squaredFour').is(':checked'))?1:0;
		var dayFive = ($('#squaredFive').is(':checked'))?1:0;
		
		//CHECK THE DATES CHECKED
		if(dayFive == 1){
		        $('#squaredFour').prop('checked', false);
			$('#squaredThree').prop('checked', false);
			$('#squaredTwo').prop('checked', false);
			$('#squaredOne').prop('checked', false);			
			$(".quantity").val('1');
		}
		if(name == ''){
			$('#error').html('Enter name.');
			$('#name').addClass('error');
			return false;
		} else if(!$.isNumeric(mobile)){
			$('#name').removeClass('error');
			$('#error').html('Enter mobile number.');
			$('#number').addClass('error');
			return false;
		} else if(!isValidEmailAddress(email)){
			$('#name').removeClass('error');
			$('#number').removeClass('error');
			$('#error').html('Enter email address.');
			$('#email').addClass('error');
			return false;
		} else if(dayOne == 0 && dayTwo == 0 && dayThree == 0 && dayFour == 0){
			$('#name').removeClass('error');
			$('#number').removeClass('error');
			$('#email').removeClass('error');
			$('#error').html('Select Day/Days.');
		} else {
			var day1 = $("#quantity1 option:selected").val();
			var day2 = $("#quantity2 option:selected").val();
			var day3 = $("#quantity3 option:selected").val();
			var day4 = $("#quantity4 option:selected").val();
			$('#error').html('');
			$.cookie('name', name, { path: '/' });
			$.cookie('email', email, { path: '/' });
			$.cookie('mobile', mobile, { path: '/' });
			$.ajax ({
				url : 'mandrill/',
				data : {name:name,email:email,mobile:mobile,dayOne:dayOne,day1:day1,dayTwo:day2,dayThree:day3,dayFour:day4},
				type: 'POST',
				dataType: 'json',
				success: function(data){
					// console.log(data);
					//window.location.replace("/thankyou");
				},error: function(error){
					// console.log(error)
				}
			})
		}
	})
	$('.selectDay').click(function(){
		var dayOne = ($('#squaredOne').is(':checked'))?1:0;
		var dayTwo = ($('#squaredTwo').is(':checked'))?1:0;
		var dayThree = ($('#squaredThree').is(':checked'))?1:0;
		var dayFour = ($('#squaredFour').is(':checked'))?1:0;
		var dayFive = ($('#squaredFive').is(':checked'))?1:0;
		
		var loop = $(this).attr('data-day');
		if(loop == 1 || loop == 2 || loop == 3 || loop == 4){
			if(dayOne == 1 || dayTwo == 1 || dayThree == 1 || dayFour == 1){
				$('#squaredFive').prop('checked', false);
				$("#quantity5").val('1');
				dayFive = 0;
			}
		} else {
			if(dayFive == 1){
				$('#squaredThree').prop('checked', false);
				$('#squaredTwo').prop('checked', false);
				$('#squaredOne').prop('checked', false);
				$('#squaredFour').prop('checked', false);
				$('#squaredFive').prop('checked', true);
				$(".quantity").val('1');
			}
		}
	})
	function isValidEmailAddress(emailAddress) {
    	var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    	return pattern.test(emailAddress);
	};
	$('#sendInvite').click(function(){
		var emailI = $('#inviteEmail').val();
		if(!isValidEmailAddress(emailI)){
			$('#error').html('Enter a valid email.');
		} else {
			var name = $.cookie('name');
			var email = $.cookie('email');
			var mobile = $.cookie('mobile');
			$.ajax ({
				url : 'mandrill/invite.php',
				data : {name:name,email:email,mobile:mobile,emailI:emailI},
				type: 'POST',
				dataType: 'json',
				success: function(data){
					// console.log(data);
				}
			})
			$('#error').css({'color':'#000'})
			$('#inviteEmail').val('');
			$('#error').html('Thanks.');
		}
	})
	$('.quantity').change(function(){
		var t = $(this).attr('data-option');
		$('#squared'+t).prop('checked', true);
		var loop = 0;
		switch(t) {
    		case 'One':
        		loop = 1;
        		break;
    		case 'Two':
        		loop = 2;
        		break;
    		case 'Three':
        		loop = 3;
        		break;
    		case 'Four':
        		loop = 4;
        		break;
		
		case 'Five':
        		loop = 5;
        		break;
		}
		changeQuantity(loop);
	})
	function changeQuantity(loop){
		var dayOne = ($('#squaredOne').is(':checked'))?1:0;
		var dayTwo = ($('#squaredTwo').is(':checked'))?1:0;
		var dayThree = ($('#squaredThree').is(':checked'))?1:0;
		var dayFour = ($('#squaredFour').is(':checked'))?1:0;
		var dayFive = ($('#squaredFive').is(':checked'))?1:0;
		
		if(loop == 1 || loop == 2 || loop == 3 || loop == 4){
			if(dayOne == 1 || dayTwo == 1 || dayThree == 1 || dayFour == 1){
				$('#squaredFive').prop('checked', false);
				$("#quantity4").val('1');
				dayFour = 0;
			}
		} else {
			if(dayFour == 1){
				$('#squaredThree').prop('checked', false);
				$('#squaredTwo').prop('checked', false);
				$('#squaredOne').prop('checked', false);
				$('#squaredFour').prop('checked', false);
				$('#squaredFive').prop('checked', true)
			}
		}
	}
})
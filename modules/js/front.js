jQuery(document).ready( function($){
	$('.nav-tabs li a').click(function(e){
		e.preventDefault();
		$('.nav-tabs li').removeClass('active');
		$(this).parents('li').addClass('active');
		var id = $(this).attr('href');
		console.log( id );
		//id = id.split('#');
		//id = id[0];
		$('.s_content').hide();
		$(id).show();
	})
	
	$('#weight_picker_1, #weight_picker_2, #weight_1, #weight_2').on( 'change keyup',function(){
		var factors1 = new Array(1, 1000, 1000000);
		var factors2 = new Array(0.001, 1, 0.001);
		var factors3 = new Array(0.000001, 0.001, 1);
		var factors = new Array(factors1,factors2,factors3);
		var val1 = $('#weight_1').val();
		var val2 = $('#weight_2').val();
		
		var picker_1 = $('#weight_picker_1').val();
		var picker_2 = $('#weight_picker_2').val();
		
		if( $(this).attr('id') == 'weight_1' ){
			$('#weight_2').val( factors[picker_1][picker_2] * val1 );
		}
		if( $(this).attr('id') == 'weight_2' ){
			$('#weight_1').val( factors[picker_1][picker_2] * val2 );
		}
		if( $(this).attr('id') == 'weight_picker_1' || $(this).attr('id') == 'weight_picker_2' ){
			$('#weight_2').val( factors[picker_1][picker_2] * val1 );
		}
		
		
		
		/*
		var val1 = $('#weight_1').val();
		var val2 = $('#weight_2').val();
		
		var picker_1 = $('#weight_picker_1').val();
		var picker_2 = $('#weight_picker_2').val();
		
		if( $(this).attr('id') == 'weight_2'  ){
			var changed_id = '#weight_1';
			val1 = val2;
		}
		if( $(this).attr('id') == 'weight_1'  ){
			var changed_id = '#weight_2';
			
		}
		console.log( $(this).attr('id') );
		console.log( changed_id );
		console.log( val1 );
		var changed_id = '#weight_2';
		if( picker_1 == 'kilogram' && picker_2 == 'kilogram' ){		
			$(changed_id).val(val1);
		}
		if( picker_1 == 'kilogram' && picker_2 == 'gram' ){
			$(changed_id).val( val1 * 1000 );
		}
		if( picker_1 == 'kilogram' && picker_2 == 'milligram' ){
			$(changed_id).val( commafy( val1 * 1000000 ) );
		}
		//0------------------------------
		if( picker_1 == 'gram' && picker_2 == 'gram' ){
			$(changed_id).val(val1);
		}
		if( picker_1 == 'gram' && picker_2 == 'kilogram' ){
			$(changed_id).val( val1 / 1000 );
		}
		if( picker_1 == 'gram' && picker_2 == 'milligram' ){
			$(changed_id).val( val1 * 1000 );
		}
		
		//0------------------------------
		if( picker_1 == 'milligram' && picker_2 == 'milligram' ){
			$(changed_id).val( commafy( val1 ) );
		}
		if( picker_1 == 'milligram' && picker_2 == 'gram' ){
			$(changed_id).val( commafy( val1 / 1000 ) );
		}
		if( picker_1 == 'milligram' && picker_2 == 'kilogram' ){
			$(changed_id).val( commafy( val1 / 1000000 ) );
		}
		*/
	})
	
	
	$('#temp_picker_1, #temp_picker_2, #temp_1, #temp_2').on( 'change keyup', function(){
		
		
		var val1 = $('#temp_1').val();
		var val2 = $('#temp_2').val();
		
		var picker_1 = $('#temp_picker_1').val();
		var picker_2 = $('#temp_picker_2').val();
		
		
		//T(°F) = T(°C) × 9/5 + 32
		
		console.log( $(this).attr('id') );
		
		if( $(this).attr('id') == 'temp_1'  ){
			
			console.log( picker_1 );
			console.log( picker_2 );
			if( picker_1 == 'c' && picker_2 == 'c' ){
				$('#temp_2').val( val1 );
			}
			if( picker_1 == 'c' && picker_2 == 'f' ){
				$('#temp_2').val( val1 * 9 / 5 + 32 );
			}
			if( picker_1 == 'f' && picker_2 == 'c' ){
				$('#temp_2').val( (val1 - 32)*5/9 );
			}
			if( picker_1 == 'f' && picker_2 == 'f' ){
				$('#temp_2').val( val1  );
			}
		}
		if( $(this).attr('id') == 'temp_picker_2' ){

			if( picker_1 == 'c' && picker_2 == 'c' ){
				$('#temp_2').val( val1 );
			}
			if( picker_1 == 'c' && picker_2 == 'f' ){
				$('#temp_2').val( val1 * 9 / 5 + 32 );
			}
			if( picker_1 == 'f' && picker_2 == 'c' ){
				$('#temp_2').val( (val1 - 32)*5/9 );
			}
			if( picker_1 == 'f' && picker_2 == 'f' ){
				$('#temp_2').val( val1  );
			}
		}
		
		if( $(this).attr('id') == 'temp_2' ){
			if( picker_1 == 'c' && picker_2 == 'c' ){
				$('#temp_1').val( val1 );
			}
			if( picker_1 == 'c' && picker_2 == 'f' ){
				$('#temp_2').val( val1 * 9 / 5 + 32 );
			}
			if( picker_1 == 'f' && picker_2 == 'f' ){
				$('#temp_1').val( val1  );
			}
		}
		if( $(this).attr('id') == 'temp_picker_1' ){
			

			if( picker_1 == 'c' && picker_2 == 'c' ){
				$('#temp_1').val( val1 );
			}
			if( picker_1 == 'c' && picker_2 == 'f' ){
				$('#temp_2').val( val1 * 9 / 5 + 32 );
			}
			if( picker_1 == 'f' && picker_2 == 'c' ){
				$('#temp_2').val( (val1 - 32)*5/9 );
			}
			if( picker_1 == 'f' && picker_2 == 'f' ){
				$('#temp_2').val( val1  );
			}
		}
		
	
	})
	
	$('#lenght_picker_1, #lenght_picker_2, #lenght_1, #lenght_2').on( 'change keyup', function(){
		
		var factors1 = new Array(1, 0.01, 0.00001, 0.00000621, 0.3937, 0.0328, 0.01094);
		var factors2 = new Array(100, 1, 0.001, 0.000621, 39.37, 3.28,  1.094);
		var factors3 = new Array(100000, 1000, 1, 0.621, 39370, 3280, 1094);
		var factors4 = new Array(160934, 1609.34, 1.60934, 1, 63360, 5280,1760);
		var factors5 = new Array(2.54, 0.0254, 0.0000254, 0.0000158, 1, 0.08333, 0.02778);
		var factors6 = new Array(30.48, 0.3048, 0.0003048, 0.0001896, 12, 1, 0.3333);
		var factors7 = new Array(91.44, 0.9144, 0.0009144, 0.0005688, 36, 3, 1);
		var factors = new Array(factors1,factors2,factors3,factors4,factors5,factors6,factors7);
		var val1 = $('#lenght_1').val();
		var val2 = $('#lenght_2').val();
		
		var picker_1 = $('#lenght_picker_1').val();
		var picker_2 = $('#lenght_picker_2').val();
		
		if( $(this).attr('id') == 'lenght_1' ){
			$('#lenght_2').val( factors[picker_1][picker_2] * val1 );
		}
		if( $(this).attr('id') == 'lenght_2' ){
			$('#lenght_1').val( factors[picker_1][picker_2] * val2 );
		}
		if( $(this).attr('id') == 'lenght_picker_1' || $(this).attr('id') == 'lenght_picker_2' ){
			$('#lenght_2').val( factors[picker_1][picker_2] * val1 );
		}
	
	})
	
	$('#volume_picker_1, #volume_picker_2, #volume_1, #volume_2').on( 'change keyup', function(){
		
		var factors0 = new Array(1, 23.6588, 2.36588, 236.588);
		var factors1 = new Array(0.0422675, 1, 0.1, 10);
		var factors2 = new Array(0.422675, 10, 1, 100);
		var factors3 = new Array(0.00422675, 0.1, 0.01, 1);
		var factors = new Array(factors0,factors1,factors2,factors3);
		var val1 = $('#volume_1').val();
		var val2 = $('#volume_2').val();
		
		var picker_1 = $('#volume_picker_1').val();
		var picker_2 = $('#volume_picker_2').val();
		
		if( $(this).attr('id') == 'volume_1' ){
			$('#volume_2').val( factors[picker_1][picker_2] * val1 );
		}
		if( $(this).attr('id') == 'volume_2' ){
			$('#volume_1').val( factors[picker_1][picker_2] * val2 );
		}
		if( $(this).attr('id') == 'volume_picker_1' || $(this).attr('id') == 'volume_picker_2' ){
			$('#volume_2').val( factors[picker_1][picker_2] * val1 );
		}
		
		
		
	})
	
	/*
	$('#weight_picker_1, #weight_picker_2, #weight_1, #weight_2').on( 'change keyup', function(){
		
		var factors0 = new Array(0,453592, 453592, 453.592);
		var factors1 = new Array(0,0283495, 28349.5, 28,3495);

		var factors = new Array(factors0,factors1);
		var val1 = $('#weight_1').val();
		var val2 = $('#weight_2').val();
		
		var picker_1 = $('#weight_picker_1').val();
		var picker_2 = $('#weight_picker_2').val();
		$('#weight_2').val( factors[picker_1][picker_2] * val1 );
		
	})
	*/
	
	$('#areas_picker_1, #areas_picker_2, #areas_1, #areas_2').on( 'change keyup', function(){
		
		var factors0 = new Array(1, 0.0001, 0.0000000001);
		var factors1 = new Array(10000, 1, 0.000001);
		var factors2 = new Array(10000000000, 1000000, 1);

		var factors = new Array(factors0,factors1,factors2);
		var val1 = $('#areas_1').val();
		var val2 = $('#areas_2').val();
		
		var picker_1 = $('#areas_picker_1').val();
		var picker_2 = $('#areas_picker_2').val();
		
		
		if( $(this).attr('id') == 'areas_1' ){
			$('#areas_2').val( factors[picker_1][picker_2] * val1 );
		}
		if( $(this).attr('id') == 'areas_2' ){
			$('#areas_1').val( factors[picker_1][picker_2] * val2 );
		}
		if( $(this).attr('id') == 'areas_picker_1' || $(this).attr('id') == 'areas_picker_2' ){
			$('#areas_2').val( factors[picker_1][picker_2] * val1 );
		}
		
		
	})
	
	$('#m_c_cloth_1, #m_c_cloth_2, #m_c_cloth_3, #m_c_cloth_4').on( 'change', function(){
		var index =  $(this).prop('selectedIndex');
		$('#m_c_cloth_1 option:eq('+index+'), #m_c_cloth_2 option:eq('+index+'), #m_c_cloth_3 option:eq('+index+'), #m_c_cloth_4 option:eq('+index+')').prop('selected', true);
	})
	$('#w_c_cloth_1, #w_c_cloth_2, #w_c_cloth_3, #w_c_cloth_4').on( 'change', function(){
		var index =  $(this).prop('selectedIndex');
		$('#w_c_cloth_1 option:eq('+index+'), #w_c_cloth_2 option:eq('+index+'), #w_c_cloth_3 option:eq('+index+'), #w_c_cloth_4 option:eq('+index+')').prop('selected', true);
	})
	
	$('#m_s_s_1, #m_s_s_2, #m_s_s_3').on( 'change', function(){
		var index =  $(this).prop('selectedIndex');
		$('#m_s_s_1 option:eq('+index+'), #m_s_s_2 option:eq('+index+'), #m_s_s_3 option:eq('+index+')').prop('selected', true);
	})
	$('#w_s_s_1, #w_s_s_2, #w_s_s_3').on( 'change', function(){
		var index =  $(this).prop('selectedIndex');
		$('#w_s_s_1 option:eq('+index+'), #w_s_s_2 option:eq('+index+'), #w_s_s_3 option:eq('+index+')').prop('selected', true);
	})
	
	
	function commafy( num ) {
		var str = num.toString().split('.');
		if (str[0].length >= 5) {
			str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1,');
		}
		if (str[1] && str[1].length >= 5) {
			str[1] = str[1].replace(/(\d{3})/g, '$1 ');
		}
		//return num;
		return str.join('.');
	}
}) // global end


jQuery(document).ready(function(){

	$('.rounded-corner').each(function(){
		
		var current = 0;
		
		$(this).find('.rounded').mouseover(function() {
	  			 $(this).css("cursor", "pointer" );
   				 current++;
   				 
		});
		
		$(this).find('.rounded').click(function() {
	  			 $(this).html(current);
   				 current++;
   				 console.log($(".right-content").children().last());
   				 switch (current) { 
					
				    case 5: 
				        $(".right-content").children().first().next().attr( "src", "http://10.11.23.10/wordpress3/wp-content/plugins/rating/img/star-on.png" );
				        break;
				    case 10: 
				         $(".right-content").children().first().next().next().attr( "src", "http://10.11.23.10/wordpress3/wp-content/plugins/rating/img/star-on.png" );
				        break;
				    case 15: 
				         $(".right-content").children().first().next().next().next().attr( "src", "http://10.11.23.10/wordpress3/wp-content/plugins/rating/img/star-on.png" );
				        break;      
				    case 20: 
				         $(".right-content").children().first().next().next().next().next().attr( "src", "http://10.11.23.10/wordpress3/wp-content/plugins/rating/img/star-on.png" );
				        break;
				    case 25: 
				          $(".right-content").children().next().next().next().next().next().attr( "src", "http://10.11.23.10/wordpress3/wp-content/plugins/rating/img/star-on.png" );
				        break;
				    default:
				         //console.log(current);
				}
		});
		
		
		
	});
});
$(document).ready(function() {
   jQuery('#languageselect').submit( function() {

        $.ajax({
            url     : $(this).attr('action'),
            type    : $(this).attr('method'),
            data    : $(this).serialize(),
            success : function( data ) {
    
                      },
            error   : function(){
                         alert('Something wrong');
                      }
        });
    });
    $('#myskillset').removeClass('hidden');
	$('#myCarousel').carousel({
	interval: 0
	})
    
    $('#myCarousel').on('slid.bs.carousel', function() {
    	//alert("slid");
	});
    
      

	$('#myCarousel').carousel({
	interval: 0
	})
    
    $('#myCarousel').on('slid.bs.carousel', function() {
    	//alert("slid");
	});
    
    !function(d,s,id){
      var js,
      fjs=d.getElementsByTagName(s)[0],
      p=/^http:/.test(d.location)?'http':'https';
      if(!d.getElementById(id)){
          js=d.createElement(s);
          js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
          fjs.parentNode.insertBefore(js,fjs);
      }}(document, 'script', 'twitter-wjs');
  
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


});
function showpropertraits(){

   if($('#traits').val() === '0'){
       $('#projects').addClass('hidden');
       $('#workplaces').addClass('hidden');
       $('#myskillset').removeClass('hidden');
   }else if($('#traits').val() === '1'){
        $('#projects').removeClass('hidden');
       $('#workplaces').addClass('hidden');
       $('#myskillset').addClass('hidden');
   }else{
       $('#projects').addClass('hidden');
       $('#workplaces').removeClass('hidden');
       $('#myskillset').addClass('hidden');
   }
    

}

  function languageselect(){
       $('#languageselect').submit();

   }

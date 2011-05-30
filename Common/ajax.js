$(document).ready(function(){

	$('#go').hide();  										// div de loading
	$("#yes").hide();										// div succes de requette
	$("#no").hide();										// div error durant la  requette
	$('#space1').hide();									// div de log in
	$("#caisse").hide();									// div de la caisse(animation)
	
	//$('#commanderonligne').hide('fast').delay(3000).show('fast');	//div image font dans le body
	setInterval( function()
      {
         $('#commanderonligne').hide(500).delay(500).slideDown(3000);
		 
      }, 2500);
	
	$('#go').ajaxStart(function() {
	$('#go').show();
	$("#caisse").show('slow');
	
	});
	
	$('#go').ajaxStop(function() {
	$('#go').hide();
	$("#caisse").hide();
	
	});
	
	$('#go').ajaxStop(function() {
	$('#go').hide();
	
	});
	
	
	$('#go').ajaxSuccess(function() {
	$('#go').hide();
	$("#yes").show();
	$("#no").hide();
	});

	
	$('#go').ajaxError(function() {
	$('#go').hide();
	$("#yes").hide();
	$("#no").show();
	});
	
	
	$("#menu").hide();
	
	
	$('#space').click(function(){
		
		
		
		$('#log').animate({
							opacity : 0
							},2000);
		
		$("#menu").slideDown("slow");
		$('#space1').show();
		$('#space').hide();
		
		});
	
	$('#space1').click(function(){
	$('#log').animate({
							opacity :100
							},2000);
	
	$('#menu').slideUp({
							opacity :0
							},2000);
							
							
	$('#space1').hide();
	$('#space').show();
	});
		
		//check users
		
		$("#checkuser").blur(function() {
			
					check = $("#checkuser").val();
						$.post	(
									'checkuser.php',
									{
										verif : check
										
									},
									
									function(data){
										if(data > 0)
											{
												$("#check1").css
												({
												"background":"url(Images/no.png) no-repeat ",
												"width":"32px"
												});
											}
										else if(data == 0)
											{
												$("#check1").css
												({
												"background":"url(Images/ok.png) no-repeat ",
												"width":"32px"
												});
											}
									
									},
									'text'
								);
					
		
		});
	
		
		
		$("#checkmail").blur(function() {
			
					check = $("#checkmail").val();
					$.post	(
								'mailcheck.php',
								{
									email : check
									
								},
								
								function(data){
								if(data == 0)
										{
											$("#check3").css
											({
											"background":"url(Images/no.png) no-repeat ",
											"width":"32px"
											});
										}
									else if(data == 1)
										{
											$("#check3").css
											({
											"background":"url(Images/ok.png) no-repeat ",
											"width":"32px"
											});
										}
								
								},
								'text'
							);
		
		});
		
		
		$("#password").blur(function() {
			
					check = $("#password").val();
						$.post	(
									'checkpassword.php',
									{
										pass : check
										
									},
									
									function(data){
										if(data == 0)
											{
												$("#check2").css
												({
												"background":"url(Images/no.png) no-repeat ",
												"width":"32px"
												});
											}
										else if(data == 1)
											{
												$("#check2").css
												({
												"background":"url(Images/ok.png) no-repeat ",
												"width":"32px"
												});
											}
									
									},
									'text'
								);
					
		
		});
	

    $("#panier").animate({  
        marginLeft: "+=958px", 
		
    }, 2000 ); 
	
	 $("#caisse").animate({  
        marginLeft: "+=658px", 
		marginTop: "-=280px"
		
    }, 2000 ); 
	
	$("#plat").animate({   
		marginTop: "-=303px",
    }, 2000 );
	
	$("#votrepanier").animate({  
        marginLeft: "+=858px", 
		
    }, 2000 ); 
	
										//   DRAG
	
	$(".drag" ).draggable({
	
		start:function(e,ui){
			
			$("#panier").css('background-image','url("images/panierplein.png")');
		
		},
		
		stop:function(e,ui){
			
			$("#panier").css('background-image','url("images/Paniervide.png")');
			
		}
		
	});
										//END DRAG
	
										//DROP
	
	
	$("#panier").droppable( {  
		
		drop: function(e,ui) {
			
			var id	= ui.draggable.attr('id');
			
			var qte = prompt('Saisissez la quantite svp !!');
				if(qte)
					{
					
						if(isNaN(qte)) {
							var qte = prompt('entrer un nombre svp !!');
							
						}
						
						else if(qte == 0 )
							{
								alert('c\'est comme si que vous avez pas commander');
							}
						else if(qte	< 0 )
							{
								alert('Entrez un nombre positif');
							}
						else if(qte)
							{
								$.post
										(
											'addplat.php',
												{
													ident : id,
													quant : qte
												},
											
											function(data){
													console.log(data);
										
											},
											'text'
										);
							}
					//$("#" + id).hide();
					}
				else{
								
								alert('vous avez annuler la commande');
					}
					
			
			
			
			
			
		},								//END DROP
		
		
		
		over: function(e,ui) {
			
			
			$("#panier").css('background-image','url("images/Panierplein.png")');
			
		},
		
		
		
		deactivate: function(e,ui) {
		
			
			$("#panier").css('background-image','url("images/Paniervide.png")');
			
		},
	
		activate:function(e,ui){
			
			$("#panier").css('background-image','url("images/here.png")');
			
		}
	}); 
	
	
	/* $('#mypanier').imageZoom({
		small: '../Images/images.png',
		original: '../Images/modifier-le-panier.png'
		
	});
	*/

	$("#mypanier").click(function(){
	
		window.location = "monpanier.php";
	});

});


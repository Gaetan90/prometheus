		$(function() {						
			$('#etage3').css('height', '100px').css('border-bottom', 'solid 1px');
			$('#etage2').css('height', '100px').css('border-bottom', 'solid 1px');
			$('#etage1').css('height', '100px');
			
			$('.gates').hide();
			$('.salle').css('color', 'black').hide();
			$('.text').css('text-align', 'center');
			
			$('#cafet').css('position', 'absolute').css('top', '13px').css('left', '13px').css('width', '370px').css('height', '165px').css('background-color', 'gray');
			$('#Fab_Lab').css('position', 'absolute').css('top', '13px').css('left', '388px').css('width', '101px').css('height', '165px').css('background-color', 'gray');
			$('#S004').css('position', 'absolute').css('top', '182px').css('left', '20px').css('width', '122px').css('height', '146px').css('background-color', '#E21313');
			$('#BDE').css('position', 'absolute').css('top', '378px').css('left', '20px').css('width', '122px').css('height', '132px').css('background-color', '#FF6600');
			$('#S002').css('position', 'absolute').css('top', '513px').css('left', '20px').css('width', '231px').css('height', '194px').css('background-color', 'gray').css('border-right', 'dashed 1px');
			$('#S001').css('position', 'absolute').css('top', '513px').css('left', '251px').css('width', '232px').css('height', '194px').css('background-color', 'gray');
			$('#B001').css('position', 'absolute').css('top', '378px').css('left', '387px').css('width', '97px').css('height', '64px').css('background-color', '#ED0000');
			$('#B002').css('position', 'absolute').css('top', '445px').css('left', '360px').css('width', '123px').css('height', '65px').css('background-color', '#ED0000');
			
			
			$('#S101').css('position', 'absolute').css('top', '381px').css('left', '19px').css('width', '125px').css('height', '129px').css('background-color', '#E21313');
			$('#S102').css('position', 'absolute').css('top', '182px').css('left', '19px').css('width', '125px').css('height', '194px').css('background-color', '#E21313');
			$('#S103').css('position', 'absolute').css('top', '12px').css('left', '13px').css('width', '130px').css('height', '165px').css('background-color', '#E21313');
			$('#S104').css('position', 'absolute').css('top', '12px').css('left', '148px').css('width', '137px').css('height', '123px').css('background-color', '#E21313');
			$('#S105').css('position', 'absolute').css('top', '12px').css('left', '290px').css('width', '204px').css('height', '123px').css('background-color', '#E21313');
			$('#S106').css('position', 'absolute').css('top', '140px').css('left', '364px').css('width', '125px').css('height', '135px').css('background-color', '#E21313');
			$('#S1062').css('position', 'absolute').css('top', '140px').css('left', '489px').css('width', '6px').css('height', '30px').css('background-color', '#E21313');
			$('#S107').css('position', 'absolute').css('top', '280px').css('left', '364px').css('width', '125px').css('height', '146px').css('background-color', '#E21313');
			$('#S108').css('position', 'absolute').css('top', '431px').css('left', '364px').css('width', '125px').css('height', '144px').css('background-color', '#E21313');
			$('#B101').css('position', 'absolute').css('top', '578px').css('left', '390px').css('width', '100px').css('height', '131px').css('background-color', '#ED0000');
			$('#B1012').css('position', 'absolute').css('top', '578px').css('left', '364px').css('width', '26px').css('height', '30px').css('background-color', '#ED0000');
			$('#B102').css('position', 'absolute').css('top', '612px').css('left', '324px').css('width', '61px').css('height', '97px').css('background-color', '#ED0000');
			$('#B103').css('position', 'absolute').css('top', '612px').css('left', '255px').css('width', '64px').css('height', '97px').css('background-color', '#ED0000');
			$('#B104').css('position', 'absolute').css('top', '612px').css('left', '122px').css('width', '128px').css('height', '97px').css('background-color', '#ED0000');
			$('#B105').css('position', 'absolute').css('top', '572px').css('left', '19px').css('width', '98px').css('height', '137px').css('background-color', '#ED0000');
			$('#B1052').css('position', 'absolute').css('top', '572px').css('left', '117px').css('width', '27px').css('height', '35px').css('background-color', '#ED0000');
			
			
			$('#archive').css('position', 'absolute').css('top', '379px').css('left', '15px').css('width', '125px').css('height', '130px').css('background-color', 'gray');
			$('#S202').css('position', 'absolute').css('top', '180px').css('left', '15px').css('width', '125px').css('height', '195px').css('background-color', '#E21313');
			$('#S203').css('position', 'absolute').css('top', '11px').css('left', '9px').css('width', '129px').css('height', '164px').css('background-color', '#E21313');
			$('#S204').css('position', 'absolute').css('top', '11px').css('left', '143px').css('width', '137px').css('height', '123px').css('background-color', '#E21313');
			$('#S205').css('position', 'absolute').css('top', '11px').css('left', '285px').css('width', '201px').css('height', '123px').css('background-color', '#E21313');
			$('#S206').css('position', 'absolute').css('top', '139px').css('left', '357px').css('width', '124px').css('height', '137px').css('background-color', '#E21313');
			$('#S2062').css('position', 'absolute').css('top', '139px').css('left', '481px').css('width', '6px').css('height', '30px').css('background-color', '#E21313');
			$('#S207').css('position', 'absolute').css('top', '281px').css('left', '357px').css('width', '124px').css('height', '118px').css('background-color', '#E21313');
			$('#B200').css('position', 'absolute').css('top', '404px').css('left', '357px').css('width', '124px').css('height', '104px').css('background-color', '#ED0000');
			$('#B201').css('position', 'absolute').css('top', '512px').css('left', '357px').css('width', '125px').css('height', '62px').css('background-color', '#ED0000');
			$('#B202').css('position', 'absolute').css('top', '578px').css('left', '384px').css('width', '98px').css('height', '132px').css('background-color', '#ED0000');
			$('#B2022').css('position', 'absolute').css('top', '578px').css('left', '357px').css('width', '27px').css('height', '31px').css('background-color', '#ED0000').hide();
			$('#B203').css('position', 'absolute').css('top', '612px').css('left', '316px').css('width', '62px').css('height', '97px').css('background-color', '#ED0000');
			$('#B204').css('position', 'absolute').css('top', '612px').css('left', '250px').css('width', '61px').css('height', '97px').css('background-color', '#ED0000');
			$('#B205').css('position', 'absolute').css('top', '612px').css('left', '184px').css('width', '61px').css('height', '97px').css('background-color', '#ED0000');
			$('#B206').css('position', 'absolute').css('top', '612px').css('left', '118px').css('width', '61px').css('height', '97px').css('background-color', '#ED0000');
			$('#B207').css('position', 'absolute').css('top', '572px').css('left', '15px').css('width', '98px').css('height', '139px').css('background-color', '#ED0000');
			$('#B2072').css('position', 'absolute').css('top', '572px').css('left', '113px').css('width', '27px').css('height', '36px').css('background-color', '#ED0000').hide();
			
			$('.salle').each(function(){
				$(this).css('line-height', $(this).css('height'));
			});	
			
			
			$('#pacman').css('position', 'absolute').css('top', '140px').css('left', '250px').hide();
			
			$('button').css('position', 'absolute').css('top', '150px').css('left', '1250px');
			$('#touche').css('position', 'abosolute').css('width', '240px').css('height', '125px').css('border', 'solid 1px');
		
			var anim = false;
			var previous = 0; 
			var etage;
			var salle;
			var min_width;
			var min_height;
			var top;
			var left;
			var pacman_top;
			var pacman_left;
			
			$('.etage').on('click', function() // Fonction qui gère dynamiquement les animations des différents étages
			{					
				etage = $(this).attr('id');					
				
				var width = $('#'+etage).css('width');
				width = width.substring(0, width.indexOf('p'));
				
				if(anim == false)
				{
					anim = true;
					
					if(width == 300)
					{						
						$('.etage').hide();
						$('#'+etage).show();
						$('.right').hide(1500);
						$('.top').hide(1500);
						$('.etage center').hide(1500);										

						setTimeout(function(){						
								$('.left').animate({'top': '200px', 'width': '+=200', 'height': '+=420'}, 1500).css('-webkit-transform', 'rotate(0deg) skew(0deg, 0deg)').css('-moz-transform', 'rotate(0deg) skew(0deg, 0deg)').css('transform', 'rotate(0deg) skew(0deg, 0deg)');
								$('#'+etage).animate({'width': '+=200', 'height': '+=620', 'border': 'none'}, 1500);
								$('#'+etage+' .salle').show(2000);
								$('#B2022').show(2000);
								$('#B2072').show(2000);
								$('#S2062').show(2000);
								$('#B1012').show(2000);
								$('#B1052').show(2000);
								$('#S1062').show(2000);
								$('.gates').show(2000);								
								anim = false;
							},1000); 
							
						if(etage == 'etage1')
						{
							previous = 1;
							
							// $('#'+etage).append('<div class="salle" id="escaliers_up"></div>');
							
							setTimeout(function()
							{
								$('#'+etage).css('background-image', 'url("img/RDC.png")');
							}, 2500);
																			
							$('#etage1 #escaliers_up').css('position', 'absolute').css('top', '190px').css('left', '305px').css('width', '220px').css('height', '220px').css('border', 'solid 1px').css('border-color', 'black').css('color', 'black').css('background-color', '#DC143C').css('text-align', 'center').css('line-height', '220px').show().html('Monter');
							
							/* Bouger son personnage */
							$('#'+etage).append('<img src="Photos/Hugo_Huilier.jpg" id="character" alt="character" />');
							$('#character').css('position', 'absolute').css('top', '275px').css('left', '468px').css('width', '15px').css('height', '15px');
							
							var character_top;
							var character_left;
							var new_character_top;
							var new_character_left;							
							
							$(document).keydown(function(e){
								character_top = $('#character').css('top');
								character_left = $('#character').css('left');
								
								character_top = character_top.substring(0, character_top.indexOf('p'));
								character_left = character_left.substring(0, character_left.indexOf('p'));	

									switch (e.which)
									{										
										case 37: // Flèche de gauche											
											if((character_top >= 183 && character_top <= 359 && character_left >= 324 && character_left <= 468) || (character_top >= 183 && character_top <= 428 && character_left >= 324 && character_left <= 368) || (character_top >= 337 && character_top <= 359 && character_left >= 22 && character_left <= 322) || (character_top >= 181 && character_top <= 428 && character_left >= 148 && character_left <= 166) || (character_top >= 331 && character_top <= 337 && character_left >= 22 && character_left <= 146))
											{
												$('#character').stop().animate({left: '-=2'}, 1);
											}
										break;
										
										case 38: // Flèche du haut											
											if((character_top >= 185 && character_top <= 359 && character_left >= 322 && character_left <= 468) || (character_top >= 185 && character_left >= 322 && character_left <= 368) || (character_top >= 339 && character_top <= 359 && character_left >= 20 && character_left <= 320) || 
											(character_top >= 183 && character_top <= 428 && character_left >= 146 && character_left <= 166) || (character_top >= 333 && character_top <= 337 && character_left >= 20 && character_left <= 146))
											{
												$('#character').stop().animate({top: '-=2'}, 1);
											}
										break;
										
										case 39: // Flèche de droite											
											if((character_top >= 183 && character_top <= 359 && character_left >= 322 && character_left <= 466) || (character_top >= 359 && character_top <= 428 && character_left >= 322 && character_left <= 366) || (character_top >= 337 && character_top <= 359 && character_left >= 20 && character_left <= 320) || (character_top >= 181 && character_top <= 428 && character_left >= 146 && character_left <= 164) || (character_top >= 331 && character_top <= 337 && character_left >= 20 && character_left <= 144))
											{
												$('#character').stop().animate({left: '+=2'}, 1);
											}
										break;
										
										case 40: // Flèche du bas											
											if((character_top >= 183 && character_top <= 357 && character_left >= 322 && character_left <= 468) || (character_top <= 426 && character_left >= 322 && character_left <= 368) || (character_top >= 337 && character_top <= 357 && character_left >= 20 && character_left <= 320) || 
											(character_top >= 181 && character_top <= 426 && character_left >= 146 && character_left <= 166) || (character_top >= 331 && character_top <= 335 && character_left >= 20 && character_left <= 146))
											{
												$('#character').stop().animate({top: '+=2'}, 1);
											}
										break;
										
										case 13:											
											if(character_top >= 299 && character_top <= 309 && character_left == 146)
											{
												$('#S004').click();												
											}
											
											else if(character_top >= 381 && character_top <= 389 && character_left == 368)
											{
												$('#B001').click();
											}
											
											else if(character_top == 427 && character_left >= 360 && character_left <= 368)
											{
												$('#B002').click();
											}
										break;
									}
									
							});							
							/*Move your character */
						}
						
						else if(etage == 'etage2')
						{
							previous = 2;
							
							// $('#'+etage).append('<div class="salle" id="escaliers_up"></div><div class="salle" id="escaliers_down"></div>');	
							
							setTimeout(function()
							{
								$('#'+etage).css('background-image', 'url("img/Etage 1.png")');
							}, 2500);
							
							$('#etage2 #escaliers_up').css('position', 'absolute').css('top', '190px').css('left', '305px').css('width', '110px').css('height', '220px').css('border', 'solid 1px').css('border-color', 'black').css('color', 'black').css('background-color', '#DC143C').css('text-align', 'center').css('line-height', '220px').show().html('Monter');
							$('#etage2 #escaliers_down').css('position', 'absolute').css('top', '190px').css('left', '415px').css('width', '110px').css('height', '220px').css('border', 'solid 1px').css('border-color', 'black').css('color', 'black').css('background-color', '#DC143C').css('text-align', 'center').css('line-height', '220px').show().html('Descendre');
							
							/* Pacman */
							/*$('#pacman').show(3200);

							setInterval(function(){
								pacman_left = $('#pacman').css('left');
								pacman_left = pacman_left.substring(0, pacman_left.indexOf('p'));
								
								pacman_top = $('#pacman').css('top');
								pacman_top = pacman_top.substring(0, pacman_top.indexOf('p'));
								
								function bis() {
									$('#pacman').animate({left: '+=305'}, 5000)
										 .animate({top: '+=400'}, 5000)
										 .animate({left: '-=305'}, 5000)
										.animate({top: '-=400'}, 5000, bis);
									};
								bis();
							});*/	
							/* Pacman */

							
							
							/* Bouger son personnage */
							$('#'+etage).append('<img src="Photos/Hugo_Huilier.jpg" id="character" alt="character" />');
							$('#character').css('position', 'absolute').css('top', '345px').css('left', '210px').css('width', '15px').css('height', '15px');
							
							var character_top;
							var character_left;
							var new_character_top;
							var new_character_left;							
							
							$(document).keydown(function(e){
								character_top = $('#character').css('top');
								character_left = $('#character').css('left');
								
								character_top = character_top.substring(0, character_top.indexOf('p'));
								character_left = character_left.substring(0, character_left.indexOf('p'));	

									switch (e.which)
									{										
										case 37: // Flèche de gauche											
											if((character_left > 20 && character_left <= 149 && character_top > 512 && character_top <= 555) || (character_left >= 149 && character_left <= 181 && character_top >= 139 && character_top <= 604) || (character_top >= 335 && character_top <= 361 && character_left >= 150 && character_left <= 330) || (character_top >= 337 && character_top <= 361 && character_left >= 150 && character_left <= 346) || (character_top >= 139 && character_top <= 593 && character_left >= 326 && character_left <= 346) || (character_top >= 139 && character_top < 593 && character_left >= 326 && character_left <= 346) || (character_top >= 571 && character_top <= 593 && character_left >= 150 && character_left <= 346) || (character_top >= 361 && character_top <= 411 && character_left >= 318 && character_left <= 330))
											{
												$('#character').stop().animate({left: '-=2'}, 1);
											}
										break;
										
										case 38: // Flèche du haut											
											if((character_left > 19 && character_left <= 149 && character_top > 513 && character_top <= 555) || (character_left >= 148 && character_left <= 170 && character_top >= 140 && character_top <= 604) || (character_top >= 339 && character_top <= 411 && character_left >= 170 && character_left <= 176) || (character_top >= 339 && character_top <= 361 && character_left <= 346) || (character_top >= 339 && character_top <= 411 && character_left >= 316) || (character_top >= 140 && character_left >= 324 && character_left <= 346) || (character_top >= 573 && character_top <= 593 && character_left >= 172 && character_left <= 320))
											{
												$('#character').stop().animate({top: '-=2'}, 1);
											}
										break;
										
										case 39: // Flèche de droite											
											if(character_left <= 168 || (character_top >= 337 && character_top <= 411 && character_left <= 174) || (character_top >= 337 && character_top <= 361 && character_left <= 344) || (character_top >= 139 && character_top <= 593 && character_left >= 324 && character_left <= 344) || (character_top >= 571 && character_top <= 593 && character_left >= 148 && character_left <= 344) || (character_top >= 361 && character_top <= 411 && character_left >= 316 && character_left <= 330))
											{
												$('#character').stop().animate({left: '+=2'}, 1);
											}
										break;
										
										case 40: // Flèche du bas											
											if((character_top >= 513 && character_top <= 553 && character_left >= 20 && character_left <= 148) || (character_top < 593 && character_left >= 148 && character_left <= 170) || (character_top <= 409 && character_left <= 176 && character_left >= 170) || (character_top >= 337 && character_top <= 359 && character_left <= 346) || (character_top <= 409 && character_left >= 316 && character_left <= 346) || (character_top >= 138 && character_top < 593 && character_left >= 324 && character_left <= 346) || (character_top >= 571 && character_top <= 591 && character_left >= 172 && character_left <= 320))
											{
												$('#character').stop().animate({top: '+=2'}, 1);
											}
										break;
										
										case 13:											
											if(character_top >= 483 && character_top <= 495 && character_left >= 148 && character_left <= 149)
											{
												$('#S101').click();												
											}
											
											else if(character_top >= 349 && character_top <= 355 && character_left >= 148 && character_left <= 149)
											{
												$('#S102').click();
											}
											
											else if(character_top >= 181 && character_top <= 191 && character_left >= 148 && character_left <= 149)
											{
												$('#S102').click();
											}
											
											else if(character_top >= 149 && character_top <= 159 && character_left >= 148 && character_left <= 149)
											{
												$('#S103').click();
											}
											
											else if(character_top == 139 && character_left >= 158 && character_left <= 160)
											{
												$('#S104').click();
											}
											
											else if(character_top == 139 && character_left >= 326 && character_left <= 336)
											{
												$('#S105').click();
											}
											
											else if(character_top >= 249 && character_top <= 261 && character_left == 346)
											{
												$('#S106').click();
											}
											
											else if(character_top >= 279 && character_top <= 291 && character_left == 346)
											{
												$('#S107').click();
											}
											
											else if(character_top >= 549 && character_top <= 557 && character_left == 346)
											{
												$('#S108').click();
											}
											
											else if(character_top >= 579 && character_top <= 589 && character_left == 346)
											{
												$('#B101').click();
											}
											
											else if(character_top == 593 && character_left >= 324 && character_left <= 334)
											{
												$('#B102').click();
											}
											
											else if(character_top == 593 && character_left >= 280 && character_left <= 288)
											{
												$('#B103').click();
											}
											
											else if(character_top == 593 && character_left >= 224 && character_left <= 234)
											{
												$('#B104').click();
											}
											
											else if(character_top == 593 && character_left >= 160 && character_left <= 166)
											{
												$('#B104').click();
											}
											
											else if(character_top >= 579 && character_top <= 593 && character_left == 148)
											{
												$('#B105').click();
											}
										break;
									}
									
							});							
							/*Move your character */
						}		
						
						else
						{
							previous = 3;
							
							// $('#'+etage).append('<div class="salle" id="escaliers_down"></div>');

							setTimeout(function()
							{
								$('#'+etage).css('background-image', 'url("img/Etage 2.png")');
							}, 2500);
							
							/*$('#etage3 #escaliers_down').css('position', 'absolute').css('top', '190px').css('left', '305px').css('width', '220px').css('height', '220px').css('border', 'solid 1px').css('border-color', 'black').css('color', 'black').css('background-color', '#DC143C').css('text-align', 'center').css('line-height', '220px').show().html('Descendre');*/
							
							/* Bouger son personnage */
							$('#'+etage).append('<img src="Photos/Hugo_Huilier.jpg" id="character" alt="character" />');
							$('#character').css('position', 'absolute').css('top', '355px').css('left', '210px').css('width', '15px').css('height', '15px');
							
							var character_top;
							var character_left;
							var new_character_top;
							var new_character_left;							
							
							$(document).keydown(function(e){
								character_top = $('#character').css('top');
								character_left = $('#character').css('left');
								
								character_top = character_top.substring(0, character_top.indexOf('p'));
								character_left = character_left.substring(0, character_left.indexOf('p'));	

									switch (e.which)
									{										
										case 37: // Flèche de gauche											
											if((character_top >= 337 && character_top <= 359 && character_left >= 144 && character_left <= 338) || (character_top >= 138 && character_top <= 593 && character_left >= 144 && character_left <= 164) || (character_top >= 513 && character_top <= 554 && character_left >= 18 && character_left <= 164) || (character_top >= 359 && character_top <= 409 && character_left >= 164 && character_left <= 170) || (character_top >= 573 && character_top <= 593 && character_left >= 164 && character_left <= 338) || (character_top >= 138 && character_top <= 593 && character_left >= 320 && character_left <= 338) || (character_top >= 359 && character_top <= 409 && character_left >= 312 && character_left <= 318))
											{
												$('#character').stop().animate({left: '-=2'}, 1);
											}
										break;
										
										case 38: // Flèche du haut											
											if((character_top >= 339 && character_top <= 359 && character_left >= 142 && character_left <= 338) || (character_top >= 140 && character_top <= 593 && character_left >= 142 && character_left <= 164) || (character_top >= 515 && character_top <= 554 && character_left >= 16 && character_left <= 164) || (character_top >= 359 && character_top <= 409 && character_left >= 164 && character_left <= 170) || (character_top >= 575 && character_top <= 593 && character_left >= 164 && character_left <= 338) || (character_top >= 140 && character_top <= 593 && character_left >= 318 && character_left <= 338) || (character_top >= 359 && character_top <= 409 && character_left >= 310 && character_left <= 318))
											{
												$('#character').stop().animate({top: '-=2'}, 1);
											}
										break;
										
										case 39: // Flèche de droite											
											if((character_top >= 337 && character_top <= 359 && character_left >= 142 && character_left <= 336) || (character_top >= 138 && character_top <= 593 && character_left >= 142 && character_left <= 162) || (character_top >= 513 && character_top <= 554 && character_left >= 16 && character_left <= 162) || (character_top >= 359 && character_top <= 409 && character_left >= 164 && character_left <= 168) || (character_top >= 573 && character_top <= 593 && character_left >= 164 && character_left <= 336) || (character_top >= 138 && character_top <= 593 && character_left >= 318 && character_left <= 336) || (character_top >= 359 && character_top <= 409 && character_left >= 310 && character_left <= 318))
											{
												$('#character').stop().animate({left: '+=2'}, 1);
											}
										break;
										
										case 40: // Flèche du bas											
											if((character_top >= 337 && character_top <= 357 && character_left >= 142 && character_left <= 338) || (character_top >= 138 && character_top <= 591 && character_left >= 142 && character_left <= 164) || (character_top >= 513 && character_top <= 552 && character_left >= 16 && character_left <= 164) || (character_top >= 359 && character_top <= 407 && character_left >= 164 && character_left <= 170) || (character_top >= 573 && character_top <= 591 && character_left >= 164 && character_left <= 338) || (character_top >= 138 && character_top <= 591 && character_left >= 318 && character_left <= 338) || (character_top >= 359 && character_top <= 407 && character_left >= 310 && character_left <= 318))
											{
												$('#character').stop().animate({top: '+=2'}, 1);
											}
										break;
										
										case 13:											
											if(character_top >= 349 && character_top <= 359 && character_left >= 142 && character_left <= 144)
											{
												$('#S202').click();												
											}
											
											else if(character_top >= 181 && character_top <= 191 && character_left >= 142 && character_left <= 144)
											{
												$('#S202').click();												
											}
											
											else if(character_top >= 149 && character_top <= 157 && character_left == 142)
											{
												$('#S203').click();												
											}
											
											else if(character_top == 139 && character_left >= 150 && character_left <= 154)
											{
												$('#S204').click();												
											}
											
											else if(character_top == 139 && character_left >= 320 && character_left <= 328)
											{
												$('#S205').click();												
											}
											
											else if(character_top >= 249 && character_top <= 261 && character_left == 338)
											{
												$('#S206').click();												
											}
											
											else if(character_top >= 279 && character_top <= 291 && character_left == 338)
											{
												$('#S207').click();												
											}
											
											else if(character_top >= 549 && character_top <= 557 && character_left == 338)
											{
												$('#B201').click();											
											}
											
											else if(character_top >= 579 && character_top <= 589 && character_left == 338)
											{
												$('#B202').click();											
											}
											
											else if(character_top == 593 && character_left >= 320 && character_left <= 326)
											{
												$('#B203').click();											
											}
											
											else if(character_top == 593 && character_left >= 288 && character_left <= 294)
											{
												$('#B204').click();											
											}
											
											else if(character_top == 593 && character_left >= 220 && character_left <= 228)
											{
												$('#B205').click();											
											}
											
											else if(character_top == 593 && character_left >= 156 && character_left <= 162)
											{
												$('#B206').click();											
											}
											
											else if(character_top >= 581 && character_top <= 587 && character_left == 142)
											{
												$('#B207').click();												
											}
										break;
									}
									
							});							
							/*Move your character */
						}
					}

					else if(width == 500)
					{				
						$('#'+etage+' .salle').hide(1000);
						$('#B2022').hide(1000);
						$('#B2072').hide(1000);
						$('#S2062').hide(1000);
						$('#B1012').hide(1000);
						$('#B1052').hide(1000);
						$('#S1062').hide(1000);
						$('.gates').hide(1000);
						$('#'+etage+' #character').remove();
						
						setTimeout(function(){
							$('.left').animate({'top': '354px', 'width': '-=200', 'height': '-=420'}, 1500).css('-webkit-transform', 'rotate(15deg) skew(15deg, 15deg)').css('-moz-transform', 'rotate(15deg) skew(15deg, 15deg)').css('transform', 'rotate(15deg) skew(15deg, 15deg)');;
							$('#'+etage).animate({'width': '-=200', 'height': '-=620'}, 1500);
							$('.etage').show(1500);							
							$('.right').show(1500);
							$('.top').show(1500);
							$('.etage').css('background-image', 'url("")');							
							anim = false;
						},1000);
						
						setTimeout(function(){
							$('.etage center').show(1000);
						},2600);
						
						previous = 0;
						
						$( "#escaliers_up" ).remove();
						$( "#escaliers_down" ).remove();
						$('#pacman').hide();
						$('#character').hide();
					}
				}	


				var new_etage;

				$('#escaliers_up').on('click', function()
				{
					new_etage = etage.substring(5);
					new_etage++;
					
					$('#'+etage).click();

					setTimeout(function(){
							$('#etage'+new_etage).click();
						},3000);				
				});
				
				$('#escaliers_down').on('click', function()
				{
					new_etage = etage.substring(5);
					new_etage--;
					
					$('#'+etage).click();

					setTimeout(function(){
							$('#etage'+new_etage).click();
						},3000);				
				});
				
			});				
			
			$('.salle').on('click', function(e) // Fonction qui gère dynamiquement les animations des différentes salles
			{
				salle = $(this).attr('id');	
				
				if(salle != 'cafet' && salle != 'Fab_Lab' && salle != 'archive' && salle != 'S002' && salle != 'S001')
				{
					if(anim == false)
					{
						anim = true;
											
						if(salle == 'S004')
						{
							min_width = 122;
							min_height = 146;
							top = 182;
							left = 20;
						}
						
						else if(salle == 'BDE')
						{
							min_width = 122;
							min_height = 132;
							top = 378;
							left = 20;
						}
						
						else if(salle == 'S001')
						{
							min_width = 232;
							min_height = 194;
							top = 513;
							left = 251;
						}
						
						else if(salle == 'S002')
						{
							min_width = 231;
							min_height = 194;
							top = 513;
							left = 20;
						}
						
						else if(salle == 'B002')
						{
							min_width = 123;
							min_height = 65;
							top = 445;
							left = 360;
						}
						
						else if(salle == 'B001')
						{
							min_width = 97;
							min_height = 64;
							top = 378;
							left = 387;
						}
						
						else if(salle == 'S101')
						{
							min_width = 125;
							min_height = 129;
							top = 381;
							left = 19;
						}
						
						else if(salle == 'S102')
						{
							min_width = 125;
							min_height = 194;
							top = 182;
							left = 19;
						}
						
						else if(salle == 'S103')
						{
							min_width = 130;
							min_height = 165;
							top = 12;
							left = 13;
						}
						
						else if(salle == 'S104')
						{
							min_width = 137;
							min_height = 123;
							top = 12;
							left = 148;
						}
						
						else if(salle == 'S105')
						{
							min_width = 204;
							min_height = 123;
							top = 12;
							left = 290;
						}
						
						else if(salle == 'S106')
						{
							min_width = 125;
							min_height = 135;
							top = 140;
							left = 364;
						}
						
						else if(salle == 'S107')
						{
							min_width = 125;
							min_height = 146;
							top = 280;
							left = 364;
						}
						
						else if(salle == 'S108')
						{
							min_width = 125;
							min_height = 146;
							top = 431;
							left = 364;
						}
						
						else if(salle == 'B101')
						{
							min_width = 100;
							min_height = 131;
							top = 578;
							left = 390;
						}
						
						else if(salle == 'B102')
						{
							min_width = 61;
							min_height = 97;
							top = 612;
							left = 324;
						}
						
						else if(salle == 'B103')
						{
							min_width = 64;
							min_height = 97;
							top = 612;
							left = 255;
						}
						
						else if(salle == 'B104')
						{
							min_width = 128;
							min_height = 97;
							top = 612;
							left = 122;
						}
						
						else if(salle == 'B105')
						{
							min_width = 98;
							min_height = 137;
							top = 572;
							left = 19;
						}	

						else if(salle == 'S202')
						{
							min_width = 125;
							min_height = 195;
							top = 180;
							left = 15;
						}
						
						else if(salle == 'S203')
						{
							min_width = 129;
							min_height = 164;
							top = 11;
							left = 9;
						}
						
						else if(salle == 'S204')
						{
							min_width = 137;
							min_height = 123;
							top = 11;
							left = 143;
						}						
						
						else if(salle == 'S205')
						{
							min_width = 201;
							min_height = 123;
							top = 11;
							left = 285;
						}
						
						else if(salle == 'S206')
						{
							min_width = 124;
							min_height = 137;
							top = 139;
							left = 357;
						}
						
						else if(salle == 'S207')
						{
							min_width = 124;
							min_height = 118;
							top = 281;
							left = 357;
						}

						else if(salle == 'B200')
						{
							min_width = 124;
							min_height = 104;
							top = 404;
							left = 357;
						}
						
						else if(salle == 'B201')
						{
							min_width = 125;
							min_height = 62;
							top = 512;
							left = 357;
						}
						
						else if(salle == 'B202')
						{
							min_width = 98;
							min_height = 132;
							top = 578;
							left = 384;
						}	

						else if(salle == 'B203')
						{
							min_width = 62;
							min_height = 97;
							top = 612;
							left = 316;
						}
						
						else if(salle == 'B204')
						{
							min_width = 61;
							min_height = 97;
							top = 612;
							left = 250;
						}
						
						else if(salle == 'B205')
						{
							min_width = 61;
							min_height = 97;
							top = 612;
							left = 184;
						}

						else if(salle == 'B206')
						{
							min_width = 61;
							min_height = 97;
							top = 612;
							left = 118;
						}
						
						else if(salle == 'B207')
						{
							min_width = 98;
							min_height = 139;
							top = 572;
							left = 15;
						}						
						
						var width = $('#'+salle).css('width');				
						width = width.substring(0, width.indexOf('p'));				
						var up_width = 840 - width;
						
						var height = $('#'+salle+'').css('height');				
						height = height.substring(0, height.indexOf('p'));
						var up_height = 660 - height;
						
						if(width > 0 && width < 840)
						{	
							$('.left').animate({'width': '+=340', 'height': '-=60'}, 1500);
							$('.etage').css('background-image', 'url("")');
							$('#'+salle).html('').css('line-height', '').css('background-color', '').animate({'top': '0px', 'left': '0px', 'width': '+='+up_width+'', 'height': '+='+up_height+''}, 1500);
							$('.salle').hide();
							$('#B2022').hide(800);
							$('#B2072').hide(800);
							$('#S2062').hide(800);
							$('#B1012').hide(800);
							$('#B1052').hide(800);
							$('#S1062').hide(800);
							$('#pacman').hide(800);
							$('#character').hide(800);
							$('.gates').hide(800);
							$('#'+salle).show();
							
							$('#'+salle).append('<div id="table1"></div><div id="table2"></div><div id="table3"></div><fieldset class="infos"><legend>Informations</legend><div class="informations"></div>');
							$('#'+salle+' #table1').css('position', 'absolute').css('bottom', '150px').css('right', '0px').css('width', '150px').css('height', '509px').css('border-left', 'solid 1px').css('border-bottom', 'solid 1px').hide();
							$('#'+salle+' #table2').css('position', 'absolute').css('bottom', '150px').css('right', '250px').css('width', '300px').css('height', '509px').css('border-left', 'solid 1px').css('border-bottom', 'solid 1px').css('border-right', 'solid 1px').hide();
							$('#'+salle+' #table3').css('position', 'absolute').css('bottom', '150px').css('left', '0px').css('width', '150px').css('height', '509px').css('border-right', 'solid 1px').css('border-bottom', 'solid 1px').hide();
							$('#'+salle+' .infos').css('position', 'absolute').css('bottom', '25px').css('left', '100px').css('width', '600px').css('height', '100px').hide();	
							
							$('#'+salle+' #table1').show(1500);
							$('#'+salle+' #table2').show(1500);
							$('#'+salle+' #table3').show(1500);
							
							var i, prenom, nom, position, chemin, table, style;
							
							for(i=0;i<=16;i++)
							{
								$.get('show_table.php', {id_div: salle, position: i}, function(data){
									prenom = data.substring(0, data.indexOf('_'));
									nom = data.substring(data.indexOf('_')+1, data.indexOf('-'));
									position = data.substring(data.indexOf('-')+1, data.indexOf('/'));
									table = data.substring(data.indexOf('/')+1, data.indexOf('.'));
									chemin = 'Photos/'+prenom+'_'+nom+'.jpg';
									
									if(prenom != '')
									{									
										if(table == 1)
										{
											if(position == 1)
											{
												style = "'position: absolute; left: 0px'";
											}

											else if(position == 2)
											{
												style = "'position: absolute; bottom: 40%'";
											}
											
											else
											{
												style = "'position: absolute; bottom: 0px'";
											}
										}
										
										else if(table == 2)
										{
											if(position == 1)
											{
												style = "'position: absolute; right: 0px;'";
											}
											
											else if(position == 2)
											{
												style = "'position: absolute; right: 0px; bottom: 40%;'";
											}
											
											else if(position == 3)
											{
												style = "'position: absolute; right: 0px; bottom: 0px;'";
											}
											
											else if(position == 4)
											{
												style = "'position: absolute; left: 0px'";
											}
											
											else if(position == 5)
											{
												style = "'position: absolute; bottom: 40%;'";
											}
											
											else
											{
												style = "'position: absolute; bottom: 0px;'";
											}
										}
										
										else
										{
											if(position == 1)
											{
												style = "'position: absolute; right: 0px;'";
											}
											
											else if(position == 2)
											{
												style = "'position: absolute; right: 0px; top: 26%'";
											}
											
											else if(position == 3)
											{
												style = "'position: absolute; right: 0px; top: 52%;'"
											}
											
											else
											{
												style = "'position: absolute; right: 0px; bottom: 0px'";
											}
										}
										
										$('#'+salle+' #table'+table).append('<img src='+chemin+' width=\'80px\' style='+style+' height=\'106px\' alt=\'Photo étudiant\' />');
									}
									
								});
							}					
							
							setTimeout(function(){							
								anim = false;
							},1500);
							
							if(salle == 'S004')
							{
								previous = 10;
							}
							
							else if(salle == 'BDE')
							{
								previous = 11;
							}
							
							else if(salle == 'S002')
							{
								previous = 12;
							}
							
							else if(salle == 'S001')
							{
								previous = 13;
							}
							
							else if(salle == 'B002')
							{
								previous = 14;
							}
							
							else if(salle == 'B001')
							{
								previous = 15;
							}
							
							else if(salle == 'S101')
							{
								previous = 20;
							}
							
							else if(salle == 'S102')
							{
								previous = 21;
							}
							
							else if(salle == 'S103')
							{
								previous = 22;
							}
							
							else if(salle == 'S104')
							{
								previous = 23;
							}
							
							else if(salle == 'S105')
							{
								previous = 24;
							}
							
							else if(salle == 'S106')
							{
								previous = 25;
							}
							
							else if(salle == 'S107')
							{
								previous = 26;
							}
							
							else if(salle == 'S108')
							{
								previous = 27;
							}
							
							else if(salle == 'B101')
							{
								previous = 28;
							}
							
							else if(salle == 'B102')
							{
								previous = 29;
							}
							
							else if(salle == 'B103')
							{
								previous = 30;
							}
							
							else if(salle == 'B104')
							{
								previous = 31;
							}
							
							else if(salle == 'B105')
							{
								previous = 32;
							}
							
							else if(salle == 'S202')
							{
								previous = 40;
							}
							
							else if(salle == 'S203')
							{
								previous = 41;
							}
							
							else if(salle == 'S204')
							{
								previous = 42;
							}
							
							else if(salle == 'S205')
							{
								previous = 43;
							}
							
							else if(salle == 'S206')
							{
								previous = 44;
							}
							
							else if(salle == 'S207')
							{
								previous = 45;
							}
							
							else if(salle == 'B200')
							{
								previous = 46;
							}
							
							else if(salle == 'B201')
							{
								previous = 47;
							}
							
							else if(salle == 'B202')
							{
								previous = 48;
							}
							
							else if(salle == 'B203')
							{
								previous = 49;
							}
							
							else if(salle == 'B204')
							{
								previous = 50;
							}
							
							else if(salle == 'B205')
							{
								previous = 51;
							}
							
							else if(salle == 'B206')
							{
								previous = 52;
							}
							
							else if(salle == 'B207')
							{
								previous = 53;
							}
							
						}

						else if(width == 840)
						{				
							up_width = 840 - min_width;	
							up_height = 660 - min_height;
										
							$('.left').animate({'width': '-=340', 'height': '+=60'}, 1500);								
							$('#'+salle).animate({'top': top, 'left': left, 'width': '-='+up_width+'', 'height': '-='+up_height}, 1500);		
							$('.infos').hide(1500);							
							$('#'+salle).html('<div class="text">'+salle+'</div>');		
							$('.text').css('text-align', 'center');
							// $('#pacman').show(1500);
							$('#character').show(1500);
							$('.gates').show(1500);

							if(salle == 'S004' || salle == 'BDE' || salle == 'S002' || salle == 'S001' || salle == 'B002' || salle == 'B001')
							{
								$('#cafet').show(1500).css('background-color', 'gray');
								$('#Fab_Lab').show(1500).css('background-color', 'gray');
								$('#S004').show(1500).css('background-color', '#E21313');
								$('#BDE').show(1500).css('background-color', '#FF6600');
								$('#S002').show(1500).css('background-color', '#E21313');
								$('#S001').show(1500).css('background-color', 'gray');
								$('#B002').show(1500).css('background-color', '#ED0000');
								$('#B001').show(1500).css('background-color', '#ED0000');
								$('#escaliers_up').show(1500);
								$('#etage1').css('background-image', 'url("img/RDC.png")');
								previous = 1;
							}
							
							else if(salle == 'S101' || salle == 'S102' || salle == 'S103' || salle == 'S104' || salle == 'S105' || salle == 'S106' || salle == 'S107' || salle == 'S108' || salle == 'B101' || salle == 'B102' || salle == 'B103'  || salle == 'B104' || salle == 'B105')
							{
								$('#S101').show(1500).css('background-color', '#E21313');
								$('#S102').show(1500).css('background-color', '#E21313');
								$('#S103').show(1500).css('background-color', '#E21313');
								$('#S104').show(1500).css('background-color', '#E21313');
								$('#S105').show(1500).css('background-color', '#E21313');
								$('#S106').show(1500).css('background-color', '#E21313');
								$('#S107').show(1500).css('background-color', '#E21313');
								$('#S108').show(1500).css('background-color', '#E21313');
								$('#B101').show(1500).css('background-color', '#ED0000');
								$('#B102').show(1500).css('background-color', '#ED0000');
								$('#B103').show(1500).css('background-color', '#ED0000');
								$('#B104').show(1500).css('background-color', '#ED0000');
								$('#B105').show(1500).css('background-color', '#ED0000');
								$('#B1012').show(1200).css('background-color', '#ED0000');
								$('#B1052').show(1200).css('background-color', '#ED0000');
								$('#S1062').show(1200).css('background-color', '#E21313');
								$('#escaliers_up').show(1500);
								$('#escaliers_down').show(1500);
								$('#etage2').css('background-image', 'url("img/Etage 1.png")');
								previous = 2;
							}
							
							else
							{			
								$('#archive').show(1500);
								$('#S202').show(1500).css('background-color', '#E21313');
								$('#S203').show(1500).css('background-color', '#E21313');
								$('#S204').show(1500).css('background-color', '#E21313');
								$('#S205').show(1500).css('background-color', '#E21313');
								$('#S206').show(1500).css('background-color', '#E21313');
								$('#S207').show(1500).css('background-color', '#E21313');
								$('#B200').show(1500).css('background-color', '#ED0000');
								$('#B201').show(1500).css('background-color', '#ED0000');
								$('#B202').show(1500).css('background-color', '#ED0000');
								$('#B203').show(1500).css('background-color', '#ED0000');
								$('#B204').show(1500).css('background-color', '#ED0000');
								$('#B205').show(1500).css('background-color', '#ED0000');
								$('#B206').show(1500).css('background-color', '#ED0000');
								$('#B207').show(1500).css('background-color', '#ED0000');
								$('#B2022').show(1200).css('background-color', '#ED0000');
								$('#B2072').show(1200).css('background-color', '#ED0000');
								$('#S2062').show(1200).css('background-color', '#E21313');
								$('#escaliers_down').show(1500);
								$('#etage3').css('background-image', 'url("img/Etage 2.png")');
								previous = 3;
							}
							
							setTimeout(function(){
								anim = false;
							},1500);				
							
							$('#'+salle).css('line-height', min_height+'px');

						}
						
						else
						{
							alert('Erreur');
						}
					}
				}
				
				e.stopPropagation();
			});			
		
			$('.salle').on('mouseenter', 'img', function()
			{			
				$('.infos').stop().show(500); 
				var chaine = $(this).attr('src');
				var chaine = chaine.substring(7, (chaine.length-4));
				prenom = chaine.substring(0, chaine.indexOf('_'));
				nom = chaine.substring(chaine.indexOf('_')+1);
				
				if(nom == 'El_Olmi')
				{
					nom = 'El Olmi';
				}	

				$.get('infos.php', {nom: nom, prenom: prenom}, function(status){
					$('.informations').html(status);
				});
							
			});
			
			$('.salle').on('mouseleave', 'img', function()
			{			
				$('.infos').stop().hide(500);							
			});
			
			$('#previous').on('click', function() // Bouton précédent
			{
				switch(previous) // En fonction d'où on se trouve, on doit faire autre chose pour "revenir en arrière"
				{
					case 0:
					break;
					
					case 1:
						$('#etage1').click();
					break;
				
					case 2:					
						$('#etage2').click();
					break;
					
					case 3:
						$('#etage3').click();
					break;
					
					case 10:
						$('#S004').click();
					break;
					
					case 11:
						$('#BDE').click();
					break;
					
					case 12:
						$('#S002').click();
					break;
					
					case 13:
						$('#S001').click();
					break;
					
					case 14:
						$('#B002').click();
					break;
					
					case 15:
						$('#B001').click();
					break;
					
					case 20:
						$('#S101').click();
					break;
				
					case 21:					
						$('#S102').click();
					break;
					
					case 22:
						$('#S103').click();
					break;
					
					case 23:
						$('#S104').click();
					break;
					
					case 24:
						$('#S105').click();
					break;
					
					case 25:
						$('#S106').click();
					break;
					
					case 26:
						$('#S107').click();
					break;
					
					case 27:
						$('#S108').click();
					break;
					
					case 28:
						$('#B101').click();
					break;
					
					case 29:
						$('#B102').click();
					break;
					
					case 30:
						$('#B103').click();
					break;
					
					case 31:
						$('#B104').click();
					break;
					
					case 32:
						$('#B105').click();
					break;
					
					case 40:
						$('#S202').click();
					break;
				
					case 41:					
						$('#S203').click();
					break;
					
					case 42:
						$('#S204').click();
					break;
					
					case 43:
						$('#S205').click();
					break;
					
					case 44:
						$('#S206').click();
					break;
					
					case 45:
						$('#S207').click();
					break;
					
					case 46:
						$('#B200').click();
					break;
					
					case 47:
						$('#B201').click();
					break;
					
					case 48:
						$('#B202').click();
					break;
					
					case 49:
						$('#B203').click();
					break;
					
					case 50:
						$('#B204').click();
					break;
					
					case 51:
						$('#B205').click();
					break;
					
					case 52:
						$('#B206').click();
					break;
					
					case 53:
						$('#B207').click();
					break;
					
					default: // Sinon erreur					
						alert('Erreur');
					break;
				}
			});
			
			
			var value = 0;
			
			$('p').focusin(function() {
				value = 1;
			});
			
			$('p').focusout(function() {
				value = 0;
			});
			
			$(document).keydown(function(e){
				var width = $('.left').css('width');
				width = width.substring(0, width.indexOf('p'));
				
				if(width == 300 && value == 0)
				{
					switch (e.which)
					{		
						case 97: // 1 = zoom sur étage 1
							$('#etage1').click();	
							$('#last_touch').html('Appuie sur la touche 1');
							
							setTimeout(function(){							
								$('#last_touch').html('');
							},1000);
						break;
							
						case 98: // 2 = zoom sur étage 2
							$('#etage2').click();	
							$('#last_touch').html('Appuie sur la touche 2');
							
							setTimeout(function(){							
								$('#last_touch').html('');
							},1000);
						break; 
					
						case 99: // 3 = zoom sur étage 3
							$('#etage3').click();
							$('#last_touch').html('Appuie sur la touche 3');
							
							setTimeout(function(){							
								$('#last_touch').html('');
							},1000);
						break;
					}
				}
				
				else if(width != 300 && value == 0)
				{
					switch (e.which)
					{				
						case 66: // b = Retour arrière
							$('#previous').click();	
							$('#last_touch').html('Appuie sur la touche b');
							
							setTimeout(function(){							
								$('#last_touch').html('');
							},1000);
						break;
					}
				}
			
			});
			
			$('#search').on('click', function()
			{
				event.preventDefault(); 
				
				var src;
				var chaine = $('#name').val();
				
				nom = chaine.substring(0, chaine.indexOf(' '));

				if(nom == 'El')
				{
					nom = 'El_Olmi';
					prenom = 'Mehdi';
				}
				
				else
				{
					prenom = chaine.substring(chaine.indexOf(' ')+1);
				}					
				
				$.post("search_user.php", {prenom: prenom, nom: nom}, function(data){
					if(data != '' && data != 'Erreur')
					{
						if(nom == 'El_Olmi')
						{
							nom = 'El Olmi';
						}
						
						$('#message_user').html(nom+' '+prenom+' est dans la salle '+data+'<br/><button  class="search_salle" id='+data+'>Y aller</button>');
					}
					
					else
					{
						$('#message_user').html('Aucun étudiant trouvé');
					}
					
					$('.search_salle').on('click', function()
					{
						salle = $(this).attr('id');
						
						if(nom == 'El Olmi')
						{
							nom = 'El_Olmi';
						}
												
							if(previous == 0) // Etat de base
							{
								if(salle == 'S004' || salle == 'BDE' || salle == 'S002' || salle == 'S001' || salle == 'B002' || salle == 'B001')
								{
									$('#etage1').click();
								}
								
								else if(salle == 'S101' || salle == 'S102' || salle == 'S103' || salle == 'S104' || salle == 'S105' || salle == 'S106' || salle == 'S107' || salle == 'S108' || salle == 'B101' || salle == 'B102' || salle == 'B103'  || salle == 'B104' || salle == 'B105')
								{
									$('#etage2').click();
								}
								
								else
								{
									$('#etage3').click();
								}
								
								setTimeout(function(){							
									$('#'+salle).click();
								},3500);
								
								setTimeout(function(){										
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}	
									});
									
								},3800);
	
							}
							
							else if(previous == 1 && (salle == 'S004' || salle == 'BDE' || salle == 'S002' || salle == 'S001' || salle == 'B002' || salle == 'B001')) // Etage 1, salle 1
							{
								$('#'+salle).click();
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  		
								},300);
							}
							
							else if((previous == 2 || previous == 3) && (salle == 'S004' || salle == 'BDE' || salle == 'S002' || salle == 'S001' || salle == 'B002' || salle == 'B001')) 
							// Etage 2 ou 3, salle 1
							{
								$('#previous').click();
								
								setTimeout(function(){							
									$('#etage1').click();
								},3000);
								
								setTimeout(function(){							
									$('#'+salle).click();
								},6500);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},6800);
							}
							
							else if(previous == 2 && (salle == 'S101' || salle == 'S102' || salle == 'S103' || salle == 'S104' || salle == 'S105' || salle == 'S106' || salle == 'S107' || salle == 'S108' || salle == 'B101' || salle == 'B102' || salle == 'B103'  || salle == 'B104' || salle == 'B105')) // Etage 2, salle 2
							{
								$('#'+salle).click();
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},300);
							}
							
							else if((previous == 1 || previous == 3) && (salle == 'S101' || salle == 'S102' || salle == 'S103' || salle == 'S104' || salle == 'S105' || salle == 'S106' || salle == 'S107' || salle == 'S108' || salle == 'B101' || salle == 'B102' || salle == 'B103'  || salle == 'B104' || salle == 'B105')) // Etage 1 ou 3, salle 2
							{
								$('#previous').click();
								
								setTimeout(function(){							
									$('#etage2').click();
								},3000);
								
								setTimeout(function(){							
									$('#'+salle).click();
								},6500);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},6800);
							}
							
							else if(previous == 3 && (salle == 'S202' || salle == 'S203' || salle == 'S204' || salle == 'S205' || salle == 'S206' || salle == 'S207' || salle == 'B200' || salle == 'B201' || salle == 'B202' || salle == 'B203' || salle == 'B204' || salle == 'B205' || salle == 'B206' || salle == 'B207')) // Etage 3, salle 3
							{
								$('#'+salle).click();
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},300);
							}
							
							else if((previous == 2 || previous == 3) && (salle == 'S202' || salle == 'S203' || salle == 'S204' || salle == 'S205' || salle == 'S206' || salle == 'S207' || salle == 'B200' || salle == 'B201' || salle == 'B202' || salle == 'B203' || salle == 'B204' || salle == 'B205' || salle == 'B206' || salle == 'B207')) // Etage 1 ou 2, salle 3
							{
								$('#previous').click();
								
								setTimeout(function(){							
									$('#etage3').click();
								},3000);
								
								setTimeout(function(){							
									$('#'+salle).click();
								},6500);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},6800);
							}	

							else if((previous == 10 || previous == 11 || previous == 12 || previous == 13 || previous == 14 || previous == 15) && (salle == 'S004' || salle == 'BDE' || salle == 'S002' || salle == 'S001' || salle == 'B002' || salle == 'B001')) // Salle étage 1 vers salle étage 1
							{
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#'+salle).click();
								},3000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},3300);
							}
							
							else if((previous >= 20 && previous <= 32) && (salle == 'S004' || salle == 'BDE' || salle == 'S002' || salle == 'S001' || salle == 'B002' || salle == 'B001')) // Salle étage 2 vers salle étage 1
							{
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#etage2').click();
								},3000);
								
								setTimeout(function(){							
									$('#etage1').click();
								},6500);
								
								setTimeout(function(){							
									$('#'+salle).click();
								},10000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},10300);
							}
							
							else if((previous >= 40 && previous <= 53) && (salle == 'S004' || salle == 'BDE' || salle == 'S002' || salle == 'S001' || salle == 'B002' || salle == 'B001')) // Salle étage 3 vers salle étage 1
							{
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#etage3').click();
								},3000);
								
								setTimeout(function(){							
									$('#etage1').click();
								},6500);
								
								setTimeout(function(){							
									$('#'+salle).click();
								},10000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},10300);
							}
							
							else if((previous == 10 || previous == 11 || previous == 12 || previous == 13 || previous == 14 || previous == 15) && (salle == 'S101' || salle == 'S102' || salle == 'S103' || salle == 'S104' || salle == 'S105' || salle == 'S106' || salle == 'S107' || salle == 'S108' || salle == 'B101' || salle == 'B102' || salle == 'B103'  || salle == 'B104' || salle == 'B105')) // Salle étage 1 vers salle étage 2
							{
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#etage1').click();
								},3000);
								
								setTimeout(function(){							
									$('#etage2').click();
								},6500);
								
								setTimeout(function(){							
									$('#'+salle).click();
								},10000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  		
								},10300);
							}
							
							else if((previous >= 20 && previous <= 32) && (salle == 'S101' || salle == 'S102' || salle == 'S103' || salle == 'S104' || salle == 'S105' || salle == 'S106' || salle == 'S107' || salle == 'S108' || salle == 'B101' || salle == 'B102' || salle == 'B103'  || salle == 'B104' || salle == 'B105')) // Salle étage 2 vers salle étage 2
							{
								$('#previous').click();
								
								salle = $(this).attr('id');								
								
								setTimeout(function(){							
									$('#'+salle).click();
								},3000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},3300);
							}
							
							else if((previous >= 40 && previous <= 53) && (salle == 'S101' || salle == 'S102' || salle == 'S103' || salle == 'S104' || salle == 'S105' || salle == 'S106' || salle == 'S107' || salle == 'S108' || salle == 'B101' || salle == 'B102' || salle == 'B103'  || salle == 'B104' || salle == 'B105')) // Salle étage 3 vers salle étage 2
							{
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#etage3').click();
								},3000);
								
								setTimeout(function(){							
									$('#etage2').click();
								},6500);
								
								setTimeout(function(){							
									$('#'+salle).click();
								},10000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},10300);
							}
							
							else if((previous == 10 || previous == 11 || previous == 12 || previous == 13 || previous == 14 || previous == 15) && (salle == 'S202' || salle == 'S203' || salle == 'S204' || salle == 'S205' || salle == 'S206' || salle == 'S207' || salle == 'B200' || salle == 'B201' || salle == 'B202' || salle == 'B203' || salle == 'B204' || salle == 'B205' || salle == 'B206' || salle == 'B207')) // Salle étage 1 vers salle étage 3
							{								
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#etage1').click();
								},3000);
								
								setTimeout(function(){							
									$('#etage3').click();
								},6500);
								
								setTimeout(function(){							
									$('#'+salle).click();
								},10000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},10300);
							}
							
							else if((previous >= 20 && previous <= 32) && (salle == 'S202' || salle == 'S203' || salle == 'S204' || salle == 'S205' || salle == 'S206' || salle == 'S207' || salle == 'B200' || salle == 'B201' || salle == 'B202' || salle == 'B203' || salle == 'B204' || salle == 'B205' || salle == 'B206' || salle == 'B207')) // Salle étage 2 vers salle étage 3
							{
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#etage2').click();
								},3000);
								
								setTimeout(function(){							
									$('#etage3').click();
								},6500);
								
								setTimeout(function(){							
									$('#'+salle).click();
								},10000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},10300);
							}
							
							else if((previous >= 40 && previous <= 53) && (salle == 'S202' || salle == 'S203' || salle == 'S204' || salle == 'S205' || salle == 'S206' || salle == 'S207' || salle == 'B200' || salle == 'B201' || salle == 'B202' || salle == 'B203' || salle == 'B204' || salle == 'B205' || salle == 'B206' || salle == 'B207')) // Salle étage 3 vers salle étage 3
							{
								$('#previous').click();
				
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#'+salle).click();
								},3000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == 'http://localhost/Prometheus/Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								},3300);
							}
													
					});
									
				});
			});
			

			$('#name').autocomplete({
				serviceUrl: 'ajax.php',
				dataType: 'json'
			});	



			$('#B2022').on('click', function()
			{
					$('#B202').click();
			});
			
			$('#B2072').on('click', function()
			{
					$('#B207').click();
			});
			
			$('#S2062').on('click', function()
			{
				$('#S206').click();
			});
			
			$('#B1012').on('click', function()
			{
					$('#B101').click();
			});
			
			$('#B1052').on('click', function()
			{
					$('#B105').click();
			});
			
			$('#S1062').on('click', function()
			{
				$('#S106').click();
			});	
			
		});
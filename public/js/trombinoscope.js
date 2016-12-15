		$(function() {		
			$('.gates').hide();
			$('.salle').hide();

			// $('#pacman').css('position', 'absolute').css('top', '140px').css('left', '250px').hide();
					
			var anim = false, previous = 0, etage, salle, colorSalle, min_width, min_height, top, left;
			/*var pacman_top;
			var pacman_left;*/

			var width_etage_base = $('#etage1').css('width');
			width_etage_base = width_etage_base.substring(0, width_etage_base.indexOf('p'));

			var width_face_left_base = $('.left').css('width');
			width_face_left_base = width_face_left_base.substring(0, width_face_left_base.indexOf('p'));

			// var chemin = "../../img/";	
			var chemin = "http://localhost/prometheus/public/img/";
			var chemin_character = $('#chemin_user').val();

			$('.etage').on('click', function() // Fonction qui gère dynamiquement les animations des différents étages
			{					
				etage = $(this).attr('id');					
				
				var width = $('#'+etage).css('width'), character_top, character_left, new_character_top, new_character_left;;
				width = width.substring(0, width.indexOf('p'));
				
				if(anim == false)
				{
					anim = true;
					
					if(width == width_etage_base)
					{						
						$('.etage').hide();
						$('#'+etage).show();
						$('.right').css('height', '100px').hide(1000);
						$('.top').css('width', '0px').hide(1000);
						$('.etage center').hide(1500);										

						setTimeout(function(){						
								$('.left').animate({top: '50px', width: '504px', height: '720px'}, 1500).css('-webkit-transform', 'rotate(0deg) skew(0deg, 0deg)').css('-moz-transform', 'rotate(0deg) skew(0deg, 0deg)').css('transform', 'rotate(0deg) skew(0deg, 0deg)');
								$('#'+etage).animate({width: '504px', height: '720', border: 'none'}, 1500);
								$('#'+etage+' .salle').show(2000);
								$('#B2022, #B2072, #S2062, #B1012, #B1052, #S1062').show(2000);	
								$('.gates').show(2000);														
								anim = false;
							}, 1000); 
							
						if(etage == 'etage1')
						{
							previous = "etage1";
							
							// $('#'+etage).append('<div class="salle" id="escaliers_up"></div>');
							
							setTimeout(function()
							{								
								$('#'+etage).css('background-image', 'url("'+chemin+'RDC.png")');
							}, 2500);
																			
							// $('#etage1 #escaliers_up').css('position', 'absolute').css('top', '190px').css('left', '305px').css('width', '220px').css('height', '220px').css('border', 'solid 1px').css('border-color', 'black').css('color', 'black').css('background-color', '#DC143C').css('text-align', 'center').css('line-height', '220px').show().html('Monter');

							/* Bouger son personnage */
							$('#'+etage).append('<img src="'+chemin+'Photos/'+chemin_character+'" id="character" alt="character" />');
							$('#character').css('position', 'absolute').css('top', '275px').css('left', '468px').css('width', '15px').css('height', '15px');
							
							$(document).keydown(function(e){

								if(typeof($('#character').css('top')) != "undefined" && $('#character').css('top') !== null) 
								{
									character_top = $('#character').css('top');
									character_left = $('#character').css('left');
									
									character_top = character_top.substring(0, character_top.indexOf('p'));
									character_left = character_left.substring(0, character_left.indexOf('p'));	
								}
								
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
							previous = "etage2";
							
							// $('#'+etage).append('<div class="salle" id="escaliers_up"></div><div class="salle" id="escaliers_down"></div>');	
							
							setTimeout(function()
							{
								$('#'+etage).css('background-image', 'url("'+chemin+'Etage 1.png")');
							}, 2500);
							
							/*$('#etage2 #escaliers_up').css('position', 'absolute').css('top', '190px').css('left', '305px').css('width', '110px').css('height', '220px').css('border', 'solid 1px').css('border-color', 'black').css('color', 'black').css('background-color', '#DC143C').css('text-align', 'center').css('line-height', '220px').show().html('Monter');
							$('#etage2 #escaliers_down').css('position', 'absolute').css('top', '190px').css('left', '415px').css('width', '110px').css('height', '220px').css('border', 'solid 1px').css('border-color', 'black').css('color', 'black').css('background-color', '#DC143C').css('text-align', 'center').css('line-height', '220px').show().html('Descendre');*/
							
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
							$('#'+etage).append('<img src="'+chemin+'Photos/'+chemin_character+'" id="character" alt="character" />');
							$('#character').css('position', 'absolute').css('top', '345px').css('left', '210px').css('width', '15px').css('height', '15px');
							
							$(document).keydown(function(e){

								if(typeof($('#character').css('top')) != "undefined" && $('#character').css('top') !== null) 
								{
									character_top = $('#character').css('top');
									character_left = $('#character').css('left');
									
									character_top = character_top.substring(0, character_top.indexOf('p'));
									character_left = character_left.substring(0, character_left.indexOf('p'));	
								}

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
							previous = "etage3";
							
							// $('#'+etage).append('<div class="salle" id="escaliers_down"></div>');

							setTimeout(function()
							{
								$('#'+etage).css('background-image', 'url("'+chemin+'Etage 2.png")');
							}, 2500);
							
							/*$('#etage3 #escaliers_down').css('position', 'absolute').css('top', '190px').css('left', '305px').css('width', '220px').css('height', '220px').css('border', 'solid 1px').css('border-color', 'black').css('color', 'black').css('background-color', '#DC143C').css('text-align', 'center').css('line-height', '220px').show().html('Descendre');*/
							
							/* Bouger son personnage */
							$('#'+etage).append('<img src="'+chemin+'Photos/'+chemin_character+'" id="character" alt="character" />');
							$('#character').css('position', 'absolute').css('top', '355px').css('left', '210px').css('width', '15px').css('height', '15px');

							$(document).keydown(function(e){

								if(typeof($('#character').css('top')) != "undefined" && $('#character').css('top') !== null) 
								{
									character_top = $('#character').css('top');
									character_left = $('#character').css('left');
									
									character_top = character_top.substring(0, character_top.indexOf('p'));
									character_left = character_left.substring(0, character_left.indexOf('p'));	
								}

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

					else
					{				
						$('#'+etage+' .salle').hide(1000);
						$('#B2022, #B2072, #S2062, #B1012, #B1052, #S1062').hide(1000);
						$('.gates').hide(1000);
						$('#'+etage+' #character').remove();
						
						setTimeout(function(){
							$('.left').animate({width: '300px', height: '300px'}, 1500).css('top', '').css('bottom', '18px').css('-webkit-transform', 'rotate(15deg) skew(15deg, 15deg)').css('-moz-transform', 'rotate(15deg) skew(15deg, 15deg)').css('transform', 'rotate(15deg) skew(15deg, 15deg)');
							$('#'+etage).animate({width: "300px" , height: '100px'}, 1500);
							$('.etage').show(1500);							
							$('.right').css('height', '300px').show(1000);
							$('.top').animate({width: "300px"}, 1000).show();
							$('.etage').css('background-image', 'url("")');							
							anim = false;
						},1000);
						
						setTimeout(function(){
							$('.etage center').show(1000);
						},2600);

						previous = 0;
						
						/*$( "#escaliers_up" ).remove();
						$( "#escaliers_down" ).remove();
						$('#pacman').hide();*/
						$('#character').hide();
					}
				}	


				/*var new_etage;

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
				});*/
				
			});				
			
			$('.salle').on('click', function(e) // Fonction qui gère dynamiquement les animations des différentes salles
			{
				salle = $(this).attr('id');	
				colorSalle = $(this).css('background-color');
				
				if(colorSalle != "rgb(128, 128, 128)")
				{
					if(anim == false)
					{
						anim = true;

						var width = $('#'+salle).css('width');				
						width = width.substring(0, width.indexOf('p'));				
						
						var height = $('#'+salle).css('height');				
						height = height.substring(0, height.indexOf('p'));

						var top = $('#'+salle).css('top');
						top = top.substring(0, top.indexOf('p'));

						var left = $('#'+salle).css('left');
						left = left.substring(0, left.indexOf('p'));
						
						if(width > 0 && width < 840)
						{	
							min_width = width;
							min_height = height;

							min_top = top;
							min_left = left;

							console.log(min_width, min_height);

							$('.left').animate({width: '840px', height: '660px'}, 1500);
							$('.etage').css('background-image', 'url("")');
							$('#'+salle).html('').css('line-height', 'normal').css('background-color', "white").animate({'top': '0px', 'left': '0px', width: '840px', height: '660px'}, 1500);
							$('.salle').hide();
							$('#B2022, #B2072, #S2062, #B1012, #B1052, #S1062').hide(800);
							//$('#pacman').hide(800);
							$('#character').hide(800);
							$('.gates').hide(800);
							$('#'+salle).show();
							
							$('#'+salle).append('<div id="table1"></div><div id="table2"></div><div id="table3"></div><div class="infos"></div>');
							$('#'+salle+' #table1').css('position', 'absolute').css('bottom', '150px').css('right', '0px').css('width', '150px').css('height', '510px').css('border-left', 'solid 1px').css('border-bottom', 'solid 1px').hide();
							$('#'+salle+' #table2').css('position', 'absolute').css('bottom', '150px').css('right', '250px').css('width', '300px').css('height', '510px').css('border-left', 'solid 1px').css('border-bottom', 'solid 1px').css('border-right', 'solid 1px').hide();
							$('#'+salle+' #table3').css('position', 'absolute').css('bottom', '150px').css('left', '0px').css('width', '150px').css('height', '510px').css('border-right', 'solid 1px').css('border-bottom', 'solid 1px').hide();	
							$('.infos').css('position', 'absolute').css('bottom', '10px').css('left', '150px').css('width', '600px').css('height', '130px').css('border', 'solid 1px').css('padding', '5px').hide();

							$('#'+salle+' #table1, #table2, #table3').show(1500);

							var i, prenom, nom, position, chemin_photos, table, style;
							
							for(i=0;i<=16;i++)
							{
								$.get('trombinoscope/showTable', {id_div: salle, position: i}, function(data){
									prenom = data.substring(0, data.indexOf('_'));
									nom = data.substring(data.indexOf('_')+1, data.indexOf('-'));
									position = data.substring(data.indexOf('-')+1, data.indexOf('/'));
									table = data.substring(data.indexOf('/')+1, data.indexOf('.'));
									chemin_photos = chemin+'Photos/'+prenom+'_'+nom+'.jpg';

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
										
										$('#'+salle+' #table'+table).append('<img src='+chemin_photos+' width=\'80px\' style='+style+' height=\'106px\' alt=\'Photo étudiant\' />');
									}
									
								});
							}					
							
							setTimeout(function(){							
								anim = false;
							},1500);
							
							previous = salle;							
						}

						else if(width == 840)
						{
							$('.left').animate({width: '500px', height: '720px'}, 1500);								
							$('#'+salle).animate({top: min_top, left: min_left, width: min_width, height: min_height}, 1500);		
							$('.infos').hide(1500);							
							$('#'+salle).html('<div class="text">'+salle+'</div>');		
							$('.text').css('text-align', 'center');
							// $('#pacman').show(1500);
							$('#character').show(1500);
							$('.gates').show(1500);

							var etage = $('#'+salle).parent().attr('id');

							if(etage == 'etage1')
							{
								$('#cafet, #Fab_Lab, #S002, #S001').show(1500).css('background-color', 'gray');
								$('#S004').show(1500).css('background-color', 'GreenYellow');
								$('#BDE').show(1500).css('background-color', '#FF6600');
								$('#B002, #B001').show(1500).css('background-color', 'CornflowerBlue');
								//$('#escaliers_up').show(1500);
								$('#etage1').css('background-image', 'url("'+chemin+'RDC.png")');
								previous = "etage1";
							}
							
							else if(etage == 'etage2')
							{
								$('#S101, #S102, #S103, #S104, #S105, #S106, #S107, #S108, #S1062').show(1500).css('background-color', 'GreenYellow');
								$('#B101, #B102, #B103, #B104, #B105, #B1012, #B1052').show(1500).css('background-color', 'CornflowerBlue');
								/*$('#escaliers_up').show(1500);
								$('#escaliers_down').show(1500);*/
								$('#etage2').css('background-image', 'url("'+chemin+'Etage 1.png")');
								previous = "etage2";
							}
							
							else
							{			
								$('#archive').show(1500);
								$('#S202, #S203, #S204, #S205, #S206, #S207, #S2062').show(1500).css('background-color', 'GreenYellow');
								$('#B200, #B201, #B202, #B203, #B204, #B205, #B206, #B207, #B2022, #B2072').show(1500).css('background-color', 'CornflowerBlue');
								//$('#escaliers_down').show(1500);
								$('#etage3').css('background-image', 'url("'+chemin+'Etage 2.png")');
								previous = "etage3";
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
				chaine = chaine.substring(46, (chaine.length-4));
				prenom = chaine.substring(0, chaine.indexOf('_'));
				nom = chaine.substring(chaine.indexOf('_')+1);
				
				if(nom == 'El_Olmi')
				{
					nom = 'El Olmi';
				}	

				$.get('trombinoscope/informations', {nom: nom, prenom: prenom}, function(status){
					$('.infos').html(status);					
				});
							
			});
			
			$('.salle').on('mouseleave', 'img', function()
			{			
				$('.infos').stop().hide(500);							
			});
			
			$('#previous').on('click', function() // Bouton précédent
			{
				if(previous != 0)
				{
					$('#'+previous).click();
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
				
				if(width == width_face_left_base && value == 0)
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
				
				else if(width != width_etage_base && value == 0)
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
				chemin = 'http://localhost/prometheus/public/img/';
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
				
				$.get("http://localhost/prometheus/public/index.php/users/trombinoscope/searchUser", {prenom: prenom, nom: nom}, function(data){
					if(data != '' && data != "Erreur")
					{
						if(nom == 'El_Olmi')
						{
							nom = 'El Olmi';
						}

						salle = data.substring(1);						
						
						$('#message_user').html(nom+' '+prenom+' est dans la salle '+salle+'<br/><button  class="search_salle" id='+data+'>Y aller</button>');
					}
					
					else
					{
						$('#message_user').html('Aucun étudiant trouvé');
					}
					
					$('.search_salle').on('click', function()
					{
						salle = $(this).attr('id');
						salle = salle.substring(1);
						
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
								}, 3500);
								
								setTimeout(function(){										
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}	
									});
									
								}, 4500);
	
							}
							
							else if(previous == "etage1" && (salle == 'S004' || salle == 'BDE' || salle == 'S002' || salle == 'S001' || salle == 'B002' || salle == 'B001')) // Etage 1, salle 1
							{
								$('#'+salle).click();
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  		
								}, 1000);
							}
							
							else if((previous == "etage2" || previous == "etage3") && (salle == 'S004' || salle == 'BDE' || salle == 'S002' || salle == 'S001' || salle == 'B002' || salle == 'B001')) 
							// Etage 2 ou 3, salle 1
							{
								$('#previous').click();
								
								setTimeout(function(){							
									$('#etage1').click();
								}, 3000);
								
								setTimeout(function(){							
									$('#'+salle).click();
								}, 6500);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 7500);
							}
							
							else if(previous == "etage2" && (salle == 'S101' || salle == 'S102' || salle == 'S103' || salle == 'S104' || salle == 'S105' || salle == 'S106' || salle == 'S107' || salle == 'S108' || salle == 'B101' || salle == 'B102' || salle == 'B103'  || salle == 'B104' || salle == 'B105')) // Etage 2, salle 2
							{
								$('#'+salle).click();
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 1000);
							}
							
							else if((previous == "etage1" || previous == "etage3") && (salle == 'S101' || salle == 'S102' || salle == 'S103' || salle == 'S104' || salle == 'S105' || salle == 'S106' || salle == 'S107' || salle == 'S108' || salle == 'B101' || salle == 'B102' || salle == 'B103'  || salle == 'B104' || salle == 'B105')) // Etage 1 ou 3, salle 2
							{
								$('#previous').click();
								
								setTimeout(function(){							
									$('#etage2').click();
								}, 3000);
								
								setTimeout(function(){							
									$('#'+salle).click();
								}, 6500);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 7500);
							}
							
							else if(previous == "etage3" && (salle == 'S202' || salle == 'S203' || salle == 'S204' || salle == 'S205' || salle == 'S206' || salle == 'S207' || salle == 'B200' || salle == 'B201' || salle == 'B202' || salle == 'B203' || salle == 'B204' || salle == 'B205' || salle == 'B206' || salle == 'B207')) // Etage 3, salle 3
							{
								$('#'+salle).click();
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 1000);
							}
							
							else if((previous == "etage1" || previous == "etage2") && (salle == 'S202' || salle == 'S203' || salle == 'S204' || salle == 'S205' || salle == 'S206' || salle == 'S207' || salle == 'B200' || salle == 'B201' || salle == 'B202' || salle == 'B203' || salle == 'B204' || salle == 'B205' || salle == 'B206' || salle == 'B207')) // Etage 1 ou 2, salle 3
							{
								$('#previous').click();
								
								setTimeout(function(){							
									$('#etage3').click();
								}, 3000);
								
								setTimeout(function(){							
									$('#'+salle).click();
								}, 6500);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 7500);
							}	

							else if((previous == 'S004' || previous == 'BDE' || previous == 'S002' || previous == 'S001' || previous == 'B002' || previous == 'B001') && (salle == 'S004' || salle == 'BDE' || salle == 'S002' || salle == 'S001' || salle == 'B002' || salle == 'B001')) // Salle étage 1 vers salle étage 1
							{
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#'+salle).click();
								}, 3000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 4000);
							}
							
							else if((previous == 'S101' || previous == 'S102' || previous == 'S103' || previous == 'S104' || previous == 'S105' || previous == 'S106' || previous == 'S107' || previous == 'S108' || previous == 'B101' || previous == 'B102' || previous == 'B103'  || previous == 'B104' || previous == 'B105') && (salle == 'S004' || salle == 'BDE' || salle == 'S002' || salle == 'S001' || salle == 'B002' || salle == 'B001')) // Salle étage 2 vers salle étage 1
							{
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#etage2').click();
								}, 3000);
								
								setTimeout(function(){							
									$('#etage1').click();
								}, 6500);
								
								setTimeout(function(){							
									$('#'+salle).click();
								}, 10000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 11000);
							}
							
							else if((previous == 'S202' || previous == 'S203' || previous == 'S204' || previous == 'S205' || previous == 'S206' || previous == 'S207' || previous == 'B200' || previous == 'B201' || previous == 'B202' || previous == 'B203' || previous == 'B204' || previous == 'B205' || previous == 'B206' || previous == 'B207') && (salle == 'S004' || salle == 'BDE' || salle == 'S002' || salle == 'S001' || salle == 'B002' || salle == 'B001')) // Salle étage 3 vers salle étage 1
							{
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#etage3').click();
								}, 3000);
								
								setTimeout(function(){							
									$('#etage1').click();
								}, 6500);
								
								setTimeout(function(){							
									$('#'+salle).click();
								}, 10000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 11000);
							}
							
							else if((previous == 'S004' || previous == 'BDE' || previous == 'S002' || previous == 'S001' || previous == 'B002' || previous == 'B001') && (salle == 'S101' || salle == 'S102' || salle == 'S103' || salle == 'S104' || salle == 'S105' || salle == 'S106' || salle == 'S107' || salle == 'S108' || salle == 'B101' || salle == 'B102' || salle == 'B103'  || salle == 'B104' || salle == 'B105')) // Salle étage 1 vers salle étage 2
							{
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#etage1').click();
								}, 3000);
								
								setTimeout(function(){							
									$('#etage2').click();
								}, 6500);
								
								setTimeout(function(){							
									$('#'+salle).click();
								}, 10000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  		
								}, 11000);
							}
							
							else if((previous == 'S101' || previous == 'S102' || previous == 'S103' || previous == 'S104' || previous == 'S105' || previous == 'S106' || previous == 'S107' || previous == 'S108' || previous == 'B101' || previous == 'B102' || previous == 'B103'  || previous == 'B104' || previous == 'B105') && (salle == 'S101' || salle == 'S102' || salle == 'S103' || salle == 'S104' || salle == 'S105' || salle == 'S106' || salle == 'S107' || salle == 'S108' || salle == 'B101' || salle == 'B102' || salle == 'B103'  || salle == 'B104' || salle == 'B105')) // Salle étage 2 vers salle étage 2
							{
								$('#previous').click();
								
								salle = $(this).attr('id');								
								
								setTimeout(function(){							
									$('#'+salle).click();
								}, 3000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 4000);
							}
							
							else if((previous == 'S202' || previous == 'S203' || previous == 'S204' || previous == 'S205' || previous == 'S206' || previous == 'S207' || previous == 'B200' || previous == 'B201' || previous == 'B202' || previous == 'B203' || previous == 'B204' || previous == 'B205' || previous == 'B206' || previous == 'B207') && (salle == 'S101' || salle == 'S102' || salle == 'S103' || salle == 'S104' || salle == 'S105' || salle == 'S106' || salle == 'S107' || salle == 'S108' || salle == 'B101' || salle == 'B102' || salle == 'B103'  || salle == 'B104' || salle == 'B105')) // Salle étage 3 vers salle étage 2
							{
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#etage3').click();
								}, 3000);
								
								setTimeout(function(){							
									$('#etage2').click();
								}, 6500);
								
								setTimeout(function(){							
									$('#'+salle).click();
								}, 10000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 11000);
							}
							
							else if((previous == 'S004' || previous == 'BDE' || previous == 'S002' || previous == 'S001' || previous == 'B002' || previous == 'B001') && (salle == 'S202' || salle == 'S203' || salle == 'S204' || salle == 'S205' || salle == 'S206' || salle == 'S207' || salle == 'B200' || salle == 'B201' || salle == 'B202' || salle == 'B203' || salle == 'B204' || salle == 'B205' || salle == 'B206' || salle == 'B207')) // Salle étage 1 vers salle étage 3
							{								
								$('#previous').click();
								
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#etage1').click();
								}, 3000);
								
								setTimeout(function(){							
									$('#etage3').click();
								}, 6500);
								
								setTimeout(function(){							
									$('#'+salle).click();
								}, 10000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 11000);
							}
							
							else if((previous == 'S101' || previous == 'S102' || previous == 'S103' || previous == 'S104' || previous == 'S105' || previous == 'S106' || previous == 'S107' || previous == 'S108' || previous == 'B101' || previous == 'B102' || previous == 'B103'  || previous == 'B104' || previous == 'B105') && (salle == 'S202' || salle == 'S203' || salle == 'S204' || salle == 'S205' || salle == 'S206' || salle == 'S207' || salle == 'B200' || salle == 'B201' || salle == 'B202' || salle == 'B203' || salle == 'B204' || salle == 'B205' || salle == 'B206' || salle == 'B207')) // Salle étage 2 vers salle étage 3
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
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 11000);
							}
							
							else if((previous == 'S202' || previous == 'S203' || previous == 'S204' || previous == 'S205' || previous == 'S206' || previous == 'S207' || previous == 'B200' || previous == 'B201' || previous == 'B202' || previous == 'B203' || previous == 'B204' || previous == 'B205' || previous == 'B206' || previous == 'B207') && (salle == 'S202' || salle == 'S203' || salle == 'S204' || salle == 'S205' || salle == 'S206' || salle == 'S207' || salle == 'B200' || salle == 'B201' || salle == 'B202' || salle == 'B203' || salle == 'B204' || salle == 'B205' || salle == 'B206' || salle == 'B207')) // Salle étage 3 vers salle étage 3
							{
								$('#previous').click();
				
								salle = $(this).attr('id');
								
								setTimeout(function(){							
									$('#'+salle).click();
								}, 3000);
								
								setTimeout(function(){							
									$('#'+salle+' img').each(function(index){									
										src = decodeURIComponent(this.src);
										
										if(src == chemin+'Photos/'+prenom+'_'+nom+'.jpg')
										{											
											$(this).css('border', 'solid 2px').css('border-color', 'red');
										}										
									});  	
								}, 4000);
							}
													
					});
									
				});
			});

			$('#name').autocomplete({
				serviceUrl: 'http://localhost/prometheus/public/index.php/users/trombinoscope/autocomplete',
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
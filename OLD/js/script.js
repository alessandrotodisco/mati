function getMenu(page){
	var menu = '<span class="menu"></span><ul><nav class="cl-effect-5">';
	
	if( page == "home"){
		menu = menu + '<li><a class="active" href="index.html"><span data-hover="Home">home</span></a></li>';
	}else{
		menu = menu + '<li><a href="index.html"><span data-hover="Home">home</span></a></li>';
	}
	
	if( page == "prodotti" ){
		menu = menu + '<li><a class="active" href="prodotti.html"><span data-hover="Prodotti"><span>Prodotti</span></a></li>';
	}else{
		menu = menu + '<li><a href="prodotti.html"><span data-hover="Prodotti"><span>Prodotti</span></a></li>';
	}
	
	if( page == "materiali" ){
		menu = menu + '<li><a class="active" href="materiali.html"><span data-hover="Materiali"><span>Materiali</span></a></li>';
	}else{
		menu = menu + '<li><a href="materiali.html"><span data-hover="Materiali"><span>Materiali</span></a></li>';
	}
	
	if( page == "o-ring" ){
		menu = menu + '<li><a class="active" href="O-ring.html"><span data-hover="O-ring">O-ring</span></a></li>';
	}else{
		menu = menu + '<li><a href="O-ring.html"><span data-hover="O-ring">O-ring</span></a></li>';
	}
	
	if( page == "materie_plastiche" ){
		menu = menu + '<li><a class="active" href="materie_plastiche.html"><span data-hover="Materie Plastiche">Materie Plastiche</span></a></li>';
	}else{
		menu = menu + '<li><a href="materie_plastiche.html"><span data-hover="Materie Plastiche">Materie Plastiche</span></a></li>';
	}
	
	if( page == "isolanti_termici" ){
		menu = menu + '<li><a class="active" href="isolanti_termici.html"><span data-hover="Isolanti termici">Isolanti termici</span></a></li>';
	}else{
		menu = menu + '<li><a href="isolanti_termici.html"><span data-hover="Isolanti termici">Isolanti termici</span></a></li>';
	}
	
	if( page == "contatti" ){
		menu = menu + '<li><a class="active" href="contatti.html"><span data-hover="Contatti">Contatti</span></a></li>';
	}else{
		menu = menu + '<li><a href="contatti.html"><span data-hover="Contatti">Contatti</span></a></li>';
	}
	
	menu = menu + '</nav></ul>';
	
	
	$('#myMenu').append(menu);
	
}
<!DOCTYPE html>
<html>
<head>
    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">
    <link href="css/metro-schemes.css" rel="stylesheet">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/metro.js"></script>
</head>
<body>
    <div class="app-bar" data-role="appbar">
	    <a class="app-bar-element" href="index.php">G&Uuml;LP&#174;</a>
	    <span class="app-bar-divider"></span>
	    <ul class="app-bar-menu">
	        <li><a href="">Productos</a></li>
	        <li><a href="">Puntos de venta</a></li>
	        <li><a href="">Como comprar</a></li>
	        <li><a href="">Contacto</a></li>
	    </ul>
	    <div class="app-bar-element place-right">
			<span class="icon mif-facebook mif-2x"></span>    	
	    </div>
		<div class="app-bar-element place-right">
	    	<span class="icon mif-twitter mif-2x"></span>
	    </div>
	</div>
	
	<div class="container page-content">
        <div class="grid">
            <div class="row cells1">
                <div class="cell" style="padding-bottom: 10px;">
                    <div class="carousel" data-effect="fade" data-role="carousel" data-height="390" data-control-next="<span class='mif-chevron-right'></span>" data-control-prev="<span class='mif-chevron-left'></span>">
                        <div class="slide"><img src="images/4.jpg" data-role="fitImage" data-format="fill"></div>
                        <div class="slide"><img src="images/3.jpg" data-role="fitImage" data-format="fill"></div>
                        <div class="slide"><img src="images/2.jpg" data-role="fitImage" data-format="fill"></div>
                    </div>

                </div>
                
                
            </div>
            <div class="padding10 bg-red fg-white text-accent" style="width: 100%">
            	<h4 style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
            </div>
        </div>

	</div>
    
</body>
<footer>
	<div class="app-bar" data-role="appbar" >
		<div style="display: inline;">
			<p style="text-align: center;">Ind. Argentina, Santa Fe, Rosario</p>
			<p style="text-align: center;">G&Uuml;LP&#174; <?php echo date("Y")?> - Todos los derechos reservados.</p>
		</div>
		
	</div>
</footer>
</html>
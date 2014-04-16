    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Interactividad</title>
  
    <link rel="stylesheet" href="css/jqueryslidemenu.css" type="text/css" media="screen" />
    
    <link rel="stylesheet" type="text/css" href="css/quicksand.css" />
  
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jqueryslidemenu.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    
    <!-- supersized -->
    <script type="text/javascript" src="js/supersized.3.2.7.js"></script>
    <!-- supersized -->
    
    <!-- quicksand -->
    <script type="text/javascript" src="js/portfolio_sortable.js"></script>
    <script type="text/javascript" src="js/quicksand.js"></script>
    <!-- quicksand -->
      
    <script type="text/javascript" src="js/contact.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    
    <style type="text/css">
    #page_about {
      color: #FFF;
  }
    </style>
    </head>
    <body>
    <div id="page_wrapper">
    <div id="dvLoading"></div>
    <!--leftSide start --> 
    <div id="leftSide">
        <nav id="sidebarmenu">
 <ul id="sidebarmenu1" class="menu">
                 <li><a href="index.php">INICIO</a></li>
                <li><a href="#page_about">PROYECTO</a></li>
              <li><a href="#page_gallery">GALERIA</a></li>
              <li><a href="#page_contact">CONTACTENOS</a></li>
          </ul>
            
            <div id="#logo">
   <img src="images/logo.png" alt="logo" width="218" height="248" vspace="20">
    </div>
    </nav>
    </div>
    <!--leftside end --> 
    
    
    <!--Content Start-->
    <div class="contWrapper">
    <article id="content">
    <ul id="ulcontent">
    
    <!--About Us Start-->
    <li id="page_about">
        <div class="title-wrapper">
            <h2>Proyecto</h2>
      </div>
        <h4>Pregunta Problema</h4>
  <p>¿Como desarrollar una cultura de reciclaje en la comunidad universitaria aprovechando los diferentes  conocimientos de las nuevas tecnologías, que como estudiantes de ingeniería  multimedia conocemos, especialmente en lapoblación mas joven evitando desechar  botellas plásticas que seria perder dinero literalmente?</p>
        
      <h4>Objetivos</h4>
      <p>Motivar al estudiante a reciclar  las botellas plásticas con una recompensa (café gratis) en espacios donde actualmente el café es gratis, como lo es en  CASA.</p>
    
    </li>
    <!--About Us End-->
    <!--Gallery Start-->
  <li id="page_gallery">
        <div class="title-wrapper">
            <h2>Galeria</h2>
        </div>
    <div id="Menu Seleccion">
        <ul class="splitter" id="filter">
<li>
              <ul>
                <li class="segment-1 selected-1"><a href="#" data-value="all">Todo</a></li>
                <li class="segment-0"><a href="#" data-value="imgs">Imagenes</a></li>
                <li class="segment-1"><a href="#" data-value="vids">Videos</a></li>
  </ul>
          </li>
        </ul>
        </div>
        <div class="image_grid">
            <ul id="list" class="portfolio_list">
                       
                <li data-id="id-1" class="imgs"><img src="images/k2.jpg" alt="img" vspace="0"  /></li>
                
                <li data-id="id-1" class="imgs"><img src="images/k1.jpg" alt="img" vspace="0" /></li>
                
                 <li data-id="id-1" class="vids"><img src="images/k3.jpg" alt="img" vspace="0" /></li>
            
            </ul>
        </div>    
    </li>
    <!--Gallery End-->
    
    <!--Contact Start-->
    <li id="page_contact">
            
      <div class="title-wrapper">
        <h2>Contactenos</h2>
      </div>
      
      <div id="contenido">
			
				<form action="sendEmail.php" method="post" name="contact-form" id="contact-form">
				
					<table width="100%" border=0>
						<tr>
							<td width=50%>
								<p style="text-align:right;">Nombre:</p>
							</td>
							<td width=50%>
								<input type="text" size=50% required name="nombre"/>
							</td>
						</tr>
						<tr>
							<td>
								<p style="text-align:right;">E-email:</p>
							</td>
							<td>
								<input type="email" size=50% value="usuario@dominio.com" required name="correo"/>
							</td>
						</tr>
						<tr>
							<td><p style="text-align:right;">Mensaje:</p>
							</td>
							<td>	
								<textarea cols=50% rows=5 name="mensaje"></textarea>
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td>
								<input name="Enviar" id="Enviar" type="submit" value="Enviar Formulario">
							</td>
						</tr>
					</table>
				</form>
			</div>
      <!--Page wrapper End-->
    </body>
</html>
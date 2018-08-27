<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <title>Aplicacion tres en Raya</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <style>
  #whoiswinner{		
		color: rgb (0, 137, 226);		
		animation: blink 1s infinite;
    display:none;
	 }
	 
	 @keyframes blink{
		0%{opacity: 1;}
		75%{opacity: 1;}
		76%{ opacity: 0;}
		100%{opacity: 0;}
	 }
  </style>
  <link href='css/fonts.css' rel='stylesheet' type='text/css'>
  <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>  
  <script type='text/javascript' src='js/jquery.js'></script>
  <script type='text/javascript' src='js/jquery.particleground.js'></script> 

  <script type='text/javascript' src='bootstrap/js/bootstrap.min.js'></script>         
  <script type="text/javascript">
$(document).ready(function(){
  $("#campooculto").val(Date.now());
  $("input[size='1']").val("");  
  $("#whoiswinner").css("display","none");
  particleground($('#particles')[0], {
    dotColor: '#5cbdaa',
    lineColor: '#9c2a26'
  });
  var intro = $('#intro')[0];
  intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
  
});   
  </script>
</head>

<body>

<div id="particles" style="background-color: lightblue;">
<div id="intro">

<table class="table " width="100px" style="width:200px!important;text-align:center;margin:auto"><tr><td colspan="3">TRES EN RAYA</td></tr>
<tr><td colspan="3" >escoja una opcion</td></tr>
<tr>
<td >
<input id="0-0" size="1" class="form-control row" /></td><td>
<input id="0-1" size="1" class="form-control row"/>
</td><td>
<input id="0-2" size="1" class="form-control row"/>
</td>
</tr>
<tr>
<td>
<input id="1-0" size="1" class="form-control row"/>
</td><td>
<input id="1-1" size="1" class="form-control row"/>
</td><td>
<input id="1-2" size="1" class="form-control row"/>
</td>
</tr>
<tr>
<td>
<input id="2-0" size="1" class="form-control row"/>
</td><td>
<input id="2-1" size="1" class="form-control row"/>
</td><td>
<input  id="2-2" size="1" class="form-control row"/>
<input type="hidden" id="campooculto" />
</td>
</tr>
<tr><td colspan="3" ><p id="whoiswinner">SE TERMINO EL JUEGO</p><table><tr><td><input type="button" id="manuallysave" value="salvar" class="btn btn-primary btn-xs"/></td><td>
<input type="button" id="clear" value="limpiar" class="btn btn-primary btn-xs"/></td></tr></table></tr>
</table>
<script>
$("#clear").on("click",function(){
  $("input[size='1']").val("");
  $("#campooculto").val(Date.now());   
  $("#whoiswinner").css("display","none");  
});
$("input[size='1']").on("keyup",function(){
  var idJuegoVal=$("#campooculto").val();  
  if (/^[X,x]+$/.test(this.value)){
   
   var cadena=$(this).attr("id");
    $.ajax({
  method: "GET",
  url: "controlador/MiJuego.php",
  dataType:"json",
  data: { post: cadena,idjuego:idJuegoVal}
})
  .done(function( msg ) {
    console.log(msg.mensaje);
    $("#"+msg.mov).val("0");
    if (!(typeof(msg.final)=="undefined")){
      $("#"+msg.final).val("0");
      $("#whoiswinner").css("display","block");
    }
  });
  
  }else{
    this.value="";
    console.log(this);
  }
});
</script>

</div>
</div>

</body>
</html>

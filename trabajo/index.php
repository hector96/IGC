<!DOCTYPE html>
<html>
<head>
  <title>calculo de grasa corporal</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <script type="text/javascript" src="javascript.js"></script>
</head>
<body>
<center>
<h2 class="estilo2">PORCENTAJE DE GRASA CORPORAL (PGC)</h2>
<div class="estilo">
<h2 class="estilo2">INGRESE LOS DATOS</h2>
<form action="proceso.php" method="post" onsubmit="return validar();">
  <table>

   <tr>
        <th>NOMBRE</th>
        <td><input type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre"  ></td>

   </tr>
   <tr>
        <th>EDAD</th>
        <td><input type="text" name="edad" id="edad" maxlength="3" placeholder="Ingrese la Edad" ></td>
   </tr>
   <tr>
        <th>PESO (KG)</th>
        <td><input type="text" name="peso" id="peso" maxlength="3" placeholder="Ingrese Peso" ></td>

   </tr>

   <tr>
        <th>SEXO:</th>
        <td><input type="radio" name="radio1" value="mujer" checked="checked" onclick="mostrar()">MUJER
        <input type="radio" name="radio1" value="hombre" onclick="ocultar()">HOMBRE</td>
   </tr>

   <tr>
        <th>ALTURA (cm)</th>
        <td><input type="text" name="altura" id="altura" maxlength="3" placeholder="Ingrese Altura" ></td>
   </tr>

   <tr>
        <th>CINTURA(cm)</th>
        <td><input type="text" name="cintura" id="cintura" maxlength="3"  placeholder="Ingrese Cintura"></td>
   </tr>

   <tr>
        <th>CUELLO (cm)</th>
        <td><input type="text" name="cuello" id="cuello" maxlength="3" placeholder="Ingrese Cuello"></td>
   </tr>

   <tr  > 
  
        <th>CADERA (cm)</th>
        <td id="ocultar" style="display:block;"><input   type="text"  name="cadera"  maxlength="3" placeholder="SOLO MUJERES"></td>
      
   </tr>

   <tr>
        <td></td>
        <td><input style="background-color:#F0F1F3"  type="submit" value="calcular">
        <input style="background-color:#F0F1F3" type="reset" value="restablecer"></td>
   </tr>
  </table>
</form>
</center>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>calculo de grasa corporal</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<center>
<h2 class="estilo2">PORCENTAJE DE GRASA CORPORAL (PGC)</h2>
<div class="estilo">
<h2 class="estilo2">INGRESE LOS DATOS</h2>
<form action="proceso.php" method="post">
  <table>

   <tr>
        <th>NOMBRE</th>
        <td><input type="text" name="nombre" placeholder="Ingrese Nombre" required="" ></td>

   </tr>
   <tr>
        <th>EDAD</th>
        <td><input type="text" name="edad" maxlength="3" placeholder="Ingrese la Edad" required=""></td>
   </tr>
   <tr>
        <th>PESO (KG)</th>
        <td><input type="text" name="peso" maxlength="3" placeholder="Ingrese Peso" required=""></td>

   </tr>

   <tr>
        <th>SEXO:</th>
        <td><input type="radio" name="radio1" value="mujer" checked="checked">MUJER
        <input type="radio" name="radio1" value="hombre">HOMBRE</td>
   </tr>

   <tr>
        <th>ALTURA (cm)</th>
        <td><input type="text" name="altura" maxlength="3" placeholder="Ingrese Altura" required=""></td>
   </tr>

   <tr>
        <th>CINTURA(cm)</th>
        <td><input type="text" name="cintura" maxlength="3" required="" placeholder="Ingrese Cintura"></td>
   </tr>

   <tr>
        <th>CUELLO (cm)</th>
        <td><input type="text" name="cuello" maxlength="3" required="" placeholder="Ingrese Cuello"></td>
   </tr>

   <tr> 
        <th>CADERA (cm)</th>
        <td><input type="text" name="cadera"  maxlength="3" placeholder="SOLO MUJERES"></td>
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
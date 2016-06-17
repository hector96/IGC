<!DOCTYPE html>
<html>
<head>
  <title>calculo de grasa corporal</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<center>
<div class="php">
<?php
echo $_REQUEST['nombre' ];
// calculo de porcentaje de grasa corporal
if ($_REQUEST['radio1']=="mujer") 
{
	$mujer=(495/(1.29579-0.35004*log10($_REQUEST['cintura']+$_REQUEST['cadera']-$_REQUEST['cuello'])+0.221*log10($_REQUEST['altura']))-450);
		$igc=round($mujer,2);
	    echo"&nbsp; su indice de grasa corporal es de: &nbsp; " .$igc."%";
	    echo "<br>";

//RANGO DE LA MUJER

if ($_REQUEST['edad']<=24) 
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=7)):
		    echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>7) && ($igc<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>12) && ($igc<=15)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>15) && ($igc<=20)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>20) && ($igc<=25)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>25) && ($igc<=30)):
			echo "el cual esta situado en el rango de:SOBREPESO";
			break;
		case ($igc>30) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=25) && ($_REQUEST['edad']<=29))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL ";
			break;
		case (($igc>7) && ($igc<=12)):
			echo "el cual esta situado en el rango de:ATLETA ";
			break;
		case (($igc>12) && ($igc<=16)):
			echo "el cual esta situado en el rango de:EXCELENTE ";
			break;
		case (($igc>16) && ($igc<=21)):
			echo "el cual esta situado en el rango de:BUENO ";
			break;
		case (($igc>21) && ($igc<=26)):
			echo "el cual esta situado en el rango de:ESTANDAR ";
			break;
		case (($igc>26) && ($igc<=31)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igc>31) :
			echo "el cual esta situado en el rango de:OBESIDAD ";
			break;
	}
}
if (($_REQUEST['edad']>=30) && ($_REQUEST['edad']<=34))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>7) && ($igc<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>12) && ($igc<=17)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>17) && ($igc<=22)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>22) && ($igc<=27)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>27) && ($igc<=32)):
			echo "el cual esta situado en el rango de:SOBREPESO";
			break;
		case ($igc>32) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=35) && ($_REQUEST['edad']<=39))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>7) && ($igc<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>12) && ($igc<=19)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>19) && ($igc<=23)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>23) && ($igc<=28)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>28) && ($igc<=33)):
			echo "el cual esta situado en el rango de:SOBREPESO";
			break;
		case ($igc>33) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=40) && ($_REQUEST['edad']<=44))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>7) && ($igc<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>12) && ($igc<=21)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>21) && ($igc<=24)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>24) && ($igc<=29)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>29) && ($igc<=34)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igc>34) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=45) && ($_REQUEST['edad']<=49))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>7) && ($igc<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>12) && ($igc<=23)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>23) && ($igc<=26)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>26) && ($igc<=31)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>31) && ($igc<=36)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igc>36) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=50) && ($_REQUEST['edad']<=54))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>7) && ($igc<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>12) && ($igc<=25)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>25) && ($igc<=28)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>28) && ($igc<=33)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>33) && ($igc<=37)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igc>37) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=55) && ($_REQUEST['edad']<=59))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>7) && ($igc<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>12) && ($igc<=26)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>26) && ($igc<=29)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>29) && ($igc<=34)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>34) && ($igc<=38)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igc>38) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if ($_REQUEST['edad']>=60)
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=7)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>7) && ($igc<=12)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>12) && ($igc<=27)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>27) && ($igc<=30)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>30) && ($igc<=35)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>35) && ($igc<=39)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igc>39) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
}
elseif ($_REQUEST['radio1']=="hombre")
{
	$hombre=(495/(1.0324-0.19077*log10($_REQUEST['cintura']-$_REQUEST['cuello'])+0.15456*log10($_REQUEST['altura']))-450);
		$igc=round($hombre,2);
	    echo "&nbsp; su indice de grasa corporal es de: &nbsp; " .$igc."%";
	    echo "<br>";

//rango del hombre

if ($_REQUEST['edad']<=24) 
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=2)):
		    echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>2) && ($igc<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>6) && ($igc<=9)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>9) && ($igc<=15)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>15) && ($igc<=19)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>19) && ($igc<=23)):
			echo "el cual esta situado en el rango de:SOBREPESO";
			break;
		case ($igc>23) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=25) && ($_REQUEST['edad']<=29))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL ";
			break;
		case (($igc>2) && ($igc<=6)):
			echo "el cual esta situado en el rango de:ATLETA ";
			break;
		case (($igc>6) && ($igc<=10)):
			echo "el cual esta situado en el rango de:EXCELENTE ";
			break;
		case (($igc>10) && ($igc<=16)):
			echo "el cual esta situado en el rango de:BUENO ";
			break;
		case (($igc>16) && ($igc<=19)):
			echo "el cual esta situado en el rango de:ESTANDAR ";
			break;
		case (($igc>19) && ($igc<=24)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igc>24) :
			echo "el cual esta situado en el rango de:OBESIDAD ";
			break;
	}
}
if (($_REQUEST['edad']>=30) && ($_REQUEST['edad']<=34))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>2) && ($igc<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>6) && ($igc<=11)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>11) && ($igc<=17)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>17) && ($igc<=19)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>19) && ($igc<=25)):
			echo "el cual esta situado en el rango de:SOBREPESO";
			break;
		case ($igc>25) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=35) && ($_REQUEST['edad']<=39))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>2) && ($igc<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>6) && ($igc<=12)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>12) && ($igc<=18)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>18) && ($igc<=19)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>19) && ($igc<=26)):
			echo "el cual esta situado en el rango de:SOBREPESO";
			break;
		case ($igc>26) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=40) && ($_REQUEST['edad']<=44))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>2) && ($igc<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>6) && ($igc<=13)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>13) && ($igc<=19)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>19) && ($igc<=19)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>19) && ($igc<=27)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igc>27) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=45) && ($_REQUEST['edad']<=49))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>2) && ($igc<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>6) && ($igc<=15)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>15) && ($igc<=21)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>21) && ($igc<=25)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>25) && ($igc<=28)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igc>28) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=50) && ($_REQUEST['edad']<=54))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>2) && ($igc<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>6) && ($igc<=17)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>17) && ($igc<=23)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>23) && ($igc<=26)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>26) && ($igc<=29)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igc>29) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if (($_REQUEST['edad']>=55) && ($_REQUEST['edad']<=59))
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>2) && ($igc<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>6) && ($igc<=19)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>19) && ($igc<=24)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>24) && ($igc<=28)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>28) && ($igc<=30)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igc>30) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
if ($_REQUEST['edad']>=60)
{
	switch ($igc) {
		case (($igc>=0) && ($igc<=2)):
			echo "el cual esta situado en el rango de:ESENCIAL";
			break;
		case (($igc>2) && ($igc<=6)):
			echo "el cual esta situado en el rango de:ATLETA";
			break;
		case (($igc>6) && ($igc<=20)):
			echo "el cual esta situado en el rango de:EXCELENTE";
			break;
		case (($igc>20) && ($igc<=25)):
			echo "el cual esta situado en el rango de:BUENO";
			break;
		case (($igc>25) && ($igc<=29)):
			echo "el cual esta situado en el rango de:ESTANDAR";
			break;
		case (($igc>29) && ($igc<=31)):
			echo "el cual esta situado en el rango de:SOBREPESO ";
			break;
		case ($igc>31) :
			echo "el cual esta situado en el rango de:OBESIDAD";
			break;
	}
}
} 
?>
<br>
<br>
<div><input type="submit" name="boton" class="boton" value="volver" onclick="window.location.href='index.php'" ></div>
</div>
<center>
</body>
</html>

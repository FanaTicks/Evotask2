<?php
$pathToFile = fopen("data.txt", 'r') or die("проблемы с файлом");
echo"<p style='padding: 10px 15px;
      background: ##FFFADD;
	  width: 300px; /* Ширина таблицы */
    border: 2px solid #E6E6E6; /* Рамка вокруг таблицы */
    margin: auto; /* Выравниваем таблицу по центру окна  */'>", "Користувачі";
while(!feof($pathToFile))
{
    $str = htmlentities(fgets($pathToFile));
    echo  "<p style='padding: 10px 15px;
      background: #FFFADD;
	  width: 300px; /* Ширина таблицы */
    border: 2px solid #E6E6E6; /* Рамка вокруг таблицы */
    margin: auto; /* Выравниваем таблицу по центру окна  */'>".$str;
    echo "<br>";
}
fclose($pathToFile);
echo "<p style='padding: 10px 15px;
      background: ##FFFADD;
	  width: 300px; /* Ширина таблицы */
    border: 2px solid #E6E6E6; /* Рамка вокруг таблицы */
    margin: auto; /* Выравниваем таблицу по центру окна  */'>","<a href=http://fanaticks.great-site.net>Назад</a>";
?>
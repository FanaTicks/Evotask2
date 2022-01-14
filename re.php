<?php
$pathToFile = fopen("data.txt", 'r') or die("проблемы с файлом");
echo"<p style='padding: 10px 15px;
      background: ##D3D3D3;
	  width: 300px; /* Ширина таблицы */
    border: 3px solid Grey; /* Рамка вокруг таблицы */
    margin: auto; /* Выравниваем таблицу по центру окна  */'>", "Користувачі";
while(!feof($pathToFile))
{
    $str = htmlentities(fgets($pathToFile));
    echo  "<p style='padding: 10px 15px;
      background: #a7b4bf;
	  width: 300px; /* Ширина таблицы */
    border: 3px solid Grey; /* Рамка вокруг таблицы */
    margin: auto; /* Выравниваем таблицу по центру окна  */'>".$str;
    echo "<br>";
}
fclose($pathToFile);
echo "<p style='padding: 10px 15px;
      background: ##D3D3D3;
	  width: 300px; /* Ширина таблицы */
    border: 3px solid Grey; /* Рамка вокруг таблицы */
    margin: auto; /* Выравниваем таблицу по центру окна  */'>","<a href=http://fanaticks.great-site.net>Назад</a>";
?>
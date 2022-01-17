<?php
$datafile = 'data.txt';
if(is_file($datafile))
{
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(! empty($_POST['login']) && ! empty($_POST['pass']))
        {
            if(preg_match('/^[A-zА-я0-9\s]+$/uis', $_POST['login']))
            {
                $login = $_POST['login'];
                
                $datalines = file($datafile);
                $x = true;
                foreach($datalines as $line)
                {
                    if(preg_match('/^' .$login. '/ius', $line))
                    {	
                        $x = false;
                        break;
                    }
                }
                if($x){
                    file_put_contents($datafile, "$login"."|".$_POST['pass']."\n", FILE_APPEND);
				echo "<p style='padding: 10px 15px;background: ##FFFADD;width: 300px;border: 2px solid #E6E6E6;margin: left;'>",'Привіт, '. $login;
                echo "<p style='padding: 10px 15px;background: ##FFFADD;width: 300px;border: 2px solid #E6E6E6;margin: left;'>","<a href=http://fanaticks.great-site.net>Назад</a>";}
                else{
                    echo "<p style='padding: 10px 15px;background: ##FFFADD;width: 300px;border: 2px solid #E6E6E6;margin: left;'>",'Вже бачилися, '. $login;
                    echo "<p style='padding: 10px 15px;background: ##FFFADD;width: 300px;border: 2px solid #E6E6E6;margin: left;'>","<a href=http://fanaticks.great-site.net>Назад</a>";}
            } else{
			echo 'Могут быть только буквы, цифры и знаки подчеркивания и дефиса';
			echo "<p style='padding: 10px 15px;background: ##FFFADD;width: 300px;border: 2px solid #E6E6E6;margin: left;'>","<a href=http://fanaticks.great-site.net>Назад</a>";}
        } else{
		echo 'Заполните все поля';
		echo "<p style='padding: 10px 15px;background: ##FFFADD;width: 300px;border: 2px solid #E6E6E6;margin: left;'>","<a href=http://fanaticks.great-site.net>Назад</a>";}
    }
} else{
    echo 'Файл данных отсутствует';
    echo "<p style='padding: 10px 15px;background: ##FFFADD;width: 300px;border: 2px solid #E6E6E6;margin: left;'>","<a href=http://fanaticks.great-site.net>Назад</a>";}
?>
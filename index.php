<meta charset="utf-8">
<?php
$kalenval=25; // Переменная
if ($kalenval>20) // Условие
{
echo "Больше!"; // Вывод текста на экран
}
else
{
echo "<br/>"; // Перенос на след строку
echo "Меньше!"; // Вывод текста на экран
}

echo "<br/>"; // Перенос на след строку
$koleno="true"; // Переменная
	if (is_string($koleno)) // Условие
	{
		echo "<br/>"; // Перенос на след строку
		echo "Gelik valit"; // Вывод текста на экран
	}
    else
		echo "Gelik ne valit"; // Вывод текста на экран
    echo "<br/>"; // Перенос на след строку

$koleno=25; // Переменная
	if (is_integer($koleno)) // Условие
	{
		echo "<br/>"; // Перенос на след строку
		echo "Gelik gorit"; // Вывод текста на экран
	}
    else
    {
		echo "Gelik sgorel"; // Вывод текста на экран
    }
	
echo "<br/>"; // Перенос на след строку
$nasvai=array(  // Создаем массив
        "Текст1", // Ячейка массива
        "Текст2",
        "Текст3",
        "Текст4",
	);
print_r($nasvai); // Вывод массива

$int=10;
$str="10";
if($int===$str)
{
echo "guchi mmeyn";
}
else
{
echo "ne guchi mmeyn";
}


echo"\xA1\xff\x11";
echo"\x00\x20\x40";



?>



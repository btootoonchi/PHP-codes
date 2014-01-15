<?php 

@mysql_connect('localhost','root','') or die('Could not connect to database!');
echo 'connected';

echo 'Hello ';
die('Erro ...');
echo 'world!';


?>
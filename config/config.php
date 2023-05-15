<?php 
#Caminhos absolutos
$dirInt="agendaservice";
define('DIRPAGE',"https://{$_SERVER['HTTP_HOST']}/{$dirInt}");
$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");



#Banco de dados
define('HOST','localhost');
define('DB','agendaservice');
define('USER','root');
define('PASS','');

#Incluir arquivos
include(DIRREQ.'/lib/composer/vendor/autoload.php');


?>
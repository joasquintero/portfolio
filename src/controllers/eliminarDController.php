<?php
ini_set("session.cookie_lifetime","1450");
ini_set("session.gc_maxlifetime","1450");
session_start();
require_once('core/conexion.php');
require_once('core/consultas.php');
$c = new Consultas();
$c->autenticar();
if($_SESSION['nivel']==1){
    include (HTML_DIR.'header.php');

    include (HTML_DIR.'topnav.php');
    
    include (HTML_DIR.'adminnav.php');    
   // include (HTML_DIR.'eliminar2.php');
    
    include (HTML_DIR.'footer.php');
}elseif ($_SESSION['nivel']==2) {
    include (HTML_DIR.'header.php');

    include (HTML2_DIR.'topnav.php');
    
    include (HTML2_DIR.'adminnav.php');
    
    include (HTML_DIR.'eliminar2.php');
    
    include (HTML_DIR.'footer.php');
}elseif ($_SESSION['nivel']==3) {
    include (HTML_DIR.'header.php');

    include (HTML_DIR.'topnav.php');
    
    include (HTML3_DIR.'adminnav.php');
    

    
    include (HTML_DIR.'footer.php');
}



     
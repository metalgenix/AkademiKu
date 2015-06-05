<?php
/*
* Name: AkademiKu
* Desc: Sistim Informasi Akademik Sekolah.
* Version: 0.0.1
* Build: 0.0.1
* Developer: Puguh Wijayanto
* URI: http://www.metalgenix.com
* License: MIT License
* Icon: <i class="fa fa-graduation-cap"></i>
*/

function loadAkademiKuLib($class_name) 
{
    Mod::inc($class_name.".lib",'',__DIR__."/inc/lib/");
}
spl_autoload_register('loadAkademiKuLib');

try{
    new Akademiku();
}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
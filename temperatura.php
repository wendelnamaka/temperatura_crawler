<?php
require_once  'lib/simple_html_dom.php';

class Temperatura{

    public function __construct(){

        $this->getTemperatura('https://www.tempoagora.com.br/previsao-do-tempo/PE/Petrolina');

    }
    public function getTemperatura($url){

        $html = file_get_html($url);
         echo '<pre>';
        ini_set('memory_limit', '5000M');
         print_r($html);

    }
}
$t = new Temperatura();

?>

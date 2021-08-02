<?php

/**
* Plugin Name: Busca_Cep.
* Description: Busca dados de endereço pelo cep.
* Version: 1.0
* Author: Anna Luíza Correia Serrano/ 3MIN1
*/


function buscador()
{
echo file_get_contents(plugins_url().'/cep_plugin/formBusca.php');
}
add_shortcode('buscaCep','buscador');
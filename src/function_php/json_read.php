<?php 
function json_read($local,$position,$valor){
    // echo '<br>Json_read<br>' ;
    $data = file_get_contents($local);
    $json_data = json_decode($data);
    // $position = ;
    $pega_posicao = $json_data->$position;
    $return =  $pega_posicao->$valor;
    // echo $return;
    return $return;
}

?>
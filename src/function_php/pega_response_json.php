<?php
function pega_response_json($local,$modo){
    if(!$modo || $modo == false || $modo ==0){
        // echo "estou aqui";
        $local_data = file_get_contents($local);
        $data = json_decode($local_data);
    }else{
        $data = json_decode($local);
    }
    
    
    //session
    $session = $data->session;
        $id_session = $session->id;
        //seeion params
        $key_session= $session->params->key ;



    //prompt
    $prompt = $data->prompt;
        $override = $prompt->override;
        //prompt firtssimple
        $firstSimple = $prompt->firstSimple;
            $speech = $firstSimple->speech;
            $text  = $firstSimple->text;

    //user
    $user = $data->user;
        $locale = $user->locale ; 
        //user params
        $params_user = $user->params;
            $verificationStatus = $params_user->verificationStatus;
            $key_user =$params_user->key ;

    
    //home
    $home_key = $data->home->params->key;
    
    echo "$id_session <br>";
    echo "$key_session <br>";

    echo "$override <br>";
    echo "$speech <br>";
    echo "$text<br>";

    echo "$home_key<br>";

}

?>
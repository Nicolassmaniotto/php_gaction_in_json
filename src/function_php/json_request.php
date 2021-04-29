<?php
    function json_request(){
        // $obj= (object) [];
        // $obj->teste = 'teste';
        // $obj->stste = '';
        // $obj->eeee = 'teste122';

    $session = (object)[];
     $session->id = 'idsds';
        //session params
        $key = (object)[];
        $key->key = "kdksidosmdmlksd";
    
    $session->params=json_encode($key);
    $obj = (object)[];
    $obj->session = json_encode($session);

    //prompt
    $prompt = (object)[];
        $prompt->firstSimple = (object)[];
        $prompt->firstSimple->speech= "ola mundo";
        $prompt->firstSimple->text= "text";
    $obj->prompt = json_encode($prompt);
        //prompt firtssimple
        // $firstSimple = $prompt->firstSimple;
        //     $firstSimple = (object)[];
        //     $speech = $firstSimple->speech;
        //     $text  = $firstSimple->text;

    $id_session ="id";
    $key_session = "key session";


    $override = "override";
    $speech = "fspeech";
    $text = "text";
    echo json_encode($obj, false);
    // echo json_encode($params, true);
    }


    function json_request2(){
        $obj = (object)[];
        $obj->session = (object)[];
            $session = $obj->session; // chamada session
            $session->id = "id-session";
            $session->key = (object)[];
        
        $obj->prompt = (object)[];
            $prompt = $obj->prompt;
            $prompt->override = false;
            $prompt->firstSimple = (object)[];
                $firstSimple = $prompt->firstSimple;
                $firstSimple->speech = "Hello Word";
                $firstSimple->text = "TEXT";

        $retorno =  json_encode($obj,false);
        pega_response_json($retorno,true);





    }

?>
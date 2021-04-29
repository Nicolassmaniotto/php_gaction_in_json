<?php
function chamada(){
    //chamada de 
    include_once './function_php/pega_response_json.php';
    include_once './function_php/json_request.php';
    include_once './function_php/request_to_google_home.php';
    
    try{
        if(!json_request_google();){
        };
        // $local_json = './json/response_example.json';
        $local_json = './json/request_example.json';
        // pega_response_json($local_json,false);
        // json_request($local_json,false);
        // json_request2();
        json_request_google();
        
    }
    catch(exceException $e){
        echo "<hr>oi $e<hr>";
    }


    
    
        

};
?>

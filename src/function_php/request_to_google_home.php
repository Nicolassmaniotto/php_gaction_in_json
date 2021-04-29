<?php
    function json_request_google(){
        $obj= (object)[];

        $obj->handler = (object)[];
            $handler = $obj->handler;
            $handler->name = "handler_name";

        $obj->intent = (object)[];
            $intent = $obj->intent;
            $intent->name = "action.intent.MAIN";
            $intent->params= (object)[];
            $intent->query = "";

        $obj->scene = (object)[];
            $scene = $obj->scene;
            $scene->name = "SceneName";
            $scene->slotFillingStatus= "UNSPECIFIED";
            $scene->slots = (object)[];

        $obj->session = (object)[];
            $session = $obj->session;
            $session->id = "example_session_id";
            $session->params = (object)[];
            $session->typeOverrides = [];
        
        $obj->user = (object)[];
            $user = $obj->user;
            $user->locale = "en-US";
            $user->params = (object)[];
            $user_params = $user->params;
                $user_params->verificationStatus="VERIFIED ";

        $obj->home = (object)[];
            $home = $obj->home;
            $home->params = (object)[];
        
        $obj->device =(object)[];
            $device = $obj->device;
            $device->capabilities =  ["SPEECH",
            "RICH_RESPONSE",
            "LONG_FORM_AUDIO"];

        header('Content-Type: application/json');

        $json_encode = json_encode($obj);
        echo "$json_encode";
       
        // $dataObj->intent->name = "actions.intent.MAIN";
        // $dataObj->intent->params = "";


        
        // header('Content-Type: application/json');

    }

?>
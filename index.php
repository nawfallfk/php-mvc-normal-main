<?php
require_once 'Views/vSession_check.php';
require("BaseController.php");
try{
    $module=isset($_GET["module"])? ucFirst($_GET["module"]) : "Index";
    $action= $_GET["action"] ?? "index";

   

    if(is_callable($action)){
        
      $action($module);
    }else{
            throw new Exception("Cette page n'est pas trouvable !");
    }

}catch(Exception $e){
    render("Views/vError.php",["message"=>$e->getMessage()]);
}
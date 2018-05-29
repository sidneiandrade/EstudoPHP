<?php

require_once("config.php");
    
echo session_save_path();     

var_dump(session_status());
    
?>
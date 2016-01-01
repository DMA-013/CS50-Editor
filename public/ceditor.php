<?php
    
    require("../includes/config.php"); 



    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render code text editor
        render("ceditor_form.php");
    }
?>



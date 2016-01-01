<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODO
        //Check if username and password are valid
        if(empty($_POST["username"]))
        {
            apologize("Please Provide Username.");
        }
        else if(empty($_POST["password"]))
        {
            apologize("Please Provide Password.");
        }
        else if($_POST["confirmation"] != $_POST["password"])
        {
            apologize("Password is not correct, Enter Again.");
        }
        
        //Insert new user in query
        $result = query("INSERT INTO users (username, hash) VALUES(?, ?)", $_POST["username"], crypt($_POST["password"]));
        
        //Check if the username given is unique
        if($result === false)
        {
            apologize("Username Already Chosen, Please Chose Another Username.");
        }
        
        //Log in
        $rows = query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
            
        //Store the info in query
        $_SESSION["id"];
        redirect("index.php");
      }
    
    //Render form

?>


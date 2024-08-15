<?php


    session_start();//used t start the sessions

    session_unset(); //session_unset() function removes all session variables from a session, but it doesn't destroy the session itself. The session is still active on the user's computer, and the variables still exist. session_unset() frees up space for other use and truncates the data, but it doesn't destroy the session. 

    session_destroy();

    echo "<br> you have be logout please login to continue";


?>
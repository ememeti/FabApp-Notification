<?php
/*
 *  ldap.php : LDAP test 
 *
 *
*/
//local function for testing & bypass
function AuthenticateUser($netid, $password) {
    //return false;
    //switch case to return roles
    switch ($netid){
        case "learner":
            return "1000000002"; //2
        case "community":
            return "1000000004"; //4
        case "service":
            return "1000000007"; //7
        case "staff":
            return "1000000008"; //8
        case "super":
            return "1000000009"; //11
        case "admin":
            return "1000000010"; //10
        // default:
        //     return "1000000001";
    }
}
?>
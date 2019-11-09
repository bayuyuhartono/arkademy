<?php

// $username = 'bayup';
// $password = '23@PASS';

echo "Username: ";
$username = trim(fgets(STDIN));

echo "Password: ";
$password = trim(fgets(STDIN));

print_r('========= Result ===========');
echo "\n"; 

print_r(validating($username,$password));

function validating($par_username,$par_password)
{
    $par_username_count = strlen(preg_replace('/[^a-z]+/', '', $par_username));
    
    $symbol = preg_match('@[&\@]@', $par_password);
    $number    = strlen(preg_replace('/[^0-9]+/', '', $par_password));
    $uppercase = strlen(preg_replace('/[^A-Z]+/', '', $par_password));
    
    if(strlen($par_username) < 5 || strlen($par_username) != $par_username_count || strlen($par_password) < 5 || $number != 2 || $uppercase !=4 || !$symbol) {
        $result = 'false';
    } else {
        $result = 'true';
    }
    
    return $result;
}

?>
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = "teamwork";
 
if(!($con=mysql_connect($server, $username,  $password,$database)))
{
    exit('Error: could not establish database connection');
}


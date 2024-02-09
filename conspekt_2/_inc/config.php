require 'vendor/autoload.php';

use Medoo\Medoo;

// Connect the database.
$database = new Medoo([
'type' => 'mysql',
'host' => 'localhost',
'database' => 'name',
'username' => 'your_username',
'password' => 'your_password'
]);

$database->insert('account', [
'user_name' => 'foo',
'email' => 'foo@bar.com'
]);

$data = $database->select('account', [
'user_name',
'email'
], [
'user_id' => 50
]);

echo json_encode($data);
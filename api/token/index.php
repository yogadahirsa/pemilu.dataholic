<?php
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=utf-8');

$data = json_decode(file_get_contents('php://input'));

$user = array('username'=>'pemilu', 'password'=>'strong123');
$output = array('status'=>true, 'username' => 'pemilu', 'token'=>'1|PtYL0B9LlaGYabEQN7zI9YbLJqLrbNRDeTgvxnTd');
if(!empty($data) && $data->username == $user['username'] && $data->password == $user['password']){
    $response = json_encode($output);
}else{
    $response = json_encode(array('status'=>false, 'description'=>'Unauthenticated'));
}
echo $response;
?>
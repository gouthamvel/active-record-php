<?php

require_once 'user.php';
require_once 'photo.php';
require_once 'tag.php';

ActiveRecord\Base::establish_connection(array(
  'host' => '127.0.0.1',
  'database' => 'test',
  'username' => 'my_root',
  'password' => 'root'
));
echo "<pre>";
$users = User::find_all();

$user = $users[0];
$user->user_name_set("Loves");
$user->save();
//print_r($user);
$userPhoto =$user->photos();
//print_r($userPhoto);
echo 'Name:-'.$user->user_name_get().'<br>';
//print_r($userPhoto[0]->user());
$photoTag = $userPhoto[0]->tags();
print_r($photoTag);
print_r($photoTag[0]->photo());
echo "</pre>";

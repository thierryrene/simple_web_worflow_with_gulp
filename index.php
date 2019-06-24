<?php

require_once 'backend/functions.php';

Route::add('/',function(){
  include 'backend/views/public/index.php';
});

Route::add('/home',function(){
  include 'backend/views/public/index.php';
});

Route::add('/teste',function(){
  global $db;
  include 'backend/views/public/teste.php';
});

Route::add('/about',function(){
  global $db;  
  include 'backend/views/about.php';
});

Route::add('/produtos',function(){
  global $db;
  include 'backend/views/public/produtos.php';
});

Route::add('/quem-somos',function(){
  global $db;
  include 'backend/views/public/quem-somos.php';
});

Route::pathNotFound(function($path){
  // var_dump($_SERVER);
  echo 'Error 404 :-(<br/>';
  include_once 'backend/views/public/404.php';  
});

Route::run('/locfesta', true, true);

//#############################################################################################################################################################-EXAMPLES-######################################################################################################################################################################################################################### //

// Route::add('/form',function(){
//   navi();
//   global $db;
// 	echo 'adicionar dados da form no bd';
// 	echo '<form method="post"><input type="text" name="input" /><input type="submit" value="send" /></form>';
// 	if(isset($_POST["input"])){
// 		echo 'I also received a POST with this data:<br/>';
//     print_r($_POST);
//     // Enjoy
//     $db->insert('teste', [
//       'name' => $_POST["input"]
//     ]);
//     var_dump($db);
//     echo "dados adicionados";
// 	}
// },['get','post']);

// Route::methodNotAllowed(function($path, $method){
//   navi();
//   echo 'Error 405 :-(<br/>';
//   echo 'The requested path "'.$path.'" exists. But the request method "'.$method.'" is not allowed on this path!';
// });

// Simple test route that simulates static html file
// Route::add('/test.html',function(){
//   navi();
//   echo 'Hello from test.html';
// });

// // Post route example
// Route::add('/contact-form',function(){
//   navi();
//   echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
// },'get');

// // Post route example
// Route::add('/contact-form',function(){
//   navi();
//   echo 'Hey! The form has been sent:<br/>';
//   print_r($_POST);
// },'post');

// // Get and Post route example
// Route::add('/get-post-sample',function(){
//   navi();
// 	echo 'You can GET this page and also POST this form back to it';
// 	echo '<form method="post"><input type="text" name="input" /><input type="submit" value="send" /></form>';
// 	if(isset($_POST["input"])){
// 		echo 'I also received a POST with this data:<br/>';
// 		print_r($_POST);
// 	}
// },['get','post']);

// // Route with regexp parameter
// // Be aware that (.*) will match / (slash) too. For example: /user/foo/bar/edit
// // Also users could inject mysql-code or other untrusted data if you use (.*)
// // You should better use a saver expression like /user/([0-9]*)/edit or /user/([A-Za-z]*)/edit
// Route::add('/user/(.*)/edit',function($id){
//   navi();
//   echo 'Edit user with id '.$id.'<br/>';
// });

// // Accept only numbers as parameter. Other characters will result in a 404 error
// Route::add('/foo/([0-9]*)/bar',function($var1){
//   navi();
//   echo $var1.' is a great number!';
// });

// // Crazy route with parameters
// Route::add('/(.*)/(.*)/(.*)/(.*)',function($var1,$var2,$var3,$var4){
//   navi();
//   echo 'This is the first match: '.$var1.' / '.$var2.' / '.$var3.' / '.$var4.'<br/>';
// });

// // Long route example
// // This route gets never triggered because the route before matches too
// Route::add('/foo/bar/foo/bar',function(){
//   navi();
//   echo 'This is the second match <br/>';
// });

// // Trailing slash example
// Route::add('/aTrailingSlashDoesNotMatters',function(){
//   navi();
//   echo 'a trailing slash does not matters<br/>';
// });

// // Case example
// Route::add('/theCaseDoesNotMatters',function(){
//   navi();
//   echo 'the case does not matters<br/>';
// });

// // 405 test
// Route::add('/this-route-is-defined',function(){
//   navi();
//   echo 'You need to patch this route to see this content';
// },'patch');



// Run the Router with the given Basepath
// If your script lives in the web root folder use a / or leave it empty
// Route::run('/');

// If your script lives in a subfolder you can use the following example
// Do not forget to edit the basepath in .htaccess if you are on apache
// Route::run('/locfesta', true, true);

// Enable case sensitive mode and trailing slashes by setting both to true
// Route::run('/', true, true);


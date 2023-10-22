<?php
     session_start();

    $userAuthenticated = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = [1 => 'Administrativo', 2 => 'Usuario'];

    
    
    $usersApp = [array('id'=> 1, 'email' => 'userteste@gmail.com', 'senha' => '123', 'perfil_Id' => 1 ),
                 array('id'=> 2, 'email' => 'admteste@gmail.com', 'senha' => '123', 'perfil_Id' => 1),
                 array('id'=> 3, 'email' => 'gioteste@gmail.com', 'senha' => '123', 'perfil_Id' => 2 ),
                 array('id'=> 4, 'email' => 'carlosteste@gmail.com', 'senha' => '123', 'perfil_Id' => 2 ),  
                 ];

   

    foreach ($usersApp as $user) {

    	if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
    		$userAuthenticated = true;
           $usuario_id = $user['id'];
           $usuario_perfil_id = $user['perfil_Id'];
    	}
}
    
    if ($userAuthenticated) {
    	echo "Usuario autenticado";

    	$_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_Id'] =  $usuario_perfil_id;
        

       header('Location: home.php');
        
    }else{
    	$_SESSION['autenticado'] = 'NAO';
    	header('Location: index.php?login=erro');
    }

    
?>
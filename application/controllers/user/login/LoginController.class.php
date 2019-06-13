<?php

class LoginController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	
	}

    public function httpPostMethod(Http $http, array $formFields)
    {
    	
		
		$password=$formFields['password'];
		$mail=$formFields['mail'];
		$model=new LoginModel();
		$result=$model->getUserByEmail($mail);

		if($result!=false){
			$hash=$result['Password'];
			$check=password_verify($password,$hash);
			if($check){
				$_SESSION['user']=$result;
				$http->redirectTo('/Articlechoice');
			}
			else{
				echo 'mauvais identifiant ou mot de passe incorrecte';
			}
		}
		
    }
}


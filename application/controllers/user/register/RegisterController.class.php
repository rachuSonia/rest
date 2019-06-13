<?php

class RegisterController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
		
		 return [
			 'formFields' => [
				 'firstName' => '',
				 'lastName' => '',
				 'BirthDate'=>'',
				 'adress'=>'',
				 'city'=>'',
				 'postalCode'=>'',
				 'country'=>'',
				 'phone'=>'',
				 'mail'=>'',
				 'password'=>''
			 ]
		];
		
	}

    public function httpPostMethod(Http $http, array $formFields)
    {
    	
		// Initialisation d'un tableau d'erreur, vide par défaut
		$errors=[];
		// SI on a des données
		if(!empty($formFields)){

			// Affectation des variables aux données du formulaire
			$firstname=$formFields['firstName'];
			$lastName=$formFields['lastName'];
			$BirthDate=$formFields['BirthDate'];
			$adress=$formFields['adress'];
			$city=$formFields['city'];
			$postalCode=$formFields['postalCode'];
			$country=$formFields['country'];
			$password=$formFields['password'];
			$mail=$formFields['mail'];
			$phone=$formFields['phone'];

			// Phase de validation des variables
			if(empty($firstname)) {
				array_push($errors,'entrez votre prenom');
			}

			if(empty($lastName)) {
				array_push($errors,'entrez votre nom');
			}
			if(empty($BirthDate)) {
				array_push($errors,'entrez votre date de naissance');
			}
			if(empty($adress)) {
				array_push($errors,'entrez votre adresse');
			}
			if(empty($city)) {
				array_push($errors,'entrez votre ville');
			}
			if(empty($postalCode)) {
				array_push($errors,'entrez votre code postal');
			}
			if(empty($country)) {
				array_push($errors,'entrez votre pays');
			}
			if(empty($password)) {
				array_push($errors,'entrez votre mot de passe');
			}
			if(empty($mail)) {
				array_push($errors,'entrez votre mail');
			}
			if(empty($phone)) {
				array_push($errors,'entrez votre telephone');
			}

			// Si on n'a pas d'erreurs à la suite de la validation
			if(count($errors)==0) {
				// On enregistre le compte dans la BDD et on redirige vers la Home
				$user=new RegisterModel();
				$result=$user->addNewRegister($firstname,$lastName,$mail,$password,$BirthDate,$adress,$city,$postalCode,$country,$phone);
				
				$http->redirectTo('/');
			}
		}

		return [
			'formFields' => $formFields,
			'errors' => $errors
		];
    }
}
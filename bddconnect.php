<?php 
function bddconnect()
{
	try{
            global $bdd;
			$bdd = new PDO('mysql:host=localhost;dbname=todo_project;charset=utf8', 'root', 'root');
		}
		catch(Exception $e){
		    die('Erreur : '.$e->getMessage());
		}  
}
?>
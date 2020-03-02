<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

#Carrega um usuario
#$root = new Usuario();
#$root->loadbyId(1);
#$viewResults = $root->string();
#echo $viewResults;
#ou assim
#$benacho = Usuario::loadById(9);
#echo json_encode($benacho);

#Carrega uma lista de usuarios
#$lista = Usuario::getList();
#echo json_encode($lista);

#Carrega uma lista de usuarios buscando pelo login
#$search = Usuario::search("jo");
#echo json_encode($search);

#Carrega um usuario usando o login e senha
#$usuario = new Usuario();
#$usuario->login("root", "penacho");
#$selectedUser = $usuario->string();
#echo $selectedUser;
#ou assim
$benacho = Usuario::login("root", "penacho");
echo json_encode($benacho);

#Criando um novo usuario
#$aluno = new Usuario();
#$aluno->setDeslogin("reger");
#$aluno->setDessenha("123456789");
#$aluno->insert();

#Update em um usuario
#$usuario = new Usuario();
#$usuario->loadById(2);
#$usuario->update("professor", "vindictus");
#echo $usuario;

#$usuario = new Usuario();
#$usuario->loadById(22);
#$usuario->delete();
#echo $usuario;

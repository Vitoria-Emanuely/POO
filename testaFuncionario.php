<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/09/17
 * Time: 09:55
 */

require_once "classes/Funcionario.php";
require_once  "classes/Data.php";

$gerente = new Funcionario();
$gerente->nome = "Alfred Silva";
$gerente->departmento = "Vendas";
$gerente->salario = 10000;

$data = new Data();
$data -> dia = 26;
$data -> mes = 07;
$data -> ano = 2017;

$gerente->setDataEntrada($data);

$gerente->mostra();

//--------------------------------------------

//$seguranca = new Funcionario();
//$seguranca->nome = "Nogueira";
//$seguranca->departmento = "Segurança";
//$seguranca->salario = 1950;
//
//$seguranca->mostra();

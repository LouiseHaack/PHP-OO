<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="./css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<h1>PHP Orientado a Objetos</h1>
<?php

/**
 * Define as informações e valores das pessoas e imprime na tela 
 * @author Louise 
 * @access public
 */
include('Pessoa.php');
$p = new Pessoa();
$p->setNome('Louise');
$p->setDataNasc('05-08-2004');
$p->setRg('12345678');
$p->setCpf('34749814590');

include('Engenheiro.php');
$e = new Engenheiro();
$e->setNome('Manuela');
$e->setDataNasc('09/01/2005');
$e->setrg('5432127865');
$e->setCpf('89765412098');
$e->setCrea('56982344');

include('Medico.php');
$m = new Medico();
$m->setNome('Laura');
$m->setDataNasc('15-12-2004');
$m->setRg('6745210987');
$m->setCpf('5438763456');
$m->setCrm('909');

echo "Nome: ".$p->getNome(); echo "<br>";
echo "Nascimento: ".$p->getDataNasc(); echo "<br>";
echo "RG: ".$p->getRg(); echo "<br>";
echo "CPF: ".$p->getCpf(); 
echo "<br><br>";

echo "Nome: ".$e->getNome(); echo "<br>";
echo "Nascimento: ".$e->getDataNasc(); echo "<br>";
echo "RG: ".$e->getRg(); echo "<br>";
echo "CPF: ".$e->getCpf(); echo "<br>";
echo "CREA: ".$e->getCrea();
echo "<br><br>";

echo "Nome: ".$m->getNome(); echo "<br>";
echo "Nascimento: ".$m->getDataNasc(); echo "<br>";
echo "RG: ".$m->getRg(); echo "<br>";
echo "CPF: ".$m->getCpf(); echo "<br>";
echo "CRM: ".$m->getCrm();
echo "<br><br>";
?>
    
</body>

</html>
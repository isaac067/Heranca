<?php

require_once("modelo/Personagem.php");
require_once("modelo/Heroi.php");
require_once("modelo/Vilao.php");

$opcao = 0;
$p = array();

do {
    echo "\n\n------MENU------\n";
    echo "1- Cadastrar Heroi\n";
    echo "2- Cadastrar Vilao\n";
    echo "3- Listar\n";
    echo "4- Excluir\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    echo "\n";
    switch ($opcao) {
        case 1:
            $h1 = new Heroi();
            $h1->setNome(readline("Informe o nome: "));
            $h1->setIdade(readline("Informe a idade: "));
            $h1->setPoder(readline("Infrome o poder: "));
            $h1->setElemento(readline("Informe o elemento: "));

            array_push($p, $h1);
            break;

        case 2:
            $v1 = new Vilao();
            $v1->setNome(readline("Informe o nome: "));
            $v1->setIdade(readline("Informe a idade: "));
            $v1->setPoder(readline("Infrome o poder: "));
            $v1->setObjetivo(readline("Informe o objetivo: "));

            array_push($p, $v1);
            break;

        case 3:
            foreach ($p as $personagen) {
                if ($personagen instanceof Heroi) {
                    echo "Nome: " . $personagen->getNome() . "\n";
                    echo "Idade: " . $personagen->getIdade() . "\n";
                    echo "Poder: " . $personagen->getPoder() . "\n";
                    echo "Elemento: " . $personagen->getElemento() . "\n" . "\n"; 

                } else if ($personagen instanceof Vilao) {
                    echo "Nome: " . $personagen->getNome() . "\n";
                    echo "Idade: " . $personagen->getIdade() . "\n";
                    echo "Poder: " . $personagen->getPoder() . "\n";
                    echo "Objetivo: " . $personagen->getObjetivo() . "\n";
                }
            }
            break;

        case 4:
            $nome = readline("informe o nome do personagem que deseja excluir:");
            foreach ($p as $indice => $personagen) {
                if ($personagen->getNome() == $nome) {
                    unset($p[$indice]);
                    echo "personagem excluido" . "\n";
                    break;
                }
            }


        case 0:
            echo "Programa encerrado!!\n";
            break;

        default:
            echo "Opção inválida\n";
    }
} while ($opcao != 0);

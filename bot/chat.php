<?php
# fazendo a importação da classe Bot
include("Bot.php");

# criar o objeto para manipular o chatbot
$bot = new Bot();

# aqui vamos definir as perguntas e respostas do sistema
$questions = [
    "o que é php" => "É uma linguagem Serve Side para Web."
    "o que é um carro" => "É uma máquina que leva pessoas."
    "o que é ML" => "É um sistema computacional que permite o aprendizado por equacionamento matemático."
];
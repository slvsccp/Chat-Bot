<?php

class Bot{
    # controla o listener do callback
    public function hears($message, callbable $call) {
        $call (new Bot);
        return $message;
    }
    
    # responde com uma mensagem (imprime ou saída na tela)
    public function reply($response) {
        print($response);
    }

    # procura um valor dentro de um vetor (array) informado
    #$opcoes = ['dolar => 'USD-BRL', 'euro' => 'EUR-BRL'];
    public function ask($question, array $dic) {
        # retirar espaços em branco do início e do fim da string
        $question = trim($question;)
        foreach($dic as $questions => $value) {
            if($question == $questions) {
                return $value;
                
            }   }
    }
}

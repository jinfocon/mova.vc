<?php

interface DiasdaSemana{
    public function exibirMensagem();
}

class Segunda implements DiasdaSemana{
    public function exibirMensagem(){
        echo 'Hoje é Segunda Feira.';
    }
}

class Terca implements DiasdaSemana{
    public function exibirMensagem(){
        echo 'Hoje é Terça Feira.';
    }
}

class Quarta implements DiasdaSemana{
    public function exibirMensagem(){
        echo 'Hoje é Quarta Feira.';
    }
}

class Quinta implements DiasdaSemana{
    public function exibirMensagem(){
        echo 'Hoje é Quinta Feira.';
    }
}

class Sexta implements DiasdaSemana{
    public function exibirMensagem(){
        echo 'Hoje é Sexta Feira.';
    }
}

class Sabado implements DiasdaSemana{
    public function exibirMensagem(){
        echo 'Hoje é Sábado.';
    }
}

class Domingo implements DiasdaSemana{
    public function exibirMensagem(){
        echo 'Hoje é Domingo.';
    }
}

function estategiaDia($diaSemana){
    switch($diaSemana){
        case 1: // Se for Segunda
            return new Segunda();
        case 2: // Se for Terça
            return new Terca();
        case 3: // Se for Quarta
            return new Quarta();
        case 4: // Se for Quinta
            return new Quinta();
        case 5: // Se for Sexta
            return new Sexta();
        case 6: // Se for Sabado
            return new Sabado();
        case 7: // Se for Domingo
            return new Domingo();
    }
}

$nomedia = $date('N');

$estrategiaDia = estategiaDia($nomedia);

?>
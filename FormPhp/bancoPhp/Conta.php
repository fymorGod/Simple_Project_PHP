<?php
    class Conta{
        public $numConta;

        protected $tipo;

        private $dono;
        private $saldo;
        private $status;

        function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }



        public function abriConta($tipo){
            $this->setTipoConta($tipo);
            $this->setStatus(true);

            if ($tipo == "CC"){
                $this->setSaldo(50);

            }elseif($tipo == "CP"){
                $this-> setSaldo(150);

            }
        }

        public function fecharConta(){
            if ($this->getSaldo() > 0){
                echo "<p>Conta ainda contém dinheiro</p>";
            }elseif($this->getSaldo() <0){
                echo "<p>Conta está em Débito com o Banco, não podemos fechar a conta</p>";
            }else{
                $this->setStatus(false);
                echo "Conta de " .$this->getDono(). " foi fechada com sucesso!";
            }
        }

        public function depositar($valor){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $valor);
                echo "<p>Depósito de R$ $valor na conta de ".$this->getDono(). "</p>";
            }else{
                echo "<p>Conta Fechada. Não conseguimos depositar.</p>";
            }
        }

        public function saque($valor){
            if($this->getStatus()){
                if($this->getSaldo() >= $valor){
                    $this->setSaldo($this->getSaldo() - $valor);
                    echo "<p>Saque de R$ $valor autorizado na conta de ".$this->getDono(). "</p>";
                }else{
                    echo "<p>Saldo insuficiente para efetuar o saque.</p>";
                }
            }else{
                echo "<p>Não posso efetuar o saque, a conta está fechada.</p>";
            }
        }

        public function pagarMensal(){
            if($this->getTipoConta() == "CC"){
                $v = 12;
            }else if ($this->getTipoConta() == "CP"){
                $v = 20;
            }
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$ $v debitada na conta de ".$this->getDono(). "</p>";
            }else{
                echo "<p>Error: Não posso efetuar a cobrança.</p>";
            }
        }

        public function getNumConta(){
            return $this->numConta;
        }

        public function setNumConta($num){
            $this->numConta = $num;
        }

        public function getTipoConta(){
            return $this->tipo;
        }

        public function setTipoConta($tipo){
            $this->tipo = $tipo;
        }

        public function getDono(){
            return $this->dono;
        }

        public function setDono($nome){
            $this->dono = $nome;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($valorDeposito){
            $this->saldo = $valorDeposito;
        }


        public function getStatus(){
            return $this->status;
        }
        public function setStatus($status){
            $this->status = $status;
        }
    }


?>
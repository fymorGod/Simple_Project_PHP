    <?php
    
    class Caneta {
        private $modelo;
        private $cor;
        private $ponta;

        protected $carga;
        protected $tampada;
        
        //Método: Construtor do Php
        public function __construct()
        {
            $this->modelo = "Big Bic";
            $this->ponta = 0.5;
            $this->tampar();
        }


        public function rabiscar(){
            if($this->tampada == true){
                echo "<p>Erro! não posso rabiscar</p>";
            }else{
                echo "<p>Estou rabiscando</p>";
            }
        }

        public function getColor(){
            return $this->cor; 
        }
        public function setColor($c){
            $this->color = $c;
        }
        
        public function getPonta(){
            return $this->ponta;
        }
        
        public function setPonta($p){
            $this->ponta = $p;
        }

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($m){
            $this->modelo = $m;
        }


        public function tampar(){
            $this->tampada = true;
        }

        public function destampar(){
            $this->tampada = false;
        }
    }





?>
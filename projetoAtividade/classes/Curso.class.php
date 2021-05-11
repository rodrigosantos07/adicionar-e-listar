
<?php
     class Curso{
        private $Id; 
        private $nome;
        private $preco;
        
        
        public function __construct($id=false) {
            if($id){

            $sql =   "SELECT * FROM curso where id = :id";
            $stmt = DB::conexao()->prepare($sql);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            }
        }


        public function setId($id){
            $this->id =  $id;
        }
        public function setNome($nome){
            $this->nome =  $nome;
        }

        public function setPreco($preco){
            $this->preco =  $preco;
        }


        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function adicionar(){
            $sql = "INSERT INTO curso( nome, preco) VALUES (:nome, :preco)";

            $stmt = DB::conexao()->prepare($sql);
           
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':preco', $this->preco);
            $stmt->execute();
        }


        public static function listar(){
            $sql ="SELECT * FROM curso";
            $stmt = DB::conexao()->prepare($sql);
            $stmt->execute();
            $registros = $stmt->fetchAll();

            if($registros){

                $itens = array();

                foreach($registros as $registro){
                    $temporario = new Curso();
                    
                    $temporario->setNome($registro['nome']);
                    $temporario->setPreco($registro['preco']);
                    $itens[] = $temporario;  
                }
                return $itens;
            }
            return false; 
        }
        public function excluir(){
            if($this->id){
            $sql = "DELETE FROM curso WHERE id = :id";
            $stmt = DB::conexao()->prepare($sql);
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            }
        }

    }
?>
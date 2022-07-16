<?php
    class usuarioMapper{
        private $Usuario;

        public function insert($usuario , $Conexao){
            try {
                //code...
                $sql = "INSERT INTO usuario (login,password) VALUES (:login,:password)";
                $query = $Conexao->prepare($sql);
                $query->bindparam(':login', $usuario->getUsuario());
                $query->bindparam(':password', MD5($usuario->getPassword()));
                $query->execute();
                echo "Usuario inserido com Sucesso";
            }catch (PDOException $e) {
                //throw $th;
                echo "Erro ao inserir o usuario";
            }
        }

        public function update($usuario , $Conexao){
            try {
                //code...
                $sql = "UPDATE undefined SET login=:login,password=:password WHERE login=:login";
                $query = $dbConn->prepare($sql);
                $query->bindparam(':login', $login);
                $query->bindparam(':password', $password);
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function delete($usuario , $Conexao){
            try {
                //code...
                $sql = "DELETE FROM undefined WHERE login=:login";
                $query = $dbConn->prepare($sql);
                $query->execute(array(':id' => $id));
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function exibir($usuario , $Conexao){
            try {
                //code...
                $result = $dbConn->query("SELECT * FROM undefined ORDER BY id DESC");
                while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<YourHTML>";
                    echo "<YourHTML>".$row['login']."</YourHTML>";
                    echo "<YourHTML>".$row['password']."</YourHTML>";
                    echo "<YourHTML>";
                }
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function login($login , $password , $Conexao){
            try {
                //code...
               $sql = "SELECT * FROM usuario WHERE Login =
                '$login' AND Password = '$senha'" ;
                $query = $Conexao->prepare($sql);
                $query->execute();
            }catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }
    }
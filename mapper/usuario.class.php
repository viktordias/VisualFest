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
                $sql = "UPDATE usuario SET login=:login,password=:password WHERE login=:login";
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
                $sql = "DELETE FROM usuario WHERE login=:id";
                $query = $dbConn->prepare($sql);
                $query->execute(array(':id' => $usuario->getUsuario()));
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function exibir($usuario , $Conexao){
            try {
                //code...
                $result = $Conexao->query("SELECT * FROM usuario ORDER BY Login DESC");
                echo "<table width = '100%' border = '1'>";
                while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<td>";
                    echo "<td>".$row['Login']."</td>";
                    echo "<td>".$row['Password']."</td>";
                    echo "<td><a href='UserRegistration.php?id={$row['Login']}&op=e'>
                    Alterar</a></td>";
                    echo "<td><a href='UserRegistration.php?id={$row['Login']}&op=d'>
                    Apagar</a></td>";
                    echo "</tr>";
                    echo "<td>";
                }
                echo "</table>";
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function selectId($id, $conexao){
            try{
                $sql = "SELECT * FROM usuario WHERE login=?";
                $stmt = $conexao->prepare($sql);
                $stmt->bindValue(1, $id);
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                return array();
            }
        }

        public function login($usuario , $Conexao){
            try {
                //code...
               $sql = "SELECT * FROM usuario WHERE Login =
                :login && Password = :senha" ;
                $query = $Conexao->prepare($sql);
                $query->bindparam(':login', $usuario->getUsuario());
                $query->bindparam(':senhas', $usuario->getPassword());
                $query->execute();
                $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch (PDOException $e) {
                //throw $th;
                echo "Erro ao fazer login";
            }
        }
    }
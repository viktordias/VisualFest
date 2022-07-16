<?php

    class reservaProdutoMapper{

        public function insert($reservaProdutos , $conexao){
            try {
                //code...
                $sql = "INSERT INTO reservaprodutos (reserva_codreserva,produto_codproduto,quantidade) VALUES (:reserva_codreserva,:produto_codproduto,:quantidade)";
                $query = $dbConn->prepare($sql);
                $query->bindparam(':reserva_codreserva', $reserva_codreserva);
                $query->bindparam(':produto_codproduto', $produto_codproduto);
                $query->bindparam(':quantidade', $quantidade);
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function update($reservaProdutos , $conexao){
            try {
                //code...
                $sql = "UPDATE reservaprodutos SET reserva_codreserva=:reserva_codreserva,
                produto_codproduto=:produto_codproduto,quantidade=:quantidade WHERE 
                reserva_codreserva=:reserva_codreserva";
                $query = $dbConn->prepare($sql);
                $query->bindparam(':reserva_codreserva', $reserva_codreserva);
                $query->bindparam(':produto_codproduto', $produto_codproduto);
                $query->bindparam(':quantidade', $quantidade);
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function delete($reservaProdutos , $conexao){
            try {
                //code...
                $sql = "DELETE FROM reservaprodutos WHERE 
                reserva_codreserva=:reserva_codreserva";
                $query = $dbConn->prepare($sql);
                $query->execute(array(':id' => $id));
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function exibir($reservaProdutos , $conexao){
            try {
                //code...
                $result = $dbConn->query("SELECT * FROM reservaprodutos ORDER BY id DESC");
                while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<YourHTML>";
                    echo "<YourHTML>".$row['reserva_codreserva']."</YourHTML>";
                    echo "<YourHTML>".$row['produto_codproduto']."</YourHTML>";
                    echo "<YourHTML>".$row['quantidade']."</YourHTML>";
                    echo "<YourHTML>";
                
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }


    }
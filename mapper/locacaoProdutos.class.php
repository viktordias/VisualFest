<?php

    class locacaoProdutosMapper{

        public function inserir($locacaoProdutos , $conexao){
            try {
                //code...
                $sql = "INSERT INTO locaoprodutos (locacao_codprodutos,produtos_codprodutos,
                quantidade,valor,total) VALUES (:locacao_codprodutos,:produtos_codprodutos,
                :quantidade,:valor,:total)";
                $query = $dbConn->prepare($sql);
                $query->bindparam(':locacao_codprodutos', $locacao_codprodutos);
                $query->bindparam(':produtos_codprodutos', $produtos_codprodutos);
                $query->bindparam(':quantidade', $quantidade);
                $query->bindparam(':valor', $valor);
                $query->bindparam(':total', $total);
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function delete($locacaoProdutos , $conexao){
            try {
                //code...
                $sql = "DELETE FROM locaoprodutos WHERE locacao_codprodutos=:locacao_codprodutos";
                $query = $dbConn->prepare($sql);
                $query->execute(array(':id' => $id));
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function update($locacaoProdutos , $conexao){
            try {
                //code...
                $sql = "UPDATE locaoprodutos SET locacao_codprodutos=:locacao_codprodutos,
                produtos_codprodutos=:produtos_codprodutos,quantidade=:quantidade,valor=:valor,
                total=:total WHERE locacao_codprodutos=:locacao_codprodutos";
                $query = $dbConn->prepare($sql);
                $query->bindparam(':locacao_codprodutos', $locacao_codprodutos);
                $query->bindparam(':produtos_codprodutos', $produtos_codprodutos);
                $query->bindparam(':quantidade', $quantidade);
                $query->bindparam(':valor', $valor);
                $query->bindparam(':total', $total);
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function exibir($locacaoProdutos , $conexao){
            try {
                //code...
                $result = $dbConn->query("SELECT * FROM locaoprodutos ORDER BY id DESC");
                while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<YourHTML>";
                    echo "<YourHTML>".$row['locacao_codprodutos']."</YourHTML>";
                    echo "<YourHTML>".$row['produtos_codprodutos']."</YourHTML>";
                    echo "<YourHTML>".$row['quantidade']."</YourHTML>";
                    echo "<YourHTML>".$row['valor']."</YourHTML>";
                    echo "<YourHTML>".$row['total']."</YourHTML>";
                    echo "<YourHTML>";
                }
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

    }
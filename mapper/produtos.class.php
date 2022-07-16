<?php
//CRUD cliente
    class produtosMapper{

        public function insert($produtos , $conexao){
            try {
                //code...
                $sql = "INSERT INTO undefined (codprodutos,nomeproduto,status,
                custo,markup,aluguel,quantidade,imagem,codbarras) VALUES (:codprodutos,:nomeproduto,
                :status,:custo,:markup,:aluguel,:quantidade,:imagem,:codbarras)";
                $query = $dbConn->prepare($sql);
                $query->bindparam(':codprodutos', $codprodutos);
                $query->bindparam(':nomeproduto', $nomeproduto);
                $query->bindparam(':status', $status);
                $query->bindparam(':custo', $custo);
                $query->bindparam(':markup', $markup);
                $query->bindparam(':aluguel', $aluguel);
                $query->bindparam(':quantidade', $quantidade);
                $query->bindparam(':imagem', $imagem);
                $query->bindparam(':codbarras', $codbarras);
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao criar o produto";
            }

        }

        public function update($produtos , $conexao){
            try {
                //code...
                $sql = "UPDATE undefined SET codprodutos=:codprodutos,nomeproduto=:nomeproduto,
                status=:status,custo=:custo,markup=:markup,aluguel=:aluguel,quantidade=:quantidade,
                imagem=:imagem,codbarras=:codbarras WHERE codprodutos=:codprodutos";
                $query = $dbConn->prepare($sql);
                $query->bindparam(':codprodutos', $codprodutos);
                $query->bindparam(':nomeproduto', $nomeproduto);
                $query->bindparam(':status', $status);
                $query->bindparam(':custo', $custo);
                $query->bindparam(':markup', $markup);
                $query->bindparam(':aluguel', $aluguel);
                $query->bindparam(':quantidade', $quantidade);
                $query->bindparam(':imagem', $imagem);
                $query->bindparam(':codbarras', $codbarras);
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function delete($produtos , $conexao){
            try {
                //code...
                $sql = "DELETE FROM undefined WHERE codprodutos=:codprodutos";
                $query = $dbConn->prepare($sql);
                $query->execute(array(':id' => $id));
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function exibir($produtos , $conexao){
            try {
                //code...
                $result = $dbConn->query("SELECT * FROM undefined ORDER BY id DESC");
                while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<YourHTML>";
                    echo "<YourHTML>".$row['codprodutos']."</YourHTML>";
                    echo "<YourHTML>".$row['nomeproduto']."</YourHTML>";
                    echo "<YourHTML>".$row['status']."</YourHTML>";
                    echo "<YourHTML>".$row['custo']."</YourHTML>";
                    echo "<YourHTML>".$row['markup']."</YourHTML>";
                    echo "<YourHTML>".$row['aluguel']."</YourHTML>";
                    echo "<YourHTML>".$row['quantidade']."</YourHTML>";
                    echo "<YourHTML>".$row['imagem']."</YourHTML>";
                    echo "<YourHTML>".$row['codbarras']."</YourHTML>";
                    echo "<YourHTML>";
                }
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
            }
       
     }

    
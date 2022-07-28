<?php
//CRUD cliente
    class produtosMapper{

        public function contProduct($conexao){
            try {
                //code...
                $sql = "select MAX(pr.CodProduto) + 1 as quant
                from produtos as pr";
                $query = $conexao->prepare($sql);
                $query->execute();
                $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            } catch(PDOException $e){
                return array();
            }
        }

        public function insert($produtos , $conexao){
            try {
                //code...
                $sql = "INSERT INTO produtos (codprodutos,nomeproduto,status,
                custo,markup,aluguel,quantidade,codbarras) VALUES (:codprodutos,:nomeproduto,
                :status,:custo,:markup,:aluguel,:quantidade,:codbarras)";
                $query = $conexao->prepare($sql);
                $query->bindValue(':codprodutos', $produtos->getCodProdutos());
                $query->bindValue(':nomeproduto',  $produtos->getNomeProduto());
                $query->bindValue(':status', $produtos->getStatus());
                $query->bindValue(':custo', $produtos->getCusto());
                $query->bindValue(':markup', $produtos->getMarkup());
                $query->bindValue(':aluguel', $produtos->getAluguel());
                $query->bindValue(':quantidade', $produtos->getQuantidade());
                $query->bindValue(':codbarras', $produtos->getCodBarras());
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao criar o produto";
            }

        }

        public function update($produtos , $conexao){
            try {
                //code...
                $sql = "UPDATE produtos SET codprodutos=:codprodutos,nomeproduto=:nomeproduto,
                status=:status,custo=:custo,markup=:markup,aluguel=:aluguel,quantidade=:quantidade,
                codbarras=:codbarras WHERE codprodutos=:codprodutos";
                $query = $conexao->prepare($sql);
                $query->bindValue(':codprodutos', $produtos->getCodProdutos());
                $query->bindValue(':nomeproduto',  $produtos->getNomeProduto());
                $query->bindValue(':status', $produtos->getStatus());
                $query->bindValue(':custo', $produtos->getCusto());
                $query->bindValue(':markup', $produtos->getMarkup());
                $query->bindValue(':aluguel', $produtos->getAluguel());
                $query->bindValue(':quantidade', $produtos->getQuantidade());
                $query->bindValue(':codbarras', $produtos->getCodBarras());
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
                $result = $conexao->query("SELECT * FROM produtos as pd ORDER BY pd.CodProduto DESC");
                echo "<table width = '100%' border = '1'>";
                while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<tr>";
                    echo "<td>".$row['CodProduto']."</td>";
                    echo "<td>".$row['NomeProduto']."</td>";
                    echo "<td>".$row['Status']."</td>";
                    echo "<td>".$row['Custo']."</td>";
                    echo "<td>".$row['Markup']."</td>";
                    echo "<td>".$row['Aluguel']."</td>";
                    echo "<td>".$row['Quantidade']."</td>";
                    echo "<td>".$row['CodBarras']."</td>";
                    echo "<td><a href='ProductRegistration.php?id={$row['CodProduto']}&op=e'>
                    Alterar</a></td>";
                    echo "<td><a href='ProductRegistration.php?id={$row['CodProduto']}&op=d'>
                    Apagar</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao exibir a lista Produto";
            }
            }

            public function selectId($id, $conexao){
                try{
                    $sql = "SELECT * FROM produtos WHERE CodProduto=?";
                    $stmt = $conexao->prepare($sql);
                    $stmt->bindValue(1, $id);
                    $stmt->execute();
                    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return $resultado;
                }catch(PDOException $e){
                    return array();
                }
            }
       
     }

    
<?php

    class locacaoMapper{
        public function insert($locacao , $conexao){
            try {
                //code...
                $sql = "INSERT INTO locacao (codlocacao,datainicio,datafinal,
                datadevolucao,valordia,valorfinal,desconto,multadia,multatotal,
                cliente_codcliente,horainicio,horafinal) VALUES (:codlocacao,:datainicio,
                :datafinal,:datadevolucao,:valordia,:valorfinal,:desconto,:multadia,
                :multatotal,:cliente_codcliente,:horainicio,:horafinal)";
                $query = $dbConn->prepare($sql);
                $query->bindparam(':codlocacao', $codlocacao);
                $query->bindparam(':datainicio', $datainicio);
                $query->bindparam(':datafinal', $datafinal);
                $query->bindparam(':datadevolucao', $datadevolucao);
                $query->bindparam(':valordia', $valordia);
                $query->bindparam(':valorfinal', $valorfinal);
                $query->bindparam(':desconto', $desconto);
                $query->bindparam(':multadia', $multadia);
                $query->bindparam(':multatotal', $multatotal);
                $query->bindparam(':cliente_codcliente', $cliente_codcliente);
                $query->bindparam(':horainicio', $horainicio);
                $query->bindparam(':horafinal', $horafinal);
                $query->execute();
            }catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function update($locacao , $conexao){
            try {
                //code...
                $sql = "UPDATE locacao SET codlocacao=:codlocacao,datainicio=:datainicio,
                datafinal=:datafinal,datadevolucao=:datadevolucao,valordia=:valordia,
                valorfinal=:valorfinal,desconto=:desconto,multadia=:multadia,multatotal=:multatotal,
                cliente_codcliente=:cliente_codcliente,horainicio=:horainicio,horafinal=:horafinal
                 WHERE codlocacao=:codlocacao";
                $query = $dbConn->prepare($sql);
                $query->bindparam(':codlocacao', $codlocacao);
                $query->bindparam(':datainicio', $datainicio);
                $query->bindparam(':datafinal', $datafinal);
                $query->bindparam(':datadevolucao', $datadevolucao);
                $query->bindparam(':valordia', $valordia);
                $query->bindparam(':valorfinal', $valorfinal);
                $query->bindparam(':desconto', $desconto);
                $query->bindparam(':multadia', $multadia);
                $query->bindparam(':multatotal', $multatotal);
                $query->bindparam(':cliente_codcliente', $cliente_codcliente);
                $query->bindparam(':horainicio', $horainicio);
                $query->bindparam(':horafinal', $horafinal);
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function delete($locacao, $conexao){
            try {
                //code...
                $sql = "DELETE FROM locacao WHERE codlocacao=:codlocacao";
                $query = $dbConn->prepare($sql);
                $query->execute(array(':id' => $id));
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }

        }

        public function exibir($locacao , $conexao){
            try {
                //code...
                $result = $dbConn->query("SELECT * FROM locacao ORDER BY id DESC");
                while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<YourHTML>";
                    echo "<YourHTML>".$row['codlocacao']."</YourHTML>";
                    echo "<YourHTML>".$row['datainicio']."</YourHTML>";
                    echo "<YourHTML>".$row['datafinal']."</YourHTML>";
                    echo "<YourHTML>".$row['datadevolucao']."</YourHTML>";
                    echo "<YourHTML>".$row['valordia']."</YourHTML>";
                    echo "<YourHTML>".$row['valorfinal']."</YourHTML>";
                    echo "<YourHTML>".$row['desconto']."</YourHTML>";
                    echo "<YourHTML>".$row['multadia']."</YourHTML>";
                    echo "<YourHTML>".$row['multatotal']."</YourHTML>";
                    echo "<YourHTML>".$row['cliente_codcliente']."</YourHTML>";
                    echo "<YourHTML>".$row['horainicio']."</YourHTML>";
                    echo "<YourHTML>".$row['horafinal']."</YourHTML>";
                    echo "<YourHTML>";
                }
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }
    }
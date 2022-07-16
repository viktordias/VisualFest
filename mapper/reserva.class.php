<?php

    class reservaMapper{

        public function insert($reserva , $conexao){
            try {
                //code...
                $sql = "INSERT INTO reserva (codreserva,datareservainicio,datareservafinal,
                statusreserva,cliente_codcliente,horareservainicio,horareservafinal) VALUES
                 (:codreserva,:datareservainicio,:datareservafinal,:statusreserva,:cliente_codcliente,
                 :horareservainicio,:horareservafinal)";
                $query = $dbConn->prepare($sql);
                $query->bindparam(':codreserva', $codreserva);
                $query->bindparam(':datareservainicio', $datareservainicio);
                $query->bindparam(':datareservafinal', $datareservafinal);
                $query->bindparam(':statusreserva', $statusreserva);
                $query->bindparam(':cliente_codcliente', $cliente_codcliente);
                $query->bindparam(':horareservainicio', $horareservainicio);
                $query->bindparam(':horareservafinal', $horareservafinal);
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function update($reserva , $conexao){
            try {
                //code...
                $sql = "UPDATE reserva SET codreserva=:codreserva,datareservainicio=:datareservainicio,
                datareservafinal=:datareservafinal,statusreserva=:statusreserva,
                cliente_codcliente=:cliente_codcliente,horareservainicio=:horareservainicio,
                horareservafinal=:horareservafinal WHERE codreserva=:codreserva";
                $query = $dbConn->prepare($sql);
                $query->bindparam(':codreserva', $codreserva);
                $query->bindparam(':datareservainicio', $datareservainicio);
                $query->bindparam(':datareservafinal', $datareservafinal);
                $query->bindparam(':statusreserva', $statusreserva);
                $query->bindparam(':cliente_codcliente', $cliente_codcliente);
                $query->bindparam(':horareservainicio', $horareservainicio);
                $query->bindparam(':horareservafinal', $horareservafinal);
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }

        public function delete($reserva , $conexao){
            try {
                //code...
                $sql = "DELETE FROM reserva WHERE codreserva=:codreserva";
                $query = $dbConn->prepare($sql);
                $query->execute(array(':id' => $id));
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";;
            }
        }

        public function exibir($reserva , $conexao){
            try {
                //code...
                $result = $dbConn->query("SELECT * FROM reserva ORDER BY id DESC");
                while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<YourHTML>";
                    echo "<YourHTML>".$row['codreserva']."</YourHTML>";
                    echo "<YourHTML>".$row['datareservainicio']."</YourHTML>";
                    echo "<YourHTML>".$row['datareservafinal']."</YourHTML>";
                    echo "<YourHTML>".$row['statusreserva']."</YourHTML>";
                    echo "<YourHTML>".$row['cliente_codcliente']."</YourHTML>";
                    echo "<YourHTML>".$row['horareservainicio']."</YourHTML>";
                    echo "<YourHTML>".$row['horareservafinal']."</YourHTML>";
                    echo "<YourHTML>";
                }
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao atualizar o Produto";
            }
        }



    }
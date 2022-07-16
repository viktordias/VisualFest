<?php
//CRUD cliente
    class clienteMapper{
        public function insert($cliente,$conexao){
            try {
                //code...
                $sql = "INSERT INTO cliente (codcliente,nome,datanascimento,
                logradouro,bairro,numero,cep,cpf_cnpj,cidade,estado,
                observacoes,telefone,complemento) VALUES (:codcliente,:nome,:datanascimento,
                :logradouro,:bairro,:numero,:cep,:cpf_cnpj,:cidade,:estado,:observacoes,
                :telefone,:complemento)";
                $query = $dbConn->prepare($sql);
                $query->bindparam(':codcliente', $codcliente);
                $query->bindparam(':nome', $nome);
                $query->bindparam(':datanascimento', $datanascimento);
                $query->bindparam(':logradouro', $logradouro);
                $query->bindparam(':bairro', $bairro);
                $query->bindparam(':numero', $numero);
                $query->bindparam(':cep', $cep);
                $query->bindparam(':cpf_cnpj', $cpf_cnpj);
                $query->bindparam(':cidade', $cidade);
                $query->bindparam(':estado', $estado);
                $query->bindparam(':observacoes', $observacoes);
                $query->bindparam(':telefone', $telefone);
                $query->bindparam(':complemento', $complemento);
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao inserir o cliente";
            }

           
        }

        public function update($cliente,$conexao){
            try {
                //code...
                    $sql = "UPDATE cliente SET codcliente=:codcliente,nome=:nome,
                    datanascimento=:datanascimento,logradouro=:logradouro,bairro=:bairro,
                    numero=:numero,cep=:cep,cpf_cnpj=:cpf_cnpj,cidade=:cidade,estado=:estado,
                    observacoes=:observacoes,telefone=:telefone,complemento=:complemento 
                    WHERE codcliente=:codcliente";
                    $query = $dbConn->prepare($sql);
                    $query->bindparam(':codcliente', $codcliente);
                    $query->bindparam(':nome', $nome);
                    $query->bindparam(':datanascimento', $datanascimento);
                    $query->bindparam(':logradouro', $logradouro);
                    $query->bindparam(':bairro', $bairro);
                    $query->bindparam(':numero', $numero);
                    $query->bindparam(':cep', $cep);
                    $query->bindparam(':cpf_cnpj', $cpf_cnpj);
                    $query->bindparam(':cidade', $cidade);
                    $query->bindparam(':estado', $estado);
                    $query->bindparam(':observacoes', $observacoes);
                    $query->bindparam(':telefone', $telefone);
                    $query->bindparam(':complemento', $complemento);
                    $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao Editar o cliente";
            }

        }

        public function delete($cliente,$conexao){
            try {
                //code...
                $sql = "DELETE FROM cliente WHERE codcliente=:codcliente";
                $query = $dbConn->prepare($sql);
                $query->execute(array(':id' => $id));
            }catch (PDOException $e) {
                //throw $th;
                echo "Erro ao deletar o cliente";
            }
        }

        public function exibir($cliente,$conexao){
            try {
                //code...
                $result = $dbConn->query("SELECT * FROM cliente ORDER BY id DESC");
                while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<YourHTML>";
                    echo "<YourHTML>".$row['codcliente']."</YourHTML>";
                    echo "<YourHTML>".$row['nome']."</YourHTML>";
                    echo "<YourHTML>".$row['datanascimento']."</YourHTML>";
                    echo "<YourHTML>".$row['logradouro']."</YourHTML>";
                    echo "<YourHTML>".$row['bairro']."</YourHTML>";
                    echo "<YourHTML>".$row['numero']."</YourHTML>";
                    echo "<YourHTML>".$row['cep']."</YourHTML>";
                    echo "<YourHTML>".$row['cpf_cnpj']."</YourHTML>";
                    echo "<YourHTML>".$row['cidade']."</YourHTML>";
                    echo "<YourHTML>".$row['estado']."</YourHTML>";
                    echo "<YourHTML>".$row['observacoes']."</YourHTML>";
                    echo "<YourHTML>".$row['telefone']."</YourHTML>";
                    echo "<YourHTML>".$row['complemento']."</YourHTML>";
                    echo "<YourHTML>";
                }
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao exibir o cliente";
            }
        }
    }
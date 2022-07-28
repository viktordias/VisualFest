<?php
//CRUD cliente
include "../mapper/conexao.php";
    class clienteMapper{

        public function contPerson($conexao){
            try {
                //code...
                $sql = "select MAX(cli.CodCliente) + 1 as quant
                from cliente as cli";
                $query = $conexao->prepare($sql);
                $query->execute();
                $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            } catch(PDOException $e){
                return array();
            }
        }

        public function insert($cliente,$conexao){
            try {
                //code...
                $sql = "INSERT INTO cliente (codcliente,nome,datanascimento,
                logradouro,bairro,numero,cep,cpf_cnpj,cidade,estado,
                observacoes,telefone,complemento) VALUES (:codcliente,:nome,
                :datanascimento,
                :logradouro,:bairro,:numero,:cep,:cpf_cnpj,:cidade,:estado,
                :observacoes,
                :telefone,:complemento)";
                $query = $conexao->prepare($sql);
                $query->bindValue(':codcliente', $cliente->getCodCliente());
                $query->bindValue(':nome', $cliente->getNome());
                $query->bindValue(':datanascimento', $cliente->getDataNascimento());
                $query->bindValue(':logradouro', $cliente->getLogradouro());
                $query->bindValue(':bairro', $cliente->getBairro());
                $query->bindValue(':numero', $cliente->getNumero());
                $query->bindValue(':cep', $cliente->getCEP());
                $query->bindValue(':cpf_cnpj', $cliente->getCPF_CNPJ());
                $query->bindValue(':cidade', $cliente->getCidade());
                $query->bindValue(':estado', $cliente->getEstado());
                $query->bindValue(':observacoes', $cliente->getObservacoes());
                $query->bindValue(':telefone', $cliente->getTelefone());
                $query->bindValue(':complemento', $cliente->getComplemento());
                $query->execute();
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao inserir o cliente\n";
                echo "$e";
                echo "$cliente->getCodCliente()";
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
                    $query = $conexao->prepare($sql);
                    $query->bindValue(':codcliente', $cliente->getCodCliente());
                    $query->bindValue(':nome', $cliente->getNome());
                    $query->bindValue(':datanascimento', $cliente->getDataNascimento());
                    $query->bindValue(':logradouro', $cliente->getLogradouro());
                    $query->bindValue(':bairro', $cliente->getBairro());
                    $query->bindValue(':numero', $cliente->getNumero());
                    $query->bindValue(':cep', $cliente->getCEP());
                    $query->bindValue(':cpf_cnpj', $cliente->getCPF_CNPJ());
                    $query->bindValue(':cidade', $cliente->getCidade());
                    $query->bindValue(':estado', $cliente->getEstado());
                    $query->bindValue(':observacoes', $cliente->getObservacoes());
                    $query->bindValue(':telefone', $cliente->getTelefone());
                    $query->bindValue(':complemento', $cliente->getComplemento());
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

        public function exibir($conexao){
            try {
                //code...
                $result = $conexao->query("SELECT * FROM cliente as cli ORDER BY cli.CodCliente
                DESC");
                echo "<table width = '100%' border = '1'>";
                while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
                    echo "<tr>";
                    echo "<td>".$row['CodCliente']."</td>";
                    echo "<td>".$row['Nome']."</td>";
                    echo "<td>".$row['DataNascimento']."</td>";
                    echo "<td>".$row['Logradouro']."</td>";
                    echo "<td>".$row['Bairro']."</td>";
                    echo "<td>".$row['Numero']."</td>";
                    echo "<td>".$row['CEP']."</td>";
                    echo "<td>".$row['CPF_CNPJ']."</td>";
                    echo "<td>".$row['Cidade']."</td>";
                    echo "<td>".$row['Estado']."</td>";
                    echo "<td>".$row['Observacoes']."</td>";
                    echo "<td>".$row['telefone']."</td>";
                    echo "<td>".$row['Complemento']."</td>";
                    echo "<td><a href='PersonRegistration.php?id={$row['CodCliente']}&op=e'>
                    Alterar</a></td>";
                    echo "<td><a href='usuario.php?id={$row['CodCliente']}&op=d'>
                    Apagar</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } catch (PDOException $e) {
                //throw $th;
                echo "Erro ao exibir o cliente";
            }
        }

        public function selectId($id, $conexao){
            try{
                $sql = "SELECT * FROM cliente WHERE CodCliente=?";
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
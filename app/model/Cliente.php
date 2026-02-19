<?php
 
class Cliente extends Model
{
    public function listarClientes()
    {
        $sql = "SELECT * FROM tbl_cliente ORDER BY id_cliente ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
 
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }
 
    public function inserirCliente($nome, $telefone, $email, $data_nasc, $status)
    {
        $sql = "INSERT INTO tbl_cliente
                (nome_cliente, telefone_cliente, email_cliente, nasc_cliente, status_cliente)
                VALUES (:nome, :telefone, :email, :data_nasc, :status)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':telefone', $telefone);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':data_nasc', $data_nasc);
        $stmt->bindValue(':status', $status);
        $stmt->execute();
    }
 
    public function deletarCliente($id)
    {
        $sql = "DELETE FROM tbl_cliente WHERE id_cliente = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
 
    public function contarClientes()
    {
        $sql = "SELECT COUNT(*) as total FROM tbl_cliente";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result['total'] ?? 0;
    }
 
    public function atualizar ($dados)
    {
        $sql = "UPDATE tbl_cliente
            SET nome_cliente = :nome_cliente,
                telefone_cliente = :telefone_cliente,
                email_cliente = :email_cliente,
                nasc_cliente = :nasc_cliente,
                status_cliente = :status_cliente
            WHERE id_cliente = :id_cliente";
       
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome_cliente', $dados['nome_cliente']);
        $stmt->bindValue(':telefone_cliente', $dados['telefone_cliente']);
        $stmt->bindValue(':email_cliente', $dados['email_cliente']);
        $stmt->bindValue(':nasc_cliente', $dados['nasc_cliente']);
        $stmt->bindValue(':status_cliente', $dados['status_cliente']);
        $stmt->bindValue(':id_cliente', $dados['id_cliente']);
 
        return $stmt->execute();
    }
}
 
<?php
 
class Servico extends Model
{
    public function listarServicos()
    {
        $sql = "SELECT * FROM tbl_servico ORDER BY nome_servico ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
 
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }
 
    public function inserirServico($nome, $descricao, $duracao, $preco, $status)
    {
        $sql = "INSERT INTO tbl_servico
                (nome_servico, desc_servico, duracao_servico, preco_servico, status_servico)
                VALUES (:nome, :descricao, :duracao, :preco, :status)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':descricao', $descricao);
        $stmt->bindValue(':duracao', $duracao);
        $stmt->bindValue(':preco', $preco);
        $stmt->bindValue(':status', $status);
        $stmt->execute();
    }
 
    public function deletarServico($id)
    {
        $sql = "DELETE FROM tbl_servico WHERE id_servico = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
 
    public function contarServicos()
    {
        $sql = "SELECT COUNT(*) as total FROM tbl_servico";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result['total'] ?? 0;
    }
 
    public function atualizar ($dados)
    {
        $sql = "UPDATE tbl_servico
            SET nome_servico = :nome_servico,
                desc_servico = :desc_servico,
                duracao_servico = :duracao_servico,
                preco_servico = :preco_servico,
                status_servico = :status_servico
            WHERE id_servico = :id_servico";
       
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome_servico', $dados['nome_servico']);
        $stmt->bindValue(':desc_servico', $dados['desc_servico']);
        $stmt->bindValue(':duracao_servico', $dados['duracao_servico']);
        $stmt->bindValue(':preco_servico', $dados['preco_servico']);
        $stmt->bindValue(':status_servico', $dados['status_servico']);
        $stmt->bindValue(':id_servico', $dados['id_servico']);
 
        return $stmt->execute();
    }
}
 
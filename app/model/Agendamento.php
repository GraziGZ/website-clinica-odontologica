<?php
 
class Agendamento extends Model
{
    public function listarAgendamentos()
    {
        $sql = "SELECT * FROM tbl_agendamento INNER JOIN tbl_cliente ON tbl_agendamento.id_cliente = tbl_cliente.id_cliente  INNER JOIN tbl_servico ON tbl_agendamento.id_servico = tbl_servico.id_servico ORDER BY id_agendamento ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
 
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }
   
    public function inserirAgendamento($id_cliente, $id_servico, $data, $hora, $status, $observacao) 
    {
        $sql = "INSERT INTO tbl_agendamento
                (id_cliente, id_servico, data_agendamento, hora_agendamento, status_agendamento, obs_agendamento) 
                VALUES (:cliente, :servico, :data, :hora, :status, :observacao)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':cliente', $id_cliente);
        $stmt->bindValue(':servico', $id_servico);
        $stmt->bindValue(':data', $data);
        $stmt->bindValue(':hora', $hora);
        $stmt->bindValue(':status', $status);
        $stmt->bindValue(':observacao', $observacao);
        $stmt->execute();
    }
 
    public function deletarAgendamento($id)
    {
        $sql = "DELETE FROM tbl_agendamento WHERE id_agendamento = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
 
    public function contarAgendamentos()
    {
        $sql = "SELECT COUNT(*) as total FROM tbl_agendamento";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result['total'] ?? 0;
    }
 
    public function atualizar ($dados)
    {
        $sql = "UPDATE tbl_agendamento
            SET id_cliente = :id_cliente,
                id_servico = :id_servico,
                data_agendamento = :data_agendamento,
                hora_agendamento = :hora_agendamento,
                status_agendamento = :status_agendamento,
                obs_agendamento = :obs_agendamento
            WHERE id_agendamento = :id_agendamento";
       
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id_cliente', $dados['id_cliente']);
        $stmt->bindValue(':id_servico', $dados['id_servico']);
        $stmt->bindValue(':data_agendamento', $dados['data']);
        $stmt->bindValue(':hora_agendamento', $dados['hora']);
        $stmt->bindValue(':status_agendamento', $dados['status_agendamento']);
        $stmt->bindValue(':obs_agendamento', $dados['observacao']);
        $stmt->bindValue(':id_agendamento', $dados['id_agendamento']);
 
        return $stmt->execute();
    }
}
 
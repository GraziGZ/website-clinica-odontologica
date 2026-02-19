
<?php
 
class ContatoEmail extends Model
{
    public function listarContatos()
    {
        $sql = "SELECT * FROM tbl_contato ORDER BY id_contato ASC"; //Estamos ordenando a lista de informação por ordem de cadastro "id_contato"
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
 
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }
 
    public function contarContatos()
    {
        $sql = "SELECT COUNT(*) as total FROM tbl_contato";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result['total'] ?? 0;
    }
 
    public function deletarContato($id)
    {
        $sql = "DELETE FROM tbl_contato WHERE id_contato = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
 
}
<?php

class Administrador extends Model
{
    //AUTENTICADOR
    public function autenticar($email, $senha)
        {
            $sql = "SELECT * FROM tbl_adm WHERE email_adm = :email AND senha_adm = :senha";

            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":senha", $senha);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_ASSOC); //RETORNA OS DADOS DO ADM AUTENTICADO
            }

            return false; //LOGIN INCORRETO
        }

    //RECUPERAR SENHA
    public function recuperarSenha($email, $novaSenha1, $novaSenha2)
    {
        //VERIFICA SE AS DUAS SENHAS DIGITADAS CONFEREM SENHA1 E SENHA2
        if ($novaSenha1 !== $novaSenha2) {
            return "As senhas digitadas não conferem!";
        }

        //VERIFGICA A EXISTENCIA DO E-MAIL
        $sql = "SELECT id_adm FROM tbl_adm WHERE email_adm = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() == 0) {
            return "E-mail não encontrado!";
        }

        //ATUALIZA A SENHA
        $sql = "UPDATE tbl_adm SET senha_adm = :senha WHERE email_adm = :email";
        $stmt = $this ->db->prepare($sql);
        $stmt->bindValue(":senha", $novaSenha1);
        $stmt->bindValue(":email", $email);

        if ($stmt->execute()){
            return true;
        }
        return "Erro ao atualizar Senha!";
    }

}

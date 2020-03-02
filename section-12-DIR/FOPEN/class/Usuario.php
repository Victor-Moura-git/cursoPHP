<?php

class Usuario
{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario()
    {
        return $this->idusuario;
    }

    public function setIdusuario($value)
    {
        $this->idusuario = $value;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($value)
    {
        $this->deslogin = $value;
    }

    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function setDessenha($value)
    {
        $this->dessenha = $value;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($value)
    {
        $this->dtcadastro = $value;
    }

    public function setData($data)
    {
      $this->setIdusuario($data['idusuario']);
      $this->setDeslogin($data['deslogin']);
      $this->setDessenha($data['dessenha']);
      $this->setDtcadastro($data['dtcadastro']);
    }

    public function loadById($id)
    {
        $sql = new Sql();
        $this->setIdusuario($id);
        $results = $sql -> select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
        ":ID"=>$id
      ));

        //essa parte eh opcional
        if (isset($results[0])) {
            $this->setData($results[0]);
        } else {
            throw new Exception("Login e/ou senha invalidos");
        }
        return $results;
    }

    public static function getList()
    {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
    }

    public static function search($login)
    {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
        ':SEARCH'=>"%" . $login . "%"
      ));
    }

    public static function login($login, $password)
    {
        $sql = new Sql();

        $results = $sql -> select("SELECT * FROM tb_usuarios WHERE deslogin=:LOGIN AND dessenha=:PASSWORD", array(
      ":LOGIN"=>$login,
      ":PASSWORD"=>$password
    ));

        if (isset($results[0])) {
            return $results;
        } else {
            throw new Exception("Login e/ou senha invalidos");
        }
    }

    public function update($login, $password)
    {
        $this->setDeslogin($login);
        $this->setDessenha($password);
        //$this->setIdusuario($id);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha=:PASSWORD WHERE idusuario = :ID", array(
        ':LOGIN'=>$this->getDeslogin(),
        ':PASSWORD'=>$this->getDessenha(),
        ':ID'=>$this->getIdusuario()
      ));
    }

    public function delete()
    {
      $sql = new Sql();

      $sql->query("DELETE FROM tb_usuarios WHERE idusuario=:ID", array(
        ':ID'=>$this->getIdusuario()
      ));

      $this->setIdusuario(0);
      $this->setDeslogin("");
      $this->setDessenha("");
      $this->setDtCadastro(new DateTime());
    }

    public function insert()
    {
        $sql = new Sql();

        $userExists = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin=:LOGIN", array(
          ":LOGIN"=>$this->getDeslogin(),
        ));
        if ($userExists) {
            throw new Exception("Esse usuario ja existe");
            return;
        }
        $sql->select("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)", array(
        ':LOGIN'=>$this->getDeslogin(),
        ':PASSWORD'=>$this->getDessenha()
      ));
        //print_r($results);
    }

    //para printar o objeto diretamente
    public function __toString()
    {
        return json_encode(array(
        "idusuario"=>$this->getIdusuario(),
        "deslogin"=>$this->getDeslogin(),
        "dessenha"=>$this->getDessenha(),
        "dtcadastro"=>$this->getDtcadastro()
      ));
    }
}

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

    public static function loadById($id)
    {
        $sql = new Sql();

        $results = $sql -> select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
        ":ID"=>$id
      ));
        /*
          print_r($results[0]);
          if (isset($results[0])) {
              //print_r($results[0]);
              $row = $results[0];
              $this->setIdusuario($row['idusuario']);
              $this->setDeslogin($row['deslogin']);
              $this->setDessenha($row['dessenha']);
              $this->setDtcadastro($row['dtcadastro']);
          }
          */

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
        /*
                if (isset($results[0])) {
                    //print_r($results[0]);
                    $row = $results[0];
                    $this->setIdusuario($row['idusuario']);
                    $this->setDeslogin($row['deslogin']);
                    $this->setDessenha($row['dessenha']);
                    $this->setDtcadastro($row['dtcadastro']);
                } else {
                  throw new Exception("Login e/ou senha invalidos");
                }
        */
        if (isset($results[0])) {
            return $results;
        } else {
            throw new Exception("Login e/ou senha invalidos");
        }
    }

    public function setData($data)
    {
    }

    public function insert()
    {
        $sql = new Sql();

        $results = $sql->select("INSERT INTO  tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)", array(
        ':LOGIN'=>$this->getDeslogin(),
        ':PASSWORD'=>$this->getDessenha(),
      ));
    }

    /*
        public function string()
        {
            return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()
          ));
        }
    */
}

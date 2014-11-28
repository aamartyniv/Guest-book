<?php

class db {

    public $db;

    protected function connect ($config)
    {
        try {

            $this->db = new PDO('mysql:host=' . $config['db.host'] . ';dbname=' . $config['db.name'] . '', $config['db.user'], $config['db.password']);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->exec("set names utf8");
            return $this->db;

        } catch (PDOException $e) {

            echo 'we have connect problem';
            return file_put_contents(PATH .'log.txt', $e->getMessage());
        }
    }

    public function closeConnection ()
    {
        return $this->db = null;
    }

    public function insert (array $data, $sql)
    {
        $sth = $this->db->prepare($sql);
        $sth->execute($data);
        return $sth->colRows();
    }

}





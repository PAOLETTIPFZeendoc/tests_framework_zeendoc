<?php

namespace Framework\Abstracts;

abstract class DBConnector
{
    protected $db;
    public function __construct($connectionDatas)
    {
        $this->db = $connectionDatas;
    }

    abstract public function getConnection();
}

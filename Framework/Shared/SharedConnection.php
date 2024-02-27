<?php

namespace Framework\Shared;

use Framework\Abstracts\DBConnector;

class SharedConnection extends DBConnector
{
    public function __construct($dbDatas)
    {
        parent::__construct($dbDatas);
    }
    public function getConnection()
    {
        return $this->db;
    }
}

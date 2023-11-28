<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

use App\Library\Servidor;

class Tenant extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    protected $domain = '';

    function __construct()
    {
        $this->setDomain();
    }

    private function setDomain() {
        $server = new Servidor();
        $this->domain = $server->getDomain();
    }

    
}

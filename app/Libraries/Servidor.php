<?php

namespace app\Library;

class Servidor
{
    public function getDomain()
    {
        return $_SERVER['HTTP_HOST'] ?? '';
    }

    public function getUserIP()
    {
        return $_SERVER['REMOTE_ADDR'] ?? 0;
    }
}

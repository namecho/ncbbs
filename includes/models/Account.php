<?php
class Account
{
    private $db;
    private $plugin;

    function __construct()
    {
        $this->db = Database::getInstance();
    }
}

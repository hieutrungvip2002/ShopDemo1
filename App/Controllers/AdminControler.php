<?php
require_once __DIR__ . '/../Model/AdminModel.php';

class AdminController
{
    public function index()
    {
        include __DIR__ . '/../Views/Admin/index.php';
    }
}

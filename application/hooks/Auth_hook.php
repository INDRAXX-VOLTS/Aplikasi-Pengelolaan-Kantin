<?php

class Auth_hook
{
    public function check_permission()
    {
        // Cek apakah user memiliki hak akses ke halaman yang sedang diakses
        if (!$this->check_permission()) {
            // Jika tidak, redirect ke halaman lain
            redirect('home');
        }
    }
}

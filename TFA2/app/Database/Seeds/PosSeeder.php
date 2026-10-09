<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PosSeeder extends Seeder
{
    public function run()
    {
        $createdAt = date('Y-m-d H:i:s');

        $this->db->table('customers')->insertBatch([
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@email.com', 'phone' => '09171234567', 'created_at' => $createdAt],
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@email.com', 'phone' => '09181234567', 'created_at' => $createdAt],
            ['full_name' => 'Carlo Reyes', 'email' => 'carlo.reyes@email.com', 'phone' => '09191234567', 'created_at' => $createdAt],
            ['full_name' => 'Angela Garcia', 'email' => 'angela.garcia@email.com', 'phone' => '09201234567', 'created_at' => $createdAt],
            ['full_name' => 'Mark Villanueva', 'email' => 'mark.villanueva@email.com', 'phone' => '09211234567', 'created_at' => $createdAt],
        ]);

        $this->db->table('users')->insertBatch([
            ['username' => 'admin', 'full_name' => 'Admin User', 'created_at' => $createdAt],
            ['username' => 'cashier01', 'full_name' => 'Lara Mendoza', 'created_at' => $createdAt],
            ['username' => 'manager01', 'full_name' => 'Paolo Cruz', 'created_at' => $createdAt],
            ['username' => 'staff01', 'full_name' => 'Nina Ramos', 'created_at' => $createdAt],
            ['username' => 'staff02', 'full_name' => 'Ken Flores', 'created_at' => $createdAt],
        ]);
    }
}

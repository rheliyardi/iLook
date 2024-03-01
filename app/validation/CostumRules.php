<?php

namespace App\Validation;

class CostumRules
{
     // Callback function
     public function checkHargaValid(string $str, string $field, array $data): bool
     {
        // Ambil nilai harga jual dan harga beli dari data
        $harga_jual = $data['harga_jual'];

        // Periksa apakah harga jual lebih besar atau sama dengan harga beli
        if ($harga_jual >=0) {
            // Harga jual valid, kembalikan true
            return true;
        } else {
            // Harga jual lebih kecil dari harga beli, kembalikan false
            return false;
        }
     }
}
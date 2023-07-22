<?php 

namespace App\Enums;

enum UserRoleEnum: string {

    case ADMIN = 'admin';
    case USER = 'user';

    function isAdmin() : bool {
        return $this === self::ADMIN;
    }
    
    function isUser() : bool {
        return $this === self::USER;
    }
}

?>
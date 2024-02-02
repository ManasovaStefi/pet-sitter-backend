<?php

namespace App\Enums;

enum UserRole: int
{
    case ADMIN = 0;
    case WALKER = 1;
    case SITTER = 2;
}

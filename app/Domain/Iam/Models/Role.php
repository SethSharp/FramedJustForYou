<?php

namespace App\Domain\Iam\Models;

use Codinglabs\Roles\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Role extends \Codinglabs\Roles\Role
{
}
<?php

namespace App\Models;

use Cryslo\Core\SaltHash;
use Illuminate\Database\Eloquent\Model;
use \App\Enums\UserAttributes;

class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = UserAttributes::_TABLE;

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->getAttribute(UserAttributes::USERNAME);
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->getAttribute(UserAttributes::USERNAME);
    }

    public function isPasswordValid($password)
    {
        //todo
    }

    public function setPassword($password)
    {
        $saltHash = SaltHash::generate($password);

        $this->setAttribute(UserAttributes::SALT, $saltHash['salt']);
        $this->setAttribute(UserAttributes::PASSWORD, $saltHash['hash']);
    }
}

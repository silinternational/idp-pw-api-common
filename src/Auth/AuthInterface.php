<?php
namespace Sil\IdpPw\Common\Auth;

interface AuthInterface
{
    /**
     * @param yii\web\Request|null $request
     * @return User
     * @throws InvalidLoginException
     */
    public function login(yii\web\Request $request = null);

    /**
     * @param User|null $user
     * @return boolean
     */
    public function logout(User $user = null);
}
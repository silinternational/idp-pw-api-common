<?php
namespace Sil\IdpPw\Common\Auth;

use yii\web\Request;

interface AuthnInterface
{
    /**
     * @param \yii\web\Request|null $request
     * @return User|null If null is returned the user was redirected to IdP
     * @throws InvalidLoginException
     */
    public function login(Request $request = null);

    /**
     * @param User|null $user
     * @return void
     */
    public function logout(User $user = null);
}
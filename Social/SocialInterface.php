<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 22.07.16
 * Time: 15:37
 */

namespace UserBundle\Social;


interface SocialInterface
{
    /**
     * @inheritdoc Получение токена
     * @return mixed
     */
    public function getToken();

    public function getUser();

    static public function auth();
}
<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 22.07.16
 * Time: 15:37
 */

namespace UserBundle\Social;

/**
 * @author snls aka LookyAlba
 */
interface SocialInterface
{
    /**
     * @inheritdoc Получение токена
     * @return mixed
     */
    public function getToken();

    /**
     * @inheritdoc Получение данных пользователя
     */
    public function getUser();

    /**
     * @inheritdoc Авторизация 
     */
    static public function auth();
}
<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 22.07.16
 * Time: 15:37
 */

namespace UserBundle\Social;

<<<<<<< HEAD
/**
 * @author snls aka LookyAlba
 */
=======

>>>>>>> origin/master
interface SocialInterface
{
    /**
     * @inheritdoc Получение токена
     * @return mixed
     */
    public function getToken();

<<<<<<< HEAD
    /**
     * @inheritdoc Получение данных пользователя
     */
    public function getUser();

    /**
     * @inheritdoc Авторизация 
     */
=======
    public function getUser();

>>>>>>> origin/master
    static public function auth();
}
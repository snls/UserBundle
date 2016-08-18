<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 22.07.16
 * Time: 15:46
 */

namespace UserBundle\Social;

use Symfony\Component\HttpKernel\Exception\HttpException;
use UserBundle\Social\SocialInterface as SocialI;

class Social implements SocialFactoryInterface
{
    private $social;
    private $token;


    public function __construct(SocialI $social)
    {
        // получаем данных с соц. сети
        $this->social = $social;
        
        // делаем запрос и получаем токен
        $this->activation();
    }

    /**
     * @inheritdoc Запуск модуля работы с API соц. сетей
     */
    private function activation()
    {
        if(!($this->token = $this->social->getToken())) {
            throw new HttpException(404, "Ошибка при попытке запроса данных (не был получен token)!\n\nПовторите попытку авторизации...");
        } else {
            $this->social->token = $this->token;
        }
    }

    /**
     * @inheritdoc Получение пользователя
     */
    public function getUser()
    {
        if($user = $this->social->getUser()) {
            return $user;
        } else {
            throw new HttpException(404, "Ошибка при получении данных пользователя!");
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 22.07.16
 * Time: 16:01
 */

namespace UserBundle\Social;

/**
<<<<<<< HEAD
 * @inheritdoc данные необходимые для работы с API соц. сетей
 * @package UserBundle\Social
 * @author snls aka LookyAlba
=======
 *
 * Class SocialData данные необходимые для работы с API соц. сетей
 * @package UserBundle\Social
>>>>>>> origin/master
 */
trait SocialData
{
    /**
     * @var $client_id
     * @title идентификатор приложения
     */
    public $client_id;

    /**
     * @var $client_secret
     * @title ключ приложения
     */
    protected $client_secret;

    /**
     * @var $redirect_uri
     * @title ссылка модуля, куда перенаправляются запросы с API
     */
    protected $redirect_uri;

    /**
     * @var $token_get_url
     * @title ссылка для получения токена API
     */
    protected $token_get_url;

    /**
     * @var $api_url
     * @title ссылка для связи с методами API
     */
    protected $api_url;

    /**
     * @var $fieldsUser
     * @title поля пользователя, которые необходимо получить через API
     */
    protected $fieldsUser;

    /**
     * @var $token
     * @title Токен
     */
    public $token;

    /**
     * @var $code
     */
    protected $code;
}
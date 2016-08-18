<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 22.07.16
 * Time: 15:47
 */

namespace UserBundle\Social;

use UserBundle\Social\SocialInterface as SocialI;
use UserBundle\Social\SocialData as SocialD;

class VK implements SocialI
{
    use SocialD;

    static public $self_client_id = 5574702;
    static private $self_auth_url = 'http://oauth.vk.com/authorize';
    static private $self_redirect_uri = "http://worldmess.ru/auth/vk";

    public function __construct()
    {
        $this->client_id = self::$self_client_id;
        $this->client_secret = "z3QFVXJQxyHdrMQ9hoFm";

        $this->redirect_uri = self::$self_redirect_uri;

        $this->token_get_url = 'https://oauth.vk.com/access_token';
        $this->api_url = 'https://api.vk.com/method/';

        $this->fieldsUser = 'uid,city,country,first_name,last_name,nickname,personal,screen_name,sex,bdate';
    }

    public function getToken()
    {
        return json_decode(file_get_contents(
            $this->token_get_url . "?" . urldecode(
                http_build_query($this->getTokenParams())
            )), true
        );
    }

    public function getUser()
    {
        return json_decode(file_get_contents(
            $this->api_url . 'users.get' . '?' . urldecode(
                http_build_query($this->getUserParams())
            )), true
        );
    }

    public function getCountry()
    {

    }

    /**
     * @inheritdoc Получение параметров для пользователя
     */
    private function getUserParams()
    {
        return [
            'uids'         => $this->token['user_id'],
            'fields'       => $this->fieldsUser,
            'access_token' => $this->token['access_token']
        ];
    }

    /**
     * @inheritdoc Получение параметров для токена
     * @return array
     */
    private function getTokenParams()
    {
        return [
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'code' => $this->code,
            'redirect_uri' => $this->redirect_uri
        ];
    }

    /**
     * @inheritdoc Получение параметров для авторизации
     * @return array
     */
    static private function getParamsAuthorization()
    {
        return [
            'client_id'     => self::$self_client_id,
            'redirect_uri'  => self::$self_redirect_uri,
            'response_type' => 'code'
        ];
    }

    /**
     * @inheritdoc Авторизация
     * @return string
     */
    static public function auth()
    {
        return json_decode(file_get_contents(self::$self_auth_url . "?" . urldecode(http_build_query(self::getParamsAuthorization()))));
    }
}
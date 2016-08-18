<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 22.07.16
 * Time: 15:49
 */

namespace UserBundle\Social;

use UserBundle\Social\SocialInterface as SocialI;
use UserBundle\Social\SocialData as SocialD;

<<<<<<< HEAD
/**
 * @inheritdoc Данные для ФБ
 * @author snls aka LookyAlba
 */
=======
>>>>>>> origin/master
class FB implements SocialI
{
    use SocialD;

    static private $self_client_id = 283991655310869;
    static private $self_auth_url = 'https://www.facebook.com/dialog/oauth';
    static private $self_redirect_uri = "http://worldmess.ru/auth/fb";

    public function __construct()
    {
        $this->client_id = self::$self_client_id;
        $this->client_secret = "a17ba602c7289249864067cac684cd38";

        $this->redirect_uri = self::$self_redirect_uri;

        $this->token_get_url = 'https://graph.facebook.com/oauth/access_token';
        $this->api_url = 'https://graph.facebook.com/me';

        $this->fieldsUser = 'uid,city,country,first_name,last_name,nickname,personal,screen_name,sex,bdate';
    }

    public function getToken()
    {
        $token = NULL;
        parse_str(file_get_contents($this->token_get_url . '?' . http_build_query($this->getTokenParams())), $token);
        return $token;
    }

    public function getUser()
    {
        $userInfo = json_decode(file_get_contents($this->
            . '?' . urldecode(http_build_query($this->getUserParams()))), true);
        return isset($userInfo['id']) ? $userInfo : NULL;
    }
    
    /**
     * @inheritdoc Получение параметров для пользователя
     */
    private function getUserParams()
    {
        return [
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
            'response_type' => 'code',
            'scope'         => 'email,user_birthday'
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
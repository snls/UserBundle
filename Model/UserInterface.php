<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 19.08.16
 * Time: 11:38
 */

namespace UserBundle\Model;


interface UserInterface
{
    /**
     * @inheritdoc Получение идентификатора пользователя
     * @return integer
     */
    public function getId();

    /**
     * @inheritdoc Получение логина пользователя
     * @return string
     */
    public function getUsername();

    /**
     * @inheritdoc Получение почтового адресса
     * @return mixed
     */
    public function getEmail();

    /**
     * @inheritdoc Получение пароля в обертке
     * @return string
     */
    public function getPassword();

    /**
     * @inheritdoc Получение даты создания пользователя
     * @return string
     */
    public function getCreatedAt();
}
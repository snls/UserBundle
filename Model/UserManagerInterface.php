<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 19.08.16
 * Time: 11:20
 */

namespace UserBundle\Model;


interface UserManagerInterface
{
    /**
     * @inheritdoc Удаление пользователя по полученному объекту
     * @param UserInterface $user
     * @return mixed
     */
    public function deleteUser(UserInterface $user);

    /**
     * @inheritdoc Поиск пользователя по критериям
     * @param array $criteria
     * @return mixed
     */
    public function findUserBy(array $criteria);

    /**
     * @inheritdoc Получение списка всех пользователей
     * @return mixed
     */
    public function findUsers();
    /**
     * @inheritdoc Обновление пользователя
     * @param UserInterface $user
     * @return mixed
     */
    public function updateUser(UserInterface $user);

    /**
     * @inheritdoc Обовление пароля для пользователя
     * @param UserInterface $user
     * @return mixed
     */
    public function updatePasswordForUser(UserInterface $user);

    /**
     * @inheritdoc Получение класса пользователя (UserInterface)
     * @return mixed
     */
    public function getClass();
}
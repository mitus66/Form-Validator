<?php


class FormValidator
{
    public $email;
    public $password;
    public $passwordConfirm;
    public $phone;
    public $url;
    public $name;

    // проверка поля на то, что введен email
    public function checkEmail($email)
    {
        //
        $this->email = $email;

        // удаляем пустые символы
        $$email = trim( $email);

        // защищаемся от спецсимволов
        $email = htmlspecialchars($email);

        // проверка с помощью регулярного выражения
        if (preg_match(
            "^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$",
            $email)) {
            return true;
        }

    }

    // проверка поля на то, что введен пароль (строка длинной более 7 символов)
    public function checkPassword($password)
    {

        $this->password = $password;

        // удаляем пустые символы
        $password = trim( $password);

        // защищаемся от спецсимволов
        $password = htmlspecialchars($password);

        // если пароль - сторока и его длинна больше 7, - истина
        if ((is_string($password)) && (strlen($password) > 7)) {
            return true;
        }
    }

    // проверка поля на то, что введено одно и то же значение
    public function checkPasswordConfirm($password, $passwordConfirm)
    {
        $this->password = $password;
        $this->passwordConfirm = $passwordConfirm;

        // удаляем пустые символы
        $password = trim( $password);
        $passwordConfirm = trim( $passwordConfirm);

        // защищаемся от спецсимволов
        $password = htmlspecialchars($password);
        $passwordConfirm = htmlspecialchars($passwordConfirm);

        if ($password === $passwordConfirm) {
            return true;
        }

    }

    // проверка поля на то, что введен телефон
    public function checkPhone($phone)
    {

        $this->phone = $phone;

        // удаляем пустые символы
        $phone = trim( $phone);

        // защищаемся от спецсимволов
        $phone = htmlspecialchars($phone);

        // проверка с помощью регулярного выражения
        if (preg_match(
            "^\+\d{2}\(\d{3}\)\d{3}-\d{2}-\d{2}$",
            $phone)) {
            return true;
        }
    }


    // проверка поля, на то, что введен именно интернет-адрес
    public function checkUrl($url)
    {
        $this->url = $url;

        // удаляем пустые символы
        $url = trim( $url);

        // защищаемся от спецсимволов
        $url = htmlspecialchars($url);

        // проверка с помощью регулярного выражения
        if (preg_match(
            "^((https?|ftp)\:\/\/)?([a-z0-9]{1})((\.[a-z0-9-])|([a-z0-9-]))*\.([a-z]{2,6})(\/?)$",
            $url)) {
            return true;
        }
    }

    // проверка данных, что они строка и ее длина больше 1, например "Ян"
    public function checkName($name)
    {
        $this->name = $name;

        // удаляем пустые символы
        $name = trim( $name);

        // защищаемся от спецсимволов
        $name = htmlspecialchars($name);

        // если имя - сторока и его длинна больше 1, - истина
        if ((is_string($name)) && (strlen($name) > 1)) {
        return true;
        }
    }

}

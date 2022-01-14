# php-beget-generated-client

Тестирование сгенерированного кода на из openapi спецификации, которая была сгенерированна на основе proto публичного API LTD-Beget 
Реализованный клиент основан на 2 независимых публичный API

https://github.com/LTD-Beget/auth
https://github.com/LTD-Beget/vps

## HOW TO USE
>
> scripts/generate-clients.sh
>
> composer update
> 
> php client.php -l "beget_login" -p "beget_password"


Тестовый клиент выполняет следующие действия

1 Запрос на авторизацию пользователя (POST api.beget.com/v1/auth)

1.1 Запрос с неверными данными

1.2 Запрос с пустым Логином

1.2 Запрос с правильными данными

- Проверяем POST запрос с не пустым BODY
- Проверяем корректное получения ошибок типа ENUM - EMPTY_LOGIN и INCORRECT_CREDENTIALS
- Проверяем передачу скаляров в запросе и получение в ответе,
- Проверяем корректное получение oneOf в запросе

Далее операции с Полученным JWT токеном

2 Выполняем запрос на получение списка VPS (GET api.beget.com/v1/vps/server/list)
- Проверяем GET запрос без параметров
- Проверяем получения repeated Message

3 Выполняем запрос на получение информации конкретной VPS (GET api.beget.com/v1/vps/server/{id})

3.1 Запрос с несуществующим ID для пользователя

3.2 Запрос с существующим ID для пользователя

- Проверяем GET запрос с параметрами в PATH
- Проверяем получение не repeated Message
- Проверяем получение 404


4 Выполняем запрос на получение досупных вариантов конфигурации Vps (GET api.beget.com/v1/vps/server/v1/vps/configuration)
- Проверяем что корректно отрабатывает Message определенный в message-е а не вынесенный в structures
- Проверяем два repeated Message в ответе

5 Выполняем запрос на создание VPS (POST api.beget.com/v1/vps/server)

5.1 Оптравляем запрос с некорректными данными

5.2 Отправляем запрос с корректными данными

- Проверяем запрос со сложным заполнением
- Проверем корректный ответ с вложенными oneOf 1 в другой
- Проверяем oneOf в запросе
- проверяем repeated скаляры в запросе
- проверяем repeated Message в запросе с заполнением (SoftwareInstallInfo)
- проверяем repeated Message в запросе без заполнения (PrivateNetworkInfo)

6 Выполняем запрос на получение о созданной VPS (GET api.beget.com/v1/vps/server/{id})
- Проверяем успешность прохождения предыдущего шага 5

7 Выполняем запрос на сборс пароля для VPS (PUT api.beget.com/v1/vps/{id}/password)
- Проверяем PUT запрос c пустым BODY с параметром в PATH

8 Выполняем запрос на изменения информации для VPS (PUT api.beget.com/v1/vps/server/{id}/info)
- Проверяем PUT запрос заполненным BODY c параметром в PATH

9 Выполняем запрос на перезагрузку VPS (POST api.beget.com//v1/vps/server/{id}/reboot)
- Проверяем POST запрос с пустым BODY параметром в PATH

10 Выполняем запрос на переустановку OC (POST api.beget.com/v1/vps/server/{id}/reinstall )
- Проверяем POST запрос с данными в BODY n параметром в PATH

11 Выполняем запрос на добавление  ssh ключа (POST api.beget.com/v1/vps/sshKey)
- Проверяем что в рамках одного API корретно работают запросы из разных протофайлов

12 Выполняем запрос на добавления ssh ключа к VPS (POST api.beget.com/v1/vps/{id}/sshKey/{ssh_key_id})
- Проверяем корректную отработку запроса с более чем одним параметром в PATH

13 Выполняем запрос на удаление ssh ключа из VPS (DELETE api.beget.com/v1/vps/{id}/sshKey/{ssh_key_id})
- Проверяем отработку DELETE запроса с более чем одним параметром в PATH

14 Выполняем запрос на удаление ssh ключа (DELETE api.beget.com/v1/vps/sshKey/{id})
- Проверяем отработку DELETE запроса с параметром в PATH

15 Выполняем запрос на удаление VPS (POST api.beget.com/v1/vps/server/{id}/remove)
- Логическое завершение жизненного цикла теста

16 Запрос выход пользователя пользователя (POST api.beget.com/v1/auth/logout)
- Проверяем POST запрос с пустым BODY без параметров

17 Выполняем запрос после выхода на получения списка VPS (GET api.beget.com/v1/vps/server/list)
- Проверяем корректный ответ на запрос с невалидным токеном
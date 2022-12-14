# Тестовое задание на позицию php разработчика
https://github.com/fugr-ru/php-laravel
***
Результат выполнения задания нужно будет оформить здесь же, на гитхабе. В качестве ответа не нужно присылать никаких ZIP-архивов и наборов файлов. Все ваши ответы должны быть оформлены на https://github.com/ или на https://bitbucket.org/ Присылаете ссылку на ваш репозиторий в форму https://24.future-group.ru/pub/form/4/xnof82/.

Если у вас еще нет аккаунта на github, то это хороший повод его завести.

Если есть вопросы, вы всегда их можете задать в чате https://t.me/futuregroup_php_chat

ЕСЛИ ВЫСЫЛАЕТЕ ПОДОБНОЕ ЗАДАНИЕ, ТО ПОДГОТОВЬТЕ ОПИСАНИЕ ФУНКЦИОНАЛА ДЛЯ ПРОВЕРЯЮЩЕГО.

Срок 5 рабочих дней с момента получения задания, срок проверки — 5 рабочих дней. Мы отправим ответ на email, если ответа нет, проверьте спам.

## Задание
***
Разработать REST API для записной книжки. Примерная структура методов:
```shell
1.1. GET /api/v1/notebook/
1.2. POST /api/v1/notebook/
1.3. GET /api/v1/notebook/<id>/
1.4. POST /api/v1/notebook/<id>/
1.5. DELETE /api/v1/notebook/<id>/
```
Поля для POST записной книжки:
```shell
1. ФИО (обязательное)
2. Компания
3. Телефон (обязательное)
4. Email (обязательное)
5. Дата рождения
6. Фото
```
Нужна возможность выводить информацию в списке по странично

Swagger для отображения методов api (https://swagger.io/)

Так же напишите нам, как вы тестировали результат своей работы. Какие используете инструменты и как вы осуществляете тестирование.

Дополнительным плюсом будет: Финальный билд приложения должен быть запускаться из Docker контейнера (хотя бы с минимальной конфигурацией)

***
REST API notebook
***

| **method** 	 |    **route**      	    | **name(route)** 	  |    **Controller**       	    |
|:------------:|:----------------------:|:------------------:|:----------------------------:|
|   GET    	   |  api/v1/notebook   	   | notebook.index  	  | NoteBookController@index  	  |
|  POST    	   |  api/v1/notebook   	   | notebook.store  	  | NoteBookController@store  	  |
|   GET    	   | api/v1/notebook/{id} 	 |  notebook.show  	  |  NoteBookController@show  	  |
| PUT/PATCH 	  | api/v1/notebook/{id} 	 | notebook.update 	  | NoteBookController@update 	  |
|  DELETE   	  | api/v1/notebook/{id} 	 | notebook.destroy 	 | NoteBookController@destroy 	 |

***
File for swagger

[File from GitHub repo](https://github.com/AslanAV/future-test/blob/main/resources/swagger/future_test.yaml)
***
Swagger UI
```shell
http://0.0.0.0:80
```
***

[Тесты API](https://github.com/AslanAV/future-test/blob/main/tests/Feature/NotebookTest.php)

***


## Setup project local

```shell
make setup
```

### Start server local
```shell
make start
```

***

## Setup project docker-compose
```shell
make compose-build
```

### Start server docker-compose
```shell
make compose-start-d
```

### Stop server docker-compose
```shell
make compose-down
```

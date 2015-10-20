# CodeIgniter Simple Module

This is a simple module system using [CodeIgniter packages](https://www.codeigniter.com/user_guide/libraries/loader.html#application-packages). No HMVC.

## Folder Structure

```
codeigniter/
├── application/
│   ├── controllers/
│   │   └── welcome -> ../modules/welcome/controllers/
│   └── modules/
│       └── welcome/
│           ├── controllers/
│           ├── models/
│           └── views/
├── composer.json
├── composer.lock
├── public/
│   └── index.php
└── vendor/
    └── codeigniter/
        └── framework/
            └── system/
```

### How to Run (PHP 5.4 or later)

~~~
$ cd /path/to/codeigniter
$ php -S localhost:8000 -t public/ bin/router.php
~~~

Access `http://localhost:8080/welcome`.

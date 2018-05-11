安装
---
执行命令
1. `make setup`
2. `make startup-api`
3. `make startup-frontend`
4. `make startup-backend`

目录结构
---

```
.
├── LICENSE.md
├── Makefile
├── README.md
├── api
│   ├── config
│   │   ├── main.php
│   │   └── params.php
│   ├── controllers
│   │   └── UserController.php
│   ├── runtime
│   │   └── logs
│   │       └── app.log
│   ├── web
│   │   └── index.php
│   └── yii
├── backend
│   ├── config
│   │   ├── main.php
│   │   └── params.php
│   ├── controllers
│   │   └── SiteController.php
│   ├── models
│   ├── views
│   ├── web
│   │   └── index.php
│   └── yii
├── common
│   ├── config
│   │   ├── main.php
│   │   └── namespaces.php
│   └── models
│       └── User.php
├── composer.json
├── composer.lock
├── composer.phar
├── frontend
│   ├── config
│   │   ├── main.php
│   │   └── params.php
│   ├── controllers
│   │   └── SiteController.php
│   ├── models
│   ├── views
│   ├── web
│   │   └── index.php
│   └── yii
├── runtime
│   └── logs
│       └── app.log
└── vendor


```

访问
---

- api
  - http://localhost:3000/users
- frontend
  - http://localhost:3001/site/index
- backend 
  - http://localhost:3002/site/index
  
对比
---

[simple tree](https://github.com/guobinqiu/simple_tree)

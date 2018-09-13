## 依赖

### redis服务
```bash
$ redis-server
```

### 极验验证码
步骤很简单，官网注册[http://www.geetest.com/](http://www.geetest.com/)

获取到id和key填入`.env`文件
```
GEETEST_ID=你的极验项目id
GEETEST_KEY=你的极验项目key
```

## 使用
```bash
# 安装依赖包，生产环境命令请加上 --no-dev
$ composer update

# 给予目录相应权限
$ chmod -R 777 storage bootstrap public/uploads

# 此处使用极验验证码
$ cp .env.example .env

# 生成项目key
$ php artisan key:generate

# 迁移数据库
$ php artisan migrate

# 填充初始数据
$ php artisan db:seed --class=DatabaseSeeder

# (可选)迁移并填充初始数据
$ php artisan migrate --seed
```

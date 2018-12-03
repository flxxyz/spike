## 依赖
请先查看使用帮助

### redis服务
后台使用的缓存数据存储在redis
```bash
# 开启redis服务器
$ redis-server
```

### 极验验证码
步骤很简单，官网注册[http://www.geetest.com/](http://www.geetest.com/)

获取到id和key填入`.env`文件
```
GEETEST_ID=你的极验项目id
GEETEST_KEY=你的极验项目key
```

### 数据库
将远程数据库服务代理到本地使用
```bash
$ ssh -N -f -L 本地端口:127.0.0.1:3306 远程服务器用户名@远程服务器地址
```
或直接修改`.env`文件

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

### IDE插件支持
**Laravel Plugin** [https://plugins.jetbrains.com/plugin/7532-laravel-plugin](https://plugins.jetbrains.com/plugin/7532-laravel-plugin)

**LaravelStorm** [https://plugins.jetbrains.com/plugin/9795-laravelstorm](https://plugins.jetbrains.com/plugin/9795-laravelstorm)

**Laravel lnsight** [https://plugins.jetbrains.com/plugin/9730-laravel-insight](https://plugins.jetbrains.com/plugin/9730-laravel-insight)

**.env files support** [https://plugins.jetbrains.com/plugin/9525--env-files-support](https://plugins.jetbrains.com/plugin/9525--env-files-support)

**PHP Annotations** [https://plugins.jetbrains.com/plugin/7320-php-annotations](https://plugins.jetbrains.com/plugin/7320-php-annotations)

**thrift-support** [https://plugins.jetbrains.com/plugin/7331-thrift-support](https://plugins.jetbrains.com/plugin/7331-thrift-support)

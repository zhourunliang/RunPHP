<?php

/**
* runphp架架核心
*/
namespace run;

class Base
{
    protected $config = [];
    
    public  function __construct()
    {
        // 加载配置文件
        $this->config = require(APP_PATH . 'config/config.php');;
    }

    public function start()
    {
        spl_autoload_register(array($this, 'loadClass'));
        $this->setDbConfig();
        $this->route();
    }


    public function route()
    {

        $controllerName = $this->config['DEFAULT_CONTROLLER'];
        $actionName = $this->config['DEFAULT_ACTION'];

        $original_url = $_SERVER['REQUEST_URI'];
        //取url
        $position = strpos($original_url, '?');
        $url = $position === false ? $original_url : substr($original_url, 0, $position);

        // 删除前后的“/”
        $url = trim($url, '/');

        $urlArray = explode('/',$url); 
       if ($url) {
            // 获取控制器名
            $controllerName = ucfirst($urlArray[0]);
            $actionName = $urlArray[1];
       }

        //取url参数
        $params = $position === false ? '' : substr($original_url, $position+1, strlen($original_url));

        if ($params) {
            $paramsArray = $this->convertUrlQuery($params);
        }else{
            $paramsArray = array();
        }
        // print_r($paramsArray);
        $controller = $controllerName . 'Controller';
        // echo $controller;
        // 
        $dispatch = new $controller($controllerName, $actionName);
        call_user_func_array(array($dispatch, $actionName), $paramsArray);
    
    }


    function convertUrlQuery($query)
    {
      $queryParts = explode('&', $query);
      $params = array();
      foreach ($queryParts as $param) {
        $item = explode('=', $param);
        $params[$item[0]] = $item[1];
      }
      return $params;
    }

    // 自动加载控制器和模型类 
    public static function loadClass($class)
    {
    
        $frameworks = __DIR__ . '/' . $class . '.php';
        $controllers = APP_PATH . 'application/controller/' . $class . '.php';
        $models = APP_PATH . 'application/model/' . $class . '.php';

        if (file_exists($frameworks)) {
            // 加载框架核心类
            include $frameworks;
        } elseif (file_exists($controllers)) {
            // 加载应用控制器类
            include $controllers;
        } elseif (file_exists($models)) {
            //加载应用模型类
            include $models;
        } else {
            // 错误代码
        }
    }

    public function setDbConfig()
    {
        if ($this->config['DB_USE']) {
            define('DB_HOST', $this->config['DB_HOST']);
            define('DB_NAME', $this->config['DB_NAME']);
            define('DB_USER', $this->config['DB_USER']);
            define('DB_PASS', $this->config['DB_PWD']);
        }
    }


}
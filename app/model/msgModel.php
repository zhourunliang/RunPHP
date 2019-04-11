<?php

/**
 * 用户Model
 */
class MsgModel extends Model
{
    /**
     * 自定义当前模型操作的数据库表名称，
     * 如果不指定，默认为类名称的小写字符串，
     * 这里就是 msg 表
     * @var string
     */
    protected $table = 'msg';

}
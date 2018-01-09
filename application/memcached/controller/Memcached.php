<?php
namespace app\memcached\controller;
use think\Cache;

class Memcached  extends Cache
{
    public function index(){
        Cache::set('username','ergou');
        echo Cache::get('username');
    }
}

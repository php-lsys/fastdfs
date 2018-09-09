<?php
namespace LSYS\FastDFS;
/**
 * @method \LSYS\FastDFS fastdfs()
 */
class DI extends \LSYS\DI{
    /**
     * @return static
     */
    public static function get(){
        $di=parent::get();
        !isset($di->fastdfs)&&$di->fastdfs(new \LSYS\DI\SingletonCallback(function(){
            return new \LSYS\FastDFS();
        }));
        return $di;
    }
}
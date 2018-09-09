<?php
/**
 * lsys redis
 * @author     Lonely <shan.liu@msn.com>
 * @copyright  (c) 2017 Lonely <shan.liu@msn.com>
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
namespace LSYS;
class FastDFS extends \FastDFS{
    protected $_connect_server;
    /**
     * @throws Exception
     */
    public function connect_server_from_tracker($re_connect=false){
        if ($this->_connect_server&&!$re_connect)return $this->_connect_server;
        $tracker = $this->tracker_get_connection();
        if (!$tracker||!$this->active_test($tracker)){
            throw new Exception('FASTDFS[active]:'.$this->get_last_error_info(),$this->get_last_error_no());
        }
        $this->_connect_server=$this->connect_server($tracker['ip_addr'], $tracker['port']);
        if (!$this->_connect_server){
            throw new Exception('FASTDFS[connect]:'.$this->get_last_error_info(),$this->get_last_error_no());
        }
        return $this->_connect_server;
    }
}
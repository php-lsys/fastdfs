<?php
/**
 * lsys redis
 * @author     Lonely <shan.liu@msn.com>
 * @copyright  (c) 2017 Lonely <shan.liu@msn.com>
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
namespace LSYS;
class FastDFS extends \FastDFS{
    /**
     * @throws Exception
     */
    public function connect_server_from_tracker($re_connect=false){
        static $connect_server_bak;
        if ($connect_server_bak&&!$re_connect)return $connect_server_bak;
        $tracker = $this->tracker_get_connection();
        if (!$tracker||!$this->active_test($tracker)){
            throw new Exception('FASTDFS[active]:'.$this->get_last_error_info(),$this->get_last_error_no());
        }
        $connect_server_bak=$this->connect_server($tracker['ip_addr'], $tracker['port']);
        if (!$connect_server_bak){
            throw new Exception('FASTDFS[connect]:'.$this->get_last_error_info(),$this->get_last_error_no());
        }
        return $connect_server_bak;
    }
}
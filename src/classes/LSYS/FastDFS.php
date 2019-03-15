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
    public function connect_server_from_tracker($re_connect=false,$try=3){
        static $connect_server_bak;
        if ($connect_server_bak&&!$re_connect)return $connect_server_bak;
        if($try<=0)$try=1;
        $code=$msg=NULL;
        $errors=array();
        while ($try-->0) {
            $tracker = $this->tracker_get_connection();
            if (!is_array($tracker)){
                $code=$this->get_last_error_no();
                $msg=$this->get_last_error_info();
                $param=array(
                    ":msg"=>$msg,
                    ":code"=>$code
                );
                $errors[]=strtr("FASTDFS[get] :msg[:code]", $param);
                continue;
            }
            if (!$this->active_test($tracker)){
                $code=$this->get_last_error_no();
                $msg=$this->get_last_error_info();
                $param=array(
                    ':ip'=>$tracker['ip_addr'],
                    ':port'=>$tracker['port'],
                    ":msg"=>$msg,
                    ":code"=>$code
                );
                $errors[]=strtr("FASTDFS[test] :msg[:code] on[:ip::port]",$param);
                continue;
            }
            $connect_server_bak=$this->connect_server($tracker['ip_addr'], $tracker['port']);
            if (!$connect_server_bak){
                $code=$this->get_last_error_no();
                $msg=$this->get_last_error_info();
                $param=array(
                    ':ip'=>$tracker['ip_addr'],
                    ':port'=>$tracker['port'],
                    ":msg"=>$msg,
                    ":code"=>$code
                );
                $errors[]=strtr("FASTDFS[connect] :msg[:code] on[:ip::port]",$param);
                continue;
            }
            return $connect_server_bak;
        }
        $msg=array_pop($errors);
        foreach ($errors as $v) \LSYS\Loger\DI::get()->loger()->add(\LSYS\Loger::NOTICE, $v);
        throw new Exception($msg,$code);
    }
}
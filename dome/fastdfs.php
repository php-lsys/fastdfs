<?php
include_once __DIR__."/../vendor/autoload.php";
$fastdfs=\LSYS\FastDFS\DI::get()->fastdfs();
$fastdfs->connect_server_from_tracker();
var_dump(is_file("a.png"));
$fileinfo=$fastdfs->storage_upload_by_filename("a.png","png",[],"group1");
var_dump($fileinfo);
var_dump($fastdfs->get_last_error_info());
var_dump($fastdfs->get_last_error_no());
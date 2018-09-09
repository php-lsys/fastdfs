<?php
class FastDFS{
        public function __construct($config_index=null,$bMultiThread=null){
            
        }
        public function __destruct(){
        }
        
        public function tracker_get_connection(){
        }
        
        public function tracker_make_all_connections(){
        }
        
        public function tracker_close_all_connections(){
        }
        
        public function active_test($server_info){
        }
        
        public function connect_server($ip_addr,$port){
        }
        
        public function disconnect_server($server_info){
        }
        
        public function tracker_list_groups(
            $group_name=null,
            $tracker_server=null
       ){
        }
        
        public function tracker_query_storage_store(
            $group_name=null,$tracker_server=null
       ){
        }
        
        public function tracker_query_storage_store_list(
            $group_name=null, 
            $tracker_server=null
        ){
        }
        
        public function tracker_query_storage_update(
            $group_name,
            $remote_filename,
            $tracker_server=null
       ){
        }
        
        public function tracker_query_storage_fetch(
            $group_name,
            $remote_filename,
            $tracker_server=null
       ){
        }
        
        public function tracker_query_storage_list(
            $group_name,
            $remote_filename,
            $tracker_server=null
       ){
        }
        
        public function tracker_query_storage_update1(
                $file_id,
                $tracker_server=null
       ){
        }
        
        public function tracker_query_storage_fetch1(
                $file_id,
                $tracker_server=null
       ){
        }
        
        public function tracker_query_storage_list1(
                $file_id,
                $tracker_server=null
       ){
        }
        
        public function tracker_delete_storage(
                $group_name,
                $storage_ip
       ){
        }
        
        public function storage_upload_by_filename(
                $local_filename,
                $file_ext_name=null,
                $meta_list=null,
                $group_name=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_upload_by_filename1(
                $local_filename,
                $file_ext_name=null,
                $meta_list=null,
                $group_name=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_upload_by_filebuff(
                $file_buff,
                $file_ext_name=null,
                $meta_list=null,
                $group_name=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_upload_by_filebuff1(
                $file_buff,
                $file_ext_name=null,
                $meta_list=null,
                $group_name=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_upload_by_callback(
                $callback_array,
                $file_ext_name=null,
                $meta_list=null,
                $group_name=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_upload_by_callback1(
                $callback_array,
                $file_ext_name=null,
                $meta_list=null,
                $group_name =null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_append_by_filename(
                $local_filename,
                $group_name,
                $appender_filename,
                $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_append_by_filename1(
                $local_filename,
                $appender_file_id,
                $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_append_by_filebuff(
                $file_buff,
                $group_name,
                $appender_filename,
                $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_append_by_filebuff1(
                $file_buff,
                $appender_file_id,
                $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_append_by_callback(
                $callback_array,
                $group_name,
                $appender_filename,
                $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_append_by_callback1(
                $callback_array,
                $appender_file_id,
                $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_modify_by_filename(
                $local_filename,
                $group_name,
                $appender_filename,
                $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_modify_by_filename1(
                $local_filename,
                $appender_file_id,
                $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_modify_by_filebuff(
                $file_buff,
                $group_name,
                $appender_filename,
                $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_modify_by_filebuff1(
                $file_buff,
                $appender_file_id,
                $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_modify_by_callback(
                $callback_array,
                $group_name,
                $appender_filename,
                $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_modify_by_callback1(
                $callback_array,
                $appender_file_id,
                $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_upload_appender_by_filename(
                $local_filename,
                $file_ext_name=null,
                $meta_list=null,
                $group_name=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_upload_appender_by_filename1(
                $local_filename,
                $file_ext_name=null,
                $meta_list=null,
                $group_name=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_upload_appender_by_filebuff(
                $file_buff,
                $file_ext_name=null,
                $meta_list=null,
                $group_name=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_upload_appender_by_filebuff1(
                $file_buff,
                $file_ext_name=null,
                $meta_list=null,
                $group_name=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_upload_appender_by_callback(
                $callback_array,
                $file_ext_name=null,
                $meta_list=null,
                $group_name=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_upload_appender_by_callback1(
                $callback_array,
                $file_ext_name=null,
                $meta_list=null,
                $group_name=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_upload_slave_by_filename(
                $local_filename,
                $group_name,
                $master_filename,
                $prefix_name,
                $file_ext_name=null,
               $meta_list=null,
                $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_upload_slave_by_filename1(
                $local_filename,
                $master_file_id,
                $prefix_name,
                $file_ext_name=null,
               $meta_list=null,
               $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_upload_slave_by_filebuff(
                $file_buff,
                $group_name,
                $master_filename,
                $prefix_name,
                $file_ext_name=null,
               $meta_list=null,
                $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_upload_slave_by_filebuff1(
                $file_buff,
                $master_file_id,
                $prefix_name,
                $file_ext_name=null,
               $meta_list=null,
               $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_upload_slave_by_callback(
                $callback_array,
                $group_name,
                $master_filename,
                $prefix_name,
                $file_ext_name=null,
               $meta_list=null,
                $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_upload_slave_by_callback1(
                $callback_array,
                $master_file_id,
                $prefix_name,
                $file_ext_name=null,
               $meta_list=null,
               $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_delete_file(
                $group_name,
                $remote_filename,
                $tracker_server=null,
                 $storage_server=null
       ){
        }
        
        public function storage_delete_file1(
                $file_id,
                $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_truncate_file(
                $group_name,
                $remote_filename,
                $truncated_file_size=null,
                 $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_truncate_file1(
                $file_id,
                $truncated_file_size=null,
                $tracker_server=null,
                 $storage_server=null
       ){
        }
        
        public function storage_download_file_to_buff(
                $group_name,
                $remote_filename,
                $file_offset=null,
                 $download_bytes=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_download_file_to_buff1(
                $file_id,
                $file_offset=null,
                $download_bytes=null,
                 $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_download_file_to_file(
                $group_name,
                $remote_filename,
                $local_filename,
                 $file_offset=null,
               $download_bytes=null,
               $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_download_file_to_file1(
                $file_id,
                $local_filename,
                $file_offset=null,
                 $download_bytes=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_download_file_to_callback(
                $group_name,
                $remote_filename,
                $download_callback,
                 $file_offset=null,
               $download_bytes=null,
               $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_download_file_to_callback1(
                $file_id,
                $download_callback,
                $file_offset=null,
                 $download_bytes=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        public function storage_set_metadata(
                $group_name,
                $remote_filename,
                $meta_list,
                 $op_type=null,
               $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_set_metadata1(
                $file_id,
                $meta_list,
                $op_type=null,
                 $tracker_server=null,
               $storage_server=null
       ){
        }
        
        public function storage_get_metadata(
                $group_name,
                $remote_filename,
                $tracker_server=null,
                 $storage_server=null
       ){
        }
        
        public function storage_get_metadata1(
                $file_id,
                $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function storage_file_exist(
                $group_name,
                $remote_filename,
                $tracker_server=null,
                 $storage_server=null
       ){
        }
        
        public function storage_file_exist1(
                $file_id,
                $tracker_server=null,
                $storage_server=null
       ){
        }
        
        public function get_last_error_no(
        ){
        }
        
        public function get_last_error_info(
       ){
        }
        
        public function http_gen_token(
                $file_id,
                $timestamp
       ){
        }
        
        public function get_file_info(
                $group_name,
                $remote_filename
       ){
        }
        
        public function get_file_info1(
                $file_id
       ){
        }
        
        public function send_data(
                $sock,
                $buff
       ){
        }
        
        public function gen_slave_filename(
                $master_filename,
                $prefix_name,
                $file_ext_name=null
       ){
        }
        
        public function close(){
            
        }
}
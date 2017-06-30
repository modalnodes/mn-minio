<?php
/*
Plugin Name: Modal Nodes Minio Configurator
*/

//http://cdn.modal-nodes.com/
//Access Key: JNADJ91V2BJ0PW07S8VG
//Secret Key: EwHhU+LjVq11OFp7vnBsEkJ7I74RkHMg6QKp8G0m

function s3_uploads_s3_client_params_runner( $params ) {
  $params['endpoint'] = 'http://cdn.modal-nodes.com/';
  $params['credentials'] = [
                'key'    => 'JNADJ91V2BJ0PW07S8VG',
                'secret' => 'EwHhU+LjVq11OFp7vnBsEkJ7I74RkHMg6QKp8G0m',
            ];
  return $params;
}
add_filter( 's3_uploads_s3_client_params', 's3_uploads_s3_client_params_runner', 20, 1 );

define( 'S3_UPLOADS_BUCKET', 'filocorto' );
define( 'S3_UPLOADS_KEY', 'JNADJ91V2BJ0PW07S8VG' );
define( 'S3_UPLOADS_SECRET', 'EwHhU+LjVq11OFp7vnBsEkJ7I74RkHMg6QKp8G0m' );
define( 'S3_UPLOADS_REGION', 'us-east-1' );
define( 'S3_UPLOADS_BUCKET_URL', 'http://cdn.modal-nodes.com/filocorto' );

?>

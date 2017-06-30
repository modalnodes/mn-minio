<?php
/*
Plugin Name: The FooBar Plugin
*/

// Our filter callback function
function s3_uploads_s3_client_params( $params ) {
    die($params);
}
add_filter( 's3_uploads_s3_client_params', 's3_uploads_s3_client_params', 10, 3 );

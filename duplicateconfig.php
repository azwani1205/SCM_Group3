<?php

switch ($hostname) {
  case 'domain.dev':
    define('WP_ENV', 'development');
    break;
    
   case 'staging.domain.com':
    define('WP_ENV', 'development');
    break;
    
   case 'www.domain.com':
    default: ('WP_ENV', 'production');
    break;
}

  $HOST = 'ec2-54-221-207-143.compute-1.amazonaws.com';
  $PORT = '5432';
  $DATABASE_NAME = 'd1583ojbjir9jc';
  $DATABASE_USER = 'olrmqdczslmujh';
  $DATABASE_PASSWORD = '63f0cb1a16cf6b40b5b1a71e3fb7f61f0bbf8484ef36c73a3c9d668ef4d76b66';
?>

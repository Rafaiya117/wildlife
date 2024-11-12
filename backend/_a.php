<?php
session_start();
include __DIR__.'/database/config.php';
include __DIR__.'/database/connection.php';
include __DIR__.'/database/func.php';
include __DIR__.'/database/autorun.php';
include __DIR__.'/core/function.php';
include __DIR__.'/core/jwt/jwt_auth.php';
set_for_cross_origin();
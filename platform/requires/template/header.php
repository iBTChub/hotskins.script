<?php

header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
print_r('DEBUG:HEADER' . '<hr>');
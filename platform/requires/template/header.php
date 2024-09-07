<?php

header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');








print_r('KEY: ' . config('IBTCHUB_HOST') . '<br>');

print_r('KEY: ' . config('IBTCHUB_FREEKASSA_ID') . '<br>');

print_r('KEY: ' . config('IBTCHUB_NAME') . '<br>');

print_r('KEY: ' . config('IBTCHUB_UPGRADE') . '<br>');

print_r('KEY: ' . config('IBTCHUB_VK_API_ID') . '<br>');








print_r('DEBUG:HEADER' . '<hr>');
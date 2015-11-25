rm -rf profile/*
php -d xdebug.profiler_enable=1 -d xdebug.profiler_output_dir=`pwd`/profile test.php brainy3 --profile

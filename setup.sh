composer install

mkdir -p libs/
pushd libs
rm -rf *

git clone https://github.com/box/brainy.git

popd

composer dump-autoload

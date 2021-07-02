cd a_package && ./configure-skeleton.sh

composer install
cd .. && composer dump-autoload

move files

fix namespaces if necessary

set up package service provider(migrations, views)

import packages

clean up composer.json

cd ..
composer-link laravel-install-packages
composer require pkboom/laravel-install-packages

test if the new package works.

cd a_package
wip
git remote add origin git@github.com:pkboom/{{your-package}}
git push -u origin master -f

create README.md

delete a_package
delete .workflow
deleting a_package will only a link
deleting files will delete files in the package folder


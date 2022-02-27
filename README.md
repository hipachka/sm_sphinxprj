Как основная база используется mysql. Фреймворк Symfony для взаимодействия с базой и sphinx использован
Symfony

### `1.Создать базу данных:`
bin/console doctrine:database:create
bin/console doctrine:schema:create
### `2. Загрузить фикстуры:`
php bin/console doctrine:fixtures:load
### `3. Создать индекс sphinx:`
docker-compose run sm_sphinx indexer --rotate --all --config /opt/sphinx/conf/sphinx.conf
### `4. Полезные команды:`
Подключиться из консоли: mysql -h sm_sphinx -P 9306 --protocol=tcp --prompt='sphinxQL>'

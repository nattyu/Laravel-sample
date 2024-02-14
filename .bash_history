sudo apt update && sudo apt upgrade -y
sudo chmod 666 /var/run/docker.sock
sudo apt-get install -y dos2unix
find . -type f -print0 | xargs -0 dos2unix
curl -s "https://laravel.build/example-app?php=81" | bash
cd example-app
./vendor/bin/sail up
vi ~/.profile
source ~/.profile
sail up -d
sail shell
sail mysql
sail artisan -v
sail artisan sail:publish
sail build --no-cache
sail up -d
sail shell
sail down
sail up -d
sail mysql
sail artisan make:controller Sample/IndexController
sail down
sail up -d
cd example-app
sail up -d
sail shell
./vendor/bin/sail up
docker run
sail up -d
sudo chmod 666 /var/run/docker.sock
cd../
cd ../
sudo chmod 666 /var/run/docker.sock
sudo apt update && sudo apt upgrade -y
sudo chmod 666 /var/run/docker.sock
cd example-app
sail up -d
sail up
sail up -d
cd example-app
sail up -d
sail artisan make:controller Tweet/IndexController --invokable
sail composer require --dev barryvdh/laravel-ide-helper
sail php artisan ide-helper:generate
_ide_helper.php
sail mysql
sail artisan make:migration create_tweets_table
sail artisan migrate
sail mysql
sail artisan make:seeder TweetSeeder
sail artisan db:seed
sail mysql
sail artisan make:model Tweet
sail artisan make:factory TweetFactory --model=Tweet
sail artisan db:seed
sail mysql
sail artisan make:controller Tweet/CreateController --invokable
sail artisan make:request Tweet/CreateRequest
sail composer require laravel-lang/lang:~10.3
cp -R vendor/laravel-lang/lang/locales/ja lang/ja
cp -R vendor/laravel-lang/lang/locales/ja
cp -R vendor/laravel-lang/lang/locales/ja lang/ja
sail mysql
sail artisan make:controller Tweet/Update/IndexController --invokable
sail artisan make:controller Tweet/Update/PutController --invokable
sail artisan make:request Tweet/UpdateRequest
sail artisan make:controller Tweet/DeleteController --invokable
sail down
cd example-app
sail up -d
sail composer require laravel/breeze --dev
sail artisan breeze:install
sail npm install
sail npm run dev
npm install
sail npm install
npm fund
npm install --save-dev vite laravel-vite-plugin
npm install --save-dev @vitejs/plugin-vue
sail npm install
sail npm run dev
sail composer remove laravel/breeze
sail composer require --dev laravel/breeze:1.8.0
sail composer require laravel/breeze --dev
sail artisan breeze:install
sail npm install --save-dev laravel-mix
sail npm remove vite laravel-vite-plugin
sail npm run dev
sudo apt update && sudo apt upgrade -y
sudo apt-get install -y dos2unix
find . -type f -print0 | xargs -0 dos2unix
curl -s "https://laravel.build/tennis-site?php=81" | bash
cd tennis-site
./vendor/bin/sail up
vi ~/.profile
source~/.profile
sail up -d
sail down
sail shell
sail mysql
sail up -d
sail mysql
sail artisan sail:publish
sail build --no-cache
sail up -d
sail shell
sail build --no-cache
sail shell
sail down
sail up -d
sail mysql
sail artisan make:controller Sample/IndexController
sail artisan make:controller Tweet/IndexController --invokable
sail mysql
sail artisan make:migration create_tweets_table
sail artisan migrate
sail mysql
sail artisan male:seeder TweetSeeder
sail artisan make:seeder TweetSeeder
sail artisan db:seed
sail artisan db:seed --class=TweetsSeeder
sail mysql
sail artisan make:model Tweet
sail artisan make:factory TweetFactory --model=Tweet
sail artisan db:seed
sail mysql
sail artisan db:seed
sail mysql
sail artisan db:seed
sail mysql
sail artisan db:seed
sail mysql
sail artisan make:controller Tweet/CreateController --invokable
sail artisan make:request Tweet/CreateRequest
sail composer require laravel-lang/lang:~10.3
cp -R vendor/laravel-lang/lang/locales/ja lang/ja
sail artisan make:controller Tweet/Update/IndexController --invokable
sail artisan make:controller Tweet/Update/PutController --invokable
sail artisan make:request Tweet/UpdateRequest
cd tennis-site
sail up -d
sail artisan make:controller Tweet/DeleteController --invokable
sail composer require laravel/breeze --dev
sail artisan breeze:install
sail npm install
sail npm run dev
sail artisan make:migration add_user_id_to_tweets
sail artisan make:seeder UsersSeeder
sail artisan migrate:fresh --seed
sail node -v
sail npm install
sail npm run development
sail npm run build
npm run dev
cd tennis-site
git init
git
git init
ls
ls -la
git status
git add tennis-site
git status
git add tennis-site/.
echo "# Laravel-sample" >> README.md
git add README.md
git commit -m "first commit"
git status
git config --global user.email "calvados441@gmail.com"
git config --global user.name "nattyu"
git commit -m "first commit"
git status
git remote add origin git@github.com:nattyu/Laravel-sample.git
git push -u origin master
ssh-keygen -t rsa
cat ~/.ssh/id_rsa.pub
ssh -T git@github.com
git init
ls -la
git status
git add tennis-site
git config --global core.autoCRLF false
git status
git commit -m "first commit"
git remote add origin git@github.com:nattyu/Laravel-sample.git
git remote -v
git push -u origin master
git status
git init
git status
git init
git status
git add tennis-site/.
git status
git add tennis-site/.
git status
git commit -m "first commit"
git remote add origin git@github.com:nattyu/Laravel-sample.git
git remote -v
git push -u origin master
curl -s "https://laravel.buuild/laravel-test?php=81" | bash
curl -s "https://laravel.build/laravel-test?php=81" | bash
cd laravel-test
./vendor/bin/sail up
cd ../
git init
git status
git add laravel-test/.
git status
git commit -m "init commit"
git remote -v
git push -u origin master
git status
git branch
git push
git fetch
git push
git merge --allow-unrelated-histories
git commit
git rm tennis-site/artisan
git push
git merge --allow-unrelated-histories
git status
git commit
git status
git push
cd ../
alias sail
vim .bashrc
source ~/.bashrc
alias sail
sail up -d
cd laravel-test
sail up -d
sail composer require laravel/breeze --dev
sail artisan breeze:install
sail artisan migrate
cd leravel-test
ls
cd laravel-test
./vendor/bin/sail up
./vendor/bin/sail stop
cd ../
sudo apt-get update && sudo apt-get install wget ca-certificates
sail up -d
sail artisan lang:publish
sail composer require askdkc/breezejp --dev
php artisan breezejp
sail artisan breezejp
cd ../
git status
git add laravel-test/.
git status
git commit -m "内容を更新"
git remote -v
git push
git fetch
git push
git merge --allow-unrelated-histories
git push
git status
sail artisan make:controller PostController --resource --model=Post
sail artisan route:list
git status
git restore
git restore ../
git status
sail artisan make:controller PostController --resource --model=Post
git status
git add .
git status
git commit -m "20240125 Update2"
git push
sail artisan make:seeder PostSeeder
sail artisan db:seed --class=PostSeeder
sail artisan make:factory PostFactory
sail artisan db:seed
sail artisan make:component Message
git status
git add .
git status
git commit -m "20240125 Update3"
git push
git status
git add .
git commit -m "Delete gate"
git push
curl -s https:///laravel.build/tennis-court-schedules | bash
cd tennis-court-schedules
sail up -d
sail stop
sail up -d
sail composer require laravel/breeze --dev
sail artisan breeze:install
sial artisan migrate
sail artisan migrate
sail artisan lang:publish
sail composer require askdkc/breezejp --dev
sail artisan breezejp
sail artisan make comtroller:
sail artisan make:controller PostCourtController --resource --model=PostCourt
sail artisan make:model ElectedCourt
sail artisan make:model ElectedCourt -m
sail artisan make:model RegistNewCourt -m
sail artisan migrate
sail artisan make:controller RegistNewCourtController
sail artisan make:migration add_columns_to_users_table --table=users
sail artisan migrate
sail artisan make:migration add_columns_to_elected_courts_table --table=elected_courts
sail artisan migrate
sail artisan thinker
sail artisan make:migration create_post_courts_table
sail artisan migrate
sail artisan route:list
sail artisan tinker
sail artisan migrate
sail artisan make:migration add_date_column_to_post_courts_table --table=post_courts
sail artisan migrate
sail artisan make:controller PostAttendanceController --resource --model=PostAttendance
sail artisan make:migration create_post_attendances_table
sail artisan migrate
sail npm run dev
sail up -d
sail stop
sail up -d
cd tennis-court-schedules
sail npm run dev
sail up -d
cd tennis-court-schedules
sail npm run dev
sail up -d
sail artisan make:migration change_columns_type_of_post_courts_table --table=post_courts
sail artisan migrate
cd tennis-court-schedules
sail npm run dev
sail up -d
composer dump-autoload
sail composer dump-autoload
sail artisan tinker
sail artisan route:list
cd tennis-court-schedules
sail npm run dev
sail up -d
sail artisan route:list
cd tennis-court-schedules
sail npm run dev
sail up -d
sail artisan route:list
cd tennis-court-schedules
sail npm run dev
sail up -d
cd tennis-court-schedules
sail npm run dev
sail up -d
cd tennis-court-schedules
sail npm run dev
sail up -d
sail artisan make:migration add_status_column_to_users_table --table=users
sail artisan migrate
cd tennis-court-schedules
sail npm run dev
                                                      sali up -d
sail up -d
cd tennis-court-schedules
sail npm run dev

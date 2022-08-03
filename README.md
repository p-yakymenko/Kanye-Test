# Kanye Test
 
Installation guide:
1)	Download or clone the repository
2)	Execute composer update in CLI to create the vendor folder
3)	Rename .env.example to .env and fill the environmental variables in it
4)	Execute php artisan key:generate in CLI to generate the application key
5)	Execute php artisan:migrate to create the database (necessary for authentication and authorization)
6)	Execute php artisan passport:install in CLI to genertate the passport keys (needed for API authentication and authorization)

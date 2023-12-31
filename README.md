-: Todo Project :-

Project Important Command List : 

composer create-project laravel/laravel todo<br />
composer require laravel/ui:* <br />
php artisan ui react --auth <br />
php artisan migrate <br />
npm install && npm run dev<br />

php artisan migrate:rollback --step=1<br />
php artisan make:migration add_status_to_users_table --table=users<br />
php artisan make:migration create_todo_table<br />

php artisan event:list<br />
php artisan make:event TodoAlert<br />
php artisan make:listener SendTodoAlert --event=TodoAlert<br />

php artisan queue:table<br />
php artisan make:job TodoJob<br />
php artisan queue:work<br />
php artisan queue:listen<br />

php artisan schedule:list <br />
php artisan schedule:work <br />
php artisan make:command Todo <br />
>>> $signature = 'todo:world' <br />
>>> php artisan todo:world <br />
>>> Example of Dependency Injection and Static Method <br />

composer require tymon/jwt-auth <br />
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider" <br />
php artisan jwt:secret <br />
php artisan make:middleware JwtMiddleware <br />

Cron API** <br />
Database Seeder<br />
php artisan make:factory PostFactory <br />
php artisan db:seed <br />
public function definition(){ <br />
    return [ <br />
        'user_id' => rand(1,2), <br />
        'name' => $this->faker->name(), <br />
        'details' => $this->faker->realText(20) <br />
    ]; <br />
} <br /> <br />
public function run(){ <br />
    \App\Models\Todo::factory(5)->create(); <br />
} <br />

GraphQL <br />
https://magecomp.com/blog/create-graphql-api-laravel-8/<br />
composer require rebing/graphql-laravel <br />
php artisan vendor:publish --provider="Rebing\GraphQL\GraphQLServiceProvider" <br />

Authorization-Gate-Policy <br />
php artisan make:policy TodoPolicy --model=Todo <br />
It's needed to implement user access with eficient way. <br />


<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('age', function($expression){
            $data = json_decode($expression);
            $year = $data[0];
            $month = $data[1];
            $day = $data[2];
            
            $age = Carbon::createFromDate($year,$month,$day)->age;
            return "<?php echo $age; ?>";
        });

        Blade::directive('sayHello', function($expression){
            return "<?php echo 'Hello '.$expression ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);

        $age = Carbon::createFromDate(1994, 4, 7)->age;
        
        View::share('age', $age);
        View::share('myname', 'Caique');
        // View::share('auth', Auth::user());

        View::composer('*', function($view ){
            $view->with('auth', Auth::user());
        });
    }
}

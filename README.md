
### Step 1:- 
Make an entry in config/themes.php under themes key
'automobile' => [
    'views_path' => 'resources/themes/automobile/views',
    'assets_path' => 'public/themes/automobile/assets',
    'name' => 'Automobile',
    'parent' => 'default',
]

### Step 2:- 
Make an entry inside composer.json under psr-4 key
"HKSManpower\\AutomobileTheme\\": "packages/HKSManpower/AutomobileTheme/src"



### Step 3:- 
Make an entry inside config/app.php under providers key
HKSManpower\AutomobileTheme\Providers\AutomobileThemeServiceProvider::class

### Step 4:- 
## Run following commands in order -
composer dump-autoload;
php artisan optimize;
php artisan vendor:publish; (press number for AutomobileTheme package)

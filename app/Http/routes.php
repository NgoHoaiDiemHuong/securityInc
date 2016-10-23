<?php

// use Faker\Factory as Faker;
// use Illuminate\Database\Query\Builder;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // return view('welcome');
    // return view('info.layouts.base');
    return view('info.pages.index');
});




// Route::get('/test-base-info', function () {
//    return view('info.layouts.base');
// });
// Route::get('/test-home-info', function () {
//    return view('info.pages.index');
// });

// Route::get('/test-base-admin', function () {
//    return view('admin.layouts.base');
// });

// Route::get('/test-customers', function () {
//  	// $users = DB::table('customers')->All();
//  	$customer=App\Customer::findOrFail('1');
//  	echo "<pre>";
//  	print_r($customer);
//  	echo "</pre>";
// });

 Route::get('test-search', function () {
 	// $users = DB::table('customers')->All();
 	// $customer=App\Customer::findOrFail('1');

 	 // $q = Input::get('keywords');
 	 $q = 'Chu Pháp';

    $searchTerms = explode(' ', $q);

    $query = DB::table('customers');
    

    foreach($searchTerms as $term)
    {
        $query->where('name', 'LIKE', '%'. $term .'%')
                ->orWhere('email', 'LIKE', '%'. $term .'%');
      
    }
    
    $customers = $query->get();
 	echo "<pre>";
 	print_r($customers);
 	echo "</pre>";
    // return view('admin.customer.search',compact('customers'));
});

// Route::get('/test-seeder', function () {
// // Tao ho ten
// $ho = array("Ngô", "Nguyễn", "Trần", "Thái", "Phạm","Tô","Dương","Đạo");

// $tenlot1 = array("Văn","Võ","Thị","Như","Trọng","Thanh","Thành","Minh","Vũ","Hoài","Hoàng","Trân");

// $ten = array("Hương","Trinh","Bảo Ngọc","Hoài Thương","Luân","Thắm","Giang","Cường", "Trường","Thanh","Lịch","Bé","Thiện","Thiên","Trúc","Liễu","Linh","Thảo","Ngoan","Kiệt","Duy","Thái","Dũng","Dương");// $rand_keys3 = array_rand($ho, 2);

// for($i=0;$i<100;$i++){
// 	echo "<br>";
// 	echo $i.' ';
// 	$rand_keys = array_rand($ho, 2);
//     $rand_keys2 = array_rand($tenlot1, 2);
//     $rand_keys3 = array_rand($ten, 2);
// 	echo $ho[$rand_keys[0]].' '.$tenlot1[$rand_keys2[0]].' '.$ten[$rand_keys3[0]];
// }

// });
// //Kiem tra them khach hang
// Route::get('/test-insert-customers', function () {
//  	 $faker = Faker::create('vi_VN');
//  	 echo $faker->name;
//  	 echo '  <br>';
//  	 echo $faker->date($format = 'Y-m-d', $max = '-20 years');
//  	 echo "<br>";
//  	 echo $faker->phoneNumber();
//  	 echo "<br>";
//  	 echo $faker->email;
//  	 echo $faker->taxpayerIdentificationNumber;
        
// });

// Route::resource('admin/service','ServiceController',['only'=>['index','show','update','create','store']]);
// Route::resource('admin/user','UserController',['except'=>['update']]);

Route::get('admin',function(){
return view('admin.dashboard.dashboard');
});
Route::group(['prefix'=>'admin'],function(){
    Route::resource('service','ServiceController');
    Route::resource('user','UserController');
    Route::resource('customer','CustomerController');
    Route::resource('order','OrderController');  
});
Route::post('admin/customer/seachExcute','CustomerController@search');
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use \App\Models\Article;

use \App\Http\Controllers\StudentsController;
use \App\Http\Controllers\StaffsController;
use \App\Http\Controllers\EmployeesController;
use \App\Http\Controllers\DashboardsController;
use \App\Http\Controllers\MembersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return "Save Mandalay";
});

Route::get('/sayar',function(){
    return "Hello Sayar, Nay Kaung Lar??";
});

Route::get('/sayhi',function(){
    return "Hi Min Ga Lar Par";
});


// Route::get('/about',function(){
//     return view("aboutme");
// });

Route::view('/about',"aboutme");

Route::view('/about/company','aboutcompany');


// Route::get('/contact',function(){
//     return redirect("about");
// });

Route::redirect('/contact','/about/company');


Route::get('/about/office/{staff}',function($staff){
    return "Hello {$staff}";
});


Route::get('/about/company/{staff}',function($staff){
    return view("aboutcompanystaff",["person"=>$staff]);
});


Route::get('/about/company/{staff}/{city}',function($staff,$city){
    return view("aboutcompanystaffbycity",["person"=>$staff,"location"=>$city]);
});


Route::get('/profile',function(){
    return view("myprofile");
})->name("prof");


// Route::get('/students',[\App\Http\Controllers\StudentsController::class,'index'])->name("students.index");
// Route::get('/students/show',[\App\Http\Controllers\StudentsController::class,'show'])->name("students.show");
// Route::get('/students/edit',[\App\Http\Controllers\StudentsController::class,'edit'])->name("students.edit");

// Route::get('/students',[StudentsController::class,'index'])->name("students.index");
// Route::get('/students/show',[StudentsController::class,'show'])->name("students.show");
// Route::get('/students/edit',[StudentsController::class,'edit'])->name("students.edit");


// Route::group(['prefix'=>'students'],function(){
//     Route::get('/',[\App\Http\Controllers\StudentsController::class,'index'])->name("students.index");
//     Route::get('/show',[\App\Http\Controllers\StudentsController::class,'show'])->name("students.show");
//     Route::get('/edit',[\App\Http\Controllers\StudentsController::class,'edit'])->name("students.edit");
// });


// Route::get('/students',[StudentsController::class,'index'])->name("students.index");
// Route::get('/students/show',[StudentsController::class,'show'])->name("students.show");
// Route::get('/students/edit',[StudentsController::class,'edit'])->name("students.edit");



// Route::group(['prefix'=>'students'],function(){
//     Route::get('/',[StudentsController::class,'index'])->name("students.index");
//     Route::get('/show',[StudentsController::class,'show'])->name("students.show");
//     Route::get('/edit',[StudentsController::class,'edit'])->name("students.edit");
// });


Route::name('students.')->group(function(){
    Route::get('/students',[StudentsController::class,'index'])->name("index");
    Route::get('/students/show',[StudentsController::class,'show'])->name("show");
    Route::get('/students/edit',[StudentsController::class,'edit'])->name("edit");
});


Route::get('/staffs',[StaffsController::class,'home'])->name('staffs.home');
Route::get('/staffsparty',[StaffsController::class,'party'])->name('staffs.party');
Route::get('/staffsparty/{total}',[StaffsController::class,'partytotal'])->name('staffs.total');
Route::get('/staffsparty/{total}/{status}',[StaffsController::class,'partytotalconfirm'])->name('staffs.status');


Route::get('/employees',[EmployeesController::class,'index'])->name('employees.index');
Route::get('/employees/passingdataone',[EmployeesController::class,'passingdataone'])->name('employees.passingdataone');
Route::get('/employees/passingdatatwo',[EmployeesController::class,'passingdatatwo'])->name('employees.passingdatatwo');
Route::get('/employees/passingdatathree',[EmployeesController::class,'passingdatathree'])->name('employees.passingdatathree');
Route::get('/employees/show',[EmployeesController::class,'show'])->name('employees.show');
Route::get('/employees/edit',[EmployeesController::class,'edit'])->name('employees.edit');
Route::get('/employees/update',[EmployeesController::class,'update'])->name('employees.update');





Route::get('/dashboards',[DashboardsController::class,'index'])->name('dashboards.index');
Route::get('/members',[MembersController::class,'index'])->name('members.index');



Route::get('/students/insert',function(){
    // \DB::insert('INSERT INTO students(name,phone) VALUE(?,?)',
    DB::insert('INSERT INTO students(name,phone) VALUE(?,?)',['aung aung','0911111']);
    return "Data Inserted";
});


Route::get('students/reads',function(){
    $results = DB::select('SELECT * FROM students');
    // return $results;
    // return var_dump($results);          // stdclass object

    foreach($results as $result){
        echo $result->name. "<br/>";
    }
});


Route::get('students/singleread',function(){
    $results = DB::select('SELECT * FROM students where id = ?',[2]);
    return $results;
});


Route::get('students/update',function(){
    $results = DB::update('UPDATE students SET name=?,phone=? WHERE id = ?',["su su","0922222",2]);
    return "Updated";
});


Route::get('students/delete',function(){
    DB::delete('DELETE FROM students WHERE id = ?',[4]);
    return "Deleted";
});


Route::get('staffs/insert',function(){

    DB::table('staffs')->insert([
        'name'=>'yu yu',
        'age'=>25
    ]);

    return "Inserted";
});


Route::get('staffs/read',function(){

    // $staffs = DB::table('staffs')->get();
    // return $staffs;
    // return var_dump($staffs);

    // foreach($staffs as $staff){
    //     echo $staff->name."<br/>";
    // }


    // $staffs = DB::table('staffs')->select('id','name')->get();
    // return $staffs;

    // $staffs = DB::table('staffs')->where('age','>',25)->get();
    // return $staffs;

    // $staffs = DB::table('staffs')->orderBy('id','desc')->limit(3)->get();
    // return $staffs;

    // $staffs = DB::table('staffs')->count();
    // return $staffs;

    $staffs = DB::table('staffs')->where('name','yu yu')->exists();
    return $staffs;

    // $staffs = DB::table('staffs')->pluck('name');  // ["yu yu","yu yu","yu yu","yu yu","yu yu","yu yu","yu yu","yu yu","yu yu","yu yu","yu yu","yu yu","yu yu","yu yu","yu yu","yu yu","yu yu","yu yu"]
    // return $staffs;

    // $staffs = DB::table('staffs')->pluck('name','id');  // {"1":"yu yu","2":"yu yu","3":"yu yu","4":"yu yu","5":"yu yu","6":"yu yu","7":"yu yu","8":"yu yu","9":"yu yu","10":"yu yu","11":"yu yu","12":"yu yu","13":"yu yu","14":"yu yu","15":"yu yu","16":"yu yu","17":"yu yu","18":"yu yu"}
    // return $staffs;
});


Route::get('staffs/singleread',function(){

    $staff = DB::table('staffs')->where('id',1)->first();
    // return $staff;

    echo $staff->name."<br/>";
    echo $staff->age."<br/>";

});



Route::get('staffs/update',function(){

    // DB::table('staffs')->where('id',1)->update(['name'=>'Zaw Zaw']);
    // return "Updated";


    // DB::table('staffs')->where('id',2)->update(['name'=>'Nandar','age'=>40]);
    // return "Updated";


    DB::table('staffs')->where('name','yu yu')->update(['name'=>'maung zaw']);
    return "Updated";


});



Route::get('staffs/delete',function(){

    // DB::table('staffs')->where('id',4)->delete();
    // return "Deleted";


    DB::table('staffs')->where('name','maung zaw')->delete();
    return "Deleted";

});




Route::get("articles/create",function(){

    // Method 1

    // $article = new Article();
    // $article->title = "This is new article 11";
    // $article->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
    // $article->user_id = 2;
    // $article->rating = 1;
    // $article->save();


    // Method 2
    Article::create([
        "title"=>"This is new article 13",
        "description"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
        "user_id"=>2,
        "rating"=>3
    ]);

    return "Inserted Successfully";
});



Route::get('articles/read',function(){
    // $articles = Article::all();
    // return $articles;

    // foreach($articles as $article){
    //     echo "$article->id . $article->title <br/>";
    // }

    // $article = Article::find(6);
    $article = Article::findOrFail(6);

    // return $article;
    echo "$article->id . $article->title";
});


Route::get('articles/update',function(){

    $article = Article::findOrFail(3);
    $article->title = "This is old article 3";
    $article->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. ";
    $article->user_id = 2;
    $article->rating = 4;
    $article->save();

    return "Update Successfully";

});



Route::get('articles/delete',function(){

    $article = Article::findOrFail(3);
    $article->delete();

    return "Delete Successfully";

});



Route::get('articles/aggregates',function(){

    $datas = [
        ['price'=>1000],
        ['price'=>2000],
        ['price'=>3000],
        ['price'=>4000],
        ['price'=>5000]
    ];

    // return $datas;

    // var_dump($datas);

    // dd($datas);
    // dd($datas,collect($datas));


    // return collect($datas)->count(); // 5

    // return collect($datas)->max(); {"price":5000}


    // return collect($datas)->max(function($num){
    //     return $num['price'];
    // });// 5000


    // return collect($datas)->min(function($num){
    //     return $num['price'];
    // });// 1000



    // return collect($datas)->sum(function($num){
    //     return $num['price'];
    // });// 15000


    // return collect($datas)->average(function($num){
    //     return $num['price'];
    // });// 3000


    // return collect($datas)->avg(function($num){
    //     return $num['price'];
    // });// 3000


    // $articles = Article::where('user_id',1)->count();
    // return $articles; // 6

    // $articles = Article::where('user_id',1)->max('rating');
    // return $articles; // 5

    // $articles = Article::where('user_id',2)->max('rating');
    // return $articles; // 4



    // $articles = Article::where('user_id',1)->min('rating');
    // return $articles; // 1

    // $articles = Article::where('user_id',1)->average('rating');
    // $articles = Article::where('user_id',1)->avg('rating');
    // return $articles; // 2.5000


    $articles = Article::where('user_id',1)->sum('rating');
    return $articles; // 15




});
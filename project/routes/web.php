<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	// echo(' 好好学习，天天向上');
	// echo date('Y-M-d H:i:s');
	//设置配置信息
	echo Config::get('app.timezone');
	//设置配置
	Config::set('app.locale','cn');
	//设置环境配置
	// echo env('DB_HOST');
	//加载视图
    // return view('welcome');
});


//get方式获取
Route::get('/index',function(){
	echo "buyaobuyao";
});
//post方法获取
// Route::post('/indexi',function(){
// 	echo "摇头no";
// });

//带参数获取
Route::get("/asd/{id}",function($id){
		echo "asdID:".$id;
});


//带参数 限制类型
// Route::get("/get/{name}",function($name){
// 		echo "get Name:".$name;
// })->where("name",'[a-z]+');

// //带参数 传递多个
// Route::get("/post/{id}-{name}",function($id,$name){
// 		echo "post ID:".$id."Name :".$name;
// });

// //别名
// Route::get("/post",['as'=>'ad',function(){
// 	echo "admin别名";
// }]);

// //通过路由别名访问路由规则
// Route::get("/sad",function(){
// 	echo route("ad");
// });


// //路由组
// Route::group([],function(){
// 	Route::get('/zxc',function(){
// 		echo "zxc类";
// 	});
// 	Route::get('/zx',function(){
// 		echo "zx类";
// 	});
// 	Route::get('/cvb',function(){
// 		echo "cvb类";
// 	});
// });


//加载form表单
// Route::get("/add",function(){
// 	return view("form");
// });

// Route::post("/insert",function(){
// 	echo "insert中";
// });

// //加载post 请求Ajax模板
// Route::get("/ajax",function(){
// 	return view("ajax");
// });
// Route::post("/ajax",function(){
// 	echo "doajax中";
// });


// Route::get("/homeperson",function(){
// 	echo "home";
// })->middleware("homelogin");
// Route::get('/homejiesuan',function(){
// 	echo "homes";
// })->middleware("homelogin");


// //加载登录页
// Route::get("login",function(){
// 	return view("login");
// });


//前台路由组  
// Route::group(["middleware"=>"homelogin"],function(){
// 	Route::get("/homecart",function(){
// 		echo "cart";
// 	});
// 	Route::get("/homeorder",function(){
// 		echo "order";
// 	});
// });


//控制器使用
// Route::get("/adminindex","Admin\UserController@index");
// Route::get("/adminadd","Admin\UserController@add");
// Route::post("/admininsert","Admin\UserController@insert");
// Route::get("/admindelete/{id}","Admin\UserController@delete");


//路由组结合控制器中间文件 
// Route::group(["middleware"=>"homelogin"],function(){
// 	Route::get("/homeperson",'Home\personController@index');

	
// });

//资源控制器
// Route::resource('/adminindex','Admin\IndexController')->middleware("homelogin");
// //全部删除
// Route::get('/alldel','Admin\IndexController@alldel');
// //资源路由结合中间件
// Route::group(["middleware"=>"homelogin"],function(){
// 	Route::resource("/adminshop","Admin\ShopController");
// });


// //请求
// Route::resource('/req','Admin\ReqController');
// //单文件上传
// Route::resource("/file",'Admin\FileController');
// //多文件上传
// Route::resource("/files","Admin\FilesController");


//
// Route::resource("/reqe","Admin\ReqController");
// //视图
// Route::resource("/vies","Admin\VieController");

// //后台首页
// Route::resource("/adminusers","Admin\AdminController");
//用户管理
Route::resource("/user","Admin\UsersController");
// //数据库连接
// Route::resource("/db","Admin\DbController");
//模型vip管理
Route::resource("/userss","Admin\UserssController");
//AJAX删除
// Route::get("/userssdel","Admin\UserssController@del");
//
Route::get("/asd","Admin\AsdController@fun");

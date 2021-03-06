
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
 Auth::routes();

Route::get('/','TaskController@task');
/**
 * 植保任务_首页
 * @author 胡军
 * @date   2016年11月19日09:30:40
 * @return [type]                   [description]
 */
Route::get('/task','TaskController@task');

/**
 * 植保任务_创建
 * @author 胡军
 * @date   2016年11月19日09:30:40
 * @return [type]                   [description]
 */
Route::post('/task','TaskController@create');

Route::get('/home', 'HomeController@index');

/**
 * 作业任务信息详情
 * @author 胡军 <hujun123qwe@163.com>
 * @date   2016年12月8日10:20:58
 */
Route::get('task-item', 'TaskController@item');

/**
 * 取消任务
 * @author 胡军 <hujun123qwe@163.com>
 * @date   2016年12月8日14:03:45
 */
Route::get('task-cancel/{id?}', 'TaskController@cancel');

/**
 * 推迟任务
 * @author 胡军 <hujun123qwe@163.com>
 * @date(2016年12月13日11:00:58)
 */
Route::get('task-delay/{id?}', 'TaskController@delay');

/**
 * 推迟提交
 * @date(2017年2月7日23:07:58)
 */
Route::post('task-delay','TaskController@delay');

/**
 * 完成任务
 * @author 胡军 <hujun123qwe@163.com>
 * @date(2016-12-14 11:07:53)
 */
Route::get('task-complete/{id?}', 'TaskController@complete');

Route::post('task-complete', 'TaskController@complete');
/**
 * txt数据插入数据库
 * @author hujun <hujun123qwe@163.com>	
 * @date(2016-12-26 14:22:37)
 */
Route::get('txt','FarmerController@txt');
Route::post('txt2sql','FarmerController@txt2sql');

Route::get('farmer-info/{id?}', 'FarmerController@info');

/**
 * 评价
 */
Route::get('mark/{id?}','MarkController@index');

Route::post('task-mark','MarkController@create');

/**
 * 2017年2月11日15:18:52
 */
Route::get('task-map/{id?}','TaskController@map');
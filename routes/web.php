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

    //\App\Post::create([
    //  'title'=>'test title',
    //    'content'=>'test content',
    //]);
    //$post = new\App\Post();
    //$post->title ='testtitle';
    //$post->content ='testcontent';
    //$post->save();
   //$posts = \App\Post::all();
    //dd($posts);
    //$post = \App\Post::find(1);
    //dd($post);
    //$posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
    //dd($posts);
    //$post=\App\Post::find(1);
    //$post->update([
    //    'title'=>'updatedtitle',
    //    'content'=>'updatedcontent',
    //]);
    //$post=\App\Post::find(1);
    //$post->title='savedtitle';
    //$post->content='savedcontent';
    //$post->save();
    //$post=\App\Post::find(1);
    //$post->delete();
    //\App\Post::destroy(2);
    \App\Post::destroy(3,5,7);
    
    return view('welcome');
});
Route::get('posts', ['as' => 'posts.index',   'uses' => 'PostsController@index']);
Route::get('post',  ['as' => 'posts.show',    'uses' => 'PostsController@show']);
Route::get('about',    ['as' => 'posts.about',   'uses' => 'PostsController@about']);
Route::get('contact',  ['as' => 'posts.contact', 'uses' => 'PostsController@contact']);


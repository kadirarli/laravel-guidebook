<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	/*
	$owner = new Role;
	$owner->name = 'Owner';
	$owner->save();

	$admin = new Role;
	$admin->name = 'Admin';
	$admin->save();
	*/
	//$user = User::where('username','=','kadirarli')->first();
	/*
	$user->attachRole( $admin ); // Parameter can be an Role object, array or id.

	$managePosts = new Permission;
	$managePosts->name = 'manage_posts';
	$managePosts->display_name = 'Manage Posts';
	$managePosts->save();

	$manageUsers = new Permission;
	$manageUsers->name = 'manage_users';
	$manageUsers->display_name = 'Manage Users';
	$manageUsers->save();

	$owner->perms()->sync(array($managePosts->id,$manageUsers->id));
	$admin->perms()->sync(array($managePosts->id));
	*/
	//$bool = $user->hasRole("Owner");    // false
	//$bool = $user->hasRole("Admin");    // true
	//$bool = $user->can("manage_posts"); // true
	//$bool = $user->can("manage_users"); // false
    SEOMeta::setTitle('setTitle');
    SEOMeta::setDescription('setDescription'); // is automatically limited to 160 characters
    OpenGraph::addImage('addImage.png');
	return View::make('hello');
});

// Sitemap
Route::get ('sitemap', function(){
	$posts = DB::table('iumslas')->orderBy('created_at', 'desc')->get();
    foreach($posts as $post){
        $element = array(
                  'location'         => "/sitemap-posts.xml",
                  'last_modified'    => $post->created_at,
                  'change_frequency' => 'weekly',
                  'priority'         => '0.90'
            );
        SEOSitemap::addRaw($element);
    }
    return Response::make(SEOSitemap::generate(), 200, array('Content-Type' => 'text/xml'));
});

//RSS
Route::get('/rss', function(){
    $feed = Rss::feed('2.0', 'UTF-8');
    $feed->channel(array('title' => 'Channel\'s title', 'description' => 'Channel\'s description', 'link' => 'http://www.test.com/'));
    for ($i=1; $i<=5; $i++){
        $feed->item(array('title' => 'Item '.$i, 'description|cdata' => 'Description '.$i, 'link' => 'http://www.test.com/article-'.$i));
    }

    return Response::make($feed, 200, array('Content-Type' => 'text/xml'));
});

//Slug
Route::get('/slug', function(){
	 $post = new Post([
     'title' => 'My Awesome Blog Post',
	]);

	$post = new Post([
     'title' => 'öçşiğü-ajhsgd*.asdkjy21ı3uydjsa',
	]);

	$post->save();
});

//Tag
Route::get("/tag",function(){
	$data = Input::only('title', 'body', 'category_id');
    $data['user_id'] = 1;
    $data['body'] = $data['body'];
	$post = Post::create($data);
    $post->tag("Apple,Banana,Cherry");
});

// Confide routes
Route::get ('users/create', 				'UsersController@create');
Route::post('users', 						'UsersController@store');
Route::get ('users/login', 					'UsersController@login');
Route::post('users/login', 					'UsersController@doLogin');
Route::get ('users/confirm/{code}', 		'UsersController@confirm');
Route::get ('users/forgot_password', 		'UsersController@forgotPassword');
Route::post('users/forgot_password', 		'UsersController@doForgotPassword');
Route::get ('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 		'UsersController@doResetPassword');
Route::get ('users/logout', 				'UsersController@logout');

Route::resource('phonetypes', 'PhoneTypesController');
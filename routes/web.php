<?php

// User Auth
Auth::routes();
Route::post('password/change', 'UserController@changePassword')->middleware('auth');


/* Dashboard Index */
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
   Route::get('/', 'Backend\HomeController@dashboard')->name('dashboard');
});

// Article
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
   Route::get('/articles', 'Backend\ArticleController@index')->name('backend_articles');
   Route::get('/articles/view/{article_id}', 'Backend\ArticleController@view')->name('backend_articles_view');
   Route::get('/articles/delete/{article_id}', 'Backend\ArticleController@destroy')->name('backend_articles_delete');
   Route::get('/articles/edit/{article_id}', 'Backend\ArticleController@edit')->name('backend_articles_edit');
   Route::post('/articles/update/{article_id}', 'Backend\ArticleController@update')->name('backend_article_update');
   Route::get('/articles/add', 'Backend\ArticleController@add')->name('backend_article_add');
   Route::post('/articles/create', 'Backend\ArticleController@create')->name('backend_article_create');
    
});

//Menu
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
   Route::get('/menus', 'Backend\MenuController@index')->name('backend_menus');
   Route::post('/menus/create', 'Backend\MenuController@create')->name('backend_menus_create');
   Route::get('/menus/view/{menu_id}', 'Backend\MenuController@view')->name('backend_menus_view');
   Route::get('/menus/edit/{menu_id}', 'Backend\MenuController@edit')->name('backend_menus_edit');
   Route::get('/menus/delete/{menu_id}', 'Backend\MenuController@delete')->name('backend_menus_delete');
    
});

//Menu Items
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
   Route::post('/menuitems/create', 'Backend\MenuItemController@create')->name('backend_menuitems_create');
   Route::post('/menuitems/update/{item_id}', 'Backend\MenuItemController@update')->name('backend_menuitems_update');
   Route::get('/menuitems/delete/{item_id}', 'Backend\MenuItemController@delete')->name('backend_menuitems_delete');
   Route::get('/php', function() {
     phpinfo();
   });   
});
//Sliders
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
   Route::get('/sliders', 'Backend\SliderController@index')->name('backend_sliders');
   Route::post('/sliders/create', 'Backend\SliderController@create')->name('backend_sliders_create');
   Route::get('/sliders/delete/{id}', 'Backend\SliderController@delete')->name('backend_sliders_delete');
    
});

//File upload
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
   Route::get('/files', 'Backend\UploadController@index')->name('backend_files');
   Route::get('/files/delete_file', 'Backend\UploadController@deleteFile')->name('backend_files_delete_file');
   Route::post('/files/add_folder', 'Backend\UploadController@createFolder')->name('backend_files_add_folder');
   Route::get('/files/del_folder', 'Backend\UploadController@deleteFolder')->name('backend_files_del_folder');   
});

// Category
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/category', 'Backend\CategoryController@index')->name('categories_view');
    Route::get('/category/edit/{category_id}', 'Backend\CategoryController@edit')->name('backend_category_edit');
    Route::get('/category/view/{category_id}', 'Backend\CategoryController@view')->name('backend_category_view');
    Route::get('/category/add', 'Backend\CategoryController@add')->name('backend_category_add');
    Route::post('/category/update/{category_id}', 'Backend\CategoryController@update')->name('backend_category_update');
    Route::post('/category/create', 'Backend\CategoryController@create')->name('backend_category_create');
    Route::get('/category/delete/{category_id}', 'Backend\CategoryController@delete')->name('backend_category_delete');
});
    
//System Setting
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/settings', 'Backend\SettingController@index')->name('backend_setting_index');
    Route::post('/settings/update/{settingID}', 'Backend\SettingController@update')->name('backend_setting_update');
    Route::post('/settings/create', 'Backend\SettingController@create')->name('backend_setting_create');
    Route::post('/settings/set_home/{value}', 'Backend\SettingController@set')->name('backend_setting_set_home_page');
});

// user
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/users', 'Backend\UserController@index')->name('backend_users_index');
    Route::get('/user/edit/{userId}', 'Backend\UserController@getById')->name('backend_users_edit');
    Route::post('/user/update/{userId}', 'Backend\UserController@update')->name('backend_user_update');
    Route::post('/user/add', 'Backend\UserController@add')->name('backend_user_add');
    Route::get('/user/form', 'Backend\UserController@getUserForm')->name('backend_user_form');
    Route::get('/user/delete/{userID}', 'Backend\UserController@delete')->name('backend_user_delete');
});


// contact
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/contacts', 'Backend\ContactController@index')->name('backend_contacts_index');
    Route::get('/contact/edit/{contactId}', 'Backend\ContactController@getById')->name('backend_contact_edit');
    Route::post('/contact/update/{contactId}', 'Backend\ContactController@update')->name('backend_contact_update');
    Route::post('/contact/add', 'Backend\ContactController@add')->name('backend_contact_add');
    Route::get('/contact/form', 'Backend\ContactController@getForm')->name('backend_contact_form');
    Route::get('/contact/delete/{contactId}', 'Backend\ContactController@delete')->name('backend_contact_delete');
});
// Document
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::post('/documents', 'Backend\DocumentController@upload')->name('backend_documents_upload');
    Route::get('/documents', 'Backend\DocumentController@index')->name('backend_documents_index');
    Route::post('/document/update/{id}', 'Backend\DocumentController@update')->name('backend_document_update');
    Route::post('/document/create', 'Backend\DocumentController@create')->name('backend_document_create');
    Route::get('/document/delete/{id}', 'Backend\DocumentController@delete')->name('backend_document_delete');
    Route::get('/document/edit/{id}', 'Backend\DocumentController@edit')->name('backend_document_edit');
});
// Tag
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/tags', 'Backend\TagController@index')->name('backend_tag_index');
    Route::post('/tag/update/{id}', 'Backend\TagController@update')->name('backend_tag_update');
    Route::post('/tag/create', 'Backend\TagController@create')->name('backend_tag_create');
    Route::get('/tag/delete/{id}', 'Backend\TagController@delete')->name('backend_tag_delete');
});

// Frontend
Route::get('/', 'Frontend\HomeController@index')->name('frontend_home');
Route::get('/lien-he', 'Frontend\HomeController@contact')->name('frontend_contact');
Route::get('/{slug}.html', 'Frontend\HomeController@getBySlug')->name('frontend_post');
Route::get('/search', 'Frontend\HomeController@search')->name('frontend_search');

// Category
Route::group(['prefix' => 'category'], function () {
    Route::get('/{slug}.html', 'Frontend\HomeController@getCategoryBySlug')->name('frontend_category');
});

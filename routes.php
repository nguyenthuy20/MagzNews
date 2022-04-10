<?php
const CONTROLLERS = array(

// CLIENT
    [
        'method'  => 'GET',
        'url'     => '/',
        'name'    => 'index',
        'use'     => 'Client/HomeController',
        'action'  => 'index'
    ],
    [
      'method'  => 'GET',
      'url'     => '/index',
      'name'    => 'index',
      'use'     => 'Client/HomeController',
      'action'  => 'index'
    ],
    [
        'method'  => 'GET',
        'url'     => '/users/{user_id}/edit',
        'name'    => 'users.edit',
        'use'     => 'UserController',
        'action'  => 'edit'
    ],
    [
        'method'  => 'GET',
        'url'     => '/show-login',
        'name'    => 'login.show-login',
        'use'     => 'Client/LoginController',
        'action'  => 'showLogin'
    ],
    [
        'method'  => 'POST',
        'url'     => '/',
        'name'    => 'login.login',
        'use'     => 'Client/LoginController',
        'action'  => 'login'
    ],
    [
        'method'  => 'GET',
        'url'     => '/show-register',
        'name'    => 'register.show-register',
        'use'     => 'Client/LoginController',
        'action'  => 'showRegister'
    ],
    [
        'method'  => 'POST',
        'url'     => '/register',
        'name'    => 'login.register',
        'use'     => 'Client/LoginController',
        'action'  => 'register'
    ],
    [
        'method'  => 'POST',
        'url'     => '/check-username',
        'name'    => 'login.check-username',
        'use'     => 'Client/LoginController',
        'action'  => 'checkUsername'
    ],
    [
        'method'  => 'GET',
        'url'     => '/edit-profile',
        'name'    => 'edit-profile',
        'use'     => 'Client/LoginController',
        'action'  => 'editProfile'
    ],
    [
        'method'  => 'POST',
        'url'     => '/update-profile',
        'name'    => 'update-profile',
        'use'     => 'Client/LoginController',
        'action'  => 'updateProfile'
    ],
    [
        'method'  => 'GET',
        'url'     => '/logout',
        'name'    => 'logout',
        'use'     => 'Client/LoginController',
        'action'  => 'logout'
    ],
    [
        'method'  => 'GET',
        'url'     => '/shop',
        'name'    => 'shop',
        'use'     => 'Client/ShopController',
        'action'  => 'shop'
    ],
    [
        'method'  => 'GET',
        'url'     => '/singleproduct',
        'name'    => 'singleproduct',
        'use'     => 'Client/SingleproductController',
        'action'  => 'singleproduct'
    ],
    [
        'method'  => 'GET',
        'url'     => '/account',
        'name'    => 'account',
        'use'     => 'Client/AccountController',
        'action'  => 'account'
    ],
    [
        'method'  => 'GET',
        'url'     => '/checkout',
        'name'    => 'checkout',
        'use'     => 'Client/CheckoutController',
        'action'  => 'checkout'
    ],
    [
        'method'  => 'GET',
        'url'     => '/shop_cart',
        'name'    => 'shop_cart',
        'use'     => 'Client/ShopCartController',
        'action'  => 'shop_cart'
    ],
    [
        'method'  => 'GET',
        'url'     => '/about_us',
        'name'    => 'about_us',
        'use'     => 'Client/AboutUsController',
        'action'  => 'about_us'
    ],

// ADMIN
    //login
    [
        'method'  => 'GET',
        'url'     => '/admin',
        'name'    => 'admin',
        'use'     => 'Admin/AdminHomeController',
        'action'  => 'index'
    ],
    // home admin: thong ke
    [
        'method'  => 'GET',
        'url'     => '/admin-home',
        'name'    => 'admin.home',
        'use'     => 'Admin/AdminHomeController',
        'action'  => 'home'
    ],
    // manage categories
    [
        'method'  => 'GET',
        'url'     => '/admin-categories2',
        'name'    => 'admin.categories2',
        'use'     => 'Admin/ManageCategoriesController',
        'action'  => 'index2'
    ],
    /////
    [
        'method'  => 'GET',
        'url'     => '/admin-categories',
        'name'    => 'admin.categories',
        'use'     => 'Admin/ManageCategoriesController',
        'action'  => 'index'
    ],
    [
        'method'  => 'POST',
        'url'     => '/users-showFormCategoryEdit',
        'name'    => 'admin.users.showFormCategoryEdit',
        'use'     => 'Admin/ManageCategoriesController',
        'action'  => 'showFormCategoryEdit'
    ],
    [
        'method'  => 'POST',
        'url'     => '/categories-update',
        'name'    => 'admin.categories.update',
        'use'     => 'Admin/ManageCategoriesController',
        'action'  => 'update'
    ],
    [
        'method'  => 'POST',
        'url'     => '/categories-delete',
        'name'    => 'admin.categories.delete',
        'use'     => 'Admin/ManageCategoriesController',
        'action'  => 'delete'
    ],
    [
        'method'  => 'POST',
        'url'     => '/categories-showFormCreateCategory',
        'name'    => 'admin.categories.showFormCreateCategory',
        'use'     => 'Admin/ManageCategoriesController',
        'action'  => 'showFormCreateCategory'
    ],
    [
        'method'  => 'POST',
        'url'     => '/categories-create',
        'name'    => 'admin.categories.create',
        'use'     => 'Admin/ManageCategoriesController',
        'action'  => 'create'
    ],
    // manage post
    [
        'method'  => 'GET',
        'url'     => '/admin-posts',
        'name'    => 'admin.posts',
        'use'     => 'Admin/ManagePostsController',
        'action'  => 'index'
    ],
    [
        'method'  => 'POST',
        'url'     => '/posts-create-form',
        'name'    => 'admin.posts.showFormCreate',
        'use'     => 'Admin/ManagePostsController',
        'action'  => 'showFormCreate'
    ],
    [
        'method'  => 'POST',
        'url'     => '/posts-create',
        'name'    => 'admin.posts.create',
        'use'     => 'Admin/ManagePostsController',
        'action'  => 'create'
    ],
    [
        'method'  => 'POST',
        'url'     => '/posts-delete',
        'name'    => 'admin.posts.delete',
        'use'     => 'Admin/ManagePostsController',
        'action'  => 'delete'
    ],
    [
        'method'  => 'GET',
        'url'     => '/detail_products',
        'name'    => '/manage_posts/detail',
        'use'     => 'Admin/ManagePostsController',
        'action'  => 'detail'
    ],
    [
        'method'  => 'POST',
        'url'     => '/posts-edit',
        'name'    => 'admin.posts.showFormEdit',
        'use'     => 'Admin/ManagePostsController',
        'action'  => 'showFormEdit'
    ],
    [
        'method'  => 'POST',
        'url'     => '/posts-update',
        'name'    => 'admin.posts.update',
        'use'     => 'Admin/ManagePostsController',
        'action'  => 'update'
    ],
    // manage users
    [
        'method'  => 'GET',
        'url'     => '/admin-users',
        'name'    => 'admin.users',
        'use'     => 'Admin/ManageUsersController',
        'action'  => 'index'
    ],
    [
        'method'  => 'POST',
        'url'     => '/users-edit',
        'name'    => 'admin.users.edit',
        'use'     => 'Admin/ManageUsersController',
        'action'  => 'showFormEdit'
    ],
    [
        'method'  => 'POST',
        'url'     => '/users-update',
        'name'    => 'admin.users.update',
        'use'     => 'Admin/ManageUsersController',
        'action'  => 'updateUserAdmin'
    ],
    [
        'method'  => 'POST',
        'url'     => '/users-delete',
        'name'    => 'admin.users.delete',
        'use'     => 'Admin/ManageUsersController',
        'action'  => 'delete'
    ],
    [
        'method'  => 'POST',
        'url'     => '/users-create-form',
        'name'    => 'admin.users.showFormCreate',
        'use'     => 'Admin/ManageUsersController',
        'action'  => 'showFormCreate'
    ],
    [
        'method'  => 'POST',
        'url'     => '/users-create',
        'name'    => 'admin.users.create',
        'use'     => 'Admin/ManageUsersController',
        'action'  => 'create'
    ],
    [
        'method'  => 'POST',
        'url'     => '/check-username-admin',
        'name'    => 'admin.users.check-username',
        'use'     => 'Admin/ManageUsersController',
        'action'  => 'checkUsername'
    ],
    // manage orders
    [
        'method'  => 'GET',
        'url'     => '/admin-orders',
        'name'    => 'admin.orders',
        'use'     => 'Admin/ManageOrdersController',
        'action'  => 'index'
    ],
    [
        'method'  => 'GET',
        'url'     => '/detail_orders',
        'name'    => '/manage_orders/detail',
        'use'     => 'Admin/ManageOrdersController',
        'action'  => 'detail'
    ]

); 

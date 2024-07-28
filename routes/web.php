<?php

use App\Livewire\Admin\AdminDashboardComponent;
use App\Livewire\CategoryComponent;
use App\Livewire\DetailsComponent;
use App\Livewire\HomeComponent;
use App\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\SearchComponent;
use App\Livewire\Admin\AdminCategoryComponent;
use App\Livewire\Admin\AdminAddCategoryComponent;
use App\Livewire\Admin\AdminEditCategoryComponent;
use App\Livewire\Admin\AdminProductComponent;
use App\Livewire\Admin\AdminAddProductComponent;
use App\Livewire\Admin\AdminEditProductComponent;
use App\Livewire\Admin\AdminHomeSliderComponent;
use App\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Livewire\Admin\AdminHomeCategoryComponent;
use App\Livewire\Admin\AdminSaleComponent;
use App\Livewire\WishlistComponent;
use App\Livewire\Admin\AdminCouponsComponent;
use App\Livewire\Admin\AdminAddCouponsComponent;
use App\Livewire\Admin\AdminEditCouponsComponent;
use App\Livewire\ThankyouComponent;
use App\Livewire\Admin\AdminOrderComponent;
use App\Livewire\Admin\AdminOrderDetailsComponent;
use App\Livewire\User\UserOrdersComponent;
use App\Livewire\User\UserOrderDetailsComponent;
use App\Livewire\User\UserReviewComponent;
use App\Livewire\User\UserChangePasswordComponent;
use App\Livewire\ContactComponent;
use App\Livewire\Admin\AdminContactComponent;
use App\Livewire\Admin\AdminSettingComponent;
use App\Livewire\User\UserProfileComponent;
use App\Livewire\User\UserEditProfileComponent;
use App\Livewire\Admin\AdminAttributesComponent;
use App\Livewire\Admin\AdminAddAttributesComponent;
use App\Livewire\Admin\AdminEditAttributesComponent;
use App\Livewire\AboutusComponent;
use App\Livewire\PrivacyPolicyComponent;
use App\Livewire\ReturnPolicyComponent;
use App\Livewire\ConditionComponent;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function(){
    return view('welcome');
});
*/
Route::get('/',HomeComponent::class);
//Route::get('/shop',\App\Livewire\ShopComponent::class);
//Route::get('/cart',\App\livewire\CartComponent::class)->name('product.cart');
//Route::get('/checkout', \App\livewire\CheckoutComponent::class)->name('checkout');
//Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
//Route::get('/product-category/{category_slug}/{scategory_slug?}', CategoryComponent::class)->name('product.category');
//Route::get('/search', SearchComponent::class)->name('product.search');
//Route::get('/wishlist', WishlistComponent::class)->name('product.wishlist');
//Route::get('/thank-you', ThankyouComponent::class)->name('thankyou');
//Route::get('/contact-us', ContactComponent::class)->name('contact');
//Route::get('/about-us', AboutusComponent::class);
//Route::get('/privacy-policy',PrivacyPolicyComponent::class);
//Route::get('/condition',ConditionComponent::class);
//Route::get('/return',ReturnPolicyComponent::class);


// Route::get('/products', AdminProductComponent::class);
// Route::get('coupons', AdminCouponsComponent::class);
//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});

//for user
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    //Route::get('/user/orders', UserOrdersComponent::class)->name('user.orders');
    //Route::get('/user/orders/{order_id}', UserOrderDetailsComponent::class)->name('user.orderdetails');
    //Route::get('/user/review/{order_item_id}', UserReviewComponent::class)->name('user.review');
    //Route::get('/user/change-password', UserChangePasswordComponent::class)->name('user.changepassword');
    //Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
    //Route::get('/user/profile/edit', UserEditProfileComponent::class)->name('user.editprofile');
});

//for admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
   // Route::get('/admin/category/edit', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/category/edit/{category_slug}/{scategory_slug?}', AdminEditCategoryComponent::class)->name('admin.editcategory');

    //Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    //Route::get('/admin/products/add', AdminAddProductComponent::class)->name('admin.addproduct');
    //Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');

    //Route::get('/admin/slider', AdminHomeSliderComponent::class)->name('admin.homeslider');
    //Route::get('/admin/slider/add', AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    //Route::get('/admin/slider/edit/{slide_id}', AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

    //Route::get('/admin/home-categories', AdminHomeCategoryComponent::class)->name('admin.homecategories');
    //Route::get('admin/sale', AdminSaleComponent::class)->name('admin.sale');

    //Route::get('/admin/coupons', AdminCouponsComponent::class)->name('admin.coupons');
    //Route::get('/admin/coupon/add', AdminAddCouponsComponent::class)->name('admin.addcoupon');
    //Route::get('/admin/coupon/edit/{coupon_id}', AdminEditCouponsComponent::class)->name('admin.editcoupon');

    //Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.orders');
    //Route::get('/admin/orders/{order_id}', AdminOrderDetailsComponent::class)->name('admin.orderdetails');
    
    //Route::get('/admin/contact-us', AdminContactComponent::class)->name('admin.contact');
    //Route::get('/admin/settings', AdminSettingComponent::class)->name('admin.settings');
    
    //Route::get('/admin/attributes', AdminAttributesComponent::class)->name('admin.attributes');
    //Route::get('/admin/attributes/add', AdminAddAttributesComponent::class)->name('admin.add_attributes');
    //Route::get('/admin/attributes/edit/{attribute_id}', AdminEditAttributesComponent::class)->name('admin.edit_attributes');

    //dont need below
    // Route::get('/admin/user', UserComponent::class)->name('admin.user');
    // Route::get('/admin/user/edit/{user_id}', EditUserComponent::class)->name('admin.editUser');
});

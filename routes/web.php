<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('view_checker',[ProductController::class,'view_checker']);
////////////////////////----SIDEBAR-----
Route::get('calander',[ProductController::class,'calander']);
Route::get('email',[ProductController::class,'email']);
Route::get('index',[ProductController::class,'index']);
Route::get('productlist',[ProductController::class,'productlist']);
Route::get('addproduct',[ProductController::class,'addproduct']);
Route::get('productdetails',[ProductController::class,'productdetails']);
Route::get('editproduct',[ProductController::class,'editproduct']);
Route::get('categorylist',[ProductController::class,'categorylist']);
Route::get('addcategory',[ProductController::class,'addcategory']);
Route::get('brandlist',[ProductController::class,'brandlist']);
Route::get('addbrand',[ProductController::class,'addbrand']);
Route::get('importproduct',[ProductController::class,'importproduct']);
Route::get('subcategorylist',[ProductController::class,'subcategorylist']);
Route::get('saleslist',[ProductController::class,'saleslist']);
Route::get('addsales',[ProductController::class,'addsales']);
Route::get('invoicereport',[ProductController::class,'invoicereport']);
Route::get('pos',[ProductController::class,'pos']);
Route::get('salesreturn',[ProductController::class,'salesreturn']);
Route::get('transferlist',[ProductController::class,'transferlist']);
Route::get('purchasereturnlist',[ProductController::class,'purchasereturnlist']);
Route::get('purchases',[ProductController::class,'purchases']);
Route::get('importpurchases',[ProductController::class,'importpurchases']);
Route::get('purchasesorderreport',[ProductController::class,'purchasesorderreport']);
Route::get('customerlist',[ProductController::class,'customerlist']);
Route::get('supplierlist',[ProductController::class,'supplierlist']);
Route::get('userlist',[ProductController::class,'userlist']);
Route::get('salesreport',[ProductController::class,'salesreport']);
Route::get('purchaseorderreport',[ProductController::class,'purchaseorderreport']);
Route::get('inventoryreport',[ProductController::class,'inventoryreport']);
Route::get('purchasereport',[ProductController::class,'purchasereport']);
Route::get('supplierreport',[ProductController::class,'supplierreport']);
Route::get('customerreport',[ProductController::class,'customerreport']);
Route::get('newuser',[ProductController::class,'newuser']);
Route::get('userslist',[ProductController::class,'userslist']);
Route::get('login',[ProductController::class,'login']);
Route::get('register',[ProductController::class,'register']);
Route::get('forgotpassword',[ProductController::class,'forgotpassword']);
Route::get('resetpassword',[ProductController::class,'resetpassword']);
Route::get('error404',[ProductController::class,'error404']);
Route::get('error500',[ProductController::class,'error500']);
Route::get('generalsettings',[ProductController::class,'generalsettings']);
Route::get('emailsettings',[ProductController::class,'emailsettings']);
Route::get('paymentsettings',[ProductController::class,'paymentsettings']);
Route::get('currencysettings',[ProductController::class,'currencysettings']);
Route::get('grouppermissions',[ProductController::class,'grouppermissions']);
Route::get('taxrates',[ProductController::class,'taxrates']);


////////////------------HEADER-----
Route::get('activities',[ProductController::class,'activities']);
Route::get('profile',[ProductController::class,'profile']);

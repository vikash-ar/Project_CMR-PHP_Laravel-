<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view_checker(){
         return view('components.dashboard.index');
    }
    public function liftingplan(){
         return view('components.layouts.liftingplan');
    }
    public function importliftingplan(){
         return view('components.stock.importliftingplan');
    }
    public function calander(){

         return view('components.products.calander');
    }
    public function email(){

         return view('components.products.email');
    }
    public function index(){

         return view('components.dashboard.index');
    }
    public function productlist(){

         return view('components.products.productlist');
    }
    public function addproduct(){

         return view('components.products.addproduct');
    }
    public function productdetails(){

         return view('components.products.productdetails');
    }
    public function editproduct(){

         return view('components.products.editproduct');
    }
    public function categorylist(){

         return view('components.products.categorylist');
    }
    public function addcategory(){

         return view('components.products.addcategory');
    }
    public function brandlist(){

         return view('components.products.brandlist');
    }
    public function addbrand(){

         return view('components.products.addbrand');
    }
    public function subcategorylist(){

         return view('components.products.subcategorylist');
    }
    public function importproduct(){

         return view('components.products.importproduct');
    }
    public function saleslist(){

         return view('components.sales.saleslist');
    }
    public function addsales(){

         return view('components.sales.addsales');
    }
    public function invoicereport(){

         return view('components.sales.invoicereport');
    }
    public function pos(){

         return view('components.sales.pos');
    }
    public function transferlist(){

         return view('components.sales.transferlist');
    }
    public function salesreturn(){

         return view('components.sales.salesreturn');
    }

    public function purchasereturnlist(){

         return view('components.sales.purchasereturnlist');
    }
    public function purchases(){

         return view('components.purchases.purchases');
    }
    public function importpurchases(){

         return view('components.purchases.importpurchases');
    }
    public function purchasesorderreport(){

        return view('components.purchases.purchaseorderreport');
   }
    public function customerlist(){

        return view('components.peoples.customerlist');
   }
    public function supplierlist(){

        return view('components.peoples.supplierlist');
   }
    public function userlist(){

        return view('components.peoples.userlist');
   }
    public function salesreport(){

        return view('components.reports.salesreport');
   }
    public function purchaseorderreport(){

        return view('components.reports.purchaseorderreport');
   }
    public function inventoryreport(){

        return view('components.reports.inventoryreport');
   }
    public function purchasereport(){

        return view('components.reports.purchasereport');
   }
    public function supplierreport(){

        return view('components.reports.supplierreport');
   }
    public function customerreport(){

        return view('components.reports.customerreport');
   }
    public function newuser(){

        return view('components.usermanagement.newuser');
   }
    public function userslist(){

        return view('components.usermanagement.userslist');
   }
    public function login(){

        return view('components.pages.login');
   }
    public function register(){

        return view('components.pages.register');
   }
    public function forgotpassword(){

        return view('components.pages.forgotpassword');
   }
    public function resetpassword(){

        return view('components.pages.resetpassword');
   }
    public function error404(){

        return view('components.pages.error404');
   }
    public function error500(){

        return view('components.pages.error500');
   }
    public function generalsettings(){

        return view('components.settings.generalsettings');
   }
    public function emailsettings(){

        return view('components.settings.emailsettings');
   }
    public function paymentsettings(){

        return view('components.settings.paymentsettings');
   }
    public function currencysettings(){

        return view('components.settings.currencysettings');
   }
    public function grouppermissions(){

        return view('components.settings.grouppermissions');
   }
    public function taxrates(){

        return view('components.settings.taxrates');
   }
    public function activities(){

        return view('components.layouts.header.activities');
   }
    public function profile(){

        return view('components.layouts.header.profile');
   }



}

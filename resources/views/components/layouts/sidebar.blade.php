<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="submenu-open">
<h6 class="submenu-hdr">Main</h6>
<ul>
<li class="active">
<a href="{{url('index')}}"><i data-feather="grid"></i><span>Dashboard</span></a>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="smartphone"></i><span>Application</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="{{ url('calander') }}">Calendar</a></li>
<li><a href="{{ url('email')}}">Email</a></li>
<li><a href="{{ url('liftingplan')}}">Lifting Plan</a></li>
</ul>
</li>
</ul>
</li>

<li class="submenu-open">
    <h6 class="submenu-hdr">Stock</h6>
    <ul>
        <li>
            <a href="{{ url('liftingplan') }}">Lifting Plan</a>
        </li>
        <li>
            <a href="{{url('importliftingplan')}}">Import Lifting Plan</a>
        </li>
    </ul>
</li>

<li class="submenu-open">
<h6 class="submenu-hdr">Products</h6>
<ul>
<li><a href="{{url('productlist')}}"><i data-feather="box"></i><span>Products</span></a></li>
<li><a href="{{url('addproduct')}}"><i data-feather="plus-square"></i><span>Create Product</span></a></li>
<li><a href="{{url('categorylist')}}"><i data-feather="codepen"></i><span>Category</span></a></li>
<li><a href="{{url('brandlist')}}"><i data-feather="tag"></i><span>Brands</span></a></li>
<li><a href="{{url('subcategorylist')}}"><i data-feather="speaker"></i><span>Sub Category</span></a></li>
<li><a href="{{url('importproduct')}}"><i data-feather="minimize-2"></i><span>Import Products</span></a></li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">Sales</h6>
<ul>
<li><a href="{{url('saleslist')}}"><i data-feather="shopping-cart"></i><span>Sales</span></a></li>
<li><a href="{{url('invoicereport')}}"><i data-feather="file-text"></i><span>Invoices</span></a></li>
<li><a href="{{url('pos')}}"><i data-feather="hard-drive"></i><span>POS</a></li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="shuffle"></i><span>Transfer</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="{{url('transferlist')}}">Transfer List</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="corner-up-left"></i><span>Return</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="{{url('salesreturn')}}">Sales Return</a></li>
<li><a href="{{url('purchasereturnlist')}}">Purchase Return</a></li>
</ul>
</li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">Purchases</h6>
<ul>
<li><a href="{{url('purchases')}}"><i data-feather="shopping-bag"></i><span>Purchases</span></a></li>
<li><a href="{{url('importpurchases')}}"><i data-feather="minimize-2"></i><span>Import Purchases</span></a></li>
<li><a href="{{url('purchasesorderreport')}}"><i data-feather="file-minus"></i><span>Purchase Order</span></a></li>

</ul>
</li>

<li class="submenu-open">
<h6 class="submenu-hdr">Peoples</h6>
<ul>
<li><a href="{{url('customerlist')}}"><i data-feather="user"></i><span>Customers</span></a></li>
<li><a href="{{url('supplierlist')}}"><i data-feather="users"></i><span>Suppliers</span></a></li>
<li><a href="{{url('userlist')}}"><i data-feather="user-check"></i><span>Users</span></a></li>

</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">Reports</h6>
<ul>
<li><a href="{{url('salesreport')}}"><i data-feather="bar-chart-2"></i><span>Sales Report</span></a></li>
<li><a href="{{url('purchaseorderreport')}}"><i data-feather="pie-chart"></i><span>Purchase report</span></a></li>
<li><a href="{{url('inventoryreport')}}"><i data-feather="credit-card"></i><span>Inventory Report</span></a></li>
<li><a href="{{url('invoicereport')}}"><i data-feather="file"></i><span>Invoice Report</span></a></li>
<li><a href="{{url('purchasereport')}}"><i data-feather="bar-chart"></i><span>Purchase Report</span></a></li>
<li><a href="{{url('supplierreport')}}"><i data-feather="database"></i><span>Supplier Report</span></a></li>
<li><a href="{{url('customerreport')}}"><i data-feather="pie-chart"></i><span>Customer Report</span></a></li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">User Management</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="users"></i><span>Manage Users</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="{{url('newuser')}}">New User </a></li>
<li><a href="{{url('userslist')}}">Users List</a></li>
</ul>
</li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">Pages</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="shield"></i><span>Authentication</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="{{url('login')}}">Log in</a></li>
<li><a href="{{url('register')}}">Register</a></li>
<li><a href="{{url('forgotpassword')}}">Forgot Password</a></li>
<li><a href="{{url('resetpassword')}}">Reset Password</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="file-minus"></i><span>Error Pages</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="{{url('error404')}}">404 Error </a></li>
<li><a href="{{url('error500')}}">500 Error </a></li>
</ul>
</li>


<li class="submenu-open">
<h6 class="submenu-hdr">Settings</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="settings"></i><span>Settings</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="{{url('generalsettings')}}">General Settings</a></li>
<li><a href="{{url('emailsettings')}}">Email Settings</a></li>
<li><a href="{{url('paymentsettings')}}">Payment Settings</a></li>
<li><a href="{{url('currencysettings')}}">Currency Settings</a></li>
<li><a href="{{url('grouppermissions')}}">Group Permissions</a></li>
<li><a href="{{url('taxrates')}}">Tax Rates</a></li>
</ul>
</li>
<li>
<a href="{{url('login')}}"><i data-feather="log-out"></i><span>Logout</span> </a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>

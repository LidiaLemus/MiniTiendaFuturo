
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:App" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App.html">App</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Console" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Console.html">Console</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Console_Kernel" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Console/Kernel.html">Kernel</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Exceptions" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Exceptions.html">Exceptions</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Exceptions_Handler" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Exceptions/Handler.html">Handler</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Http" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http.html">Http</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Http_Controllers" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Controllers.html">Controllers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Http_Controllers_Auth" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Controllers/Auth.html">Auth</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Http_Controllers_Auth_ForgotPasswordController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/ForgotPasswordController.html">ForgotPasswordController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_LoginController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/LoginController.html">LoginController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_RegisterController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/RegisterController.html">RegisterController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_ResetPasswordController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/ResetPasswordController.html">ResetPasswordController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_VerificationController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/VerificationController.html">VerificationController</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_Http_Controllers_CompanyController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/CompanyController.html">CompanyController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Controller" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/Controller.html">Controller</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_CustomerController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/CustomerController.html">CustomerController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_EmployeeController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/EmployeeController.html">EmployeeController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_HomeController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/HomeController.html">HomeController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_ProductController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/ProductController.html">ProductController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_ProviderController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/ProviderController.html">ProviderController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_PurchaseController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/PurchaseController.html">PurchaseController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_PurchaseDetailController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/PurchaseDetailController.html">PurchaseDetailController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_SaleController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/SaleController.html">SaleController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_SaleDetailController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/SaleDetailController.html">SaleDetailController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_StocktakingController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/StocktakingController.html">StocktakingController</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Http_Middleware" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Middleware.html">Middleware</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Http_Middleware_Authenticate" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/Authenticate.html">Authenticate</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_CheckForMaintenanceMode" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/CheckForMaintenanceMode.html">CheckForMaintenanceMode</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_EncryptCookies" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/EncryptCookies.html">EncryptCookies</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_RedirectIfAuthenticated" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/RedirectIfAuthenticated.html">RedirectIfAuthenticated</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_TrimStrings" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/TrimStrings.html">TrimStrings</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_TrustProxies" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/TrustProxies.html">TrustProxies</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_VerifyCsrfToken" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/VerifyCsrfToken.html">VerifyCsrfToken</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_Http_Kernel" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Http/Kernel.html">Kernel</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Providers" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Providers.html">Providers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Providers_AppServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/AppServiceProvider.html">AppServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_AuthServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/AuthServiceProvider.html">AuthServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_BroadcastServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/BroadcastServiceProvider.html">BroadcastServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_EventServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/EventServiceProvider.html">EventServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_RouteServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/RouteServiceProvider.html">RouteServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_Company" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Company.html">Company</a>                    </div>                </li>                            <li data-name="class:App_Customer" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Customer.html">Customer</a>                    </div>                </li>                            <li data-name="class:App_Employee" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Employee.html">Employee</a>                    </div>                </li>                            <li data-name="class:App_Product" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Product.html">Product</a>                    </div>                </li>                            <li data-name="class:App_Provider" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Provider.html">Provider</a>                    </div>                </li>                            <li data-name="class:App_Purchase" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Purchase.html">Purchase</a>                    </div>                </li>                            <li data-name="class:App_Purchase_Detail" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Purchase_Detail.html">Purchase_Detail</a>                    </div>                </li>                            <li data-name="class:App_Sale" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Sale.html">Sale</a>                    </div>                </li>                            <li data-name="class:App_SaleDetail" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/SaleDetail.html">SaleDetail</a>                    </div>                </li>                            <li data-name="class:App_Stocktaking" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Stocktaking.html">Stocktaking</a>                    </div>                </li>                            <li data-name="class:App_User" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/User.html">User</a>                    </div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "App.html", "name": "App", "doc": "Namespace App"},{"type": "Namespace", "link": "App/Console.html", "name": "App\\Console", "doc": "Namespace App\\Console"},{"type": "Namespace", "link": "App/Exceptions.html", "name": "App\\Exceptions", "doc": "Namespace App\\Exceptions"},{"type": "Namespace", "link": "App/Http.html", "name": "App\\Http", "doc": "Namespace App\\Http"},{"type": "Namespace", "link": "App/Http/Controllers.html", "name": "App\\Http\\Controllers", "doc": "Namespace App\\Http\\Controllers"},{"type": "Namespace", "link": "App/Http/Controllers/Auth.html", "name": "App\\Http\\Controllers\\Auth", "doc": "Namespace App\\Http\\Controllers\\Auth"},{"type": "Namespace", "link": "App/Http/Middleware.html", "name": "App\\Http\\Middleware", "doc": "Namespace App\\Http\\Middleware"},{"type": "Namespace", "link": "App/Providers.html", "name": "App\\Providers", "doc": "Namespace App\\Providers"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Company.html", "name": "App\\Company", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Company", "fromLink": "App/Company.html", "link": "App/Company.html#method_providers", "name": "App\\Company::providers", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Console", "fromLink": "App/Console.html", "link": "App/Console/Kernel.html", "name": "App\\Console\\Kernel", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Console\\Kernel", "fromLink": "App/Console/Kernel.html", "link": "App/Console/Kernel.html#method_schedule", "name": "App\\Console\\Kernel::schedule", "doc": "&quot;Define the application&#039;s command schedule.&quot;"},
                    {"type": "Method", "fromName": "App\\Console\\Kernel", "fromLink": "App/Console/Kernel.html", "link": "App/Console/Kernel.html#method_commands", "name": "App\\Console\\Kernel::commands", "doc": "&quot;Register the commands for the application.&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Customer.html", "name": "App\\Customer", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Customer", "fromLink": "App/Customer.html", "link": "App/Customer.html#method_sales", "name": "App\\Customer::sales", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Employee.html", "name": "App\\Employee", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Employee", "fromLink": "App/Employee.html", "link": "App/Employee.html#method_sales", "name": "App\\Employee::sales", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Exceptions", "fromLink": "App/Exceptions.html", "link": "App/Exceptions/Handler.html", "name": "App\\Exceptions\\Handler", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Exceptions\\Handler", "fromLink": "App/Exceptions/Handler.html", "link": "App/Exceptions/Handler.html#method_report", "name": "App\\Exceptions\\Handler::report", "doc": "&quot;Report or log an exception.&quot;"},
                    {"type": "Method", "fromName": "App\\Exceptions\\Handler", "fromLink": "App/Exceptions/Handler.html", "link": "App/Exceptions/Handler.html#method_render", "name": "App\\Exceptions\\Handler::render", "doc": "&quot;Render an exception into an HTTP response.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/ForgotPasswordController.html", "name": "App\\Http\\Controllers\\Auth\\ForgotPasswordController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\ForgotPasswordController", "fromLink": "App/Http/Controllers/Auth/ForgotPasswordController.html", "link": "App/Http/Controllers/Auth/ForgotPasswordController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\ForgotPasswordController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/LoginController.html", "name": "App\\Http\\Controllers\\Auth\\LoginController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\LoginController", "fromLink": "App/Http/Controllers/Auth/LoginController.html", "link": "App/Http/Controllers/Auth/LoginController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\LoginController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/RegisterController.html", "name": "App\\Http\\Controllers\\Auth\\RegisterController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\RegisterController", "fromLink": "App/Http/Controllers/Auth/RegisterController.html", "link": "App/Http/Controllers/Auth/RegisterController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\RegisterController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\RegisterController", "fromLink": "App/Http/Controllers/Auth/RegisterController.html", "link": "App/Http/Controllers/Auth/RegisterController.html#method_validator", "name": "App\\Http\\Controllers\\Auth\\RegisterController::validator", "doc": "&quot;Get a validator for an incoming registration request.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\RegisterController", "fromLink": "App/Http/Controllers/Auth/RegisterController.html", "link": "App/Http/Controllers/Auth/RegisterController.html#method_create", "name": "App\\Http\\Controllers\\Auth\\RegisterController::create", "doc": "&quot;Create a new user instance after a valid registration.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/ResetPasswordController.html", "name": "App\\Http\\Controllers\\Auth\\ResetPasswordController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\ResetPasswordController", "fromLink": "App/Http/Controllers/Auth/ResetPasswordController.html", "link": "App/Http/Controllers/Auth/ResetPasswordController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\ResetPasswordController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers\\Auth", "fromLink": "App/Http/Controllers/Auth.html", "link": "App/Http/Controllers/Auth/VerificationController.html", "name": "App\\Http\\Controllers\\Auth\\VerificationController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\Auth\\VerificationController", "fromLink": "App/Http/Controllers/Auth/VerificationController.html", "link": "App/Http/Controllers/Auth/VerificationController.html#method___construct", "name": "App\\Http\\Controllers\\Auth\\VerificationController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/CompanyController.html", "name": "App\\Http\\Controllers\\CompanyController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\CompanyController", "fromLink": "App/Http/Controllers/CompanyController.html", "link": "App/Http/Controllers/CompanyController.html#method___construct", "name": "App\\Http\\Controllers\\CompanyController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CompanyController", "fromLink": "App/Http/Controllers/CompanyController.html", "link": "App/Http/Controllers/CompanyController.html#method_index", "name": "App\\Http\\Controllers\\CompanyController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CompanyController", "fromLink": "App/Http/Controllers/CompanyController.html", "link": "App/Http/Controllers/CompanyController.html#method_create", "name": "App\\Http\\Controllers\\CompanyController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CompanyController", "fromLink": "App/Http/Controllers/CompanyController.html", "link": "App/Http/Controllers/CompanyController.html#method_store", "name": "App\\Http\\Controllers\\CompanyController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CompanyController", "fromLink": "App/Http/Controllers/CompanyController.html", "link": "App/Http/Controllers/CompanyController.html#method_show", "name": "App\\Http\\Controllers\\CompanyController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CompanyController", "fromLink": "App/Http/Controllers/CompanyController.html", "link": "App/Http/Controllers/CompanyController.html#method_edit", "name": "App\\Http\\Controllers\\CompanyController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CompanyController", "fromLink": "App/Http/Controllers/CompanyController.html", "link": "App/Http/Controllers/CompanyController.html#method_update", "name": "App\\Http\\Controllers\\CompanyController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CompanyController", "fromLink": "App/Http/Controllers/CompanyController.html", "link": "App/Http/Controllers/CompanyController.html#method_destroy", "name": "App\\Http\\Controllers\\CompanyController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/Controller.html", "name": "App\\Http\\Controllers\\Controller", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/CustomerController.html", "name": "App\\Http\\Controllers\\CustomerController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\CustomerController", "fromLink": "App/Http/Controllers/CustomerController.html", "link": "App/Http/Controllers/CustomerController.html#method___construct", "name": "App\\Http\\Controllers\\CustomerController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CustomerController", "fromLink": "App/Http/Controllers/CustomerController.html", "link": "App/Http/Controllers/CustomerController.html#method_index", "name": "App\\Http\\Controllers\\CustomerController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CustomerController", "fromLink": "App/Http/Controllers/CustomerController.html", "link": "App/Http/Controllers/CustomerController.html#method_create", "name": "App\\Http\\Controllers\\CustomerController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CustomerController", "fromLink": "App/Http/Controllers/CustomerController.html", "link": "App/Http/Controllers/CustomerController.html#method_store", "name": "App\\Http\\Controllers\\CustomerController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CustomerController", "fromLink": "App/Http/Controllers/CustomerController.html", "link": "App/Http/Controllers/CustomerController.html#method_show", "name": "App\\Http\\Controllers\\CustomerController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CustomerController", "fromLink": "App/Http/Controllers/CustomerController.html", "link": "App/Http/Controllers/CustomerController.html#method_edit", "name": "App\\Http\\Controllers\\CustomerController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CustomerController", "fromLink": "App/Http/Controllers/CustomerController.html", "link": "App/Http/Controllers/CustomerController.html#method_update", "name": "App\\Http\\Controllers\\CustomerController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\CustomerController", "fromLink": "App/Http/Controllers/CustomerController.html", "link": "App/Http/Controllers/CustomerController.html#method_destroy", "name": "App\\Http\\Controllers\\CustomerController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/EmployeeController.html", "name": "App\\Http\\Controllers\\EmployeeController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\EmployeeController", "fromLink": "App/Http/Controllers/EmployeeController.html", "link": "App/Http/Controllers/EmployeeController.html#method___construct", "name": "App\\Http\\Controllers\\EmployeeController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\EmployeeController", "fromLink": "App/Http/Controllers/EmployeeController.html", "link": "App/Http/Controllers/EmployeeController.html#method_index", "name": "App\\Http\\Controllers\\EmployeeController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\EmployeeController", "fromLink": "App/Http/Controllers/EmployeeController.html", "link": "App/Http/Controllers/EmployeeController.html#method_create", "name": "App\\Http\\Controllers\\EmployeeController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\EmployeeController", "fromLink": "App/Http/Controllers/EmployeeController.html", "link": "App/Http/Controllers/EmployeeController.html#method_store", "name": "App\\Http\\Controllers\\EmployeeController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\EmployeeController", "fromLink": "App/Http/Controllers/EmployeeController.html", "link": "App/Http/Controllers/EmployeeController.html#method_show", "name": "App\\Http\\Controllers\\EmployeeController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\EmployeeController", "fromLink": "App/Http/Controllers/EmployeeController.html", "link": "App/Http/Controllers/EmployeeController.html#method_edit", "name": "App\\Http\\Controllers\\EmployeeController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\EmployeeController", "fromLink": "App/Http/Controllers/EmployeeController.html", "link": "App/Http/Controllers/EmployeeController.html#method_update", "name": "App\\Http\\Controllers\\EmployeeController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\EmployeeController", "fromLink": "App/Http/Controllers/EmployeeController.html", "link": "App/Http/Controllers/EmployeeController.html#method_destroy", "name": "App\\Http\\Controllers\\EmployeeController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/HomeController.html", "name": "App\\Http\\Controllers\\HomeController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\HomeController", "fromLink": "App/Http/Controllers/HomeController.html", "link": "App/Http/Controllers/HomeController.html#method___construct", "name": "App\\Http\\Controllers\\HomeController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\HomeController", "fromLink": "App/Http/Controllers/HomeController.html", "link": "App/Http/Controllers/HomeController.html#method_index", "name": "App\\Http\\Controllers\\HomeController::index", "doc": "&quot;Show the application dashboard.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/ProductController.html", "name": "App\\Http\\Controllers\\ProductController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\ProductController", "fromLink": "App/Http/Controllers/ProductController.html", "link": "App/Http/Controllers/ProductController.html#method___construct", "name": "App\\Http\\Controllers\\ProductController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProductController", "fromLink": "App/Http/Controllers/ProductController.html", "link": "App/Http/Controllers/ProductController.html#method_index", "name": "App\\Http\\Controllers\\ProductController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProductController", "fromLink": "App/Http/Controllers/ProductController.html", "link": "App/Http/Controllers/ProductController.html#method_create", "name": "App\\Http\\Controllers\\ProductController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProductController", "fromLink": "App/Http/Controllers/ProductController.html", "link": "App/Http/Controllers/ProductController.html#method_store", "name": "App\\Http\\Controllers\\ProductController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProductController", "fromLink": "App/Http/Controllers/ProductController.html", "link": "App/Http/Controllers/ProductController.html#method_show", "name": "App\\Http\\Controllers\\ProductController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProductController", "fromLink": "App/Http/Controllers/ProductController.html", "link": "App/Http/Controllers/ProductController.html#method_edit", "name": "App\\Http\\Controllers\\ProductController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProductController", "fromLink": "App/Http/Controllers/ProductController.html", "link": "App/Http/Controllers/ProductController.html#method_update", "name": "App\\Http\\Controllers\\ProductController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProductController", "fromLink": "App/Http/Controllers/ProductController.html", "link": "App/Http/Controllers/ProductController.html#method_destroy", "name": "App\\Http\\Controllers\\ProductController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/ProviderController.html", "name": "App\\Http\\Controllers\\ProviderController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\ProviderController", "fromLink": "App/Http/Controllers/ProviderController.html", "link": "App/Http/Controllers/ProviderController.html#method___construct", "name": "App\\Http\\Controllers\\ProviderController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProviderController", "fromLink": "App/Http/Controllers/ProviderController.html", "link": "App/Http/Controllers/ProviderController.html#method_index", "name": "App\\Http\\Controllers\\ProviderController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProviderController", "fromLink": "App/Http/Controllers/ProviderController.html", "link": "App/Http/Controllers/ProviderController.html#method_create", "name": "App\\Http\\Controllers\\ProviderController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProviderController", "fromLink": "App/Http/Controllers/ProviderController.html", "link": "App/Http/Controllers/ProviderController.html#method_store", "name": "App\\Http\\Controllers\\ProviderController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProviderController", "fromLink": "App/Http/Controllers/ProviderController.html", "link": "App/Http/Controllers/ProviderController.html#method_show", "name": "App\\Http\\Controllers\\ProviderController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProviderController", "fromLink": "App/Http/Controllers/ProviderController.html", "link": "App/Http/Controllers/ProviderController.html#method_edit", "name": "App\\Http\\Controllers\\ProviderController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProviderController", "fromLink": "App/Http/Controllers/ProviderController.html", "link": "App/Http/Controllers/ProviderController.html#method_update", "name": "App\\Http\\Controllers\\ProviderController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\ProviderController", "fromLink": "App/Http/Controllers/ProviderController.html", "link": "App/Http/Controllers/ProviderController.html#method_destroy", "name": "App\\Http\\Controllers\\ProviderController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/PurchaseController.html", "name": "App\\Http\\Controllers\\PurchaseController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseController", "fromLink": "App/Http/Controllers/PurchaseController.html", "link": "App/Http/Controllers/PurchaseController.html#method___construct", "name": "App\\Http\\Controllers\\PurchaseController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseController", "fromLink": "App/Http/Controllers/PurchaseController.html", "link": "App/Http/Controllers/PurchaseController.html#method_index", "name": "App\\Http\\Controllers\\PurchaseController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseController", "fromLink": "App/Http/Controllers/PurchaseController.html", "link": "App/Http/Controllers/PurchaseController.html#method_create", "name": "App\\Http\\Controllers\\PurchaseController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseController", "fromLink": "App/Http/Controllers/PurchaseController.html", "link": "App/Http/Controllers/PurchaseController.html#method_store", "name": "App\\Http\\Controllers\\PurchaseController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseController", "fromLink": "App/Http/Controllers/PurchaseController.html", "link": "App/Http/Controllers/PurchaseController.html#method_show", "name": "App\\Http\\Controllers\\PurchaseController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseController", "fromLink": "App/Http/Controllers/PurchaseController.html", "link": "App/Http/Controllers/PurchaseController.html#method_edit", "name": "App\\Http\\Controllers\\PurchaseController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseController", "fromLink": "App/Http/Controllers/PurchaseController.html", "link": "App/Http/Controllers/PurchaseController.html#method_update", "name": "App\\Http\\Controllers\\PurchaseController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseController", "fromLink": "App/Http/Controllers/PurchaseController.html", "link": "App/Http/Controllers/PurchaseController.html#method_destroy", "name": "App\\Http\\Controllers\\PurchaseController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/PurchaseDetailController.html", "name": "App\\Http\\Controllers\\PurchaseDetailController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseDetailController", "fromLink": "App/Http/Controllers/PurchaseDetailController.html", "link": "App/Http/Controllers/PurchaseDetailController.html#method___construct", "name": "App\\Http\\Controllers\\PurchaseDetailController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseDetailController", "fromLink": "App/Http/Controllers/PurchaseDetailController.html", "link": "App/Http/Controllers/PurchaseDetailController.html#method_index", "name": "App\\Http\\Controllers\\PurchaseDetailController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseDetailController", "fromLink": "App/Http/Controllers/PurchaseDetailController.html", "link": "App/Http/Controllers/PurchaseDetailController.html#method_create", "name": "App\\Http\\Controllers\\PurchaseDetailController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseDetailController", "fromLink": "App/Http/Controllers/PurchaseDetailController.html", "link": "App/Http/Controllers/PurchaseDetailController.html#method_store", "name": "App\\Http\\Controllers\\PurchaseDetailController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseDetailController", "fromLink": "App/Http/Controllers/PurchaseDetailController.html", "link": "App/Http/Controllers/PurchaseDetailController.html#method_show", "name": "App\\Http\\Controllers\\PurchaseDetailController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseDetailController", "fromLink": "App/Http/Controllers/PurchaseDetailController.html", "link": "App/Http/Controllers/PurchaseDetailController.html#method_edit", "name": "App\\Http\\Controllers\\PurchaseDetailController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseDetailController", "fromLink": "App/Http/Controllers/PurchaseDetailController.html", "link": "App/Http/Controllers/PurchaseDetailController.html#method_update", "name": "App\\Http\\Controllers\\PurchaseDetailController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\PurchaseDetailController", "fromLink": "App/Http/Controllers/PurchaseDetailController.html", "link": "App/Http/Controllers/PurchaseDetailController.html#method_destroy", "name": "App\\Http\\Controllers\\PurchaseDetailController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/SaleController.html", "name": "App\\Http\\Controllers\\SaleController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleController", "fromLink": "App/Http/Controllers/SaleController.html", "link": "App/Http/Controllers/SaleController.html#method___construct", "name": "App\\Http\\Controllers\\SaleController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleController", "fromLink": "App/Http/Controllers/SaleController.html", "link": "App/Http/Controllers/SaleController.html#method_index", "name": "App\\Http\\Controllers\\SaleController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleController", "fromLink": "App/Http/Controllers/SaleController.html", "link": "App/Http/Controllers/SaleController.html#method_create", "name": "App\\Http\\Controllers\\SaleController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleController", "fromLink": "App/Http/Controllers/SaleController.html", "link": "App/Http/Controllers/SaleController.html#method_store", "name": "App\\Http\\Controllers\\SaleController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleController", "fromLink": "App/Http/Controllers/SaleController.html", "link": "App/Http/Controllers/SaleController.html#method_show", "name": "App\\Http\\Controllers\\SaleController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleController", "fromLink": "App/Http/Controllers/SaleController.html", "link": "App/Http/Controllers/SaleController.html#method_edit", "name": "App\\Http\\Controllers\\SaleController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleController", "fromLink": "App/Http/Controllers/SaleController.html", "link": "App/Http/Controllers/SaleController.html#method_update", "name": "App\\Http\\Controllers\\SaleController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleController", "fromLink": "App/Http/Controllers/SaleController.html", "link": "App/Http/Controllers/SaleController.html#method_destroy", "name": "App\\Http\\Controllers\\SaleController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/SaleDetailController.html", "name": "App\\Http\\Controllers\\SaleDetailController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleDetailController", "fromLink": "App/Http/Controllers/SaleDetailController.html", "link": "App/Http/Controllers/SaleDetailController.html#method___construct", "name": "App\\Http\\Controllers\\SaleDetailController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleDetailController", "fromLink": "App/Http/Controllers/SaleDetailController.html", "link": "App/Http/Controllers/SaleDetailController.html#method_index", "name": "App\\Http\\Controllers\\SaleDetailController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleDetailController", "fromLink": "App/Http/Controllers/SaleDetailController.html", "link": "App/Http/Controllers/SaleDetailController.html#method_create", "name": "App\\Http\\Controllers\\SaleDetailController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleDetailController", "fromLink": "App/Http/Controllers/SaleDetailController.html", "link": "App/Http/Controllers/SaleDetailController.html#method_store", "name": "App\\Http\\Controllers\\SaleDetailController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleDetailController", "fromLink": "App/Http/Controllers/SaleDetailController.html", "link": "App/Http/Controllers/SaleDetailController.html#method_show", "name": "App\\Http\\Controllers\\SaleDetailController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleDetailController", "fromLink": "App/Http/Controllers/SaleDetailController.html", "link": "App/Http/Controllers/SaleDetailController.html#method_edit", "name": "App\\Http\\Controllers\\SaleDetailController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleDetailController", "fromLink": "App/Http/Controllers/SaleDetailController.html", "link": "App/Http/Controllers/SaleDetailController.html#method_update", "name": "App\\Http\\Controllers\\SaleDetailController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\SaleDetailController", "fromLink": "App/Http/Controllers/SaleDetailController.html", "link": "App/Http/Controllers/SaleDetailController.html#method_destroy", "name": "App\\Http\\Controllers\\SaleDetailController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Controllers", "fromLink": "App/Http/Controllers.html", "link": "App/Http/Controllers/StocktakingController.html", "name": "App\\Http\\Controllers\\StocktakingController", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Controllers\\StocktakingController", "fromLink": "App/Http/Controllers/StocktakingController.html", "link": "App/Http/Controllers/StocktakingController.html#method___construct", "name": "App\\Http\\Controllers\\StocktakingController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\StocktakingController", "fromLink": "App/Http/Controllers/StocktakingController.html", "link": "App/Http/Controllers/StocktakingController.html#method_index", "name": "App\\Http\\Controllers\\StocktakingController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\StocktakingController", "fromLink": "App/Http/Controllers/StocktakingController.html", "link": "App/Http/Controllers/StocktakingController.html#method_create", "name": "App\\Http\\Controllers\\StocktakingController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\StocktakingController", "fromLink": "App/Http/Controllers/StocktakingController.html", "link": "App/Http/Controllers/StocktakingController.html#method_store", "name": "App\\Http\\Controllers\\StocktakingController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\StocktakingController", "fromLink": "App/Http/Controllers/StocktakingController.html", "link": "App/Http/Controllers/StocktakingController.html#method_show", "name": "App\\Http\\Controllers\\StocktakingController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\StocktakingController", "fromLink": "App/Http/Controllers/StocktakingController.html", "link": "App/Http/Controllers/StocktakingController.html#method_edit", "name": "App\\Http\\Controllers\\StocktakingController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\StocktakingController", "fromLink": "App/Http/Controllers/StocktakingController.html", "link": "App/Http/Controllers/StocktakingController.html#method_update", "name": "App\\Http\\Controllers\\StocktakingController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "App\\Http\\Controllers\\StocktakingController", "fromLink": "App/Http/Controllers/StocktakingController.html", "link": "App/Http/Controllers/StocktakingController.html#method_destroy", "name": "App\\Http\\Controllers\\StocktakingController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http", "fromLink": "App/Http.html", "link": "App/Http/Kernel.html", "name": "App\\Http\\Kernel", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/Authenticate.html", "name": "App\\Http\\Middleware\\Authenticate", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Middleware\\Authenticate", "fromLink": "App/Http/Middleware/Authenticate.html", "link": "App/Http/Middleware/Authenticate.html#method_redirectTo", "name": "App\\Http\\Middleware\\Authenticate::redirectTo", "doc": "&quot;Get the path the user should be redirected to when they are not authenticated.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/CheckForMaintenanceMode.html", "name": "App\\Http\\Middleware\\CheckForMaintenanceMode", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/EncryptCookies.html", "name": "App\\Http\\Middleware\\EncryptCookies", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/RedirectIfAuthenticated.html", "name": "App\\Http\\Middleware\\RedirectIfAuthenticated", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Http\\Middleware\\RedirectIfAuthenticated", "fromLink": "App/Http/Middleware/RedirectIfAuthenticated.html", "link": "App/Http/Middleware/RedirectIfAuthenticated.html#method_handle", "name": "App\\Http\\Middleware\\RedirectIfAuthenticated::handle", "doc": "&quot;Handle an incoming request.&quot;"},
            
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/TrimStrings.html", "name": "App\\Http\\Middleware\\TrimStrings", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/TrustProxies.html", "name": "App\\Http\\Middleware\\TrustProxies", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Http\\Middleware", "fromLink": "App/Http/Middleware.html", "link": "App/Http/Middleware/VerifyCsrfToken.html", "name": "App\\Http\\Middleware\\VerifyCsrfToken", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Product.html", "name": "App\\Product", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Product", "fromLink": "App/Product.html", "link": "App/Product.html#method_product_has_sales", "name": "App\\Product::product_has_sales", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Product", "fromLink": "App/Product.html", "link": "App/Product.html#method_purchase_details", "name": "App\\Product::purchase_details", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Provider.html", "name": "App\\Provider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Provider", "fromLink": "App/Provider.html", "link": "App/Provider.html#method_company", "name": "App\\Provider::company", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Provider", "fromLink": "App/Provider.html", "link": "App/Provider.html#method_purcharseDetail", "name": "App\\Provider::purcharseDetail", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/AppServiceProvider.html", "name": "App\\Providers\\AppServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\AppServiceProvider", "fromLink": "App/Providers/AppServiceProvider.html", "link": "App/Providers/AppServiceProvider.html#method_register", "name": "App\\Providers\\AppServiceProvider::register", "doc": "&quot;Register any application services.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\AppServiceProvider", "fromLink": "App/Providers/AppServiceProvider.html", "link": "App/Providers/AppServiceProvider.html#method_boot", "name": "App\\Providers\\AppServiceProvider::boot", "doc": "&quot;Bootstrap any application services.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/AuthServiceProvider.html", "name": "App\\Providers\\AuthServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\AuthServiceProvider", "fromLink": "App/Providers/AuthServiceProvider.html", "link": "App/Providers/AuthServiceProvider.html#method_boot", "name": "App\\Providers\\AuthServiceProvider::boot", "doc": "&quot;Register any authentication \/ authorization services.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/BroadcastServiceProvider.html", "name": "App\\Providers\\BroadcastServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\BroadcastServiceProvider", "fromLink": "App/Providers/BroadcastServiceProvider.html", "link": "App/Providers/BroadcastServiceProvider.html#method_boot", "name": "App\\Providers\\BroadcastServiceProvider::boot", "doc": "&quot;Bootstrap any application services.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/EventServiceProvider.html", "name": "App\\Providers\\EventServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\EventServiceProvider", "fromLink": "App/Providers/EventServiceProvider.html", "link": "App/Providers/EventServiceProvider.html#method_boot", "name": "App\\Providers\\EventServiceProvider::boot", "doc": "&quot;Register any events for your application.&quot;"},
            
            {"type": "Class", "fromName": "App\\Providers", "fromLink": "App/Providers.html", "link": "App/Providers/RouteServiceProvider.html", "name": "App\\Providers\\RouteServiceProvider", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Providers\\RouteServiceProvider", "fromLink": "App/Providers/RouteServiceProvider.html", "link": "App/Providers/RouteServiceProvider.html#method_boot", "name": "App\\Providers\\RouteServiceProvider::boot", "doc": "&quot;Define your route model bindings, pattern filters, etc.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\RouteServiceProvider", "fromLink": "App/Providers/RouteServiceProvider.html", "link": "App/Providers/RouteServiceProvider.html#method_map", "name": "App\\Providers\\RouteServiceProvider::map", "doc": "&quot;Define the routes for the application.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\RouteServiceProvider", "fromLink": "App/Providers/RouteServiceProvider.html", "link": "App/Providers/RouteServiceProvider.html#method_mapWebRoutes", "name": "App\\Providers\\RouteServiceProvider::mapWebRoutes", "doc": "&quot;Define the \&quot;web\&quot; routes for the application.&quot;"},
                    {"type": "Method", "fromName": "App\\Providers\\RouteServiceProvider", "fromLink": "App/Providers/RouteServiceProvider.html", "link": "App/Providers/RouteServiceProvider.html#method_mapApiRoutes", "name": "App\\Providers\\RouteServiceProvider::mapApiRoutes", "doc": "&quot;Define the \&quot;api\&quot; routes for the application.&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Purchase.html", "name": "App\\Purchase", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Purchase", "fromLink": "App/Purchase.html", "link": "App/Purchase.html#method_purchase_details", "name": "App\\Purchase::purchase_details", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Purchase_Detail.html", "name": "App\\Purchase_Detail", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Purchase_Detail", "fromLink": "App/Purchase_Detail.html", "link": "App/Purchase_Detail.html#method_product", "name": "App\\Purchase_Detail::product", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Purchase_Detail", "fromLink": "App/Purchase_Detail.html", "link": "App/Purchase_Detail.html#method_provider", "name": "App\\Purchase_Detail::provider", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Purchase_Detail", "fromLink": "App/Purchase_Detail.html", "link": "App/Purchase_Detail.html#method_purchase", "name": "App\\Purchase_Detail::purchase", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Sale.html", "name": "App\\Sale", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Sale", "fromLink": "App/Sale.html", "link": "App/Sale.html#method_product_has_sales", "name": "App\\Sale::product_has_sales", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Sale", "fromLink": "App/Sale.html", "link": "App/Sale.html#method_customer", "name": "App\\Sale::customer", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Sale", "fromLink": "App/Sale.html", "link": "App/Sale.html#method_employee", "name": "App\\Sale::employee", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/SaleDetail.html", "name": "App\\SaleDetail", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\SaleDetail", "fromLink": "App/SaleDetail.html", "link": "App/SaleDetail.html#method_product", "name": "App\\SaleDetail::product", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\SaleDetail", "fromLink": "App/SaleDetail.html", "link": "App/SaleDetail.html#method_sale", "name": "App\\SaleDetail::sale", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/Stocktaking.html", "name": "App\\Stocktaking", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Stocktaking", "fromLink": "App/Stocktaking.html", "link": "App/Stocktaking.html#method_product", "name": "App\\Stocktaking::product", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App", "fromLink": "App.html", "link": "App/User.html", "name": "App\\User", "doc": "&quot;&quot;"},
                    
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});



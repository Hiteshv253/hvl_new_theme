<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo">
        <a href="{{url('/')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
                @include('_partials.macros',["width"=>25,"withbg"=>'var(--bs-primary)'])
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">{{config('variables.templateName')}}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 ps ps--active-y">


        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Layouts</div>
            </a>


            <ul class="menu-sub">



                <li class="menu-item ">
                    <a href="http://127.0.0.1:8000/layouts/without-menu" class="menu-link">
                        <div>Without menu</div>
                    </a>


                </li>



                <li class="menu-item ">
                    <a href="http://127.0.0.1:8000/layouts/without-navbar" class="menu-link">
                        <div>Without navbar</div>
                    </a>


                </li>



                <li class="menu-item ">
                    <a href="http://127.0.0.1:8000/layouts/container" class="menu-link">
                        <div>Container</div>
                    </a>


                </li>



                <li class="menu-item ">
                    <a href="http://127.0.0.1:8000/layouts/fluid" class="menu-link">
                        <div>Fluid</div>
                    </a>


                </li>



                <li class="menu-item ">
                    <a href="http://127.0.0.1:8000/layouts/blank" class="menu-link" target="_blank">
                        <div>Blank</div>
                    </a>


                </li>
            </ul>
        </li>   
        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Layouts</div>
            </a>


            <ul class="menu-sub">



                <li class="menu-item ">
                    <a href="http://127.0.0.1:8000/layouts/without-menu" class="menu-link">
                        <div>Without menu</div>
                    </a>


                </li>



                <li class="menu-item ">
                    <a href="http://127.0.0.1:8000/layouts/without-navbar" class="menu-link">
                        <div>Without navbar</div>
                    </a>


                </li>



                
            </ul>
        </li>   
    </ul>

</aside>

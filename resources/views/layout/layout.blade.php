
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Dashfox - Laravel Admin & Dashboard Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, laravel, php framework, php laravel, laravel framework, php mvc, laravel admin panel, laravel admin panel, laravel template, laravel bootstrap, blade laravel, best php framework"/>

        <!-- Title -->
		<title>@yield('title')</title>

        <!-- Favicon -->

		<link rel="icon" href="https://laravel.spruko.com/dashfox/ltr/assets/img/brand/favicon.png" type="image/x-icon"/>


		<!-- Bootstrap css -->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

		<!-- Icons css -->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/plugins/icons/icons.css" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!--  Left-Sidebar css -->
		<link rel="stylesheet" href="https://laravel.spruko.com/dashfox/ltr/assets/css/sidemenu.css">

		<!--- Dashboard-2 css-->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/css/style.css" rel="stylesheet">
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/css/style-dark.css" rel="stylesheet">

		<!--- Color css-->
		<link id="theme" href="https://laravel.spruko.com/dashfox/ltr/assets/css/colors/color.css" rel="stylesheet">



		<!---Skinmodes css-->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/css/skin-modes.css" rel="stylesheet" />

		<!--- Animations css-->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/css/animate.css" rel="stylesheet">

		<!---Switcher css-->
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="https://laravel.spruko.com/dashfox/ltr/assets/switcher/demo.css" rel="stylesheet">
<!-- Css -->
<link rel="stylesheet" href="{{ asset('dist/styles.css') }}">
<link rel="stylesheet" href="{{ asset('dist/all.css') }}">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    </head>

    <div class="mx-auto bg-grey-400">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <header class="bg-nav" style="background-color: cadetblue;">
                <div class="flex justify-between">
                    <div class="p-1 mx-3 inline-flex items-center">
                        <i class="fas pr-2 text-white" onclick="sidebarToggle()"><img src="image/logo.png"></i>
                        <h1 class="text-white p-2">KLINIK CIDENG MEDICAL CENTER</h1>
                    </div>
                    <div class="p-1 flex flex-row items-center">
                        <a href="https://github.com/tailwindadmin/admin"
                            class="text-white p-2 mr-2 no-underline hidden md:block lg:block">Github</a>


                        <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full"
                            src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
                        <a href="#" onclick="profileToggle()"
                            class="text-white p-2 no-underline hidden md:block lg:block">{{session('username')}}</a>
                        <div id="ProfileDropDown"
                            class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                            <ul class="list-reset">
                                <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My
                                        account</a></li>
                                <li><a href="#"
                                        class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a>
                                </li>
                                <li>
                                    <hr class="border-t mx-2 border-grey-ligght">
                                </li>
                                <li><a href="#"
                                        class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!--/Header-->

            <div class="flex flex-1">
                <!--Sidebar-->
                <aside id="sidebar"
                    class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                    <ul class="list-reset flex flex-col">
                        <li class=" w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="/"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-home float-left mx-2"></i>
                                Data Pegawai
                                <span><i class="fas fa-angle-right float-right"></i></span>
                            </a>
                            <ul class="list-reset -mx-2 bg-white-medium-dark">
                                <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3">
                                    <a href="/data_dokter"
                                        class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        Data Dokter
                                    </a>
                                </li>
                                <li class="border-t border-light-border w-full h-full px-2 py-3">
                                    <a href="/jadwal_praktek"
                                        class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        Jadwal Praktek
                                    </a>
                                </li>
                                <li class="border-t border-light-border w-full h-full px-2 py-3">
                                    <a href="/data_pasien"
                                        class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        Data Pasien
                                    </a>
                                </li>
                                <li class="border-t border-light-border w-full h-full px-2 py-3">
                                    <a href="/tempat_tidur"
                                        class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        Data Tempat Tidur
                                    </a>
                                </li>
                                <li class="border-t border-light-border w-full h-full px-2 py-3">
                                    <a href="/data_rawat"
                                        class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                        Data Rawat
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <a href="/obat_perlengkapan"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fab fa-wpforms float-left mx-2"></i>
                                Data Obat dan perlengkapan
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>

                        <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <a href="/data_tindakan"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-grip-horizontal float-left mx-2"></i>
                                Data Tindakan
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="/logout"
                                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                                style="font-style: italic;">
                                <i class="fas fa-sign-out-alt float-left mx-2"></i>
                                Logout
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                    </ul>

                </aside>
                <!--/Sidebar-->
                <!--Main-->
                @yield('content')
                <!--/Main-->
            </div>
            <!--Footer-->
            <footer class="bg-grey-darkest text-white p-2">
                <div class="flex flex-1 mx-auto">&copy; My Design</div>
                <div class="flex flex-1 mx-auto">Distributed by: <a href="https://themewagon.com/"
                        target=" _blank">Themewagon</a></div>
            </footer>
            <!--/footer-->

        </div>

    </div>
		<!-- Footer closed -->
        <!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fas fa-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap4 js-->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/bootstrap/popper.min.js"></script>
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Ionicons js-->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/ionicons/ionicons.js"></script>

		<!-- Moment js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/moment/moment.js"></script>

		<!-- P-scroll js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- Sidebar js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/side-menu/sidemenu.js"></script>

		<!-- Rating js-->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/rating/jquery.barrating.js"></script>

		<!-- Suggestion js-->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/suggestion/jquery.input-dropdown.js"></script>
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/js/search.js"></script>

		<!-- Right-sidebar js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/sidebar/sidebar.js"></script>
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- Sticky js-->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/js/sticky.js"></script>

		<!-- eva-icons js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/plugins/eva-icons/eva-icons.min.js"></script>



		<!-- Eva-icons js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/js/eva-icons.min.js"></script>


		<!-- custom js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/js/custom.js"></script>

		<!-- Switcher js -->
		<script src="https://laravel.spruko.com/dashfox/ltr/assets/switcher/js/switcher.js"></script>

		<!-- font awesome -->
		<script src="https://kit.fontawesome.com/964ae5b0fd.js" crossorigin="anonymous"></script>
    </body>
</html>

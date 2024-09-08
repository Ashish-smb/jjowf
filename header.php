<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Owl Carousel -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- Font Asowme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Output Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <!-- Topbar -->
     <header class="px-6 lg:px-12 border-b-2 hidden lg:block">
        <div class="flex justify-between items-center">
            <img src="assets/imgs/logo.2.png" alt="" class="h-28">

            <div class="flex items-center gap-4">
                <i class="fa-solid fa-phone text-3xl text-success-dark"></i>
                <div>
                    Call Us
                    <div class="block">
                        +91 99991 24223
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <i class="fa-solid fa-envelope text-3xl text-success-dark"></i>
                <div>
                    Mail Us
                    <div class="block">
                        www.jjowfoundation.org
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <a href="#">
                    <i class="fa-brands fa-facebook-f p-4 w-10 h-10 flex justify-center items-center rounded-full bg-success-dark text-white hover:bg-green-600 duration-500"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-instagram p-4 w-10 h-10 flex justify-center items-center rounded-full bg-orange-500 text-white hover:bg-orange-700 duration-500"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-x-twitter p-4 w-10 h-10 flex justify-center items-center rounded-full bg-success-dark text-white hover:bg-green-600 duration-500"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-google p-4 w-10 h-10 flex justify-center items-center rounded-full bg-orange-500 text-white hover:bg-orange-700 duration-500"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-youtube p-4 w-10 h-10 flex justify-center items-center rounded-full bg-success-dark text-white hover:bg-green-600 duration-500"></i>
                </a>
            </div>
        </div>
     </header>

    <!-- Navbar -->
    <nav class="hidden lg:flex justify-between items-center py-2 border-b px-16 shadow-md sticky top-0 z-20 bg-white">
        <a href="index.php">
            <img src="assets/imgs/logo.png" alt="" class="w-1/2">
        </a>
        <ul class="flex uppercase gap-6">
            <li>
                <a href="about.php"
                    class="block font-semibold py-3 px-4 border-slate-400 duration-300 hover:bg-success/90 hover:text-white">
                    About Us
                </a>
            </li>
            <li>
                <a href="#"
                    class="block font-semibold py-3 px-4 border-slate-400 duration-300 hover:bg-success/90 hover:text-white">
                    our work
                </a>
            </li>
           
            <li>
                <a href="voulnteer.php"
                    class="block font-semibold py-3 px-4 border-slate-400 duration-300 hover:bg-success/90 hover:text-white">
                    Get Involved
                </a>
            </li>
            <li>
                <a href="#"
                    class="block font-semibold py-3 px-4 border-slate-400 duration-300 hover:bg-success/90 hover:text-white">
                    Gallery
                </a>
            </li>
            <li>
                <a href="contact.php"
                    class="block font-semibold py-3 px-4 border-slate-400 duration-300 hover:bg-success/90 hover:text-white">
                    contact Us
                </a>
            </li>
        </ul>
    </nav>

    <!-- Navbar Mobile -->
    <nav class="flex lg:hidden py-4" x-data="{showSidebar: false}">
        <!-- Header -->
        <div class="flex justify-between items-center px-8 w-full">
            <img src="assets/imgs/logo.png" alt="" class="w-1/2">
            <button @click="showSidebar = !showSidebar" class="text-xl md:text-2xl">
                <i class="fas" :class="showSidebar ? 'fa-xmark' : 'fa-bars'"></i>
            </button>
        </div>

        <!-- Nav -->
        <div class="fixed top-0 bg-slate-100 text-slate-800 h-screen w-full md:w-1/2 z-50 duration-300"
            :class="showSidebar ? 'left-0' : '-left-full'">
            <button class="absolute right-4 top-4 px-4 bg-danger text-white" @click="showSidebar = false">
                <i class="fas fa-xmark"></i>
            </button>
            <img src="assets/imgs/logo.png" alt="" class="py-3 px-8">
            
            <ul class="uppercase">                
                <li>
                    <a href="about.php" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-success">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="#" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-success">
                        Our Work
                    </a>
                </li>
                <li>
                    <a href="voulnteer.php" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-success">
                        Get Involved
                    </a>
                </li>
                <li>
                    <a href="contact.php" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-success">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="#" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-success">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="#" class="block font-semibold py-3 px-8 border-b border-slate-200 hover:text-success">
                        Support our Cause
                    </a>
                </li>
            </ul>
        </div>
    </nav>


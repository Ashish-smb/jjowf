<?php include_once('header.php') ?>

    <!-- Banner -->
    <section>
        <div class="relative mb-5" >
            <div class="h-[300px] bg-no-repeat bg-cover brightness-50 object-cover relative" style="background-image: url(assets/imgs/inner-banner.jpg);">
            </div>
            <h2 class="text-7xl text-center font-semibold text-white absolute z-10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                Contact Us
            </h2>
        </div>

    </section>

    <!-- Contact Us -->
    <section class="px-6 lg:px-16 grid md:grid-cols-2 text-gray-500">
        <div>
            <h3 class="text-3xl text-success font-light mb-10">Contact With Us</h3>
            <form action="#">
                <div class="mb-4">
                    <label for="name" class="block mb-2 text-gray-600">Your Name</label>
                    <input type="text" name="name" id="name" class="block border border-gray-600 w-3/4 outline-none p-2">
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-gray-600">Your Email</label>
                    <input type="email" name="email" id="email" class="block border border-gray-600 w-3/4 outline-none p-2">
                </div>
                <div class="mb-4">
                    <label for="subject" class="block mb-2 text-gray-600">Subject</label>
                    <input type="text" name="subject" id="subject" class="block border border-gray-600 w-3/4 outline-none p-2">
                </div>
                <div class="mb-4">
                    <label for="message" class="block mb-2 text-gray-600">Your Message (optional)</label>
                    <textarea name="message" id="message" class="block border border-gray-600 w-3/4 outline-none p-2 h-40"></textarea>
                </div>
            </form>
        </div>
        <div>
            <div class="mb-10">
                <h3 class="text-3xl text-success font-light mb-10">Address</h3>
                <p>
                    <i class="fa-solid fa-hand-point-right text-warning-light mr-2 fa-sm"></i>
                    TA-145, 2nd Floor, Street no.3, Tughlakabad Extension, 
                </p>
                <p>
                    <i class="fa-solid fa-hand-point-right text-warning-light mr-2 fa-sm"></i>
                    New Delhi - 110019
                </p>
            </div>
            <div>
                <h3 class="text-3xl text-success font-light mb-5">Email</h3>
                <p class="mb-5">
                    <i class="fa-solid fa-envelope text-warning-light mr-2 fa-sm"></i>
                    jjowfoundation2022@gmail.com
                </p>
                <div class="w-10/12">
                    <img src="https://st2.depositphotos.com/1265075/7581/i/450/depositphotos_75818865-stock-photo-web-contact-us-concept.jpg" alt="" class="w-full">
                </div>
            </div>
        </div>
    </section>
    
<?php include_once('footer.php') ?>

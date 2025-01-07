<section class="bg-gray-400 ">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto min-h-screen lg:py-0">
        <div class="w-full bg-gray-600 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-white text-center">
                    Membuat Akun
                </h1>
                <form class="space-y-4 md:space-y-6" action="#">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-white">Nama</label>
                        <input type="text" name="name" id="name" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Fajar Sucahya" required="">
                    </div>
                    <div>
                        <label for="whatsapp" class="block mb-2 text-sm font-medium text-white">No Whatsapp</label>
                        <input type="tel" name="whatsapp" id="whatsapp" placeholder="08123..." class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white dark:focus:ring-blue-500 focus:border-blue-500" pattern="[0-9]+" required="">

                    </div>
                    <div class="flex items-start">
                    </div>
                    <button type="submit" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Buat Akun</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Sudah punya akun? <a href="/login" class="font-medium text-white hover:underline dark:text-primary-500">Masuk Disini</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
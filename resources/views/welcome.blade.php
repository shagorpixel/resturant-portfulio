<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
  <script src="https://kit.fontawesome.com/bc7e90979e.js" crossorigin="anonymous"></script>
</head>

<body>
  <header class=" py-8 md:py-12 bg-no-repeat bg-cover" style="background-image: url('img/1737027163-6788ee5bd10dc.png')">
    <nav class=" relative customContainer flex items-center justify-between py-6">
      <div><img class=" max-w-20" src="img/logo.png" alt=""></div>
      <ul id="navItems"
        class=" bg-gray-900 md:bg-transparent  rounded-md bg-opacity-60 absolute md:relative left-0 top-full hidden md:flex w-full items-center justify-end text-white uppercase">
        <li><a class="list_items" href="#">Dashboard</a></li>
        <li><a class="list_items" href="#">Product</a></li>
        <li><a class="list_items" href="#">Promo</a></li>
        <li><a class="list_items" href="#">About</a></li>
        <li><a class="list_items" href="#">Contact</a></li>
        <li><a href="#"></a></li>
      </ul>
      <span onclick="toggleItems()" class=" cursor-pointer text-white block md:hidden"><i
          class="fa-solid fa-bars"></i></span>
    </nav>
    <div class=" space-y-8 py-16">
      <h2 class=" text-center text-white text-5xl md:text-8xl uppercase font-semibold">Discount 50%</h2>
      <p class=" text-center text-white text-xl md:text-2xl tracking-widest max-w-3xl mx-auto">Lorem ipsum dolor sit
        amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. </p>
      <div class=" text-center"><button
          class=" uppercase bg-yellow-300 inline-block py-2 px-7 text-2xl font-semibold text-blue-950 rounded hover:bg-yellow-400 transition">Order
          Now</button>
      </div>
    </div>
  </header>
  <div class=" bg-yellow-300 py-24 bg-no-repeat bg-cover bg-top" style="background-image: url('img/pakage_background.png');">
    <div class="customContainer text-center">
      <h2 class=" text-4xl md:text-7xl font-bold uppercase mb-6 md:mb-10">Popular menu</h2>
      <p class=" max-w-2xl text-2xl mx-auto text-gray-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. </p>

      <div class=" grid grid-cols-12 mt-20 md:gap-x-20 gap-x-0 gap-y-16 md:gap-y-16">
        <div class=" col-span-12 md:col-span-4 space-y-3">
          <img class=" w-full" src="img/pakage1.png" alt="">
          <h3 class=" uppercase text-4xl font-bold">Pakage I</h3>
          <p class=" text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class=" col-span-12 md:col-span-4 space-y-3">
          <img class=" w-full" src="img/pakage2.png" alt="">
          <h3 class=" uppercase text-4xl font-bold">Pakage II</h3>
          <p class=" text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class=" col-span-12 md:col-span-4 space-y-3">
          <img class=" w-full" src="img/pakage3.png" alt="">
          <h3 class=" uppercase text-4xl font-bold">Pakage III</h3>
          <p class=" text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

      </div>
    </div>
  </div>
  <div class=" bg-gray-800 py-24 bg-no-repeat bg-cover bg-top" style="background-image: url('img/Chicken_wins_background.png');">
    <div class="customContainer text-white ">
        <div class="flex flex-wrap justify-between items-center">
          <div class=" w-full md:w-5/12 mb-8 md:mb-0">
            <img src="img/Chicken_wins.png" alt="">
          </div>
            <div class=" w-full md:w-6/12 space-y-7 md:space-y-12 text-center md:text-left">
              <h2 class=" text-4xl md:text-6xl uppercase font-bold">Chicken wings</h2>
              <p class=" text-2xl tracking-wider">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis aspernatur enim fugiat aperiam voluptatem illum! Dolores.</p>
              <button
                class=" uppercase bg-yellow-300 inline-block py-2 px-7 text-2xl font-semibold text-blue-950 rounded hover:bg-yellow-400 transition">Order
                Now</button>
            </div>
        </div>
    </div>
  </div>

  <div class=" bg-yellow-300 py-24 bg-no-repeat bg-cover bg-top" style="background-image: url('img/pakage_background.png');">
    <div class="customContainer text-center">
      <h2 class=" text-4xl md:text-7xl font-bold uppercase mb-6 md:mb-10">our statistics</h2>
      <p class=" max-w-2xl text-2xl mx-auto text-gray-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. </p>

      <div class=" grid grid-cols-12 mt-20 md:gap-x-20 gap-x-0 gap-y-16 md:gap-y-16">
        <div class=" col-span-12 md:col-span-4 space-y-3 border-8 border-black py-10 min-h-96 flex items-center justify-center">
            <div>
              <h3 class=" text-7xl text-center font-bold mb-10">2K+</h3>
              <h4 class=" text-4xl text-center font-extrabold uppercase">Customer</h4>
            </div>
        </div>
        <div class=" col-span-12 md:col-span-4 space-y-3 border-8 border-black py-10 min-h-96 flex items-center justify-center">
          <div>
            <h3 class=" text-7xl text-center font-extrabold mb-10">500</h3>
            <h4 class=" text-4xl text-center font-bold uppercase">Store</h4>
          </div>
      </div>
      <div class=" col-span-12 md:col-span-4 space-y-3 border-8 border-black py-10 min-h-96 flex items-center justify-center">
        <div>
          <h3 class=" text-7xl text-center font-extrabold mb-10">50</h3>
          <h4 class=" text-4xl text-center font-bold uppercase">Chef</h4>
        </div>
    </div>
      </div>
    </div>
  </div>
  <div class=" bg-gray-800 py-24 bg-no-repeat bg-cover bg-top" style="background-image: url('img/Chicken_wins_background.png');">
    <div class="customContainer text-white ">
        <div class="flex flex-wrap justify-between items-center">
          <div class=" w-full md:w-6/12 space-y-7 md:space-y-12 text-center md:text-left">
            <h2 class=" text-4xl md:text-6xl uppercase font-bold">Chicken Satay</h2>
            <p class=" text-2xl tracking-wider">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. </p>
            <button
              class=" uppercase bg-yellow-300 inline-block py-2 px-7 text-2xl font-semibold text-blue-950 rounded hover:bg-yellow-400 transition">Order
              Now</button>
          </div>
          <div class=" w-full md:w-5/12 mb-8 md:mb-0">
            <img src="img/chicken_satay.png" alt="">
          </div>

        </div>
    </div>
  </div>
  <div style="background-image: url('img/luiella_harris_background.png');" class=" text-center py-32 bg-cover bg-center relative -z-30">
      <div class=" z-20 space-y-6">
        <div class=" max-w-[200px] mx-auto">
          <img class=" w-full" src="img/luiella_harris.png" alt="">
        </div>
        <p class=" text-2xl max-w-5xl mx-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit impedit adipisci illo molestiae, odit pariatur aliquam consectetur maiores eius possimus qui rerum fugiat quis quia.</p>
        <h3 class=" text-3xl font-bold">luiella Harris</h3>
      </div>
      <div class=" w-full h-full bg-white absolute left-0 top-0 -z-10 bg-opacity-80 "></div>
  </div>
  <div class=" bg-yellow-300 py-24 bg-no-repeat bg-cover bg-top" style="background-image: url('img/pakage_background.png');">
    <div class="customContainer text-center">
      <h2 class=" text-4xl md:text-7xl font-bold uppercase mb-6 md:mb-10">Don't Miss Our Update</h2>
      <p class=" max-w-4xl text-3xl mx-auto text-gray-800 mb-11">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem alias magnam facere quod reprehenderit impedit</p>
      <form action="" class=" flex justify-center max-w-3xl mx-auto mb-20" >
        <input class=" py-2 px-5 text-2xl" type="text" placeholder="Your Email">
        <button class=" bg-black text-white px-6 rounded-r-sm" type="submit">SUBSCRIBE</button>
      </form>

    </div>
  </div>
  <footer class=" bg-gray-800 py-20 text-white">
    <div class=" flex flex-wrap customContainer justify-between">
        <div class=" w-full md:w-4/12 space-y-6 mb-12 md:mb-0">
          <h3 class=" text-3xl">Title Here</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam velit nostrum, magnam perferendis sint consequatur deleniti eius nesciunt ut perspiciatis ipsa libero quae ducimus similique doloribus voluptates vel iusto voluptas? Nam facilis at nostrum id? Illo corrupti tempora ut iusto.</p>
          <div class=" flex space-x-3 ">
            <div class="h-8 w-8 bg-white hover:bg-gray-300 flex items-center justify-center rounded-full
            "><a href="#" class=" text-black text-xl"><i class="fa-brands fa-instagram"></i></a></div>
            <div class="h-8 w-8 bg-white hover:bg-gray-300 flex items-center justify-center rounded-full
            "><a href="#" class=" text-black text-xl"><i class="fa-brands fa-facebook-f"></i></a></div>
            <div class="h-8 w-8 bg-white hover:bg-gray-300 flex items-center justify-center rounded-full
            "><a href="#" class=" text-black text-xl"><i class="fa-brands fa-twitter"></i></a></div>
            <div class="h-8 w-8 bg-white hover:bg-gray-300 flex items-center justify-center rounded-full
            "><a href="#" class=" text-black text-xl"><i class="fa-brands fa-whatsapp"></i></a></div>
          </div>
        </div >

        <div class=" w-full md:w-7/12 grid grid-cols-12 space-y-8 md:space-y-0">
          <div class=" col-span-12 md:col-span-4 text-center md:text-left">
            <h2 class=" text-3xl">About</h2>
            <ul class=" space-y-1">
              <li><a class="tracking-widest text-xl" href="#">History</a></li>
              <li><a class="tracking-widest text-xl" href="#">Our Team</a></li>
              <li><a class="tracking-widest text-xl" href="#">Brand Guidelines</a></li>
              <li><a class="tracking-widest text-xl" href="#">Trams And Condition</a></li>
              <li><a class="tracking-widest text-xl" href="#">Privicy Policy</a></li>

            </ul>
          </div>
          <div class="col-span-12 md:col-span-4 text-center md:text-left">
            <h2 class=" text-3xl">Services</h2>
            <ul class=" space-y-1">
              <li><a class="tracking-widest text-xl" href="#">How TO Order</a></li>
              <li><a class="tracking-widest text-xl" href="#">Our Product</a></li>
              <li><a class="tracking-widest text-xl" href="#">Order Status</a></li>
              <li><a class="tracking-widest text-xl" href="#">Promo</a></li>
              <li><a class="tracking-widest text-xl" href="#">Payment Method</a></li>
            </ul>
          </div>

          <div class="col-span-12 md:col-span-4 text-center md:text-left">
            <h2 class=" text-3xl">Other</h2>
            <ul class=" space-y-1">
              <li><a class="tracking-widest text-xl" href="#">Contact Us</a></li>
              <li><a class="tracking-widest text-xl" href="#">Help</a></li>
              <li><a class="tracking-widest text-xl" href="#">Privicy</a></li>
            </ul>
          </div>
        </div>

    </div>
  </footer>
  <script src="index.js"></script>
</body>

</html>

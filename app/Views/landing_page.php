<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <style>
      /* *{
            outline: 1px solid red;
        } */
    </style>
  </head>
  <body>
    <nav class="px-12 py-4 flex items-center justify-end">
      <ul class="flex gap-4">
        <li class="gap-1 flex items-center">
          <img src="./twitter.svg" />
          <a href="">Twitter</a>
        </li>
        <li class="gap-1 flex items-center">
          <img src="./github.svg" />
          <a href="">Github</a>
        </li>
      </ul>
    </nav>

    <section class="px-64 mb-8 flex flex-col gap-14 py-24">
      <span class="w-80 h-80 bg-blue-200 rounded-full absolute -z-10 left-64 top-28 animate-ping opacity-30">

      </span>
      <p class="text-7xl font-bold animate__animated animate__fadeInDown">
        Hey,
        <br>
        I'm Darryl
      </p>

      <p class="text-right text-5xl font-semibold animate__animated animate__fadeInDown animate__delay-1s">
        - I'm an IT Student, Developer, 
        <br>
        and a Tech Enthusiast. 
        <br>
        I help businesses scale
      </p>
    </section>

        <!-- Hero Image -->
    <section>
      <img class="max-h-[560px] rounded-t-3xl min-w-full" src="./landing_photo.jpg">
    </section>

    <!-- Background -->
    <section class="px-64 py-24 flex flex-col items-end text-2xl">
      <div class="flex flex-col gap-8 w-2/3">
        <p>
          I have been creating web applications for 
          <br>  
          2 years exploring different technologies 
          <br>
          in order to expand my skillset
        </p>
        
        <p class="font-bold text-3xl">
          I want to help people and 
          <br>
          businesses by
          <br>
          doing what I do best - problem solving
        </p>

        <p>
          I am looking for solution oriented businesses that are looking to scale
        </p>
      </div>
    </section>


        <!-- Big Selling Point Text -->
    <section class="px-24 py-16">
        <p class="text-8xl font-bold">
          Here's what I 
          <br>
          can offer you...
        </p>
    </section>

    <!-- Bento Selling points -->
    <section class="px-24 py-28 flex flex-col gap-8">

        <div class="flex gap-4">
          <!-- box1 -->
          <div class="bg-green-200 w-2/3 p-8 rounded-xl h-72">
            <p class="text-5xl font-semibold">
              Out of 
              <br>
              the box 
              <br>
              solutions
            </p>
          </div>
          <!-- box2 -->
          <div class="bg-purple-200 w-full p-8 rounded-xl h-72">

          <p class="text-5xl font-semibold">
            Bridge the 
            <br>
            gap 
            between
            <br> 
            creative and 
            <br>
            logical
            objectives
          </p>
          </div>
        </div>

        <div class="flex gap-4">
          <!-- box1 -->
          <div class="bg-red-200 w-full p-8 rounded-xl h-72">
            <p class="text-5xl font-semibold">
              Professional development
            </p>
          </div>
          <!-- box2 -->
          <div class="bg-teal-200 w-full p-8 rounded-xl h-72">

          <p class="text-5xl font-semibold">
            Learn, challenge, 
            <br>
            and reconnect 
            <br>
            the dots
          </p>
          </div>
        </div>
    </section>

    <section>
      <div class="flex items-center justify-center h-60">
        <p class="text-xl">
          Ready? 
          <a href="" class="underline">
            Let's get started
          </a>
        </p>
      </div>
    </section>

    <footer>
      <div class="px-12 py-4">
        &copy; Darryl
      </div>
    </footer>
  </body>
</html>

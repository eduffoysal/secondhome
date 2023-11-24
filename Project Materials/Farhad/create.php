<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secondhome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../output/./output.css">
</head>
<body>




<main class="min-h-screen flex flex-col items-center justify-center bg-gray-50 space-y-10 py-12 px-4 sm:px-6 lg:px-8">
      <div>
        <h1 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sign in to your account</h1>
        <p class="mt-2 text-center text-sm text-gray-600">
          Or
          <a href="#" class="font-medium text-indigo-600 border-b border-indigo-600"> register your FREE account </a>
        </p>
      </div>
      <div class="max-w-md w-full mx-auto bg-white shadow rounded-lg p-7 space-y-6">
        <div class="flex flex-col">
          <label class="text-sm font-bold text-gray-600 mb-1" for="email">Email Address</label>
          <input class="border rounded-md bg-white px-3 py-2" type="text" name="email" id="email" placeholder="Enter your Email Address" />
        </div>
        <div class="flex flex-col">
          <label class="text-sm font-bold text-gray-600 mb-1" for="password">Password</label>
          <input class="border rounded-md bg-white px-3 py-2" type="password" name="password" id="password" placeholder="Enter your Password" />
        </div>
        <div class="flex justify-between text-sm">
          <div class="flex items-center space-x-2">
            <input class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" type="checkbox" name="remember" id="remember" />
            <label for="remember">Remember me</label>
          </div>
          <div>
            <a class="text-indigo-600">Forgot your Password?</a>
          </div>
        </div>
        <div>
          <button class="w-full bg-indigo-600 text-white rounded-md p-2">Sign in</button>
        </div>
        <div class="relative pb-2">
          <div class="absolute top-0 left-0 w-full border-b"></div>
          <div class="absolute -top-3 left-0 w-full text-center">
            <span class="bg-white px-3 text-sm">or continue via</span>
          </div>
        </div>
        <div class="grid grid-cols-3 gap-3 text-xl">
          <div class="border-2 rounded-md p-3 text-center cursor-pointer hover:border-gray-600">
            <i class="fab fa-twitter"></i>
          </div>
          <div class="border-2 rounded-md p-3 text-center cursor-pointer hover:border-gray-600">
            <i class="fab fa-facebook"></i>
          </div>
          <div class="border-2 rounded-md p-3 text-center cursor-pointer hover:border-gray-600">
            <i class="fab fa-linkedin"></i>
          </div>
        </div>
      </div>
    </main>







<div class="flex justify-center items-center h-screen bg-indigo-600">
        <div class="w-96 p-6 shadow-lg bg-white rounded-md">
            <h1 class="text-3xl block text-center font-semibold"><i class="fa-solid fa-user"></i> Login</h1>
            <hr class="mt-3">
            <div class="mt-3">
                <label for="username" class="block text-base mb-2">Username</label>
                <input type="text" id="username" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Username..." />
            </div>
            <div class="mt-3">
                <label for="password" class="block text-base mb-2">Password</label>
                <input type="password" id="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Password..." />
            </div>
            <div class="mt-3 flex justify-between items-center">
                <div>
                    <input type="checkbox">
                    <label>Remember Me</label>
                </div>
                <div>
                    <a href="#" class="text-indigo-800 font-semibold">Forgot Password?</a>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" class="border-2 border-indigo-700 bg-indigo-700 text-white py-1 w-full rounded-md hover:bg-transparent hover:text-indigo-700 font-semibold"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;Login</button>
            </div>
        </div>
    </div>
    


<div class="container flex flex-col md:flex-row md:justify-center md:items-center p-10 sm:p-0 h-screen gap-10 mx-auto">
        <div class="md:w-1/3 bg-slate-500 rounded-2xl pb-8 shadow-lg">
            <div class="bg-slate-900 text-white rounded-t-2xl text-center text-xl font-semibold pb-12 pt-4">
                BASIC
            </div>
            <div class="flex justify-center items-center">
                <div class="relative -top-6 text-4xl font-bold inline-flex items-center justify-center text-center bg-slate-900 border-white border-4 rounded-full w-20 h-20">
                    <div class="flex text-white">$12</div>
                </div>
            </div>
            <div class="mt-4">
                <ul class="text-center text-lg font-semibold">
                    <li><span class="text-white">1</span> User</li>
                    <li><span class="text-white">10</span> Projects</li>
                    <li><span class="text-white">10</span> BG Storage</li>
                    <li><span class="text-white">10</span> Emails</li>
                    <li class="line-through"><span class="text-white">24/7</span> Supoort</li>
                    <li class="line-through"><span class="text-white">Control</span> Pannel</li>
                </ul>
            </div>
            <div class="flex justify-center items-center mt-5">
                <a href="#" class="py-2 px-5 bg-slate-900 text-white font-semibold border-2 border-slate-900 rounded-lg hover:bg-slate-500 hover:text-slate-900 transition duration-300">Buy Now</a>
            </div>
        </div>
        <div class="md:w-1/3 bg-blue-500 rounded-2xl pb-8 shadow-lg md:scale-110">
            <div class="bg-blue-900 text-white rounded-t-2xl text-center text-xl font-semibold pb-12 pt-4">
                STANDARD
            </div>
            <div class="flex justify-center items-center">
                <div class="relative -top-6 text-4xl font-bold inline-flex items-center justify-center text-center bg-blue-900 border-white border-4 rounded-full w-20 h-20">
                    <div class="flex text-white">$22</div>
                </div>
            </div>
            <div class="mt-4">
                <ul class="text-center text-lg font-semibold">
                    <li><span class="text-white">10</span> Users</li>
                    <li><span class="text-white">50</span> Projects</li>
                    <li><span class="text-white">50</span> GB Storage</li>
                    <li><span class="text-white">50</span> Emails</li>
                    <li class="line-through"><span class="text-white">24/7</span> Supoort</li>
                    <li class="line-through"><span class="text-white">Control</span> Pannel</li>
                </ul>
            </div>
            <div class="flex justify-center items-center mt-5">
                <a href="#" class="py-2 px-5 bg-blue-900 text-white font-semibold border-2 border-blue-900 rounded-lg hover:bg-blue-500 hover:text-blue-900 transition duration-300">Buy Now</a>
            </div>
        </div>
        <div class="md:w-1/3 bg-slate-500 rounded-2xl pb-8 shadow-lg">
            <div class="bg-slate-900 text-white rounded-t-2xl text-center text-xl font-semibold pb-12 pt-4">
                EXPERT
            </div>
            <div class="flex justify-center items-center">
                <div class="relative -top-6 text-4xl font-bold inline-flex items-center justify-center text-center bg-slate-900 border-white border-4 rounded-full w-20 h-20">
                    <div class="flex text-white">$32</div>
                </div>
            </div>
            <div class="mt-4">
                <ul class="text-center text-lg font-semibold">
                    <li><span class="text-white">100</span> UserS</li>
                    <li><span class="text-white">100</span> Projects</li>
                    <li><span class="text-white">100</span> BG Storage</li>
                    <li><span class="text-white">100</span> Emails</li>
                    <li class="line-through"><span class="text-white">24/7</span> Supoort</li>
                    <li class="line-through"><span class="text-white">Control</span> Pannel</li>
                </ul>
            </div>
            <div class="flex justify-center items-center mt-5">
                <a href="#" class="py-2 px-5 bg-slate-900 text-white font-semibold border-2 border-slate-900 rounded-lg hover:bg-slate-500 hover:text-slate-900 transition duration-300">Buy Now</a>
            </div>
        </div>
    </div>




<div class="min-h-screen py-40" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
      <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
          <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('images/Register-Background.png');">
            <h1 class="text-white text-3xl mb-3">Welcome</h1>
            <div>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suspendisse aliquam varius rutrum purus maecenas ac <a href="#" class="text-purple-500 font-semibold">Learn more</a></p>
            </div>
          </div>
          <div class="w-full lg:w-1/2 py-16 px-12">
            <h2  class="text-3xl mb-4">Register</h2>
            <p class="mb-4">
              Create your account. It’s free and only take a minute
            </p>
            <form action="#">
              <div class="grid grid-cols-2 gap-5">
                <input type="text" placeholder="Firstname" class="border border-gray-400 py-1 px-2">
                <input type="text" placeholder="Surname" class="border border-gray-400 py-1 px-2">
              </div>
              <div class="mt-5">
                <input type="text" placeholder="Email" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" placeholder="Confirm Password" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="checkbox" class="border border-gray-400">
                <span>
                  I accept the <a href="#" class="text-purple-500 font-semibold">Terms of Use</a> &  <a href="#" class="text-purple-500 font-semibold">Privacy Policy</a> 
                </span>
              </div>
              <div class="mt-5">
                <button class="w-full bg-purple-500 py-3 text-center text-white">Register Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
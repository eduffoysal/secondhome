<?php
include('../../db/db.php');
session_start();





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUBoX Admission System</title>

    <link rel="stylesheet" href="../../output/./output.css">

</head>
<body>
    

<div class="min-h-screen flex justify-center items-center bg-sea1 bg-fixed bg-no-repeat bg-cover bg-center">
    <h1 class="font-black text-6xl">EduBox Admission</h1>
</div>

<div class="p-10">
    <h2 class="font-bold text-4xl">Search & Select Your School</h2>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab numquam eveniet molestias veniam, inventore sint voluptates nam provident impedit laborum ipsa vel quos amet laboriosam dolorum suscipit! Nihil eos repellendus blanditiis repellat laboriosam veniam quod maxime ab! Ea eveniet doloremque, excepturi totam, et molestias dicta accusamus quibusdam quas sunt inventore!</p>


    <div class="row">
        <div class="col-md-6">
                <div class="bg-gray-50 relative flex min-h-screenn flex-col items-center justify-center overflow-hidden py-6 sm:py-12">

                    <!-- ✅ Form Starts Here 👇 -->
                    <div class="p-10 shadow-lg bg-white">

                    <h3 class="font-bold text-3xl mb-10">Search Your School</h3>

                    <form class="grid sm:grid-cols-2 gap-10">
                        
                        <input type="text" name="firstName" id="firstName" class="border-b border-gray-300 py-2 pl-2" placeholder="Full Name" />
                        <input type="text" name="lastName" id="lastName" class="border-b border-gray-300 py-2 pl-2" placeholder="Last Name" />
                        <input type="email" name="email" id="email" class="border-b border-gray-300 py-2 pl-2" placeholder="Email" />
                        <input type="password" name="password" id="password" class="border-b border-gray-300 py-2 pl-2" placeholder="Password" />

                        <button class="bg-teal-600 text-lg font-semibold text-white sm:col-span-2 sm:w-1/2 py-2 mt-5 hover:bg-teal-700">GO</button>
                    </form>
                    </div>

                    </div>
        </div>
        <div class="col-md-6">
                <div class="bg-gray-50 relative flex min-h-screenn flex-col items-center justify-center overflow-hidden py-6 sm:py-12">

        <!-- ✅ Form Starts Here 👇 -->
        <div class="p-10 shadow-lg bg-white">

        <h3 class="font-bold text-3xl mb-10">Search Your School</h3>

        <form class="grid sm:grid-cols-2 gap-10">
            
            <input type="text" name="firstName" id="firstName" class="border-b border-gray-300 py-2 pl-2" placeholder="Full Name" />
            <input type="text" name="lastName" id="lastName" class="border-b border-gray-300 py-2 pl-2" placeholder="Last Name" />
            <input type="email" name="email" id="email" class="border-b border-gray-300 py-2 pl-2" placeholder="Email" />
            <input type="password" name="password" id="password" class="border-b border-gray-300 py-2 pl-2" placeholder="Password" />

            <button class="bg-teal-600 text-lg font-semibold text-white sm:col-span-2 sm:w-1/2 py-2 mt-5 hover:bg-teal-700">GO</button>
        </form>
        </div>

                </div>
        </div>
    </div>





</div>

<div class="bg-sea2 min-h-screen bg-center bg-no-repeat bg-cover bg-fixed"></div>

<div class="bg-sea3 min-h-screen bg-fixed bg-no-repeat bg-cover"></div>

</body>
</html>
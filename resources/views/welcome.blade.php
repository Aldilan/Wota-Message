<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container w-full">
        <nav class="sticky">
            <div class="bg-red-600 p-3">
                <h1 class="text-white text-3xl font-montserrat">JKT48</h1>
            </div>
            <div class="bg-[#3D3D3D] py-2">
                <ul class="flex justify-around">
                    <li class="text-white font-black">NEWS</li>
                    <li class="text-white font-black">CHAT</li>
                    <li class="text-white font-black">STORY</li>
                </ul>
            </div>
        </nav>
        <section class="w-full flex justify-between p-4">
            <div>
                <ul class="flex">
                    <li class="w-14 h-14 rounded-full overflow-hidden mr-3">
                        <img src="https://source.unsplash.com/300x400?idol" alt="profile" class="w-14 h-14">
                    </li>
                    <li>
                        <ol>
                            <li>Nama</li>
                            <li>Chat</li>
                        </ol>
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>O</li>
                    <li>22.99 pm</li>
                </ul>
            </div>
        </section>
    </div>
</body>
</html>
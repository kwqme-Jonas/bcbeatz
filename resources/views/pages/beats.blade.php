@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 pt-16">
<div class="beats">
<h2 class="uppercase text-gray-900 text-center justify-center text-lg tracking-wider font-semibold">available beats</h2> 
<div class="grid grid-cols-1 sm:grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-5">
              <div class="mt-8">
                <div class="max-w-lg rounded overflow-hidden shadow-2xl">
                  <img class="w-full" src="/img/pic1.jpg" alt="">
                  <div class="px-6 py-4 bg-opacity-75 bg-clip-padding">
                    <h2 class="title font-bold text-gray-900 mb-1 uppercase text-center">title</h2>
                    <div class="flex items-center justify-between mt-4">
                        <button onclick="play()" id="play">
                        <i class="fas fa-play shadow-md"></i>
                        </button>
                        <audio id="mysong" src="music/song1.mp3"></audio>
                        <button class="bg-pink-600 hover:bg-yellow-400 text-white font-bold  px-2 rounded-full tracking-tight">
                        buy now
                        </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-8">
                <div class="max-w-lg rounded overflow-hidden shadow-2xl">
                  <img class="w-full" src="/img/pic2.jpg" alt="">
                  <div class="px-6 py-4 bg-opacity-75 bg-clip-padding">
                    <h2 class="title font-bold text-gray-900 mb-1 uppercase text-center">title</h2>
                    <div class="flex items-center justify-between mt-4">
                        <button onclick="play()" id="play1">
                        <i class="fas fa-play shadow-md"></i>
                        </button>
                        <audio id="mysong1" src="music/song2.mp3"></audio>
                        <button class="bg-pink-600 hover:bg-yellow-400 text-white font-bold  px-2 rounded-full tracking-tight">
                        buy now
                        </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-8">
                <div class="max-w-lg rounded overflow-hidden shadow-2xl">
                  <img class="w-full" src="/img/pic3.jpg" alt="">
                  <div class="px-6 py-4 bg-opacity-75 bg-clip-padding">
                    <h2 class="title font-bold text-gray-900 mb-1 uppercase text-center">title</h2>
                    <div class="flex items-center justify-between mt-4">
                        <button onclick="play()" id="play2">
                        <i class="fas fa-play shadow-md"></i>
                        </button>
                        <audio id="mysong2" src="music/song3.mp3"></audio>
                        <button class="bg-pink-600 hover:bg-yellow-400 text-white font-bold  px-2 rounded-full tracking-tight">
                        buy now
                        </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-8">
                <div class="max-w-lg rounded overflow-hidden shadow-2xl">
                  <img class="w-full" src="/img/pic4.jpg" alt="">
                  <div class="px-6 py-4 bg-opacity-75 bg-clip-padding">
                    <h2 class="title font-bold text-gray-900 mb-1 uppercase text-center">title</h2>
                    <div class="flex items-center justify-between mt-4">
                        <button onclick="play()" id="play3">
                        <i class="fas fa-play shadow-md"></i>
                        </button>
                        <audio id="mysong3" src="music/song4.mp3"></audio>
                        <button class="bg-pink-600 hover:bg-yellow-400 text-white font-bold  px-2 rounded-full tracking-tight">
                        buy now
                        </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-8">
                <div class="max-w-lg rounded overflow-hidden shadow-2xl">
                  <img class="w-full" src="/img/pic5.jpg" alt="">
                  <div class="px-6 py-4 bg-opacity-75 bg-clip-padding">
                    <h2 class="title font-bold text-gray-900 mb-1 uppercase text-center">title</h2>
                    <div class="flex items-center justify-between mt-4">
                        <button onclick="play()" id="play4">
                        <i class="fas fa-play shadow-md"></i>
                        </button>
                        <audio id="mysong4" src="music/song5.mp3"></audio>
                        <button class="bg-pink-600 hover:bg-yellow-400 text-white font-bold  px-2 rounded-full tracking-tight">
                        buy now
                        </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-8">
                <div class="max-w-lg rounded overflow-hidden shadow-2xl">
                  <img class="w-full" src="/img/pic6.jpg" alt="">
                  <div class="px-6 py-4 bg-opacity-75 bg-clip-padding">
                    <h2 class="title font-bold text-gray-900 mb-1 uppercase text-center">title</h2>
                    <div class="flex items-center justify-between mt-4">
                        <button onclick="play()" id="play5">
                        <i class="fas fa-play shadow-md"></i>
                        </button>
                        <audio id="mysong5" src="music/song6.mp3"></audio>
                        <button class="bg-pink-600 hover:bg-yellow-400 text-white font-bold  px-2 rounded-full tracking-tight">
                        buy now
                        </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-8">
                <div class="max-w-lg rounded overflow-hidden shadow-2xl">
                  <img class="w-full" src="/img/pic7.jpg" alt="">
                  <div class="px-6 py-4 bg-opacity-75 bg-clip-padding">
                    <h2 class="title font-bold text-gray-900 mb-1 uppercase text-center">title</h2>
                    <div class="flex items-center justify-between mt-4">
                        <button onclick="play()" id="play6">
                        <i class="fas fa-play shadow-md"></i>
                        </button>
                        <audio id="mysong6" src="music/song7.mp3"></audio>
                        <button class="bg-pink-600 hover:bg-yellow-400 text-white font-bold  px-2 rounded-full tracking-tight">
                        buy now
                        </button>
                    </div>
                  </div>
                </div>
              </div>

         
</div>
</div>


<script>
              var mysong= document.getElementById("mysong");
              var icon = document.getElementById("play")

              play.onclick = function(){
                  if(mysong.paused){
                       mysong.play();
                       play.innerHTML = '<i class= "fas fa-pause"></i>';
                  }else{
                    mysong.pause();
                       play.innerHTML = '<i class= "fas fa-play"></i>';
                  }
              }

              var mysong1= document.getElementById("mysong1");
              var icon1 = document.getElementById("play1")

              play1.onclick = function(){
                  if(mysong1.paused){
                       mysong1.play();
                       play1.innerHTML = '<i class= "fas fa-pause"></i>';
                  }else{
                    mysong1.pause();
                       play1.innerHTML = '<i class= "fas fa-play"></i>';
                  }
              }

              
              var mysong2= document.getElementById("mysong2");
              var icon2 = document.getElementById("play2")

              play2.onclick = function(){
                  if(mysong2.paused){
                       mysong2.play();
                       play2.innerHTML = '<i class= "fas fa-pause"></i>';
                  }else{
                    mysong2.pause();
                       play2.innerHTML = '<i class= "fas fa-play"></i>';
                  }
              }

              
              var mysong3= document.getElementById("mysong3");
              var icon3 = document.getElementById("play3")

              play3.onclick = function(){
                  if(mysong3.paused){
                       mysong3.play();
                       play3.innerHTML = '<i class= "fas fa-pause"></i>';
                  }else{
                    mysong3.pause();
                       play3.innerHTML = '<i class= "fas fa-play"></i>';
                  }
              }

              
              var mysong4= document.getElementById("mysong4");
              var icon4 = document.getElementById("play4")

              play4.onclick = function(){
                  if(mysong4.paused){
                       mysong4.play();
                       play4.innerHTML = '<i class= "fas fa-pause"></i>';
                  }else{
                    mysong4.pause();
                       play4.innerHTML = '<i class= "fas fa-play"></i>';
                  }
              }

              
              var mysong5= document.getElementById("mysong5");
              var icon5 = document.getElementById("play5")

              play5.onclick = function(){
                  if(mysong5.paused){
                       mysong5.play();
                       play5.innerHTML = '<i class= "fas fa-pause"></i>';
                  }else{
                    mysong5.pause();
                       play5.innerHTML = '<i class= "fas fa-play"></i>';
                  }
              }

              
              var mysong6= document.getElementById("mysong6");
              var icon6 = document.getElementById("play6")

              play6.onclick = function(){
                  if(mysong6.paused){
                       mysong6.play();
                       play6.innerHTML = '<i class= "fas fa-pause"></i>';
                  }else{
                    mysong6.pause();
                       play6.innerHTML = '<i class= "fas fa-play"></i>';
                  }
              }

              
              var mysong7= document.getElementById("mysong7");
              var icon7 = document.getElementById("play7")

              play7.onclick = function(){
                  if(mysong7.paused){
                       mysong7.play();
                       play7.innerHTML = '<i class= "fas fa-pause"></i>';
                  }else{
                    mysong7.pause();
                       play7.innerHTML = '<i class= "fas fa-play"></i>';
                  }
              }

              </script>
@endsection
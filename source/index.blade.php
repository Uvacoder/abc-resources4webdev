@extends('_layouts.wide')

@section('body')
<div class="md:p-8">
    <div class="flex justify-center">
        <h1 class="block max-w-4xl my-10 text-xl font-bold text-center md:leading-10 md:text-4xl">Great list of design and UI
            resources from stock photos, web templates, CSS frameworks, UI libraries, tools and much more</h1>
    </div>
    <div class="flex justify-center my-10 space-x-5 text-sm md:space-x-10 md:text-base">
         <a class="flex items-center space-x-3 md:space-x-4" href="https://github.com/uvacoder">
             <img src="/assets/images/portrait.jpg" class="w-12 rounded-full md:w-14 ring-4 ring-gray-300"/ alt="@uvacoder">
             <div>
                <div class="font-bold">Maddie Campbell</div>
                <div class="text-xs font-medium md:text-sm">idea + curation</div>   
            </div>
         </a>
         <a class="flex items-center space-x-3 md:space-x-4" href="https://github.com/22940dev">
            <img src="/assets/images/1i.WEBP" class="w-12 rounded-full md:w-14 ring-4 ring-gray-300" alt="@22940dev"/>
            <div>
               <div class="font-bold">Bill Lumberg</div>
               <div class="text-xs font-medium md:text-sm">idea + site</div>   
           </div>
        </a>
    </div>
    <div class="grid grid-cols-1 gap-4 md:p-4 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($posts as $post)
            @if($post->title != 'Design resources for Developers') 
                <x-homeblock :post="$post"></x-homeblock>
            @endif    
        @endforeach
    </div>
</div>
@endsection

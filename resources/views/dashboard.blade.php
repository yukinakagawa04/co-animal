
    <head>
        <link rel="stylesheet" href="/css/style.css" >
        <title>co-animal｜TOP</title>
    </head>
    <body>
        
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800  leading-tight">
                {{ __('co-animal TOP') }}
            </h2>
        </x-slot>
        
        <x-app-layout>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                        <img src="{{ asset('images/lp_image02.png') }}" alt="">
                    </div>
                </div>
                        
                <!--コンテンツ一覧-->
                <div class="content">      
                    <div class="text-center">
                        <div>
                        <!--新着順-->
                            <p  class="font-semibold text-gray-600  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">新着順</p>
                        <!--新着の投稿をアップする-->
                            @include('dashboard.content', ['contents' => $contents])
                        <!--フロントに全部出すデータ-->
                            <a href="content"  class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('もっと見る') }}</a>
                            <a href="partner" class="hidden">{{ __('もっと見る') }}</a>
                    </div>
                </div>
                
                <div>
                    <div class="bg-teal-300">
                        <a href="{{ route('service') }}"><img src="{{ asset('images/banner01.png') }}" alt="" class="mx-auto"></a>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </body>

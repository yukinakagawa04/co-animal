<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  leading-tight">
            {{ __('co-animal TOP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <img src="{{ asset('images/lp_image02.png') }}" alt="">
            </div>
        </div>
                
                
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">      
            <div class="text-center">
                <p  class="font-semibold text-gray-600  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">新着順</p>
                <!--新着の投稿をアップする-->
                @foreach ($contents as $content)
                <tr class="hover:bg-gray-lighter">
                    <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                      <!--詳細の機能-->
                      <a href="{{ route('content.show',$content->id) }}">
                        <!--ユーザー名-->
                        <p class="text-left text-gray-800 dark:text-gray-200">{{$content->user->name}}</p>
                        <!--タイトル-->
                        <h3 class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">{{$content->title_content}}</h3>
                        <!--画像-->
                        <img src="{{ asset('storage/contents/images/'.$content->image_content)}}"　class="mx-auto" style="height:300px;">
                        <!--音声ファイル-->
                        <audio controls src="{{ asset('storage/contents/audios/'.$content->audio)}}"></audio>
                        <div class="flex">
                      </a>
                    </td>
                </tr>
                @endforeach
                <!--フロントに全部出すデータ-->
                <a href="content"  class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('もっと見る') }}</a>
                </div>
                <div class="text-center">
                <!--<p>おすすめアカウント</p>-->
                
                <!--おすすめアカウントを1つアップする-->
                    <a href="partner" class="hidden">
                        {{ __('もっと見る') }}
                    </a>
            </div>
        </div>
        <div>
            <a href="/service"><img src="{{ asset('images/banner01.png') }}" alt="" class="mx-auto"></a>
        </div>
    </div>
    
</x-app-layout>

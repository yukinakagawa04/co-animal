
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
            
            

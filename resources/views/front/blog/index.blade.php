<x-front-layout title="Semua Postingan">
    @section('content')
    <!-- All post-->
    <section class="section section-md bg-gray-lighter text-center" style="padding-top: 2.5em!important;">
        <div class="shell">
          <p class="heading-1">Blog</p>
          <div class="range range-xs-center range-30">
            @forelse($posts as $key => $post)
              <div class="cell-sm-9 cell-md-6">
                <article class="post-modern">
                  <div class="post-modern__header">
                    <h3 class="post-modern__title"><a href="{{ route('application.blog.show', $post->slug) }}">{{$post->title}}</a></h3>
                  </div>
                  <div class="post-modern__body">
                    <figure><img src="{{$post->blog_file_url}}" alt="" width="570" height="320"/>
                    </figure>
                    <div class="post-modern__media">
                      <p>{{\Str::words(strip_tags($post->content), 20)}}</p>
                    </div>
                  </div>
                  <div class="post-modern__footer">
                    <ul class="post-modern__meta">
                      <li><span class="icon icon-sm material-icons-query_builder"></span>
                        <time datetime="2017-01-01">{{$post->created_at->diffForHumans()}}</time>
                      </li>
                      <li><span class="icon icon-sm material-icons-loyalty"></span>
                        <ul class="list-comma">
                          <li><a href="?category={{strtolower($post->category->name)}}">{{$post->category->name}}</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </article>
              </div>
            @empty
              <x-front.empty-message>postingan</x-front.empty-message>
            @endforelse
          </div>
          <!-- Pagination-->
          {!! $posts->links() !!}
        </div>
      </section>
    @stop
</x-front-layout>

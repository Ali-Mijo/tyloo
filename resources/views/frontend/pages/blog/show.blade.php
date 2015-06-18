@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'Blog', 'pageNameBreadcrumb' => 'Blog'])

    <section class="mt40 mb40">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="blog-post mb40">
                        <img class="img-responsive full-width" src="{{ $post->image }}" alt="">
                        <div class="blog-post-holder">
                            <ul class="list-inline posted-info">
                                <li>By <a href="#">{{ $post->author->name }}</a></li>
                                @include('frontend.partials.blog.blocks.postTags', ['tags' => $post->tags])
                                <li>{{ $post->created_at->diffForHumans() }}</li>
                            </ul>
                            <hr align="left" class="mt15 mb10">
                            <h2>{{ $post->title }}</h2>
                            {!! $post->content !!}
                        </div>
                    </div>
                    <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        /* * * CONFIGURATION VARIABLES * * */
                        var disqus_shortname = 'tyloofr';

                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function() {
                            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                </div>

                <!-- Sidebar -->
                <div class="col-sm-4">
                    @include('frontend.partials.blog.sidebar')
                </div>
                <!-- /Sidebar -->
            </div>
        </div>
    </section>
@stop

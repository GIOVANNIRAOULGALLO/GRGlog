<x-layout>
    <x-slot name="title">Homepage</x-slot>
    <div class="container-fluid  bg-grey">
        <div class="row justify-content-center mt-2">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12 py-5">
                <hr class="divider">
                <h1 class="pt-4">Latest Article</h1>
            </div>
        </div>
        <div class="row justify-content-center container-white">
                @foreach($articles as $article)
                    <div class="col-12 col-lg-4 col-md-6 text-center pb-5">
                        <h2 class="card-title my-2 tc-dark">{{$article->title}}</h2>
                        <img src="{{Storage::url($article->img)}}" class="img-article img-fluid" alt="{{$article->title}}">
                        <p> di
                            @if($article->user->id==1)
                            GRG
                            @else
                            {{$article->user->name}} {{$article->user->surname}}
                            @endif
                        </p>
                        <a href="{{route('show',compact('article'))}}" class="btn btn-grglog">Read More</a>
                        <a href="#" class="btn btn-grglog position-relative">Comments</a>
                    </div>
                @endforeach
            
        </div>
        <hr class="divider">
        <div class="row justify-content-center text-center">
            <div class="col-12 mt-3" id="welcomeGallery">
                <h1 class="text-center">Photo Gallery</h1>
                @foreach ($photos as $photo)
                <img src="{{Storage::url($photo->img)}}" alt="{{$photo->title}}" class="my-3 img-article">
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{-- @foreach ($articles->tags()->get() as $tag)
                    <p>{{$tag->tag}}</p>
                @endforeach --}}
            </div>
        </div>
    </div>
</x-layout>
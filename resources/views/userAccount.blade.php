<x-layout>
    <x-slot name="title">Profilo di {{Auth::user()->name}}</x-slot>
    <div class="container-fluid  bg-grey">
        <div class="row justify-content-center text-center py-5">
            <div class="col-12  mt-5">
                <h1>Profilo di {{Auth::user()->name}} {{Auth::user()->surname}} </h1>
            </div>
        </div>
        <hr class="divider">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <button type="button" class="btn btn-grglog  mx-2"><a href="{{route('newArticle')}}" class="link-no-decoration tc-main">Insert Article</a></button>
                <button type="button" class="btn btn-grglog  mx-2"><a href="{{route('newPhoto')}}" class="link-no-decoration tc-main">Insert Photo</a></button>
            </div>
        </div>
        <hr class="divider">
        <div class="row justify-content-center text-center">
            @foreach($articles as $article)
            <div class="col-6 mb-3 container-white text-center">
                <div class="mb-4">
                    <h2 class="tc-dark my-2 text-center">{{$article->title}}</h2>
                    <p class="tc-dark">{{$article->user->name}} {{$article->user->surname}}</p>
                    <img src="{{Storage::url($article->img)}}" class="img-article-profile img-fluid" alt="{{$article->title}}"> 
                    <a href="{{route('show',compact('article'))}}" class="btn btn-grglog my-2">Read More</a>
                    @auth
                        @if (Auth::id() === $article->user->id)
                            <a href="{{route('editArticle',compact('article'))}}" class="btn btn-grglog my-2 mx-2">Modifica</a>
                        @endif
                    @endauth
                </div>
            </div>
            @endforeach
        </div>
        <hr class="divider mb-1">
        <div class="row justify-content-center text-center py-4">
            <div class="col-12">
                <form action="{{route('destroyAccount',['user'=>Auth::user()])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-grglog mt-3 mx-2">Elimina Account</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
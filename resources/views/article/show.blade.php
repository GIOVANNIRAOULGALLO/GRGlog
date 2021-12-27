<x-layout>
    <x-slot name="title">Dettagli {{$article->title}}</x-slot>
    <div class="container-fluid bg-grey py-4">
        <div class="row justify-content-center text-center pt-5">
            <div class="col-12 pt-5">
                
            </div>
        </div>
        <div class="row justify-content-center text-center container-white py-3">
            <div class="col-8 py-2 text-center">
                <h1 class="my-2">{{$article->title}}</h1>
                <button type="button" class="btn-grglog" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img src="{{Storage::url($article->img)}}" class="img-fluid" alt="{{$article->title}}" height="400" width="600">
                </button>
                <p class="mt-3">{{$article->body}}</p>
                <p> By 
                    @if($article->user->id==1)
                        GRG
                    @else   
                        {{$article->user->name}}
                    @endif
                </p>
                <div class="d-flex justify-content-center pb-3">
                        @if(Auth::id()===$article->user->id)
                            <a href="{{route('editArticle',compact('article'))}}" class="btn btn-grglog mx-2">Modifica</a>
                            <form action="{{route('deleteArticle',compact('article'))}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-grglog mx-2"> Elimina</button>
                            </form>
                        @endif
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show-modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="staticBackdropLabel">{{$article->title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{Storage::url($article->img)}}" class="img-fluid" alt="{{$article->title}}" height="800" width="1000">
                    </div>
                </div>
            </div>
        </div>
</x-layout>
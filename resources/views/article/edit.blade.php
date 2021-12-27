<x-layout>
    <x-slot name="title">Modifica Articolo</x-slot>
    <div class="container-fluid bg-grey vh-100">
        <div class="row justify-content-center text-center pt-5">
            <div class="col-12 col-md-6">
                <h1 class="my-4">Modifica di "{{$article->title}}"</h1>
                <form method="post" action="{{route('updateArticle',compact('article'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('put');
                    <div class="mb-3">
                        <label for="titleArticleForm" class="form-label">Inserisci il nuovo titolo</label>
                        <input type="text" class="form-control" id="titleArticleForm" aria-describedby="emailHelp" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="textArticleform" class="form-label">Inserisci il nuovo testo</label><br>
                        <textarea name="body" id="textArticleform" cols="30" rows="10" class="text-area-article"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="imgArticleForm" class="form-label">Inserisci la nuova immagine</label>
                        <input type="file" class="form-control" id="imgArticleForm" aria-describedby="emailHelp" name="img">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-grglog mx-2">Modifica</button>
                        <button type="button" class="btn btn-grglog mx-2"><a href="{{route('userAccount')}}" class="link-no-decoration tc-main">Annulla</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
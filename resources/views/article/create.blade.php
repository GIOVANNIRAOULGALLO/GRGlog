<x-layout>
    <x-slot name="title">Crea Articolo</x-slot>
    <div class="container-fluid bg-grey ">
        <div class="row justify-content-center text-center py-5">
            <div class="col-12 mt-5">
                <h1>Inserisci un articolo</h1>
            </div>
        </div>
        <div class="row  py-3 justify-content-center text-center">
            <div class="col-12 col-md-6">
                <div class="frame-create p-3">
                    <form method="post" action="{{route('articleStore')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="titleArticleForm" class="form-label">Inserisci titolo</label>
                            <input type="text" class="form-control" id="titleArticleForm" aria-describedby="emailHelp" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="textArticleform" class="form-label">Inserisci il testo</label><br>
                            <textarea name="body" id="textArticleform" cols="30" rows="10" class="text-area-article"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="imgArticleForm" class="form-label">Inserisci un'immagine</label>
                            <input type="file" class="form-control w-100" id="imgArticleForm" aria-describedby="emailHelp" name="img">
                        </div>
                        <button type="submit" class="btn btn-grglog my-2">Submit</button>
                    </form>
                </div>
                <button type="button" class="btn btn-grglog my-2"><a href="{{route('userAccount')}}" class="link-no-decoration tc-main">ACCOUNT</a></button>
            </div>
        </div>
    </div>
</x-layout>
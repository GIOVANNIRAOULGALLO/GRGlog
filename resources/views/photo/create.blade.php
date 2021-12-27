<x-layout>
    <x-slot name="title">New Photo</x-slot>
    <div class="container-fluid bg-grey vh-100">
        <div class="row justify-content-center text-center py-5">
            <div class="col-12 col-md-6">
                <h1 class="my-5">Add new Photo</h1>
                <div class="frame-create mb-5">
                    <form action="{{route('photo.create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="my-3 w-100">
                            <label for="inputTitle" class=" w-50 tc-main my-2">Inserisci un titolo</label>
                            <input type="text" name="title" id="inputTitle" class="w-75 input-border">
                        </div>
                        <div class="my-3 w-100">
                            <label for="inputImg" class="w-50 tc-main my-2">Inserisci un immagine</label>
                            <input type="file" name="img" id="inputImg" class="w-75 input-border">
                        </div>
                        <button type="submit" class="btn btn-grglog my-2">Inserisci </button>
                    </form>
                </div>
                <button type="button" class="btn btn-grglog my-2"><a href="{{route('userAccount')}}" class="link-no-decoration tc-main">ACCOUNT</a></button>
            </div>
        </div>
    </div>
</x-layout>
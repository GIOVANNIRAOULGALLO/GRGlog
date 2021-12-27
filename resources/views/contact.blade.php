<x-layout>
    <x-slot name="title">Contattaci</x-slot>
    <div class="container-fluid bg-grey vh-100">
        <div class="row justify-content-center text-center py-5">
            <div class="col-12 mt-5">
                <h1>Contattaci</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('mailStore')}}">
                    @csrf
                    <div class="my-2">
                        <label for="exampleInputEmail1" class="form-label">Email </label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="my-2">
                        <label for="exampleInputPassword1" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="my-2">
                        <label for="textAreaContact" class="form-label">Messaggio</label>
                        <textarea name="text" id="textAreaContact" class="text-area-article"></textarea>
                    </div>
                    <button type="submit" class="btn btn-grglog my-2">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
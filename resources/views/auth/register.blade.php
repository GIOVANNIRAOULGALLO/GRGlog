<x-layout>
    <x-slot name="title">Registrazione</x-slot>
    <div class="container-fluid bg-grey">
        <div class="row justify-content-center text-center py-5">
            <div class="col-12 my-3 mt-5">
                <h1>Registrati</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Inserisci il tuo nome</label>
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputSurname" class="form-label">Inserisci il tuo cognome</label>
                        <input type="text" class="form-control" id="exampleInputSurname" aria-describedby="emailHelp" name="surname">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Inserisci la tua mail </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <div class="d-flex inline-flex position-relative">        
                            <input type="password" class="form-control" id="inputPassword" name="password">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputPasswordConfirm" class="form-label">Conferma Password</label>
                        <div class="d-flex inline-flex position-relative">     
                            <input type="password" class="form-control" id="inputPasswordConfirm" name="password_confirmation">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-grglog my-3">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
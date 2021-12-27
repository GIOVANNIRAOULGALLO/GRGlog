<x-layout>
    <x-slot name="title">Login</x-slot>
    <div class="container-fluid bg-grey vh-100">
        <div class="row justify-content-center text-center pt-5">
            <div class="col-12  mt-5">
                <h1>Login</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center mt-3">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="my-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="my-3">
                        <label for="inputPasswordL" class="form-label">Password</label>
                        <div class="d-flex inline-flex position-relative">   
                            <input type="password" class="form-control" id="inputPasswordL" name="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-grglog">Entra</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
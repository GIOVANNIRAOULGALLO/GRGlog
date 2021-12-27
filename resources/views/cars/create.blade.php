<x-layout>
    <x-slot name="title">New Car</x-slot>
    <div class="container-fluid bg-gray">
        <div class="row justify-content-center text-center py-5">
            <div class="col-12 col-md-6 py-5">
                <h1>Inserisci una Car</h1>
                <form action="{{route('storeCar')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label >Seleziona modello</label><br><br>
                    <input type="text" name="model"><br><br>
                    <select name="brand">
                        @foreach ($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select><br><br>
                    <label for="">Inserisci un immagine</label><br><br>
                    <input type="file" name="img"><br><br>
                    <button type="submit">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
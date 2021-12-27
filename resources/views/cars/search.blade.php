<x-layout>
    <x-slot name="title">Cerca Auto</x-slot>
    <div class="container-fluid bg-grey">
        <div class="row justify-content-center text-center py-5">
            <div class="col-12 col-md-6 py-5">
                <h1 class="text-center">Search Your Cars</h1>
                <hr class="divider">
                <h3 class="text-center">Please select a brand</h3>
                <div class=" welcome-cars-section">
                    <button class="btn btn-grglog mx-2 my-2"><a href="#" class="link-no-decoration tc-main">BMW</a></button>
                    <button class="btn btn-grglog mx-2 my-2"><a href="#" class="link-no-decoration tc-main">AUDI</a></button>
                    <button class="btn btn-grglog mx-2 my-2"><a href="#" class="link-no-decoration tc-main">FIAT</a></button>
                    <button class="btn btn-grglog mx-2 my-2"><a href="#" class="link-no-decoration tc-main">FORD</a></button>
                    <button class="btn btn-grglog mx-2 my-2"><a href="#" class="link-no-decoration tc-main">SEAT</a></button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
                @foreach ($cars as $car)
                    <div class="col -12 col-md-6">
                        <h4>{{$car->model}}</h4>
                        <h5>
                            @foreach ($car->brands as $brand )
                                {{$brand->name}}
                            @endforeach
                        </h5>
                        <img src="{{Storage::url($car->img)}}" alt="">
                    </div>
                @endforeach
        </div>
    </div>
</x-layout>
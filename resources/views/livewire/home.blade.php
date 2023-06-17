<div class="container mt-4 mb-5">

    <!-- BANNER -->
    <div class="banner mb-5">
        <img src="{{ url('assets/slider/slider1.png') }}" alt="">
    </div>


    <!-- PILIH LIGA -->
    <section class="pilih-liga">
        <div class="row mt-4">
            @foreach ($ligas as $liga)
            <div class="col-md-3">
                <a href="{{ route('products.liga', $liga->id) }}">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/liga') }}/{{ $liga -> gambar }}" class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>


    <!-- BEST PRODUCT -->
    <section class="products mt-5">
        <h3>
            <strong>Best Product</strong>
            <a href="{{ route('products') }}" class="btn btn-dark hantu"><i class="fas fa-box-open"></i> Lihat Semua</a>
        </h3>
        <div class="row mt-4">
            @foreach ($products as $product)
            <div class="col">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <img src="{{ url('assets/jersey') }}/{{ $product -> gambar }}" class="img-fluid">

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $product -> nama }}</strong></h5>
                                <h5>Rp. {{ number_format($product -> harga) }}</h5>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>



</div>
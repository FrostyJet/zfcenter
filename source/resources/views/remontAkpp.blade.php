@extends('@layouts.app')

@section('content')
<div class="py-5">
    <h1 class="text-center fs-3 mb-5">
        <i class="fas fa-tools bi text-muted"></i>
        РЕМОНТ АКПП
    </h1>
    <?php $brands = \App\Models\Defines::getBrands(); ?>
    <section class="text-center container remont-akpp">
        <div class="row justify-content-around">
            @foreach($brands as $brandKey => $b)
            <a href="{{ route('index.remontBrand', ['brand' => $brandKey]) }}" class="col-5 col-lg-4 card-item no-decoration">
                <img class="bd-placeholder-img img-fluid" width="140" height="140" src="{{$b['image']}}" alt="">

                <h2 class="text-dark no-decoration text-truncate">{{$b['subtitle']}}</h2>
                <p class="text-dark no-decoration">{{$b['title']}}</p>
            </a>
            @endforeach
        </div>
    </section>
</div>

<div class="py-5"></div>
@endsection

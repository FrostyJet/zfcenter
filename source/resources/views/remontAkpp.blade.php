@extends('@layouts.app')

@section('content')
<div class="py-5">
    <h1 class="text-center fs-3 mb-5">
        <i class="fas fa-tools bi text-muted"></i>
        РЕМОНТ АКПП
    </h1>
    <?php $brands = \App\Models\Defines::getBrands(); ?>
    <section class="text-center container">
        <div class="row">
            @foreach($brands as $brandKey => $b)
            <a href="{{ route('index.remontBrand', ['brand' => $brandKey]) }}" class="col-6 col-lg-4 no-decoration">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{$b['image']}}" alt="">

                <h2 class="text-dark no-decoration">{{$b['subtitle']}}</h2>
                <p class="text-dark no-decoration">{{$b['title']}}</p>
            </a>
            @endforeach
        </div>
    </section>
</div>

<div class="py-5"></div>
@endsection
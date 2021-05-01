@extends('@layouts.app')

@section('content')
    <div class="py-5">
        <h1 class="text-center fs-3 mb-5"> 
            <i class="fas fa-tools bi text-muted"></i>
            РЕМОНТ АКПП
        </h1>
        <?php
        $brands = [
            ['image' => 'http://zfcenter.ru/sites/default/files/photo_0.jpg', 'title' => 'Ремонт АКПП', 'subtitle' => 'Mercedes'],
            ['image' => 'http://zfcenter.ru/sites/default/files/logo_audi_0.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'Audi'],
            ['image' => 'http://zfcenter.ru/sites/default/files/logo_jaguar.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'Jaguar'],
            ['image' => 'http://zfcenter.ru/sites/default/files/logo_rover.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'Land Rover'],
            ['image' => 'http://zfcenter.ru/sites/default/files/logo_bmw.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'BMW'],
            ['image' => 'http://zfcenter.ru/sites/default/files/logo_other.png', 'title' => 'Ремонт АКПП', 'subtitle' => 'на других авто'],
        ];
        ?>
        <section class="text-center container">
            <div class="row">
                @foreach($brands as $b)
                    <div class="col-6 col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                             src="{{$b['image']}}" alt="">

                        <h2>{{$b['subtitle']}}</h2>
                        <p>{{$b['title']}}</p>
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div>
        </section>
    </div>

    <div class="py-5"></div>
@endsection

<h1 class="mb-4">РЕМОНТ ДРУГИХ АКПП</h1>

<div class="row">
    @foreach($series['models'] as $modelKey =>  $model)
        <div class="col-6 col-md-4 col-lg-3 mb-3">
            <div class="card h-100 text-center other-brand-block p-3">
                <img src="/img/models/{{$brand}}/{{$modelKey}}.png"
                     class="card-img-top img-fluid">
                <div class="card-body">
                    <p class="m-0">Ремонт АКПП</p>
                    <h5 class="card-title">{{$model}}</h5>
                </div>
            </div>
        </div>
    @endforeach
</div>











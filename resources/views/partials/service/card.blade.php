<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex {{$objet->value1}} rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">{{$objet->title_1}}</span>
                        <span class="section-heading-lower">{{$objet->title_2}}</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{$objet->img}}"
                alt="">
            <div class="product-item-description d-flex {{$objet->value2}}">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0">{{$objet->texte}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

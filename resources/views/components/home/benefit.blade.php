<section class="benefits">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    OUR SUPER BENEFITS
                </p>
                <h2 class="primary-header">
                    Learn Faster & Better
                </h2>
            </div>
        </div>
        <div class="row">
            @foreach ($contentBenefits as $item)
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{ asset($item->icon) }}" class="icon" alt="">
                        <h3 class="title">
                            {{ $item->title }}
                        </h3>
                        <p class="support">
                            {{ $item->subtitle }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="steps">
    <div class="container">
        @foreach ($contentSteps as $num => $item)
            @php
                $num = $num + 1;
                $mod = $num % 2;
            @endphp
            @if ($mod == 0)
                <div class="row item-step pb-70">
                    <div class="col-lg-6 col-12 text-left copywriting pl-150">
                        <p class="story">
                            {{ $item->subtitle }}
                        </p>
                        <h2 class="primary-header">
                            {{ $item->title }}
                        </h2>
                        <p class="support">
                            {{ $item->description }}
                        </p>
                        <p class="mt-5">
                            <a href="{{ $item->link }}" class="btn btn-master btn-secondary me-3">
                                {{ $item->btnvalue }}
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <img src="{{ asset($item->image) }}" class="cover" alt="">
                    </div>

                </div>
            @else
                <div class="row item-step pb-70">
                    <div class="col-lg-6 col-12 text-center">
                        <img src="{{ asset($item->image) }}" class="cover" alt="">
                    </div>
                    <div class="col-lg-6 col-12 text-left copywriting">
                        <p class="story">
                            {{ $item->subtitle }}
                        </p>
                        <h2 class="primary-header">
                            {{ $item->title }}
                        </h2>
                        <p class="support">
                            {{ $item->description }}
                        </p>
                        <p class="mt-5">
                            <a href="{{ $item->link }}" class="btn btn-master btn-secondary me-3">
                                {{ $item->btnvalue }}
                            </a>
                        </p>
                    </div>
                </div>
            @endif
        @endforeach

        {{-- <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-left copywriting pl-150">
                <p class="story">
                    STUDY HARDER
                </p>
                <h2 class="primary-header">
                    Finish The Project
                </h2>
                <p class="support">
                    Each of you will be joining the private group and also <br> working together with team members
                    on project
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        View Demo
                    </a>
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('/images/step2.png') }}" class="cover" alt="">
            </div>

        </div>
        <div class="row item-step">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('/images/step3.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    END GAME
                </p>
                <h2 class="primary-header">
                    Big Demo Day
                </h2>
                <p class="support">
                    Learn how to speaking in public to demonstrate your <br> final project and receive the important
                    feedbacks
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Showcase
                    </a>
                </p>
            </div>
        </div> --}}
    </div>
</section>

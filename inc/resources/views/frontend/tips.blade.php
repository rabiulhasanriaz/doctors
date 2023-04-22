<div class="gallery py-5" id="projects">
    <div class="container py-xl-5 py-lg-3">
        <!-- heading title -->
        <div class="mb-lg-5 mb-4 text-center">
            <h3 class="title-wthree text-dark mb-2">
                <span class="mb-2">Gallery</span>My Tips</h3>
        </div>
        <!-- //heading title -->
        <div class="gallery-grids" >
            <section>
                <ul id="da-thumbs" class="da-thumbs">
                    @foreach ($tips as $item)
                    <li data-aos="zoom-in">
                        <a href="{{ $item->image == '' ? asset('assets/images/g1.jpg') : $item->image}}" >
                            <img src="{{ $item->image == '' ? asset('assets/images/g1.jpg') : $item->image}}" alt="" class="img-fluid" style="width: 400px; height: 400px;"/>
                            <div>
                                <h5>
                                    <a href="{{ route('frontend.tips-details', $item->id) }}" style="top: 5px;">
                                        {{ $item->title }}
                                    </a>
                                </h5>
                                <p>{{ substr($item->context, 0, 60) }}</p>
                            </div>
                        </a>
                    </li>
                    @endforeach
                    
                </ul>
            </section>
        </div>
    </div>
</div>
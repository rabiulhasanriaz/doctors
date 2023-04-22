<section class="bottom-banner-w3layouts py-5" id="about">
    <div class="container py-xl-5 py-lg-3">
        <div class="row py-xl-3 py-lg-3">
            <div class="col-lg-6 feature fea-slider" data-aos="fade-right">
                <img src="{{ $data->image == '' ? asset('assets/images/about.jpg') : $data->image}}" class="img-fluid" alt="" style="width: 640px; height: 426px;">
            </div>
            <div class="col-lg-6 feature pl-lg-5 mt-lg-0 mt-5" data-aos="fade-left">
                <h3 class="title-wthree text-dark mb-4">
                    <span class="mb-2">Some Info</span>{{ $data->title ?? 'No Title'}}</h3>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut.</p> --}}
                <p class="mt-3">{{ $data->details ?? 'No Details' }}</p>
            </div>
        </div>
    </div>
</section>
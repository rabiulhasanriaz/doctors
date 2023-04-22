<div class="info-w3layouts" id="education">
    <div class="w3l-overlay py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="edu-agile-info">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up"
                    data-aos-duration="3000">
                        <div class="grid-flex bg-white p-5">
                            <div class="pl-4 title-edu py-2 mb-5">
                                <i class="fas fa-book-reader mb-2"></i>
                                <h4 class="aboutbtm-head">My Education</h4>
                            </div>
                            @foreach ($education as $edu)
                            <div class="grids-agiles-one">
                                <h5 class="text-dark mb-2">{{ $edu->degree }}</h5>
                                <p>{{ $edu->institution }}</p>
                                <p>{{ $edu->major }}</p>
                                <p>{{ $edu->year }}</p>
                                <p>{{ $edu->grading_point }}</p>
                                <p>{{ $edu->remark }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5" data-aos="fade-up"
                    data-aos-duration="3000">
                        <div class="grid-flex bg-white p-5">
                            <div class="pl-4 title-edu py-2 mb-5">
                                <i class="fas fa-chalkboard-teacher mb-2"></i>
                                <h4 class="aboutbtm-head">My Experience</h4>
                            </div>
                            <div class="grids-agiles-one">
                                <h5 class="text-dark mb-2">Work in company "Available"</h5>
                                <p>20XX-20XX</p>
                            </div>
                            <div class="grids-agiles-one my-3">
                                <h5 class="text-dark mb-2">Work in company "Generators"</h5>
                                <p>20XX-20XX</p>
                            </div>
                            <div class="grids-agiles-one">
                                <h5 class="text-dark mb-2">Course designer - San Diego</h5>
                                <p>20XX-20XX</p>
                            </div>
                            <div class="style-book-wthree">
                                <i class="fas fa-edit"></i>
                            </div>
                        </div>
                    </div>>
                </div>
            </div>
        </div>
    </div>
</div>
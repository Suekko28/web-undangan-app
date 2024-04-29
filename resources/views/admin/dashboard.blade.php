@extends('layouts.app')

@section('navbar-admin')
    <main>
        <div class="container-xxl flex-grow-1 container-p-y vh-100">
            <!-- Responsive Table -->
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('./assets/dashboard-img1.png') }}" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Wedding Design 1</h5>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam laudantium dolores
                                architecto ipsam enim odio veniam ea labore est tempora atque accusantium placeat fuga quam
                                voluptas, fugiat soluta commodi quos?
                            </p>
                            {{-- <a class="btn btn-outline-primary"
                                href="{{ route('view-alternative1') }}">View List</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('./assets/dashboard-img2.png') }}" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Wedding Design 2</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore unde ducimus id fugiat.
                                Necessitatibus voluptates voluptatem fuga unde iusto blanditiis velit vitae fugit esse.
                                Temporibus odit totam dolore earum quaerat.
                            </p>
                            {{-- <a href="javascript:void(0)" class="btn btn-outline-primary"
                                href="{{ route('view-alternative1') }}">View List</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('./assets/dashboard-img3.png') }}" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Wedding Design 3</h5>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur aspernatur similique
                                corporis saepe voluptas magnam odio ut nemo quibusdam, sequi, quos tenetur architecto
                                tempore praesentium at? Velit quasi deserunt quas?
                            </p>
                            {{-- <a href="javascript:void(0)" class="btn btn-outline-primary">View List</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!--/ Responsive Table -->
        </div>
        <!-- / Content -->
        @include('layouts.footer')

        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
            integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous">
        </script>

    </main>
@endsection
<!-- Content -->

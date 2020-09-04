@extends('layouts.default')
@section('site-content')
    <div class="container-fluid py-2">
        {{--START BANNER--}}
        <div class="header-banner">
            <img src="{{asset('')}}assets/img/banner/banner1.jpg" alt="">
            <div class="banner-text-wrapper">
                <h1 class="text-white underlined">About Us</h1>
                <p class="text-muted">Get to know what we do and our works.</p>

            </div>
            <div class="animated-pane">
                .
            </div>
        </div>
        {{--END BANNER--}}

        <div class="container">
            <div class="row mt-3">
                <div class="col-md-4 mb-5">
                    <img src="{{asset('')}}assets/img/tabe.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h4 class="theme-color curved-underlined text-center">Introduction</h4>
                    <div class="page-paragraph-wrapper">
                        <p class="text-muted text-10 pt-3 pl-5 pr-5 text-justified">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cum deserunt id ipsa
                            ipsum minus quibusdam saepe, ut. A accusamus animi, at blanditiis enim et exercitationem
                            harum numquam quos recusandae.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam amet, aspernatur
                            assumenda blanditiis consequuntur, dolor dolorum exercitationem facilis itaque iusto
                            molestiae molestias, officia quae repellat sint veniam voluptas voluptate.
                        </p>
                        <p class="text-10 text-muted pl-5 pr-5  text-justified">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, at consequuntur cumque
                            cupiditate dicta, distinctio earum impedit nesciunt obcaecati optio perspiciatis rerum sed
                            sint vel veniam veritatis, vitae. Minus, numquam?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos doloribus ea eius
                            facilis labore libero nobis possimus quia quis ratione sequi sint, voluptatibus! Architecto
                            eligendi eos inventore laborum sit vel?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at atque consequatur
                            eius enim error iste nobis nostrum placeat quaerat quas quos reprehenderit repudiandae,
                            saepe, sequi sit tempora voluptates voluptatibus!

                        </p>
                        <h6 class="theme-color pl-5">Why we decided?</h6>
                        <p class="text-10 text-muted pl-5 pr-5 text-justified">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, at consequuntur cumque
                            cupiditate dicta, distinctio earum impedit nesciunt obcaecati optio perspiciatis rerum sed
                            sint vel veniam veritatis, vitae. Minus, numquam?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos doloribus ea eius
                            facilis labore libero nobis possimus quia quis ratione sequi sint, voluptatibus! Architecto
                            eligendi eos inventore laborum sit vel?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at atque consequatur
                            eius enim error iste nobis nostrum placeat quaerat quas quos reprehenderit repudiandae,
                            saepe, sequi sit tempora voluptates voluptatibus!

                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
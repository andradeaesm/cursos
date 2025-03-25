<x-layouts.mentor>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Detalhe do Curso </h2>
            <p>{{ $curso->nome }}</p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8">
                    <img src="{{ asset($curso->imagem) }}" class="img-fluid" alt="">
                    <h3>{{ $curso->nome }}</h3>
                    <p>
                        {{$curso->descricao}}
                    </p>
                </div>
                <div class="col-lg-4">

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Professor</h5>
                        <p><a href="#">{{ $curso->professor }}</a></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Custo</h5>
                        <p>{{ $curso->valor }}€</p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Vagas</h5>
                        <p>{{ $curso->vagas }}</p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Duração</h5>
                        <p>{{ $curso->duracao }}</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Cource Details Section -->





</x-layouts.mentor>

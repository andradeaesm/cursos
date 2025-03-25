<x-layouts.mentor>
   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs">
      <div class="container">
        <h2>Cursos</h2>
        <p>A nossa oferta formativa. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

            @foreach ($cursos as $curso)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="course-item">
                  <img src="{{ asset ($curso->imagem) }}" class="img-fluid" alt="{{ $curso->name }}">
                  <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4>{{ $curso->categoria->nome }}</h4>
                      <p class="price">{{ $curso->valor }}€</p>
                    </div>

                    <h3><a href="{{ route('front.cursos.details',$curso->id) }}">{{ $curso->nome }}</a></h3>
                    <p>{{ $curso->descricao }}</p>
                    <div class="trainer d-flex justify-content-between align-items-center">
                      <div class="trainer-profile d-flex align-items-center">
                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                        <span>{{ $curso->professor }}</span>
                      </div>

                    </div>
                  </div>
                </div>
              </div> <!-- End Course Item-->
            @endforeach




        </div>

      </div>
    </section><!-- End Courses Section -->
</x-layouts.mentor>

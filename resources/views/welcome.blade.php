@extends('master')

@section('content')



            <section class="jumbotron text-center">
              <div class="container">
                <h1 class="jumbotron-heading">
        عيد مبارك سعيد
                </h1>
                <p class="lead black">
                  <span class="">
من محمد أمين المغيلي مطور تطبيق تهنئة إلى جميع مسلمي العالم
                  </span>

                  <a href="#form" class="btn btn-info">
                    هنئ صديقك أيضا مع تهنئة
                  </a>

                </p>

              </div>
            </section>


@stop


@section('pic')
<script type="text/javascript">
  $('.jumbotron').css('background-image','url(\"{{ asset( "/images/cover.jpg" ) }}\")');
</script>
@stop

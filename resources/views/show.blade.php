@extends('master')

@section('content')



            <section class="jumbotron text-center">
              <div class="container">
                <h1 class="jumbotron-heading">
{{  $c->word }}
                </h1>
                <p class="lead black">
                  <span class="">
من {{  $c->sender  }} إلى {{   $c->receptor  }}
                  </span>

                  <a href="#form" class="btn btn-info">
 أنت أيضا يمكنك أن تهنئ صديقك  مع تهنئة
                  </a>

                </p>
                <p>


                </p>
              </div>
            </section>


@stop


@section('pic')
<script type="text/javascript">
  $('.jumbotron').css('background-image','url(\"{{ asset( "/images/". $c->picture ) }}\")');
</script>
@stop

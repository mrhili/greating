@extends('master')

@section('content')

            <section class="jumbotron text-center">
              <div class="container">
                <h1 class="jumbotron-heading">
لقد تم طبع التهنئة بنجاح
                </h1>
                <h2 class="black">
                   هذا هو لينك الإرسال للصديق بالمناسبة إحفضه لكي ترسله له ك
                </h1>

                <p class="text-muted">
 {{ route('greating.show', $c->id) }} <a href="{{ route('greating.show', $c->id) }}"  target="_blank" class="btn btn-success"> ويمكنك أيضا رؤية التهنئة</a>
                </p>

                  <a href="#form" class="btn btn-info">
هنئ صديقا أخر
                  </a>
                  <br/>

                  <span class=" text-muted signature">
                  هذا التطبيق أنشئ من طرف
                  <a target="_blank" href="https://idda-tech.000webhostapp.com">العدة التقنية</a>
                  </span>
              </div>
            </section>


@stop


@section('pic')
<script type="text/javascript">
  $('.jumbotron').css('background-image','url(\"{{ asset( "/images/success.jpg" ) }}\")');
</script>
@stop


<section id="form">
            {!! Form::open([
              'route' => 'greating.store',
              'files' => true
              ]) !!}

              {!! Form::token() !!}


              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif


              <div class="form-row">
                <div class="form-group col-md-6">

                  <input type="text" class="form-control" name="sender" placeholder="
                  المرسل
                  ">
                </div>
                <div class="form-group col-md-6">

                  <input type="text" class="form-control" name="receptor" placeholder="
                  المرسل إليه
                  ">
                </div>
              </div>
              <div class="form-group">

                <textarea class="form-control" name="word" placeholder="كلمة التهنئة"></textarea>
              </div>
              <div class="form-group">

                {!! Form::file('image', ['name' => 'picture']) !!}
              </div>

              <div class="">

                <button type="submit" class="btn btn-primary">
                  هنئ
                </button>
              </div>


            </form>


</section>

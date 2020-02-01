
              @if($errors->any())
              <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $item)
                    {{$item}}
                @endforeach
              </div>
              @endif


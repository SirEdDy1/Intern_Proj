@extends('guest.layouts.app')

@push('custom-css')
    <style>
        .container{
            max-width: 100%;
            max-height: 100%;
        }
        .picture{
            margin: auto;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            max-height: 400px;
            overflow: hidden;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .picture > img{
            object-fit: cover;
            object-position: center;
        }
    </style>
@endpush

@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <div class="container m-0">
      <div class="row">
          <div class="col">
              <h4>Giới thiệu</h4>
              <ul>
                  <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                  <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                  <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
              </ul>
              <h4>Văn bản</h4>
              <ul>
                  <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                  <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                  <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
              </ul>
          </div>
          <div class="col-6">
              <div class="picture">
                  <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="">
              </div>
              <div class="description">
                  <h5>LỊCH SỬ TRƯỜNG THPT TRẦN PHÚ - HOÀN KIẾM</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam esse libero magnam modi molestiae recusandae, reiciendis repellat ut. Doloribus praesentium quibusdam tempora. Ab commodi delectus distinctio iste mollitia nesciunt officia quae repudiandae soluta veniam. Aliquid consequuntur dolorem dolorum eligendi eos eum illum inventore laborum molestiae, molestias nobis nostrum odit quasi quod rerum suscipit unde, ut? Aliquid, asperiores, debitis distinctio, eaque est fugit id in ipsa minus nobis omnis praesentium quae quam qui quo saepe similique? Facilis molestias odit pariatur unde vel. Aliquam, commodi deserunt error expedita magni minus, mollitia nesciunt nobis nostrum placeat quas quod quos vero. At, nesciunt?</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto autem dolor harum in nihil quas ratione recusandae sequi voluptatem? Aspernatur commodi, distinctio esse ipsam laboriosam mollitia pariatur. A adipisci consectetur earum enim est facilis harum hic laboriosam minima nam nesciunt possimus quas reiciendis suscipit tempore, tenetur voluptates. Ab accusamus animi architecto, aut cum cumque delectus distinctio ducimus eligendi est ex harum in inventore ipsa iure labore minus molestias necessitatibus neque nihil nobis nostrum numquam omnis perferendis, perspiciatis placeat porro quibusdam quo ratione reiciendis rem reprehenderit repudiandae saepe sed unde, veritatis voluptatibus? Asperiores blanditiis esse hic, molestiae molestias pariatur quibusdam suscipit</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi corporis laborum libero perspiciatis quas. At consectetur cupiditate dignissimos ducimus eaque exercitationem, fugiat molestiae obcaecati voluptatum! Accusamus accusantium aspernatur autem consequuntur culpa deserunt distinctio dolorem doloremque ea enim ex, excepturi hic illo nam nemo obcaecati quod repudiandae, ullam voluptatem voluptatibus. Eligendi?</p>
              </div>
          </div>
          <div class="col">
              <h4>Liên hệ</h4>
              <ul>
                  <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                  <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                  <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
              </ul>
          </div>
      </div>
  </div>
@endsection
@extends('guest.layouts.app')

@push('custom-css')
    <style>
        .container{
            max-width: 100%;
            max-height: 100%;
        }
        .featured{
            margin: auto;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            max-height: 250px;
            overflow: hidden;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .featured > img{
            object-fit: cover;
            object-position: center;
        }
        header{
            background: #343A40;
            color: white;
            padding: 5px

        }
        ul {
            list-style: none; /* Remove list bullets */
            padding: 0;
            margin: 0;
        }
        li {
             padding-left: 16px;
             clear: both;
        }

        li:before {
            content: ""; /* Insert content that looks like bullets */
            padding-right: 8px;
            color: blue; /* Or a color you prefer */
        }

        .newspic{
            margin: auto;
            width: 30%;
            display: flex;
            justify-content: center;
            align-items: center;
            max-height: 125px;
            overflow: hidden;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
            margin-right: 2rem;
            float:left;
        }
        .newspic > img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .ext-name{
            font-weight: bold;
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
          <div class="col-5">
              <div class="featured">
                <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="">
              </div>
              Ngày 24/09/2019
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, numquam?</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, porro unde nam repellendus aspernatur deserunt!</p>
                <div>
                    <header class="border-bottom">
                        <h4><i class="material-icons">bookmark</i>Tin Mới</h4>
                    </header>
                        <section>
                            <ul>
                                <li>
                                    <div class="newspic">
                                        <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="">
                                    </div>
                                    <div class="ext-right">
                                        <a class="ext-name" href="#">Lorem ipsum dolor sit amet.</a>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat unde dolores velit dolorem quae consectetur repellendus. Quis corporis autem mollitia.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="newspic">
                                        <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="">
                                    </div>
                                    <div class="ext-right">
                                        <a class="ext-name" href="#">Lorem ipsum dolor sit amet.</a>
                                        <p class="ext-intro">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat unde dolores velit dolorem quae consectetur repellendus. Quis corporis autem mollitia.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="newspic">
                                        <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="">
                                    </div>
                                    <div class="ext-right">
                                        <a class="ext-name" href="#">Lorem ipsum dolor sit amet.</a>
                                        <p class="ext-intro">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat unde dolores velit dolorem quae consectetur repellendus. Quis corporis autem mollitia.</p>
                                    </div>
                                </li>
                            </ul>
                         </section>
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

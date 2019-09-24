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
              <div>
                  <h5>LỊCH SỬ TRƯỜNG THPT TRẦN PHÚ - HOÀN KIẾM</h5>
                  <p>Trường Trung học Phổ thông Trần Phú - Hoàn Kiếm, tiền thân là Trường Petit Lycée, rồi Trường Albert Sarraut. Là một trong các trường trung học phổ thông công lập hệ không chuyên nổi tiếng với lịch sử lâu đời và chất lượng giáo dục hàng đầu được đánh giá cao trong số các trường trung học phổ thông của thủ đô.Trường thuộc quận Hoàn Kiếm, Hà Nội.</p>
                  <br>
                  <p>Năm 1919, Pháp cho thành lập hai trường Trung học dành cho tầng lớp cao tại Đông Dương, là trường Grand Lycée và Petit Lycée. Trường Petit Lycée đào tạo các lớp dưới, 11 đến 15 tuổi, trường Grand Lycée đào tạo các lớp trên, 16 đến 18 tuổi. Trường Petit Lycée chính là trường Trần Phú ngày nay. Năm 1923, trường Grand Lycée được đổi tên là Trường Albert Sarraut, năm 1954 thì chuyển hoàn toàn về trường Petit Lycée, đào tạo toàn bộ tại đây. Sau đó xoá bỏ tên Albert Sarraut.</p>
                  <br>
                  <p>Năm 1960, trường này được phân chia thành buổi sáng là trường phổ thông trung học Hoàn Kiếm, buổi chiều là trường phổ thông trung học Trần Phú, lấy theo tên của nhà hoạt động cách mạng, tổng bí thư đầu tiên của Đảng Cộng sản Việt Nam[1]. Năm 1995, hai trường này sáp nhập, lấy tên là trường Trung học Phổ thông Trần Phú. Đến tháng 2 năm 2009 trường đổi tên thành trường Trung học phổ thông Trần Phú - Hoàn Kiếm (để phân biệt với một trường cùng tên trên địa bàn Hà Nội 2).</p>
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

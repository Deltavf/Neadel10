@extends('layout.dashboard.index')
@section('isi')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-2" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark">Dashboard</a></li>
        <li class="breadcrumb-item text-sm text-dark active">Profile</li>
      </ol>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6 class="d-inline">Profile</h6>
        </div>
        <div class="card-body pb-2">
          <div class="row">
            <div class="col-md-7">
              <form action="/dashboard/profile" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                  <center>
                    @if(auth()->user()->image)
                    <img src="{{ asset('img/profile/' . auth()->user()->image) }}" class="img-preview rounded-circle" accept=".jpg,.jpeg,.png,.bmp,.gif,.svg,.webp" width="130px" style="object-fit: cover; aspect-ratio: 1/1; border: 1px solid rgba(0,0,0,0.3);">
                    <input type="file" name="image" id="image" class="form-control mt-3" onchange="previewImage('{{ auth()->user()->image }}')">
                    @else
                    <img src="{{ asset('img/profile/default.webp') }}" class="img-preview rounded-circle" accept=".jpg,.jpeg,.png,.bmp,.gif,.svg,.webp" width="130px" style="object-fit: cover; aspect-ratio: 1/1; border: 1px solid rgba(0,0,0,0.3);">
                    <input type="file" name="image" id="image" class="form-control mt-3" onchange="previewImage('default.webp ')">
                    @endif
                  </center>
                </div>
                <div class="form-group">
                  <label for="username" class="form-control-label">Username</label>
                  <input type="text" name="username" id="username" value="{{ old('username', auth()->user()->username) }}" class="form-control"
                    placeholder="Username" required>
                  @error('username')<small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="form-group">
                  <label for="email" class="form-control-label">Email</label>
                  <input type="email" name="email" id="email" value="{{ old('email', auth()->user()->email) }}" class="form-control"
                    placeholder="Email" required>
                  @error('email')<small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="form-group mt-4">
                  <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                  <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script>
  
const imageInput = document.querySelector('#image');
const imgPreview = document.querySelector('.img-preview');
function previewImage(edit = '') {
    
    const image = imageInput.files[0];
    const reader = new FileReader();
    reader.onload = function () {
        
        let dataURL = reader.result;
        imgPreview.src = dataURL

        // Callback function
        imgPreview.onload = function () {
            imgPreview.style.display = 'block';
        }
        imgPreview.onerror = function () {
            imgPreview.style.display = 'none'
        }
    }

    if(imageInput.value == '' && edit != '') {
        imgPreview.style.display = 'block'
        imgPreview.src = `../../../img/profile/${edit}`
    }
    else if(imageInput.value == '') {
        imgPreview.style.display = 'none';
    } else {
        reader.readAsDataURL(image);
    }
}

function resetClick(edit = '') {
    if(edit != '') {
        imgPreview.style.display = 'block';
        imgPreview.src = `../../../img/novel/${edit}`
    } else {
        imgPreview.style.display = 'none';

    }
}
</script>
@endsection
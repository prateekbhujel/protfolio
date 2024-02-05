<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <title>Admin | @yield('title', 'Protfolio')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/selectric.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/bootstrap-tagsinput.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/bootstrap-timepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/plugins/select2.min.css') }}">
  
  {{-- Toaster css cdn link --}}
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/components.css') }}">
</head>

<body>
  
  <div id="app">

    <div class="main-wrapper">

      @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div class="main-content">

      @yield('content')

    </div>

    <footer class="main-footer">
      
      <div class="footer-left">
        Copyright &copy; {{ date('Y') }} 
        <div class="bullet"></div> Developed By <a href="#">Pratik Bhujel</a>
      </div>
      
      <div class="footer-right">
        Protfolio
      </div>
    </footer>
  </div>


  </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('public/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="{{ asset('public/assets/js/plugins/jquery.selectric.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/jquery.uploadPreview.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/bootstrap-tagsinput.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/bootstrap-timepicker.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/daterangepicker.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/select2.full.min.js') }}"></script>


  <!-- Template JS File -->
  <script src="{{ asset('public/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('public/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('public/assets/js/page/features-post-create.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('public/assets/js/page/forms-advanced-forms.js') }}"></script>

  {{-- Toaster.js minified JS link cdn --}}
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


  {{-- Show Dyanamic Validation errors --}}
  <script>
    @if(!empty($errors->all()))
      @foreach ($errors->all() as $error)
        toastr.error("{{ $error }}")
      @endforeach
    @endif
  </script>
  
  <script>
    $(document).ready(function () {
        // Listen for file input change event
        $('#customFile').on('change', function () {
            // Read the selected file
            var file = this.files[0];
            
            if (file) {
                // Create a FileReader object
                var reader = new FileReader();

                // Set the image source when the file is loaded
                reader.onload = function (e) {
                    $('#customImg').attr('src', e.target.result);
                };

                // Read the file as Data URL
                reader.readAsDataURL(file);
            }
        });
    });
</script>

</body>

</html>


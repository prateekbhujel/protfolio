@extends('admin.layouts.layout')

@section('title', 'Website Setting')

@section('content')

    <section class="section">
      <div class="section-header">
        <h1>Website Settings</h1>
        
      </div>

      <div class="section-body">
        <h2 class="section-title">Overview</h2>
        <p class="section-lead">
          Organize and adjust all settings about this site.
        </p>

        <div class="row">
          <div class="col-lg-6">
            <div class="card card-large-icons">
              <div class="card-icon bg-primary text-white">
                <i class="fas fa-cog"></i>
              </div>
              <div class="card-body">
                <h4>General</h4>
                <p>General settings such as, Logo 'website logo', or 'footer logo' and favicon.</p>
                <a href="{{ route('admin.general-setting.index') }}" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card-large-icons">
              <div class="card-icon bg-primary text-white">
                <i class="fas fa-search"></i>
              </div>
              <div class="card-body">
                <h4>SEO</h4>
                <p>Search engine optimization settings, such as meta tags and social media.</p>
                <a href="features-setting-detail.html" class="card-cta">Change Setting <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection
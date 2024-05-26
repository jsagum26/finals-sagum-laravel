<x-app-layout>
  <div class="pagetitle">
    <h1>{{ __('Post') }}</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item active">{{ __('Resources') }}</li>
        <li class="breadcrumb-item"><a href="{{route('post.index')}}">{{ __('Post') }}</a></li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card p-5">
          <div class="card-body">
            <h1>Subject: {{$post->subject}}</h1>
            <p><small class="text-lead">Status: {{$post->status}}</small></p>
            <p>{{$post->post}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-app-layout>

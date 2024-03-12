@extends('admin.app')
@section('content')

    <div class="pc-content">

        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb mb-3">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Data Master</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Beranda</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

       
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    {{-- < class="card-header"> --}}
                        <a href="/admin/beranda/" class="btn btn-success mb-4">Back</a>
                    
                    <h5>Form Edit</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 content-center align-center">
                            <form action="{{ route('page.update', $page->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text"  class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $beranda->title) }}"
                                        id="" aria-describedby="TitlelHelp" placeholder="Title">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                </div>
                                @error('title')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="form-group">
                                    <label class="form-label" for="sub_title">Sub Title</label>
                                    <input type="text" name="sub_title"  class="form-control @error('sub_title') is-invalid @enderror" value="{{ old('sub_title', $beranda->sub_title) }}" id=""
                                        placeholder="input" >
                                </div>
                                @error('sub_title')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                        
                                <div class="form-group">
                                    <label class="form-label" for="heading">Heading</label>
                                    <input type="text"  class="form-control @error('heading') is-invalid @enderror" name="heading" value="{{ old('heading', $beranda->heading) }}" id=""
                                        placeholder="input">
                                </div>
                                @error('heading')
                                    <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                
                                <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Content</label>
                                    <textarea class="form-control  @error('content') is-invalid @enderror" name="content" id="" placeholder="content" rows="3">{{ old('content', $beranda->content) }}</textarea>
                                </div>
                                @error('content')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary mb-4">Save</button>
                                <button type="reset" class="btn btn-warning mb-4">reset</button>
                            </form>
                        </div>
                        <div class="col-md-6">



                        </div>
                    </div>
                    
                </div>

            </div>
        </div>



        {{-- @include('admin.components.404') --}}

        <!-- [ Main Content ] end -->
    </div>
    <script>
        CKEDITOR.replace( 'content' )
    </script>
@endsection
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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">RFC</a></li>
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
                        <a href="/admin/rfc/" class="btn btn-success mb-4">Back</a>
                    
                    <h5>Form Edit</h5>
                    <hr>                  
                    
                    <div class="row">
                        <div class="col-md-6 content-center align-center">
                            <form action="{{ route('rfc.update', $rfc->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="heading">Heading</label>
                                    <input type="text" name="heading"  class="form-control @error('heading') is-invalid @enderror" value="{{ old('heading', $rfc->heading) }}" id=""
                                        placeholder="heading" >
                                </div>
                                @error('heading')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label class="form-label" for="file">File</label>
                                    <input type="file"  class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file', $rfc->file) }}">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small> --}}
                                </div>
                                @error('file')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            
                        
                                {{-- <div class="form-group">
                                    <label class="form-label" for="heading">Heading</label>
                                    <input type="text"  class="form-control @error('heading') is-invalid @enderror" name="heading" value="{{ old('heading', $beranda->heading) }}" id=""
                                        placeholder="input" ">
                                </div>
                                @error('heading')
                                    <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror --}}
                            
                                {{-- <div class="form-group">
                                    <label class="form-label" for="exampleFormControlTextarea1">Content</label>
                                    <textarea class="form-control  @error('content') is-invalid @enderror" name="content" id="" placeholder="content" rows="3">{{ old('content', $rfc->content) }}</textarea>
                                </div>
                                @error('content')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
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

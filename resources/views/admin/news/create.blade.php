@extends('layouts.admin-panel')

@section('title')
    News
@endsection

@section('content')

<div class="container">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create News</h1>
    </div>

    <div class="row justify-content-center py-3">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="card-body">
                    
                    <form action="{{ url('store-news') }}" method="POST" id="dynamic_form" enctype="multipart/form-data"> 
                        @csrf

                        <div class="row g-2 mb-3">
                            <div class="col-md-6">
                                <label for="title">Title</label>                 
                                <input name="title" type="text" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label for="img_name">Upload Image</label>
                                <input class="form-control" name="img_name" type="file" id="formFile">
                            </div>
                        </div>
                    
                        <div class="col-md-12 mb-3">
                            <label for="teaser">Teaser</label>
                            <textarea type="text" class="form-control" placeholder="This teaser will be shown in landing page"  name="teaser"></textarea>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="form-control" rows="3"></textarea>
                        </div>
                            
                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-primary">
                                Create News
                            </button>
                        </div>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
 
</div>

<script>
    CKEDITOR.replace( 'content' );
</script>

@endsection
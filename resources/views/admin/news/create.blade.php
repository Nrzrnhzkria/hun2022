@extends('layouts.admin-panel')

@section('title')
    News
@endsection

@section('content')

<div class="container">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create News</h1>
    </div>

    <div class="row justify-content-center py-5">
        <div class="col-md-8">
            <div class="card py-5">
                <div class="card-body">
                    
                    <form action="/emailtemplate/add" method="POST" id="dynamic_form" enctype="multipart/form-data"> 
                        @csrf
                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
                            <div class="col-md-6">                                
                                <input name="title" type="text" class="form-control" required>
                            </div>
                        </div>
                    
                        <div class="row mb-3">
                            <label for="teaser" class="col-md-4 col-form-label text-md-end">Teaser</label>
                            <div class="col-md-6">
                                <textarea type="text" class="form-control" placeholder="This teaser will be shown in landing page"  name="teaser"></textarea>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="content" class="col-md-4 col-form-label text-md-end">Content</label>
                            <div class="col-md-6">
                                <textarea name="content" class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="img_name" class="col-md-4 col-form-label text-md-end">Upload Image</label>
                            <div class="col-md-6">
                                <input class="form-control" name="img_name" type="file" id="formFile">
                            </div>
                        </div>
                            
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create News
                                </button>
                            </div>
                        </div>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
 
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>   

@endsection
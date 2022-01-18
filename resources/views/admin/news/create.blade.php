@extends('layouts.admin-panel')

@section('title')
    News
@endsection

@section('content')

<div class="container">

    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
        <h1>Create News</h1>
    </div>

    <!-- Add package form ---------------------------------------------------->
    <form class="row g-3 px-3" action="/emailtemplate/add" method="POST" id="dynamic_form" enctype="multipart/form-data"> 
        @csrf
        <div class='row my-3'>
            <div class='col-md-6'>         
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" required>
                </div>
            </div>
    
            <div class='col-md-6'>
                <div class="form-group">
                    <label for="name">Title</label>
                    <input name="title" type="text" class="form-control" required>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class='col-md-6'>
                <div class="form-group">
                    <label for="name">Content</label>
                    <textarea name="content" class="ckeditor form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <div class='col-md-6'>
                <div class="form-group">
                    <label for="name">Date</label>
                    <input name="date" type="date" class="form-control" required>
                </div>
            </div>
        </div>
            
        <div class='col-md-8 pt-3'>
            <button type='submit' class='btn btn-primary'> <i class="fas fa-save pr-1"></i> Save</button>
        </div>
        
    </form>
 
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>   

@endsection
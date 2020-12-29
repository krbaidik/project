<!DOCTYPE html>
<html>
<head>
    <title>SummerNote test</title>
    <!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>

            <div class="container">
                <div class="row m-auto">
                    <div class="col-md-6">
                        
                        <h2>Summernote Test</h2>

    <form action="{{url('insert')}}" method="post">
        @csrf


            <div class="form-group">
            <label>Title</label>
        <input type="text" name="title" class="form-control">
        </div><br>

        <div class="form-group">
            <label>Category</label>
        <input type="text" name="category"  class="form-control">
        </div><br>

        <div class="form-group">
            <label>Detail</label>
            <textarea name="summernote" id="summernote" class="form-control"></textarea>
        </div>

        <div>
            <button name="submit" id="submit" class="btn btn-success">Publish</button>
            <input type="reset" name="clear" id="clear" class="pull-right btn btn-danger">
        </div>
    </form>
                    </div>
                </div>
            </div>


    <div class="pull-right">
        <a href="{{url('view')}}" class="btn btn-warning">View</a>
    </div>
    <br><br><br><br>
    

            <script type="text/javascript">
                $(document).ready(function(){
                    $('#summernote').summernote({
                        height: '300px',
                    });
                });


                $('#clear').on('click',function(){
                    $('#summernote').summernote('code',null);
                });
            </script>

</body>
</html>


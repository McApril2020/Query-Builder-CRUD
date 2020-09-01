<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form action="{{route('update.post')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$posts->id}}">
                        <div class="from-group">
                            <label for="title">Post Title</label>
                            <input class="form-control" type="text" name="title" value="{{$posts->title}}" placeholder="Enter post title">
                        </div>
                        <div class="from-group">
                            <label for="body">Post Body...</label>
                           <textarea class="form-control" name="body" rows="3" placeholder="Enter your Post">{{$posts->body}}</textarea>
                        </div>
                        <div class="from-group">
                            <label for="title">Author</label>
                            <input class="form-control" type="text" name="author" value="{{$posts->author}}" placeholder="Author">
                        </div>
                        <button class="btn btn-success mt-2" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
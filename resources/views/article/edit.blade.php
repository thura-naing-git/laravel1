<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<form method="post" action="{{ url('article/'.$article->id.'/update') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" required="" name="name" value="{{ $article->name }}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="name" name="description" class="form-control" required="" value="{{ $article->description }}">
  </div>
  <div class="form-group">
      <!-- <label for="image">Image</label> -->
      <!-- @if ($article->image)
          <ul>
              <li>{{ $article->image }}</li>
          </ul>
      @endif -->
       @foreach (json_decode($article->image,true) as $image)
                                                      
                            <img src="{{ asset('/storage/images/' . $image) }}" class="img-fluid" width="100" height="100">
            @endforeach
      <input type="file" class="form-control-file" name="image[]" multiple="">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
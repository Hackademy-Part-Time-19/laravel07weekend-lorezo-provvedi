@vite(['resources/css/app.css', 'resources/js/app.js'])

@if (session()->has('success'))
    <div style="color:green;font-size:50px;background-color:lightgreen;width:100%"class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<h1>articolo</h1>

<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            value="{{ old('title') }}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        @error('title')
            <span style="color:red;font-size:20px;padding-top:5px;padding-bottom:5px;">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Category</label>
        <input type="text" name="category" class="form-control" id="exampleInputPassword1"
            value="{{ old('category') }}">
        @error('category')
            <span style="color:red;font-size:20px;padding-top:5px;padding-bottom:5px;">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp" value="{{ old('description') }}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        @error('description')
            <span style="color:red;font-size:20px;padding-top:5px;padding-bottom:5px;">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Body</label>
        <input type="text" name="body" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            value="{{ old('body') }}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        @error('body')
            <span style="color:red;font-size:20px;padding-top:5px;padding-bottom:5px;">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Immagine</label>
        <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            value="{{ old('image') }}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        @error('image')
            <span style="color:red;font-size:20px;padding-top:5px;padding-bottom:5px;">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

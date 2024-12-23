<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
    <h1>Hello, world!</h1>

    <form action="{{ route('requisitions.store') }}" method="POST">
        @csrf

        {{-- 'name',
        'phone',
        'email',
        'asset_id',
        'designation', --}}

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your name">
          @error('name')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone">
          @error('phone')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email">
          @error('email')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="asset_id" class="form-label">Asset Id</label>   
          <select name="asset_id" id="">
            @foreach ($assets as $asset)
            <option value="{{ $asset->id }}">{{ $asset->name }}</option>
            @endforeach
          </select>
          @error('asset_id')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="designation" class="form-label">Designation</label>
          <input type="text" class="form-control" name="designation" value="{{ old('designation') }}" placeholder="Enter your designation">
          @error('designation')
            <span>{{ $message }}</span>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

   </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
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
    <div>
        <a href="{{ route('requisitions.create') }}" class="btn btn-primary">Create</a>
    </div>
        <table class="table">
            <thead>
              <tr>
                {{-- `id`, `name`, `phone`, `email`, asset_id[FK]’, `designation`, ‘created_at’, `updated_at`]. --}}
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Asset Id</th>
                <th scope="col">Designation</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
    
              @foreach ( $requisitions as $requisition )
                <tr>
                  <td>{{ $requisition->id }}</td>
                  <td>{{ $requisition->name }}</td>
                  <td>{{ $requisition->phone }}</td>
                  <td>{{ $requisition->email }}</td>
                  <td>{{ $requisition->asset->name }}</td>
                  <td>{{ $requisition->designation }}</td>
                  <td>{{ $requisition->created_at }}</td>
                  <td>{{ $requisition->updated_at }}</td>
                  <td>
                    <a href="{{ route('requisitions.edit', $requisition->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('requisitions.destroy', $requisition->id) }}" method="POST" style="display: inline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
              <tr> 
              </tr>
             
             
  </div>
          
        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
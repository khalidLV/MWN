<x-app-layout>
  <x-slot name="header">

  </x-slot>

  <body>
      <div class="container table-responsive py-5">
        <div class="row">
          <div class="col-12">
            <div class="card">
                  <table class="table table-bordered table-hover">
                      <thead class="thead-dark">
                  <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($Product as $product)
                  <tr class="overdue-row">
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->Price }}</td>
                      <td>
                        <a href="{{ route('Product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('Product.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                          </form>
                    </td>
              </tr>
              @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
    <a href="{{ route('Product.create')}}" class="button primary btn btn-primary"> Create New Product </a>
  </div>
</body>
      
  
  </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <body>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Product as $product)
                    <tr lass="overdue-row">
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->Price }}</td>
                        <td>
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
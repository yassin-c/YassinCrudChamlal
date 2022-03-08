@extends('products.layout')

 

@section('content') 

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h3>Yassin Chamlal Crud</h3>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('products.create') }}"> Maak nieuw berichte aan</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered border-dark">

        <tr>

            <th>No</th>

            <th>Titel</th>

            <th>Content</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($products as $product)

        <tr>

            <td>{{ ++$i }}</td> 

            <td>{{ $product->titel }}</td>

            <td>{{ $product->content }}</td> 



            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Toon</a>

    

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Aanpassen</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger ">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $products->links() !!}

      

@endsection
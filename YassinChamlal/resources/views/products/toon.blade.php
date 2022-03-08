@extends('products.layout')

 

@section('content') 

    <div class="row mt-2">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left mt-2">

                <h3>Yassin Chamlal - Crud - Alle Berichten</h3>

            </div>

          

        </div>

    </div>

 
   

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

        </tr>

        @endforeach

    </table>

  

    {!! $products->links() !!}

      

@endsection
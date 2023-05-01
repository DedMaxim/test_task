@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">Categories</div>

                    <div class="card-body">
                        @foreach($categories as $category)
                            <a href="" class="m-lg-2">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Items</div>

                    <div class="card-body">
                        <table style="width: 100%">
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                            </tr>
                            <tr>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->image }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

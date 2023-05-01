@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">Categories</div>

                    <div class="card-body">
                        <table style="width: 100%">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Creation date</th>
                            </tr>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td><a href="">Edit</a></td>
                                    <td><a href="">Delete</a></td>
                                </tr>
                            @endforeach
                            <tr>
                                <form method="post" action="{{ route('admin.store_category') }}">
                                    @csrf
                                    <td>#</td>
                                    <td>
                                        <input type="text" name="name">
                                    </td>
                                    <td>
                                        {{ today() }}
                                    </td>
                                    <td>
                                        <button type="submit">Add</button>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">Items</div>

                    <div class="card-body">
                        <table style="width: 100%">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Creation date</th>
                            </tr>
                            <tr>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->image }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td><a href="">Edit</a></td>
                                    <td><a href="">Delete</a></td>
                                </tr>
                            @endforeach
                            <tr>
                                <form method="post" action="{{ route('admin.store_item') }}">
                                    @csrf
                                    <td>#</td>
                                    <td>
                                        <input type="text" name="name">
                                    </td>
                                    <td>
                                        <input type="number" name="price">
                                    </td>
                                    <td>
                                        <input type="text" name="image">
                                    </td>
                                    <td>
                                        {{ today() }}
                                    </td>
                                    <td>
                                        <button type="submit">Add</button>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">Orders</div>

                    <div class="card-body">
                        <table style="width: 100%">
                            <tr>
                                <th>ID</th>
                                <th>Item name</th>
                                <th>Customer name</th>
                                <th>Status</th>
                                <th>Creation date</th>
                            </tr>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->item_name }}</td>
                                    <td>{{ $order->customer_name }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td><a href="">Edit</a></td>
                                    <td><a href="">Delete</a></td>
                                </tr>
                            @endforeach
                            <tr>
                                <form method="post" action="{{ route('admin.store_order') }}">
                                    @csrf
                                    <td>#</td>
                                    <td>
                                        <input type="text" name="item_name">
                                    </td>
                                    <td>
                                        <input type="text" name="customer_name">
                                    </td>
                                    <td>
                                        <input type="number" name="status">
                                    </td>
                                    <td>
                                        {{ today() }}
                                    </td>
                                    <td>
                                        <button type="submit">Add</button>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Customers</div>

                    <div class="card-body">
                        <table style="width: 100%">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Permission level</th>
                                <th>Creation date</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->permission_level }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td><a href="">Edit</a></td>
                                    <td><a href="">Delete</a></td>
                                </tr>
                            @endforeach
                            <tr>
                                <form method="post" action="{{ route('admin.store_customer') }}">
                                    @csrf
                                    <td>#</td>
                                    <td>
                                        <input type="text" name="name">
                                    </td>
                                    <td>
                                        <input type="email" name="email">
                                    </td>
                                    <td>
                                        <input type="number" name="permission_level">
                                    </td>
                                    <td>
                                        {{ today() }}
                                    </td>
                                    <td>
                                        <button type="submit">Add</button>
                                    </td>
                                </form>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

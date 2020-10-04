<x-app-layout> 
    <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <div>
            <div>
                <div>
                    <h1>Welcome to The Dashboard</h1>
                    <h2>Total Spent: ${{ $total_spent }}</h2>
                    <h2>Your Favorite Item Is: {{ $favorite_item->name }}</h2>
                    <h2>Receipts</h2>
                    @foreach ($receipts as $receipt)
                    <table class="table table-striped table-sm">
                        <tr>
                            <th >Id</th>
                            <th >Purchase Date</th>
                            <th >Payment Method</th>
                            <th >Discount $</th>
                            <th >Store Id</th>
                            <th >Total</th>
                        </tr>
                        <tr>
                            <td>{{ $receipt->id }}</td>
                            <td>{{ $receipt->purchase_date }}</td>
                            <td>{{ $receipt->payment_method }}</td>
                            <td>${{ $receipt->discount_usd }}</td>
                            <td>{{ $receipt->store->name }}</td>
                            <td>$Total</td>
                        </tr>
                    </table>
                    <h3>Receipt Items</h3>
                    <table class="table table-striped table-sm">
                        <tr>
                            <th >Id</th>
                            <th >Name</th>
                            <th >Category</th>
                            <th >Price</th>
                        </tr>
                            @foreach ($receipt->items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>$Price</td>
                        </tr>
                            @endforeach
                        @endforeach
                    </table>

                    <h2>Stores</h2>
                    <table class="table table-striped table-sm">
                    <tr>
                        <th >Id</th>
                        <th >Name</th>
                        <th >Location</th>
                    </tr>
                    @foreach ($stores as $store)
                    <tr>
                        <td>{{ $store->id }}</td>
                        <td>{{ $store->name }}</td>
                        <td>{{ $store->location }}</td>
                    </tr>
                    @endforeach
                    </table>
                    <h2>Categories</h2>
                    <table class="table table-striped table-sm">
                    <tr>
                        <th >Id</th>
                        <th >Name</th>
                        <th >Sub-Category</th>
                    </tr>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->sub_category }}</td>
                    </tr>
                    @endforeach
                    </table>
                    <h2>Items</h2>
                    <table class="table table-striped table-sm">
                    <tr>
                        <th >Id</th>
                        <th >Name</th>
                        <th >Category</th>
                    </tr>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category->name }}</td>
                    </tr>
                    @endforeach
                    </table>
                    <h2>Groceries</h2>
                    <table class="table table-striped table-sm">
                    <tr>
                        <th >Id</th>
                        <th >Item id</th>
                        <th >Price</th>
                        <th >Quantity</th>
                        <th >Receipt</th>
                    </tr>
                    @foreach ($groceries as $grocery)
                    <tr>
                        <td>{{ $grocery->id }}</td>
                        <td>{{ $grocery->item_id }}</td>
                        <td>${{ $grocery->price }}</td>
                        <td>{{ $grocery->qty }}</td>
                        <td>{{ $grocery->receipt_id }}</td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

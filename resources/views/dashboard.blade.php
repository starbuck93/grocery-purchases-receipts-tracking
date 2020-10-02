<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <h1 style="font-size: 24px;">Welcome to The Dashboard</h1>
                    <h2 style="font-size: 18px;">Receipts</h2>
                    <table>
                    <tr>
                        <td>Id</td>
                        <td>Purchase Date</td>
                        <td>Payment Method</td>
                        <td>Discount $</td>
                        <td>Store Id</td>
                    </tr>
                    @foreach ($receipts as $receipt)
                    <tr>
                        <td>{{ $receipt->id }}</td>
                        <td>{{ $receipt->purchase_date }}</td>
                        <td>{{ $receipt->payment_method }}</td>
                        <td>${{ $receipt->discount_usd }}</td>
                        <td>{{ $receipt->store_id }}</td>
                    </tr>
                    @endforeach
                    </table>
                    <h2 style="font-size: 18px;">Stores</h2>
                    <table>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Location</td>
                    </tr>
                    @foreach ($stores as $store)
                    <tr>
                        <td>{{ $store->id }}</td>
                        <td>{{ $store->name }}</td>
                        <td>{{ $store->location }}</td>
                    </tr>
                    @endforeach
                    </table>
                    <h2 style="font-size: 18px;">Categories</h2>
                    <table>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Sub-Category</td>
                    </tr>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->sub_category }}</td>
                    </tr>
                    @endforeach
                    </table>
                    <h2 style="font-size: 18px;">Items</h2>
                    <table>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Category</td>
                    </tr>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category }}</td>
                    </tr>
                    @endforeach
                    </table>
                    <h2 style="font-size: 18px;">Groceries</h2>
                    <table>
                    <tr>
                        <td>Id</td>
                        <td>Item id</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Receipt</td>
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

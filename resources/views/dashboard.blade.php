<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ config('app.name', 'Laravel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="my-2 mx-2">
                    <h1>Welcome to The Dashboard</h1>
                    <h2>Receipts</h2>
                    @foreach ($receipts as $receipt)
                    <table class="table-auto shadow">
                        <tr>
                            <th class="px-4 py-2">Id</th>
                            <th class="px-4 py-2">Purchase Date</th>
                            <th class="px-4 py-2">Payment Method</th>
                            <th class="px-4 py-2">Discount $</th>
                            <th class="px-4 py-2">Store Id</th>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">{{ $receipt->id }}</td>
                            <td class="border px-4 py-2">{{ $receipt->purchase_date }}</td>
                            <td class="border px-4 py-2">{{ $receipt->payment_method }}</td>
                            <td class="border px-4 py-2">${{ $receipt->discount_usd }}</td>
                            <td class="border px-4 py-2">{{ $receipt->store->name }}</td>
                        </tr>
                    </table>
                    <h3>Receipt Items</h3>
                    <table class="table-auto shadow">
                        <tr>
                            <th class="px-4 py-2">Id</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Category</th>
                        </tr>
                            @foreach ($receipt->items as $item)
                        <tr>
                            <td class="border px-4 py-2">{{ $item->id }}</td>
                            <td class="border px-4 py-2">{{ $item->name }}</td>
                            <td class="border px-4 py-2">{{ $item->category->name }}</td>
                        </tr>
                            @endforeach
                        @endforeach
                    </table>

                    <h2>Stores</h2>
                    <table class="table-auto shadow">
                    <tr>
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Location</th>
                    </tr>
                    @foreach ($stores as $store)
                    <tr>
                        <td class="border px-4 py-2">{{ $store->id }}</td>
                        <td class="border px-4 py-2">{{ $store->name }}</td>
                        <td class="border px-4 py-2">{{ $store->location }}</td>
                    </tr>
                    @endforeach
                    </table>
                    <h2>Categories</h2>
                    <table class="table-auto shadow">
                    <tr>
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Sub-Category</th>
                    </tr>
                    @foreach ($categories as $category)
                    <tr>
                        <td class="border px-4 py-2">{{ $category->id }}</td>
                        <td class="border px-4 py-2">{{ $category->name }}</td>
                        <td class="border px-4 py-2">{{ $category->sub_category }}</td>
                    </tr>
                    @endforeach
                    </table>
                    <h2>Items</h2>
                    <table class="table-auto shadow">
                    <tr>
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Category</th>
                    </tr>
                    @foreach ($items as $item)
                    <tr>
                        <td class="border px-4 py-2">{{ $item->id }}</td>
                        <td class="border px-4 py-2">{{ $item->name }}</td>
                        <td class="border px-4 py-2">{{ $item->category->name }}</td>
                    </tr>
                    @endforeach
                    </table>
                    <h2>Groceries</h2>
                    <table class="table-auto shadow">
                    <tr>
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Item id</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Quantity</th>
                        <th class="px-4 py-2">Receipt</th>
                    </tr>
                    @foreach ($groceries as $grocery)
                    <tr>
                        <td class="border px-4 py-2">{{ $grocery->id }}</td>
                        <td class="border px-4 py-2">{{ $grocery->item_id }}</td>
                        <td class="border px-4 py-2">${{ $grocery->price }}</td>
                        <td class="border px-4 py-2">{{ $grocery->qty }}</td>
                        <td class="border px-4 py-2">{{ $grocery->receipt_id }}</td>
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

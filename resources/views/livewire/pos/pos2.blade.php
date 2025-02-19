<div>
    <div class="bg-gray-200 h-screen">
        <main class="h-screen w-full">
            <div class="flex p-5 gap-6 h-full mx-auto px-6">
                <div class="w-8/12 h-full rounded-lg bg-white bg-cover bg-center">
                    <div class="w-full py-6 px-4 font-bold bg-blue-600">
                        <h1 class="text-white text-3xl">Products</h1>
                    </div>
                    <div class="flex justify-between text-gray-700 font-bold text-3xl px-5 pt-5 mb-3">
                        <h1>Select Product</h1>
    
                        <div class="relative text-gray-600">
                            <input type="search" wire:model="search" placeholder="Search"
                                class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                    xml:space="preserve" width="512px" height="512px">
                                    <path
                                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="h-3/6 overflow-y-scroll mx-5">
    
                        <x-table.table>
                            <x-table.thead>
    
                                <x-table.table-head>Product Name</x-table.table-head>
                                <x-table.table-head>Quantity</x-table.table-head>
                                <x-table.table-head>Price</x-table.table-head>
                                <x-table.table-head>Discount</x-table.table-head>
                                <x-table.table-head>Total</x-table.table-head>
                                <x-table.table-head>Action</x-table.table-head>
    
                            </x-table.thead>
                            <x-table.tbody>
    
                                @for($x = 0; $x < 15; $x++) <x-table.table-row>
                                    <x-table.table-data responsiveName="Product Name">Cocoa Bread</x-table.table-data>
                                    <x-table.table-data responsiveName="Quantity"><input class="w-5/12 h-8" type="number">
                                    </x-table.table-data>
                                    <x-table.table-data responsiveName="Price">JMD $2500.00</x-table.table-data>
                                    <x-table.table-data responsiveName="Discount">0</x-table.table-data>
                                    <x-table.table-data responsiveName="Total">JMD $2500.00</x-table.table-data>
                                    <x-table.table-data responsiveName="Action">
                                        <x-table.button class="w-24 h-18 font-bold">Select</x-table.button>
                                    </x-table.table-data>
    
                                    </x-table.table-row>
                                    @endfor
    
                            </x-table.tbody>
                        </x-table.table>
                    </div>
    
                    <div class="flex justify-center space-x-2 mt-12 px-5">
                        <x-table.button color="indigo" class="w-32 h-24 font-bold">BUTTON</x-table.button>
                        <x-table.button color="pink" class="w-32 h-24 font-bold">BUTTON</x-table.button>
                        <x-table.button color="green" class="w-32 h-24 font-bold">BUTTON</x-table.button>
                        <x-table.button color="red" class="w-32 h-24 font-bold">BUTTON</x-table.button>
                        <x-table.button color="purple" class="w-32 h-24 font-bold">BUTTON</x-table.button>
                        <x-table.button color="blue" class="w-32 h-24 font-bold">BUTTON</x-table.button>
                        <x-table.button color="green" class="w-32 h-24 font-bold">BUTTON</x-table.button>
    
                    </div>
                </div>
    
    
                <div class="w-4/12 bg-white h-full pb rounded-lg overflow-hidden bg-cover bg-center">
    
                    <div class="w-full py-6 px-4 bg-blue-600">
                        <h1 class="text-white font-bold text-3xl">Summary</h1>
                    </div>
    
                    <div class="sales_details mx-5 h-3/6 mt-10 border border-gray-500">
    
    
    
    
    
    
    
    
                    </div>
    
                    <div class="flex py-5 px-5 font-bold space-x-8">
                        <div class="w-1/2">
                            <div class="flex justify-between">
                                <span>Sub Total</span>
                                <span>$158,550.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Coupon:</span>
                                <span>$0.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Taxes:</span>
                                <span>25%</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Total Items:</span>
                                <span>10</span>
                            </div>
                        </div>
    
                        <div class="w-1/2">
                            <div class="flex justify-between">
                                <span>Credit:</span>
                                <span>$0.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Discount:</span>
                                <span>$199.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Tip:</span>
                                <span>$0.00</span>
                            </div>
                        </div>
                    </div>
    
                    <div class="flex space-x-3 mx-5">
                        <x-table.button color="blue" class="w-1/2 h-14 font-bold">Pay Now</x-table.button>
                        <x-table.button color="red" class="w-1/2 h-14 font-bold">Cancel</x-table.button>
                    </div>
                </div>
    
            </div>
        </main>
    
    </div>
</div>

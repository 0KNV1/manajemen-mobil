<x-app-layout>
    <x-slot name="title">manager</x-slot>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('car') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            // AJAX DataTable
            var datatable = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'thumbnail',
                        name: 'thumbnail'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'type.name',
                        name: 'type.name'
                    },
                    {
                        data: 'location.name',
                        name: 'location.name'
                    },
                    {
                        data: 'driver.name',
                        name: 'driver.name'
                    },
                    {
                        data: 'consume_oil',
                        name: 'consume_oil'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '15%'
                    },
                ],
            });
        </script>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('manager.cars.create') }}"
                    class="px-4 py-2 font-bold text-white bg-green-500 rounded shadow-lg hover:bg-green-700">
                    + Tambahkan mobil
                </a>
            </div>
            <div class="overflow-hidden shadow sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="dataTable">
                        <thead>
                            <tr>
                                <th style="max-width: 1%">ID</th>
                                <th>Thumbnail</th>
                                <th>Nama</th>
                                <th>Type</th>
                                <th>Location</th>
                                <th>penanggung jawab</th>
                                <th>Level_konsumsu_BBM</th>
                                <th style="max-width: 1%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

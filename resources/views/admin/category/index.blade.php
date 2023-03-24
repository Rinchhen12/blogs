<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Categories</h5>
                    <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                    <table class="table border border-dark">
                        <tr>
                            <th class="border border-dark">SN</th>
                            <th class="border border-dark">Category Name</th>
                            <th class="border border-dark">Slug</th>
                            <th class="border border-dark">Action</th>
                        </tr>
                        @foreach ($categories as $item)
                        <tr>
                            <td class="border border-dark">{{ $item->id }}</td>
                            <td class="border border-dark">{{ $item->name }}</td>
                            <td class="border border-dark">{{ $item->slug}}</td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

<x-app-layout>
    <x-app-layout>
        <section>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <a href="">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route("category.update",$category->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                          <label for="name">Category Name</label>
                          <input type="text" name="name" id="" class="form-control" placeholder="eg.Sports" value="{{ $category->name }}">
                          <button type="submit">Update Record</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        </x-app-layout>
</x-app-layout>

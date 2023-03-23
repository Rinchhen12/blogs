<x-app-layout>
    <x-app-layout>
        <section>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <a href="">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route("category.update") }}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="name">Category Name</label>
                          <input type="text" name="name" id="" class="form-control" placeholder="eg.Sports" aria-describedby="helpId">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        </x-app-layout>
</x-app-layout>

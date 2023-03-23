<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <a href="">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route("category.store") }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="name">Category Name</label>
                      <input type="text" name="name" id="" class="form-control" placeholder="eg.Sports" aria-describedby="helpId">
                      <a href="{{ route('category.store') }}" class="btn btn-success my-3">Save record</a>
                      <a href="{{ route('category.edit') }}" class="btn btn-primary">Edit</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </x-app-layout>

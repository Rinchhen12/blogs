<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('category.index') }}">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route("category.store") }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="name">Category Name</label>
                      <input type="text" name="name" id="" class="form-control" placeholder="eg.Sports" aria-describedby="helpId">

                    </div>
                    <button type="submit" class="btn btn-success">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </x-app-layout>

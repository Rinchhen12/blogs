<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Post</h5>
                    <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="container">
                        <h1>Title</h1>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>


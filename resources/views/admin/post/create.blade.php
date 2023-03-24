<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('post.index') }}">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route("post.store") }}" method="post">
                    @csrf
                 <div class="form-group">
                   <label for="">Title</label>
                   <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">

                   <label for="">Description</label>
                   <input type="text" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId">

                   <label for="">Tag</label>
                   <input type="text" name="tag" id="" class="form-control" placeholder="" aria-describedby="helpId">
                 </div>
                 <form method="POST" action="/upload" enctype="multipart/form-data">
                    @csrf
                    <label for="">Image</label>
                    <input type="file" name="image">
                    <button type="submit">Upload</button>
                </form>
                    <button type="submit" class="btn btn-success">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </x-app-layout>


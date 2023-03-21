<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Product</div>
                    <div class="card-body">
                        <form method="post" action="/products" enctype="multipart/form-data">
                            <div class="form-group">
                                @csrf

                                <label class="label">Product Title: </label>
                                <input type="text" name="title" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Product Slug: </label>
                                <input type="text" name="slug" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Product Excerpt: </label>
                                <textarea name="excerpt" rows="10" cols="30" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="label">Product Body: </label>
                                <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="label">Product Price: </label>
                                <input type="number" step="0.01" name="price" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Product Thumbnail: </label>
                                <input type="file" name="thumbnail" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

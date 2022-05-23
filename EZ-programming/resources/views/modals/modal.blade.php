<div class="modal" id="SearchModal{{$StartDate}}{{$City}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Search</h5>
                <button type="button" class="btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
            </div>
            <form action="/Search/{{$StartDate}}/{{$City}}" enctype="multipart/form-data" method="POST">
                @csrf
                @php($PLanguages = \App\Models\PLanguage::get())
                <div class="modal-body">

                    <div>
                        <label for="">Programming Language</label>
                        <select class="form-control" name="PL" required focus>
                            <option value="Any" selected>Any</option>
                            @foreach($PLanguages as $PLanguage)
                            <option value="{{$PLanguage->PLanguage}}">{{$PLanguage->PLanguage}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Name</label>
                        <input type="text" name="Name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Minumimum Price</label>
                        <input type="text" name="MinPrice" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Maxiumim Price</label>
                        <input type="text" name="MaxPrice" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" style="border-radius:15px;">Search</button>

                    </div>
            </form>
        </div>
    </div>
</div>
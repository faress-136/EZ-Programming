<div class="modal" id="SearchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Search</h5>
                <button type="button" class="btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
            </div>
            <form action="/AdminRegCoursesSearch" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for=""> Student ID </label>
                        <input type="text" name="Student" class="form-control">
                    </div>

                    <div>
                        <label for=""> Teacher ID </label>
                        <input type="text" name="Teacher" class="form-control">
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for=""> Minumimum Date </label>
                        <input type="date" name="MinDate" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" style="border-radius:15px;">Search</button>

                    </div>
            </form>
        </div>
    </div>
</div>
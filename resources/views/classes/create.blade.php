<form action="{{ route('classes.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="class_name" class="form-label">Class Name</label>
        <input type="text" name="class_name" id="class_name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="class_fee" class="form-label">Class Fee</label>
        <input type="number" step="0.01" name="class_fee" id="class_fee" class="form-control">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="Active">Active</option>
            <option value="Deactive">Deactive</option>
            <option value="Graduated">Graduated</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<div class="row">
    <div class="col-12">
        <form id="materials_form">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pName">Material Name:</label>
                        <input type="text"  name="pName" id="pName" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pImage">Photo:</label>
                        <input type="file"  name="pImage" id="pImage" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pDesc">Description:</label>
                        <textarea name="pDesc" id="pDesc" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pUse">Use:</label>
                        <textarea   name="pUse" id="pUse" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pPenal">Penalization:</label>
                        <textarea name="pPenal" id="pPenal" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pStock">Phone:</label>
                        <input type="number"  name="pStock" id="pStock" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pType">Type:</label>
                        <select name="pType" id="pType" class="form-control">
                            <option value="" selected disabled>Choose one</option>
                            <option value="Múltiple">Multiple</option>
                            <option value="Consumible">Consumable</option>
                            <option value="Herramienta">Tool</option>
                        <select>
                    </div>
                </div>
            </div>
            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <form id="user_form">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pName">First Name:</label>
                        <input type="text"  name="pName" id="pName" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pLastname">Last Name:</label>
                        <input type="text"  name="pLastname" id="pLastname" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pGenre">Genre:</label>
                        <select name="pGenre" id="pGenre" class="form-control">
                            <option value="" selected disabled>Choose one</option>
                            <option value="F">Female</option>
                            <option value="M">Male</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pEmail">Email:</label>
                        <input type="email"  name="pEmail" id="pEmail" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pIdentifier">Identifier:</label>
                        <input type="text"  name="pIdentifier" id="pIdentifier" class="form-control">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="pPhone">Phone:</label>
                        <input type="text"  name="pPhone" id="pPhone" class="form-control">
                    </div>
                </div>
            </div>
            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
</div>
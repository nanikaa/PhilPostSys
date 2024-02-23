<style>
    .custom-border {
        border: 2px solid #333; /* Change #333 to the desired dark color code */
        padding: 20px;
        margin-left: 5px;
        max-width: 540px;
    }

    .container {
        position: relative;
        max-width: 200px;
        margin-left: 5px;
        margin-right: 20px;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .exit-button {
        position: absolute;
        top: 20px;
        right: 10px;
        cursor: pointer;
        font-size: 18px;
        color: #333;
    }
    
    .right-section {
        display: none;
    }

    .underline-link {
        text-decoration: underline;
        color: blue; /* Set the desired color */
        cursor: pointer; /* Set cursor to pointer on hover */
    }

    .underline-link:hover {
        text-decoration: none; /* Remove underline on hover if needed */
    }
</style>

<div class="ml-4">
    <div>
        <h1 class="display-5"> Add New Addressee </h1>
    </div>
</div>

<div class="row mt-3">
    <form action="/add_addressee" method="post">
        @csrf
        <div class="modal-body">
            <!-- Add your form fields for adding a new addressee here -->
            <!-- Example: -->
            <input type="text" name="nameAbbrev" id="nameAbbrev" class="form-control mb-2 rounded-md text-19" style="border-color:#a0aec0;" placeholder="Addressee Abbreviation" required>
            <input type="text" name="namePrimary" id="namePrimary" class="form-control mb-2 rounded-md text-19" style="border-color:#a0aec0;" placeholder="Addressee Name Line 1" required>
            <input type="text" name="nameSecondary" id="nameSecondary" class="form-control mb-2 rounded-md text-19" style="border-color:#a0aec0;" placeholder="Addressee Name Line 2">
            <input type="text" name="address" id="address" class="form-control mb-2 rounded-md text-19" style="border-color:#a0aec0;" placeholder="Floor/Bldg/Street/Barangay ">
            <input type="text" name="city" id="city" class="form-control mb-2 rounded-md text-19" style="border-color:#a0aec0;" placeholder="City/Municipality" required>
            <input type="text" name="zip" id="zip" class="form-control mb-2 rounded-md text-19" style="border-color:#a0aec0;" placeholder="Zip Code" required>
            <input type="text" name="province" id="province" class="form-control mb-2 rounded-md text-19" style="border-color:#a0aec0;" placeholder="Province"   required>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" onclick="closeModal()">Close</button>
            <button type="submit" class="btn btn-outline-primary" onclick="saveAddresee()">Save Addressee</button>
        </div>
    </form>
</div>
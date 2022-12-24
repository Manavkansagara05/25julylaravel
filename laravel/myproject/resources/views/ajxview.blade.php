@extends('layouts.appaddmin')

@section('content')
<div class="row">

    <!-- Area Chart -->
    <div class="col-10">
        <div class="card">
            <!-- Card Header - Dropdown -->
            <div class="card-header  d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">categories</h6>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add new
                </button>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <table class=" table table-bordered">
                    <thead class=" bg-dark text-light">
                        <tr>
                            <th>Sr No.</th>
                            <th>title</th>
                            <th>descritption</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody id="dispcate">

                    </tbody>
                </table>
            </div>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <form method="post" id="category_form">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Categories</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control " placeholder="Enter categories" name="category_title" id="category_title">
                                        <input type="hidden" class="form-control" value="{{ csrf_token() }}" name="_token" id="_token">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <textarea name="category_description" id="category_description" class="form-control" placeholder="Enter description" cols="50" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" id="save" onclick="savecategoriesdata()" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
@push('scripts')
<script>
    //     $(window).load(function(){
    //      alert("load");

    //     });

    // $(document).ready(function(){
    //  alert("ready");
    // });

    // $(document).on('ready', function(){ alert("ready")})
    $(window).on('load', function(e) {
        // alert("load")
        fetchData()
    })

    function fetchData() {
        $.ajax({
            url: "selectallcategorydata",
            success: function(response) {
                console.log(response);
                htmlTableData = ""
                count = 1
                response.forEach(element => {
                    // console.log(element.category_title);
                    htmlTableData += `<tr>
                         <td>${count}</td>
                         <td>${element.category_title}</td>
                         <td>${element.category_description}</td>
                         <td>
                         <button onclick="editdata(${element.category_id})" >edit</button>
                         <button onclick="deletedata(${element.category_id})" >delete</button>
                         </td>
                    </tr>`
                    // console.log(element.category_description);
                    count ++;
                });
                $("#dispcate").html(htmlTableData)
            }
        })
    }

    function editdata(id) {
        // console.log(id);  
        event.preventDefault()
        let token = $("#_token").val();
        // console.log(token);
        // return false
        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                id: id,
                _token: token
            },
            url: "editcategorydata",
            success: function(response) {
                console.log(response);
                $('#exampleModal').modal('show');
                $('#category_title').val(response.category_title);
                $('#category_description').val(response.category_description);
                $("#save").attr("onclick", "updatedata("+ response.category_id +")");
            }
        })
    }

    function updatedata(id) {
        event.preventDefault()

        // console.log("called");
        var result = {};
        $.each($('#category_form').serializeArray(), function() {
            result[this.name] = this.value;
        });
        //    console.log(result);
        // //    jsonTest.push({"_token":$("#_token").val()});
        $.ajax({
            type: "POST",
            dataType: "json",
            data: result,
            url:   `/updatecategorydata/${id}`,
            success: function(response) {
                console.log(response)
                if (response == 1) {
                    $('#exampleModal').modal('hide');
                    fetchData()
                } else {
                    alert("Error while inserting")
                }
            }
        })
    }

    function savecategoriesdata() {
        event.preventDefault()
        // let category =document.getElementById("category_title").value
        // // let category =document.getElementById("category_description").Value
        // let category_description = $('#category_description').val();
        // console.log("called category",category,"category_description",category_description);

        //    var formSerialize = $('#category_form').serialize();
        //    var formSerializeArray = $('#category_form').serializeArray();

        //    console.log(formSerialize);
        //    console.log(formSerializeArray);
        var result = {};
        $.each($('#category_form').serializeArray(), function() {
            result[this.name] = this.value;
        });
        //    console.log(result);
        // //    jsonTest.push({"_token":$("#_token").val()});
        $.ajax({
            type: "POST",
            dataType: "json",
            data: result,
            url: "savecategorydata",
            success: function(response) {
                console.log(response)
                if (response == 1) {
                    $('#exampleModal').modal('hide');
                    fetchData()
                } else {
                    alert("Error while inserting")
                }

            }
        })
    }
    function deletedata(id) {
        event.preventDefault()

        // console.log("called");
        var result = {};
        $.each($('#category_form').serializeArray(), function() {
            result[this.name] = this.value;
        });
        //    console.log(result);
        // //    jsonTest.push({"_token":$("#_token").val()});
        $.ajax({
            type: "POST",
            dataType: "json",
            data: result,
            url:   `/deletecategorydata/${id}`,
            success: function(response) {
                console.log(response)
                if (response == 1) {
                    
                    fetchData()
                } else {
                    alert("Error while inserting")
                }
            }
        })
    }
</script>
@endpush
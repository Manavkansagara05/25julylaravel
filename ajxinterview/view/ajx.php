<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ADD NEW
                    </button>
                </div>
            </div>
            <table class="table table-striped table-bordered ">
                <thead>
                    <tr>
                        <th>sr no.</th>
                        <th>productname</th>
                        <th>category</th>
                        <th>price</th>
                        <th>color</th>
                        <th>description</th>
                        <th>manufacturerdate</th>
                        <th>type</th>
                        <th>action</th>

                    </tr>
                </thead>
                <tbody id="dispcate">

                </tbody>
            </table>

        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="product_form">

                        <div class="row">
                            <div class="col">
                                <label class="md-3">Product Name</label>
                                <input type="hidden" name="productid" id="productid">
                                <!-- <input type="hidden" class="form-control" value="{{ csrf_token() }}" name="_token" id="_token"> -->
                                <input type="text" placeholder="Enter Product Name" class="form-control" name="productname" id="productname">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label class="md-3">description</label>
                                <input type="text" placeholder="Enter you full name" class="form-control" name="description" id="description">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label class="md-3">price</label>
                                <input type="text" placeholder="Enter price" class="form-control" name="price" id="price">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label class="md-3">color</label><br>
                                <!-- <input type="checkbox" name="color[]" class="cet" value="black" id="black"> <label for="black">black</label> -->
                                <input type="checkbox" name="color[]" class="cet" value="black" id="black"> <label for="black"> black</label>
                                <input type="checkbox" name="color[]" class="cet" value="white" id="white"> <label for="white"> white</label>
                                <input type="checkbox" name="color[]" class="cet" value="brown" id="brown"> <label for="brown">brown </label>

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label class="md-3">select category</label><br>
                                <select name="category" id="category" class="form-control">
                                    <option value="" disabled selected>-----select category-------</option>
                                </select>
                                <script>
                                    function callcate(params) {
                                        $.ajax({
                                            url: "selectcategory",
                                            success: function(response) {
                                                // console.log("response",response);
                                                data = JSON.parse(response)
                                                htmloption = "<option> ----Select category---- </option>"
                                                data.forEach(element => {
                                                    console.log(element);
                                                    htmloption += "<option>" + element.category_name + "</option>"

                                                });
                                                $("#category").html(htmloption);
                                            }
                                        })
                                    }
                                    callcate()
                                </script>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label class="md-3">Manufacturer Date</label>
                                <input type="datetime-local" placeholder="Enter Manufacturer Date" class="form-control" name="manufacturerdate" id="manufacturerdate">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <input type="radio" name="type" class="type" value="Return" id="Return"> <label for="return"> Return</label>
                                <input type="radio" name="type" class="type" value="Nonreturn" id="Nonreturn"> <label for="nonreturn"> Nonreturn</label>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col text-center">
                                <button type="submit" id="save" onclick="saveproductdata()" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    //   $(window).on('load', function(e) {
    //         // alert("load")
    //         fetchData()
    //     })
    $(document).ready(function() {
        // alert("ready");
        fetchData()
    })

    function resetMyForm() {
        $('input').val('');
        $('#product_form').val(0);
    }


    function fetchData() {
        $.ajax({
            url: "http://localhost/tops/ajxinterview/selectproductdata",
            success: function(response) {
                data = JSON.parse(response)
                console.log(data.Data);
                htmlTableData = ""
                count = 1
                data.forEach(element => {
                    // console.log(element.productid);
                    htmlTableData += `<tr>
                         <td>${count}</td>
                         <td>${element.productname}</td>
                         <td>${element.category}</td>
                         <td>${element.price}</td>
                         <td>${element.color}</td>
                         <td>${element.description}</td>
                         <td>${element.manufacturerdate}</td>
                         <td>${element.type}</td>
                        
                         <td>
                         <button onclick="editdata(${element.productid})" >edit</button>
                         <button onclick="deletedata(${element.productid})" >delete</button>
                         </td>
                    </tr>`
                    // console.log(element.category_description);
                    count++;
                });
                $("#dispcate").html(htmlTableData)
            }
        })
    }

    function saveproductdata() {
        event.preventDefault();
        color = [];
        $(".cet").each(function(e) {
            if ($(this).is(":checked")) {
                color.push($(this).val());
            }
        });
        checkbox = color.toString();
        // console.log(color);
        var type = $(".type:checked").val();
        var data = {
            productname: $('#productname').val(),
            category: $('#category').val(),
            color: checkbox,
            price: $('#price').val(),
            description: $('#description').val(),
            manufacturerdate: $('#manufacturerdate').val(),
            type: type,
        }

        console.log(data)
        $.ajax({
            type: "POST",
            // dataType: "json",
            data: data,
            url: "http://localhost/tops/ajxinterview/saveproductdata",
            success: function(response) {
                console.log(response)
                if (response == 0) {
                    $('#exampleModal').modal('hide');
                    resetMyForm() ;
                    fetchData();
                } else {
                    alert("Error while inserting")
                }

            }
        })
    }

    function editdata(id) {
        console.log(id)
        event.preventDefault();

        // let productid = $("#").val();

        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                id: id,
            },
            url: "editproduct",
            success: function(response) {
                // data = JSON.parse(response)
                // console.log(data);
                $('#exampleModal').modal('show');
                $('#productid').val(response.productid);
                $('#productname').val(response.productname);
                $('#category').val(response.category);
                $('#price').val(response.price);
                var colordata = response.color;

                var numbersArray = colordata.split(',');

                // console.log(numbersArray);
                $.each(numbersArray, function(i, val) {

                    $("input[value='" + val + "']").prop('checked', true);

                });
                $('#description').val(response.description);
                $('#manufacturerdate').val(response.manufacturerdate);
                // $('#type').val(response.type);
                // console.log(response.type);
                if (response.type == "Return") {
                    $('input:radio[class=type][id=Return]').prop('checked', true);
                } else {

                    $('input:radio[class=type][id=Nonreturn]').prop('checked', true);
                }

                $("#save").attr("onclick", "updatedata(" + response.category_id + ")");
            }
        })

    }

    function updatedata(id) {
        event.preventDefault();
        color = [];
        $(".cet").each(function(e) {
            if ($(this).is(":checked")) {
                color.push($(this).val());
            }
        });
        checkbox = color.toString();
        // console.log(color);
        var type = $(".type:checked").val();
        var data = {
            productid: $('#productid').val(),
            productname: $('#productname').val(),
            category: $('#category').val(),
            price: $('#price').val(),
            color: checkbox,
            description: $('#description').val(),
            manufacturerdate: $('#manufacturerdate').val(),
            type: type,
        }

        console.log(data)
        $.ajax({
            type: "POST",
            // dataType: "json",
            data: data,
            url: "http://localhost/tops/ajxinterview/updateproduct",
            success: function(response) {
                console.log(response)
                if (response == 0) {
                    $('#exampleModal').modal('hide');
                    resetMyForm() ;
                    fetchData();
                } else {
                    alert("Error while inserting")
                }

            }
        })
    }

    function deletedata(id) {
        event.preventDefault();

        console.log(id);

        $.ajax({
            type: "POST",
            data: {
                id: id
            },
            url: "deleteproduct",
            success: function(response) {
                console.log(response)
                if (response == 0) {

                    fetchData()
                } else {
                    alert("Error while deleting")
                }
            }
        })
    }
</script>
"use strict";

function loadingStart(title = null) {
    
    Swal.fire({
        title: title ? title : "Loading",
        html: "I will close in <b></b> milliseconds.",
        didOpen: () => {
            Swal.showLoading();
        },
        willClose: () => {},
    });
}
function loadingStop() {
    swal.close();
}
function showSuccess(title) {
    Swal.fire({
        title: title,
        icon: "success",
        customClass: {
            confirmButton: "btn btn-primary",
        },
        buttonsStyling: false,
    });
}

function showWarn(title) {
    Swal.fire({
        title: title,
        text: " You clicked the button!",
        icon: "warning",
        customClass: {
            confirmButton: "btn btn-primary",
        },
        buttonsStyling: false,
    });
}
function deleteRecordAjax(url) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: "btn btn-outline-danger ms-1",
        },
        buttonsStyling: false,
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                type: "DELETE",
                url: url,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (data) {
                    showSuccess("Record Deleted Successfully.");
                    if (table) {
                        table.draw();
                    } else {
                        setTimeout(() => {
                            location.reload();
                        }, 1500);
                    }
                },
                error: function (error) {
                    let message = "Network error";
                    if (error.responseJSON) {
                        message = error.responseJSON.message;
                    }
                    console.log(message);
                    showWarn(message);
                },
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            showWarn("Cancelled");
        }
    });
}

function acceptEventRecordAjax(url) {
    return new Swal.fire({
        title: "Are you sure?",
        text: "Are You want to register this event!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, register me!",
    }).then((result) => {
        if (result.value == true) {
            $.ajax({
                type: "GET",
                url: url,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (data) {
                    showSuccess("Record Register Successfully.");
                    window.location.reload();
                },
                error: function (error) {
                    let message = "Network error";

                    if (error.responseJSON) {
                        message = error.responseJSON.message;
                    }
                    console.log(message);
                    showWarn(message);
                },
            });
        }
    });
}

function addFormData(e, method, url, redirectUrl, data) {
    e.preventDefault();
    let from = document.getElementById(data);
    let record = new FormData(from);
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        type: method,
        url: url,
        data: record,
        dataType: "JSON",
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
            loadingStop();
            $(":input", data).not(":button, :submit, :reset, :hidden").val("");
            if ($(".upload-zone")[0] != undefined) {
                $(".upload-zone")[0].dropzone.removeAllFiles(true);
            }
            console.log(response)
           
            if (response.status != false) {
                showSuccess(response.message, "success");

                setTimeout(function () {
                    window.location = redirectUrl;
                }, 1000);
            } else {
                showWarn(response.message, "error");
            }
        },
        error: function (xhr) {
            loadingStop();
            let data = "";
            console.log(xhr);
            if (xhr.status !== 422) {
                $.each(xhr.responseJSON.errors, function (key, value) {
                    data += "</br>" + value;
                });
                showWarn(data);
            }
            showWarn(xhr.responseJSON.message);
        },
    });
}
function getCities(e, url) {
    let state_id = e.target.value;
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: url,
        method: "post",
        data: {
            state_id: state_id,
        },
        success: function (response) {
            $("#cityDetail").html();
            $("#cityDetail").html(response);
        },
    });
}


function getEditRecord(url, modelId) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: url,
        method: "get",
        success: function (response) {
            $("#editRecord").html("");
            $("#editRecord").html(response);
            if (modelId === "#editRoleModal") {
                $("#addRoleModal").html("");
                $(modelId).modal("show");
            } else {
                var myOffcanvas = $(modelId);
                var bsOffcanvas = new bootstrap.Offcanvas(myOffcanvas);
                bsOffcanvas.show();
            }
        },
    });
}

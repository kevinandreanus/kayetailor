<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        table.dataTable tbody th,
        table.dataTable tbody td {
            padding: 8px 18px !important;
        }

    </style>
</head>

<body>
    <div class="container mt-3">
        <h3><u>Top Banner Homepage</u></h3>
        <div style="text-align: right">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTopBanner">
                Add
            </button>
        </div>
        <table id="topbannerhomepage">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="modalTopBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Top Banner Homepage</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formTopBanner" action="/admin/topbanner" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="custom-file mt-3">
                                    <input type="file" class="custom-file-input" id="fileTopBanner"
                                        name="fileTopBanner">
                                    <label class="custom-file-label" for="fileTopBanner">Choose file</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submitTopBanner" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h3><u>About Us Homepage Text</u></h3>
        <div style="text-align: right">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                data-target="#modalAboutUsHomepage">
                Add
            </button>
        </div>
        <table id="aboutushomepage">
            <thead>
                <tr>
                    <th>Paragraph</th>
                    <th>Text</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="modalAboutUsHomepage" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add About Us Text</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formAboutUsHomepage" action="/admin/aboutushomepage" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Paragraph</label>
                                <input type="number" class="form-control" name="paragraph">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Text</label>
                                <textarea class="form-control" name="text" rows="5"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submitAboutUsHomepage" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h3><u>Our Core Values Homepage</u></h3>
        <table id="ourcorevalueshomepage">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Text</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="modalOurCoreValuesHomepage" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Our Core Values</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formOurCoreValuesHomepage" action="/admin/ourcorevalueshomepage" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" id="idcorevalue" name="id" hidden>
                            <div class="input-group mb-3">
                                <div class="custom-file mt-3">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Text</label>
                                <input type="text" class="form-control" name="text" id="texteditcore">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submitOurCoreValuesHomepage"
                            class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h3><u>Services Homepage</u></h3>
        <table id="serviceshomepage">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="modalServicesHomepage" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Services</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formServicesHomepage" action="/admin/serviceshomepage" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" id="idservices" name="id" hidden>
                            <div class="input-group mb-3">
                                <div class="custom-file mt-3">
                                    <input type="file" class="custom-file-input" id="ahsiap" name="image">
                                    <label id="ahsiap-label" class="custom-file-label" for="ahsiap">Choose file</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submitServicesHomepage" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h3><u>Process Homepage</u></h3>
        <table id="processhomepage">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="modalProcessHomepage" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Process</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formProcessHomepage" action="/admin/processhomepage" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" id="idprocez" name="id" hidden>
                            <div class="input-group mb-3">
                                <div class="custom-file mt-3">
                                    <input type="file" class="custom-file-input" name="image" id="prosess-f">
                                    <label class="custom-file-label" for="ahsiap">Choose file</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submitProcessHomepage" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h3><u>Fabric Catalogue Homepage</u></h3>
        <table id="fabrichomepage">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Text</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="modalFabricHomepage" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Fabric Catalogue</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formFabricHomepage" action="/admin/fabrichomepage" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="id" id="idfabric" hidden>
                            <div class="input-group mb-3">
                                <div class="custom-file mt-3">
                                    <input type="file" class="custom-file-input" name="image" id="prosess-f">
                                    <label class="custom-file-label" for="ahsiap">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Text</label>
                                <input type="text" class="form-control" name="text" id="texteditfabric">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submitFabricHomepage" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h3><u>Look Book Homepage</u></h3>
        <table id="lookbookhomepage">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="modalLookbookHomepage" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Fabric Catalogue</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formLookbookHomepage" action="/admin/lookbookhomepage" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="id" id="idlookbook" hidden>
                            <div class="input-group mb-3">
                                <div class="custom-file mt-3">
                                    <input type="file" class="custom-file-input" name="image" id="prosess-f">
                                    <label class="custom-file-label" for="ahsiap">Choose file</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submitLookbookHomepage" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h3><u>Blogs</u></h3>
        <div style="text-align: right">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAddBlogs">
                Add
            </button>
        </div>
        <table id="blogshomepage">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Front Image</th>
                    <th>Inside Image</th>
                    <th>Title</th>
                    <th>Caption</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="modalAddBlogs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Blogs</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formBlogs" action="/admin/blogs" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                            <label for="" style="margin-bottom: 0">Front Image</label>
                            <div class="input-group mb-3">
                                <div class="custom-file mt-1">
                                    <input type="file" class="custom-file-input" name="frontimage" id="prosess-f">
                                    <label class="custom-file-label" for="ahsiap">Choose file</label>
                                </div>
                            </div>
                            <label for="" style="margin-bottom: 0">Back Image</label>
                            <div class="input-group mb-3">
                                <div class="custom-file mt-1">
                                    <input type="file" class="custom-file-input" name="insideimage" id="prosess-f">
                                    <label class="custom-file-label" for="ahsiap">Choose file</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Caption</label>
                                <input type="text" class="form-control" name="caption" id="caption">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submitBlogs" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-5"></div>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $('#topbannerhomepage').DataTable({
            lengthChange: false,
            searching: false,
            scrollX: true,
            autoWidth: false,
            info: false,
            paging: false,
            ajax: {
                url: '/admin/topbanner/list'
            },
            columns: [{
                    'data': 'index'
                },
                {
                    'data': 'image_path',
                    'render': function(data, type, row) {
                        return '<a target="_blank" href="' + data + '">View</a>'
                    }
                },
                {
                    'data': 'id',
                    'render': function(data, type, row) {
                        return '<a class="btn btn-danger btn-sm" href="/admin/topbanner/delete/' + data +
                            '">Delete</a>'
                    }
                }
            ]
        });

        $('#submitTopBanner').on('click', function() {
            $('#formTopBanner').submit();
        });

        $('#fileTopBanner').on('change', function() {
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            $(this).next('.custom-file-label').html(cleanFileName);
        })

        $('#aboutushomepage').DataTable({
            lengthChange: false,
            searching: false,
            scrollX: true,
            autoWidth: false,
            info: false,
            paging: false,
            ajax: {
                url: '/admin/aboutushomepage/list'
            },
            columns: [{
                    'data': 'paragraph'
                },
                {
                    'data': 'text'
                },
                {
                    'data': 'id',
                    'render': function(data, type, row) {
                        return '<a class="btn btn-danger btn-sm" href="/admin/aboutushomepage/delete/' +
                            data +
                            '">Delete</a>'
                    }
                }
            ]
        });

        $('#submitAboutUsHomepage').on('click', function() {
            $('#formAboutUsHomepage').submit();
        });

        $('#ourcorevalueshomepage').DataTable({
            lengthChange: false,
            searching: false,
            scrollX: true,
            autoWidth: false,
            info: false,
            paging: false,
            ajax: {
                url: '/admin/ourcorevalueshomepage/list'
            },
            columns: [{
                    'data': 'index'
                },
                {
                    'data': 'image_path',
                    'render': function(data, type, row) {
                        return '<a target="_blank" href="' + data + '">View</a>'
                    }
                },
                {
                    'data': 'text'
                },
                {
                    'data': 'id',
                    'render': function(data, type, row) {
                        return '<button type="button" class="btn btn-info btn-sm btn-edit-core" data-toggle="modal" data-target="#modalOurCoreValuesHomepage" data-id="' +
                            data + '">Edit</button>'
                    }
                }
            ]
        });

        $('#image').on('change', function() {
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            $(this).next('.custom-file-label').html(cleanFileName);
        });

        $('.custom-file-input').on('change', function() {
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            $(this).next('.custom-file-label').html(cleanFileName);
        });

        $('#ahsiap').on('change', function() {
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            $(this).next('#ahsiap-label').html(cleanFileName);
        });

        $('#submitOurCoreValuesHomepage').on('click', function() {
            $('#formOurCoreValuesHomepage').submit();
        });

        $("#ourcorevalueshomepage").on('click', ".btn-edit-core", function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/admin/ourcorevalueshomepage/' + id,
                success: function(result) {
                    $('#texteditcore').val(result.text);
                    $('#idcorevalue').val(result.id);
                }
            });
        });

        $('#serviceshomepage').DataTable({
            lengthChange: false,
            searching: false,
            scrollX: true,
            autoWidth: false,
            info: false,
            paging: false,
            ajax: {
                url: '/admin/serviceshomepage/list'
            },
            columns: [{
                    'data': 'id'
                },
                {
                    'data': 'image_path',
                    'render': function(data, type, row) {
                        return '<a target="_blank" href="' + data + '">View</a>'
                    }
                },
                {
                    'data': 'id',
                    'render': function(data, type, row) {
                        return '<button type="button" class="btn btn-info btn-sm btn-edit-core" data-toggle="modal" data-target="#modalServicesHomepage" data-id="' +
                            data + '">Edit</button>'
                    }
                }
            ]
        });

        $("#serviceshomepage").on('click', ".btn-edit-core", function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/admin/serviceshomepage/' + id,
                success: function(result) {
                    $('#idservices').val(result.id);
                }
            });
        });

        $('#submitServicesHomepage').on('click', function() {
            $('#formServicesHomepage').submit();
        });

        $('#processhomepage').DataTable({
            lengthChange: false,
            searching: false,
            scrollX: true,
            autoWidth: false,
            info: false,
            paging: false,
            ajax: {
                url: '/admin/processhomepage/list'
            },
            columns: [{
                    'data': 'id'
                },
                {
                    'data': 'image_path',
                    'render': function(data, type, row) {
                        return '<a target="_blank" href="' + data + '">View</a>'
                    }
                },
                {
                    'data': 'id',
                    'render': function(data, type, row) {
                        return '<button type="button" class="btn btn-info btn-sm btn-edit-core" data-toggle="modal" data-target="#modalProcessHomepage" data-id="' +
                            data + '">Edit</button>'
                    }
                }
            ]
        });

        $("#processhomepage").on('click', ".btn-edit-core", function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/admin/processhomepage/' + id,
                success: function(result) {
                    $('#idprocez').val(result.id);
                }
            });
        });

        $('#submitProcessHomepage').on('click', function() {
            $('#formProcessHomepage').submit();
        });

        $('#fabrichomepage').DataTable({
            lengthChange: false,
            searching: false,
            scrollX: true,
            autoWidth: false,
            info: false,
            paging: false,
            ajax: {
                url: '/admin/fabrichomepage/list'
            },
            columns: [{
                    'data': 'id'
                },
                {
                    'data': 'image_path',
                    'render': function(data, type, row) {
                        return '<a target="_blank" href="' + data + '">View</a>'
                    }
                },
                {
                    'data': 'text'
                },
                {
                    'data': 'id',
                    'render': function(data, type, row) {
                        return '<button type="button" class="btn btn-info btn-sm btn-edit-core" data-toggle="modal" data-target="#modalFabricHomepage" data-id="' +
                            data + '">Edit</button>'
                    }
                }
            ]
        });

        $("#fabrichomepage").on('click', ".btn-edit-core", function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/admin/fabrichomepage/' + id,
                success: function(result) {
                    $('#idfabric').val(result.id);
                    $('#texteditfabric').val(result.text);
                }
            });
        });

        $('#submitFabricHomepage').on('click', function() {
            $('#formFabricHomepage').submit();
        });

        $('#lookbookhomepage').DataTable({
            lengthChange: false,
            searching: false,
            scrollX: true,
            autoWidth: false,
            info: false,
            paging: false,
            ajax: {
                url: '/admin/lookbookhomepage/list'
            },
            columns: [{
                    'data': 'id'
                },
                {
                    'data': 'image_path',
                    'render': function(data, type, row) {
                        return '<a target="_blank" href="' + data + '">View</a>'
                    }
                },
                {
                    'data': 'id',
                    'render': function(data, type, row) {
                        return '<button type="button" class="btn btn-info btn-sm btn-edit-core" data-toggle="modal" data-target="#modalLookbookHomepage" data-id="' +
                            data + '">Edit</button>'
                    }
                }
            ]
        });

        $("#lookbookhomepage").on('click', ".btn-edit-core", function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/admin/lookbookhomepage/' + id,
                success: function(result) {
                    $('#idlookbook').val(result.id);
                }
            });
        });

        $('#submitLookbookHomepage').on('click', function() {
            $('#formLookbookHomepage').submit();
        });

        $('#blogshomepage').DataTable({
            lengthChange: false,
            searching: false,
            scrollX: true,
            autoWidth: false,
            ajax: {
                url: '/admin/blogs/list'
            },
            columns: [{
                    'data': 'index'
                },
                {
                    'data': 'front_image_path',
                    'render': function(data, type, row) {
                        return '<a target="_blank" href="' + data + '">View</a>'
                    }
                },
                {
                    'data': 'back_image_path',
                    'render': function(data, type, row) {
                        return '<a target="_blank" href="' + data + '">View</a>'
                    }
                },
                {
                    'data': 'title'
                },
                {
                    'data': 'caption'
                },
                {
                    'data': 'date_string'
                },
                {
                    'data': 'id',
                    'render': function(data, type, row) {
                        return '<a class="btn btn-danger btn-sm" href="/admin/blogs/' +
                            data +
                            '">Delete</a><a class="btn btn-info btn-sm" href="/admin/blogs/page/' +
                            data + '">Edit Blog Page</a>'
                    }
                }
            ]
        });

        $('#submitBlogs').on('click', function() {
            $('#formBlogs').submit();
        });
    </script>
</body>

</html>

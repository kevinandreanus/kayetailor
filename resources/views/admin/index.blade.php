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
    <style>
        .carousel-item {
            height: 40px;
            width: 100px !important;
        }

        @media only screen and (max-width: 600px) {
            .carousel-item {
                height: 30px;
                width: 60px !important;
            }
        }

        .owl-item {
            display: flex;
            justify-content: center;
        }



        .owl-carousel .owl-nav {
            overflow: hidden;
            height: 0px;
        }

        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background: #5110e9;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('library/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/owlcarousel/owl.theme.default.min.css') }}">
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
                                    <label id="ahsiap-label" class="custom-file-label" for="ahsiap">Choose
                                        file</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submitServicesHomepage"
                            class="btn btn-primary btn-sm">Submit</button>
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
                        <button type="button" id="submitProcessHomepage"
                            class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h3><u>Fabric Catalogue Homepage</u></h3>
        <div style="text-align: right">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                data-target="#modalWoolSlider">
                Edit <b>Wool</b> Slider
            </button>
        </div>
        <!-- Modal Edit Wool Slider-->
        <div class="modal fade" id="modalWoolSlider" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Wool Slider</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button style="float: right" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#modalAddWoolSlider">Add</button><br>
                        This image is <b>Dragable</b><br><br>
                        <ol id="items">
                            @foreach ($wool_slider as $key => $i)
                                <li data-id="{{ $i->id }}"><img style="width: 50px; height:50px;"
                                        src="{{ asset($i->image_path) }}" alt=""></li>
                            @endforeach
                        </ol>
                        <input type="number" class="form-control" placeholder="No." id="wantToDeleteID">
                        <a id="deleteWoolSlider" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Add Wool Slider --}}
        <div class="modal fade" id="modalAddWoolSlider" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Wool Slider</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/admin/woolslider/add" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="custom-file mt-3">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="ahsiap">Choose file</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                        <button type="button" id="submitFabricHomepage"
                            class="btn btn-primary btn-sm">Submit</button>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Look Book</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formLookbookHomepage" action="/admin/lookbookhomepage" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="id" id="idlookbook">
                            <div class="input-group mb-3">
                                <div class="custom-file mt-3">
                                    <input type="file" class="custom-file-input" name="image" id="prosess-f">
                                    <label class="custom-file-label" for="ahsiap">Choose file</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submitLookbookHomepage"
                            class="btn btn-primary btn-sm">Submit</button>
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
        <div class="modal fade" id="modalAddBlogs" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <input type="file" class="custom-file-input" name="frontimage"
                                        id="prosess-f">
                                    <label class="custom-file-label" for="ahsiap">Choose file</label>
                                </div>
                            </div>
                            <label for="" style="margin-bottom: 0">Back Image</label>
                            <div class="input-group mb-3">
                                <div class="custom-file mt-1">
                                    <input type="file" class="custom-file-input" name="insideimage"
                                        id="prosess-f">
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
        {{-- Blog Edit Title, aption, Front Image, and Back Image --}}
        <div class="modal fade" id="modalEditBlogs" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Blogs</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formEditBlogs" action="/admin/blogs/edit" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="id" id="idEditBlg" hidden>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Title</label>
                                <input type="text" class="form-control" name="title" id="titleEdtBlg">
                            </div>
                            <label for="" style="margin-bottom: 0">Front Image</label>
                            <div class="input-group mb-3">
                                <div class="custom-file mt-1">
                                    <input type="file" class="custom-file-input" name="frontimage"
                                        id="prosess-f">
                                    <label class="custom-file-label" for="ahsiap">Choose file</label>
                                </div>
                            </div>
                            <label for="" style="margin-bottom: 0">Back Image</label>
                            <div class="input-group mb-3">
                                <div class="custom-file mt-1">
                                    <input type="file" class="custom-file-input" name="insideimage"
                                        id="prosess-f">
                                    <label class="custom-file-label" for="ahsiap">Choose file</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Caption</label>
                                <textarea type="text" class="form-control" name="caption" id="captionEdtBlg"></textarea>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="submitEditBlogs" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-5"></div>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('library/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
    <script>
        var Sortable = new Sortable(items, {
            animation: 150,
            dataIdAttr: 'data-id',
            ghostClass: 'blue-background-class',
            onUpdate: function( /**Event*/ evt) {
                var from = evt.oldIndex + 1;
                var to = evt.newIndex + 1;
                console.log(from, to);
                $.ajax({
                    url: '/admin/woolslider/' + from + '/' + to,
                    success: function(res) {
                        console.log(res);
                    }
                })
            },
        });

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
                        return '<a target="_blank" href="' + data + '"><img src="' + data +
                            '" style="width: 150px; height:90px;"></a>'
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
                        return '<a target="_blank" href="' + data + '"><img src="' + data +
                            '" style="width: 90px; height:120px;"></a></a>'
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
                        return '<a target="_blank" href="' + data + '"><img src="' + data +
                            '" style="width: 120px; height:120px;"></a></a>'
                    }
                },
                {
                    'data': 'id',
                    'render': function(data, type, row) {
                        return '<button type="button" class="btn btn-info btn-sm btn-edit-core" data-toggle="modal" data-target="#modalServicesHomepage" data-id="' +
                            data +
                            '">Edit</button><a class="btn btn-warning btn-sm" href="' + row.route +
                            '">Edit Inside</a>'
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
                        return '<a target="_blank" href="' + data + '"><img src="' + data +
                            '" style="width: 400px; height:100px;"></a></a>'
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
                        return '<a target="_blank" href="' + data + '"><img src="' + data +
                            '" style="width: 90px; height:90px;"></a></a>'
                    }
                },
                {
                    'data': 'text'
                },
                {
                    'data': 'id',
                    'render': function(data, type, row) {
                        return '<button type="button" class="btn btn-info btn-sm btn-edit-core" data-toggle="modal" data-target="#modalFabricHomepage" data-id="' +
                            data + '">Edit</button><a class="btn btn-warning btn-sm" href="' + row.route +
                            '">Edit Inside</a>'
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
                        return '<a target="_blank" href="' + data + '"><img src="' + data +
                            '" style="width: 90px; height:90px;"></a></a>'
                    }
                },
                {
                    'data': 'id',
                    'render': function(data, type, row) {
                        return '<button type="button" class="btn btn-info btn-sm btn-edit-core" data-toggle="modal" data-target="#modalLookbookHomepage" data-id="' +
                            data + '">Edit</button><a class="btn btn-warning btn-sm" href="' + row.route +
                            '">Edit Inside</a>'
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
                        return '<a target="_blank" href="' + data + '"><img src="' + data +
                            '" style="width: 90px; height:90px;"></a></a>'
                    }
                },
                {
                    'data': 'back_image_path',
                    'render': function(data, type, row) {
                        return '<a target="_blank" href="' + data + '"><img src="' + data +
                            '" style="width: 150px; height:90px;"></a></a>'
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
                            data +
                            '">Edit Blog Page</a><button type="button" class="btn btn-warning btn-sm btnEditBlog" data-id="' +
                            data + '">Edit</button>'
                    }
                }
            ]
        });

        $('body').on('click', '.btnEditBlog', function() {
            var title = $(this).parent().prev().prev().prev().text();
            var caption = $(this).parent().prev().prev().text();
            var id = $(this).data("id");
            $('#captionEdtBlg').val(caption);
            $('#titleEdtBlg').val(title);
            $('#idEditBlg').val(id);
            $('#modalEditBlogs').modal("show");
            console.log();
        });

        $('#modalEditBlogs').on('hidden.bs.modal', function() {
            $('#captionEdtBlg').val('');
            $('#titleEdtBlg').val('');
        });

        $('#submitEditBlogs').on('click', function() {
            $('#formEditBlogs').submit();
        });

        $('#submitBlogs').on('click', function() {
            $('#formBlogs').submit();
        });

        $('#deleteWoolSlider').on('click', function() {
            var order = $('#wantToDeleteID').val();

            $.ajax({
                url: "/admin/wooldelete/" + order,
                success: function(res) {
                    $('#items').children().eq(order - 1).remove();
                }
            });
        });
    </script>
</body>

</html>

@extends('template.template')

@push('custom-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
@endpush

<div class="container">

    <div class="text-center" style="margin-top: 100px; margin-bottom: 20px">
        <h3 style="color: #806e4f !important;">{{ $blog->title }}</h3>
    </div>

    @foreach ($content as $key => $b)
        @if ($b->type == 'image')
            <div class="text-center mt-2">
                <img src="/{{ $b->image_path }}" alt="">
            </div>
        @else
            @if ($content)
                @if ($content[$key]->type == 'image')
                    <div class="text-justify mt-4">
                        <p>{{ $b->text }}</p>
                    </div>
                @else
                    <div class="text-justify">
                        <p>{{ $b->text }}</p>
                    </div>
                @endif
            @endif
        @endif
    @endforeach
    <div class="text-center mt-5">
        <button type="button" class="seemorebtn" data-toggle="modal" data-target="#modalAddImage">
            Add Image
        </button>
        <button type="button" class="seemorebtn" data-toggle="modal" data-target="#modalAddParagraph">
            Add Paragraph
        </button>
    </div>

    <!-- Modal Image-->
    <div class="modal fade" id="modalAddImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formImage" action="/admin/addImage" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{ $blog->id }}" hidden>
                        <div class="input-group mb-3">
                            <div class="custom-file mt-1">
                                <input type="file" class="custom-file-input ahsiap" id="ahsiap" name="image"
                                    id="prosess-f">
                                <label class="custom-file-label" for="ahsiap" id="ahsiap-label"
                                    class="ahsiap-label">Choose file</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="submitImage" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Paragraph-->
    <div class="modal fade" id="modalAddParagraph" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Paragraph</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formParagraph" action="/admin/addParagraph" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{ $blog->id }}" hidden>
                        <div class="form-group">
                            <textarea name="paragraph" cols="30" rows="6" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="submitParagraph" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('custom-js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script>
        $('#ahsiap').on('change', function() {
            var fileName = $(this).val();
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            $(this).next('#ahsiap-label').html(cleanFileName);
        });

        $('#submitParagraph').on('click', function() {
            $('#formParagraph').submit();
        });

        $('#submitImage').on('click', function() {
            $('#formImage').submit();
        });
    </script>
@endpush

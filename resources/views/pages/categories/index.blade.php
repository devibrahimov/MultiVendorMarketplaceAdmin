@extends('welcome')

@section('css')

@endsection


@section('content')

    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard / Kategoriya </h2>
        </div>
        <!-- Input -->
        @include('partials.alerts')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="header">
                        <h2>
                            Kateqoriyalar
                            <small>Sayt Kateqoriyalarının Tənzimləmələri</small>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class=" col-lg-4 col-md-4  col-sm-12">
                                <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">

                                        <div class="body table-responsive">
                                            <div class="row clearfix">
                                                <div class="col-sm-12">
                                                    <label class="card-inside-title">Kateqoriya adı</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="name"  maxlength="25" required placeholder=" " />
                                                        </div>
                                                        @error('name')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="card-inside-title">Parent Kategoriya </label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <select name="parent_id" class="ms form-control" id="exampleFormControlSelect1">
                                                            <option value="">Select</option>
                                                            @foreach($parentCategories as $category)
                                                                <option value="{{$category->getAttribute('id')}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('description')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <label class="card-inside-title">Kateqoriya Açıqlama Mətni</label>
                                                    <span>  </span>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="description" maxlength="50" placeholder="" />
                                                        </div>
                                                        @error('description')
                                                        <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                @if(!isset($parentid))
                                                    <div class="col-sm-6">
                                                        <label class="card-inside-title">Icon</label>
                                                        <span> File type: image| width:100px ,height:100px</span>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file" class="form-control" name="icon"  required placeholder="col-sm-3" />
                                                            </div>
                                                            @error('icon')
                                                            <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="card-inside-title">Fon Şəkili</label>
                                                        <span> File type: image| width:470px ,height:501px</span>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="file" class="form-control" name="image" required placeholder="col-sm-3" />
                                                            </div>
                                                            @error('image')
                                                            <div class="alert alert-dismissible" role="alert" style="color: red!important">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"style="color: red!important">&times;</span></button>
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <button type="submit"  class="btn btn-success waves-effect">
                                                <i class="material-icons " style="color: white">save</i>
                                                <span>Yadda Saxla</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">

                                    </div>
                                    <div class="body table-responsive">
                                        @if(isset($categories) )

                                            <table class="table table-striped" id="myTable">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Adi</th>
                                                    <th>İcon</th>
                                                    <th>Şəkil</th>
                                                    <th>Parent Kateqoriya</th>
                                                    <th>Açıqlama Mətni</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($categories as $category)
                                                    <tr>
                                                        <th scope="row">{{$loop->iteration}}</th>
                                                        <td>{{$category->name}}</td>
                                                        <td><img src="{{asset("public/storage/".$category->icon)}}" width="35px" alt=""></td>
                                                        <td><img src="{{asset("public/storage/".$category->image)}}" width="100px" alt=""></td>
                                                        <td>{{$category->getRelationValue('parent')->name}}</td>
                                                        <td>{{$category->description}}</td>
                                                        <td>
                                                            @if($category->status==1)
                                                                <span style="color:green;text-align:center;font-weight: bold">Aktiv</span>
                                                            @else
                                                                <span style="color:red;text-align:center;font-weight: bold"">Passiv</span>
                                                            @endif
                                                        </td>
                                                        <td w>

                                                            <form action="{{ route('category.destroy',$category->id) }}" method="POST">

                                                                <a href="{{route('category.edit', $category->id) }}" class="btn btn-primary">
                                                                    <i class="material-icons" style="font-size:16px; top:2px;">mode_edit</i>
                                                                </a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger">
                                                                    <i class="material-icons" style="font-size:16px; top:2px;">delete</i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>

                                        @else
                                            <center>
                                                <img src="https://i.pinimg.com/236x/cf/b6/43/cfb643ba7408b8bd35c8b45ca1c13704.jpg"  >
                                            </center>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- #END# Input -->

    </div>


@endsection

@section('js-libs')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection

@section('js-script')

@endsection
